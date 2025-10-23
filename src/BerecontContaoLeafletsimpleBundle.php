<?php

declare(strict_types=1);

namespace Berecont\ContaoLeafletsimpleBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class BerecontContaoLeafletsimpleBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
          $container->import('../config/services.yaml');
    }
}
