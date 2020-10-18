<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Tests\DependencyInjection\Compiler;

use Contao\CoreBundle\DependencyInjection\Compiler\AddAvailableTransportsPass;
use Contao\CoreBundle\Mailer\AvailableTransports;
use Contao\CoreBundle\Mailer\TransportConfig;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

class AddAvailableTransportsPassTest extends TestCase
{
    public function testDoesNothingIfNoTransportsDefined(): void
    {
        $container = $this->getContainerBuilder();
        $container->prependExtensionConfig('contao', []);

        $pass = new AddAvailableTransportsPass();
        $pass->process($container);

        $definition = $container->getDefinition(AvailableTransports::class);

        $this->assertEmpty($definition->getMethodCalls());
    }

    public function testDoesNothingIfOnlyDefaultTransportIsDefined(): void
    {
        $container = $this->getContainerBuilder();
        $container->prependExtensionConfig('contao', []);

        $container->prependExtensionConfig('framework', [
            'mailer' => [
                'dsn' => 'smtp://localhost',
            ],
        ]);

        $pass = new AddAvailableTransportsPass();
        $pass->process($container);

        $definition = $container->getDefinition(AvailableTransports::class);

        $this->assertEmpty($definition->getMethodCalls());
    }

    public function testDoesNothingIfNoTransportIsConfigured(): void
    {
        $container = $this->getContainerBuilder();
        $container->prependExtensionConfig('contao', []);

        $container->prependExtensionConfig('framework', [
            'mailer' => [
                'transports' => [
                    'main' => 'smtp://localhost',
                    'foobar' => 'smtp://localhost',
                    'lorem' => 'smtp://localhost',
                ],
            ],
        ]);

        $pass = new AddAvailableTransportsPass();
        $pass->process($container);

        $definition = $container->getDefinition(AvailableTransports::class);

        $this->assertEmpty($definition->getMethodCalls());
    }

    public function testAddsConfiguredTransports(): void
    {
        $container = $this->getContainerBuilder();

        $container->prependExtensionConfig('contao', [
            'mailer' => [
                'transports' => [
                    'main' => null,
                    'foobar' => null,
                ],
            ],
        ]);

        $container->prependExtensionConfig('framework', [
            'mailer' => [
                'transports' => [
                    'main' => 'smtp://localhost',
                    'foobar' => 'smtp://localhost',
                    'lorem' => 'smtp://localhost',
                ],
            ],
        ]);

        $pass = new AddAvailableTransportsPass();
        $pass->process($container);

        $transports = $this->getTransportsFromDefinition($container);

        $this->assertCount(2, $transports);

        /** @var Definition $transportConfig1 */
        $transportConfig1 = $transports[0][0];

        /** @var Definition $transportConfig2 */
        $transportConfig2 = $transports[1][0];

        $this->assertSame('main', $transportConfig1->getArgument(0));
        $this->assertSame('foobar', $transportConfig2->getArgument(0));
    }

    public function testAddsFromAddresses(): void
    {
        $container = $this->getContainerBuilder();

        $container->prependExtensionConfig('contao', [
            'mailer' => [
                'transports' => [
                    'main' => [
                        'from' => 'main@example.org',
                    ],
                    'foobar' => null,
                    'no_transport' => [
                        'from' => 'na@example.org',
                    ],
                ],
            ],
        ]);

        $container->prependExtensionConfig('framework', [
            'mailer' => [
                'transports' => [
                    'main' => 'smtp://localhost',
                    'foobar' => 'smtp://localhost',
                    'lorem' => 'smtp://localhost',
                ],
            ],
        ]);

        $pass = new AddAvailableTransportsPass();
        $pass->process($container);

        $transports = $this->getTransportsFromDefinition($container);

        $this->assertCount(2, $transports);

        /** @var Definition $transportConfig1 */
        $transportConfig1 = $transports[0][0];

        /** @var Definition $transportConfig2 */
        $transportConfig2 = $transports[1][0];

        $this->assertSame('main', $transportConfig1->getArgument(0));
        $this->assertSame('main@example.org', $transportConfig1->getArgument(1));
        $this->assertSame('foobar', $transportConfig2->getArgument(0));
        $this->assertNull($transportConfig2->getArgument(1));
    }

    private function getContainerBuilder(): ContainerBuilder
    {
        $container = new ContainerBuilder();
        $container->setDefinition(AvailableTransports::class, new Definition(AvailableTransports::class, []));

        return $container;
    }

    /**
     * @return array<int,array<int,Reference|string>>
     */
    private function getTransportsFromDefinition(ContainerBuilder $container): array
    {
        $this->assertTrue($container->hasDefinition(AvailableTransports::class));

        $definition = $container->getDefinition(AvailableTransports::class);
        $methodCalls = $definition->getMethodCalls();

        $this->assertIsArray($methodCalls);

        $transports = [];

        foreach ($methodCalls as $methodCall) {
            $this->assertSame('addTransport', $methodCall[0]);
            $this->assertIsArray($methodCall[1]);
            $this->assertInstanceOf(Definition::class, $methodCall[1][0]);

            /** @var Definition $definition */
            $definition = $methodCall[1][0];

            $this->assertSame(TransportConfig::class, $definition->getClass());
            $this->assertIsString($definition->getArgument(0));
            $this->assertThat($definition->getArgument(1), $this->logicalOr($this->isType('string'), $this->isNull()));

            $transports[] = $methodCall[1];
        }

        return $transports;
    }
}
