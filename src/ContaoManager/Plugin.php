<?php

declare(strict_types=1);

/*
 * This file is part of the Contao Leaflet simple extension.
 *
 * (c) Bernhard Renner beRecont
 *
 * @license MIT
 */

namespace Berecont\ContaoLeafletsimpleBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Berecont\ContaoLeafletsimpleBundle\BerecontContaoLeafletsimpleBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(BerecontContaoLeafletsimpleBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
