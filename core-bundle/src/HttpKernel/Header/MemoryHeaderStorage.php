<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\HttpKernel\Header;

/**
 * Handles HTTP headers in memory (for unit tests).
 */
class MemoryHeaderStorage implements HeaderStorageInterface
{
    /**
     * @var array
     */
    private $headers;

    /**
     * @param array $headers
     */
    public function __construct(array $headers = [])
    {
        $this->headers = $headers;
    }

    /**
     * {@inheritdoc}
     */
    public function all(): array
    {
        return $this->headers;
    }

    /**
     * {@inheritdoc}
     */
    public function add(string $header): void
    {
        $this->headers[] = $header;
    }

    /**
     * {@inheritdoc}
     */
    public function clear(): void
    {
        $this->headers = [];
    }
}
