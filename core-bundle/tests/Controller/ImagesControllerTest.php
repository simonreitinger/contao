<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\CoreBundle\Tests\Controller;

use Contao\CoreBundle\Controller\ImagesController;
use Contao\CoreBundle\Image\ImageFactoryInterface;
use Contao\CoreBundle\Tests\TestCase;
use Contao\Image\DeferredImageInterface;
use Contao\Image\DeferredResizerInterface;
use Contao\Image\ImageInterface;
use Contao\Image\ResizerInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ImagesControllerTest extends TestCase
{
    public function testReturnsResizedImage(): void
    {
        $image = $this->createMock(DeferredImageInterface::class);
        $image
            ->method('getPath')
            ->willReturn($this->getFixturesDir().'/images/dummy.jpg')
        ;

        $factory = $this->createMock(ImageFactoryInterface::class);
        $factory
            ->method('create')
            ->willReturn($image)
        ;

        $resizer = $this->createMock(DeferredResizerInterface::class);
        $resizer
            ->method('resizeDeferredImage')
            ->willReturn($this->createMock(ImageInterface::class))
        ;

        $controller = new ImagesController($factory, $resizer, $this->getFixturesDir().'/images');

        /** @var BinaryFileResponse $response */
        $response = $controller('image.jpg');

        $this->assertInstanceOf(BinaryFileResponse::class, $response);
        $this->assertSame($this->getFixturesDir().'/images/dummy.jpg', $response->getFile()->getPathname());
        $this->assertSame('31536000', $response->headers->getCacheControlDirective('max-age'));
        $this->assertTrue($response->headers->getCacheControlDirective('private'));
    }

    public function testReturns404IfImageDoesNotExist(): void
    {
        $factory = $this->createMock(ImageFactoryInterface::class);
        $factory
            ->method('create')
            ->willThrowException(new \InvalidArgumentException('Image does not exist'))
        ;

        $resizer = $this->createMock(ResizerInterface::class);
        $controller = new ImagesController($factory, $resizer, $this->getFixturesDir().'/images');

        $this->expectException(NotFoundHttpException::class);

        $controller('image.jpg');
    }
}
