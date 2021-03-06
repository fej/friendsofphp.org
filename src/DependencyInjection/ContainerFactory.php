<?php declare(strict_types=1);

namespace Fop\DependencyInjection;

use Psr\Container\ContainerInterface;

final class ContainerFactory
{
    public function createWithConfig(string $config): ContainerInterface
    {
        $fopKernel = new FopKernel();
        $fopKernel->bootWithConfig($config);

        return $fopKernel->getContainer();
    }
}
