<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\InstallationBundle\Database;

use Contao\ArrayUtil;
use Contao\CoreBundle\Migration\AbstractMigration;
use Contao\CoreBundle\Migration\MigrationResult;
use Contao\StringUtil;
use Doctrine\DBAL\Connection;

/**
 * @internal
 */
class Version330Update extends AbstractMigration
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function getName(): string
    {
        return 'Contao 3.3.0 Update';
    }

    public function shouldRun(): bool
    {
        $schemaManager = $this->connection->getSchemaManager();

        if (!$schemaManager->tablesExist(['tl_layout'])) {
            return false;
        }

        $columns = $schemaManager->listTableColumns('tl_layout');

        return !isset($columns['viewport']);
    }

    public function run(): MigrationResult
    {
        $layouts = $this->connection->fetchAllAssociative("
            SELECT
                id, framework
            FROM
                tl_layout
            WHERE
                framework != ''
        ");

        foreach ($layouts as $layout) {
            $framework = '';
            $tmp = StringUtil::deserialize($layout['framework']);

            if (!empty($tmp) && \is_array($tmp)) {
                if (false !== ($key = array_search('layout.css', $tmp, true))) {
                    ArrayUtil::arrayInsert($tmp, $key + 1, 'responsive.css');
                }

                $framework = serialize(array_values(array_unique($tmp)));
            }

            $stmt = $this->connection->prepare('
                UPDATE
                    tl_layout
                SET
                    framework = :framework
                WHERE
                    id = :id
            ');

            $stmt->execute([':framework' => $framework, ':id' => $layout['id']]);
        }

        // Add the "viewport" field (triggers the version 3.3 update)
        $this->connection->executeStatement("
            ALTER TABLE
                tl_layout
            ADD
                viewport varchar(255) NOT NULL default ''
        ");

        return $this->createResult(true);
    }
}
