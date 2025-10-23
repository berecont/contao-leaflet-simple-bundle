<?php

declare(strict_types=1);

namespace Berecont\ContaoLeafletsimpleBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\DependencyInjection\Attribute\AsContentElement;
use Contao\Template;
use Contao\CoreBundle\Twig\FragmentTemplate;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Contao\StringUtil;

#[AsContentElement(
    type: 'leafletmap',
    category: 'miscellaneous',
    template: 'content_element/leafletmap'
)]
final class LeafletsimpleController extends AbstractContentElementController
{

    protected function getResponse(Template $template, ContentModel $model, Request $request): Response
    {
        $template->mapid            = 'map_' . $model->id;
        $template->height           = $model->height;
        $template->zoom             = (int) $model->zoom;
        $template->coordlat         = $model->coordlat;
        $template->coordlong        = $model->coordlong;
        $template->coordlatcenter   = $model->coordlatcenter;
        $template->coordlongcenter  = $model->coordlongcenter;
        $template->coordpopup       = $model->coordpopup;

        $template->coords = \is_string($model->coords)
            ? \Contao\StringUtil::deserialize($model->coords, true)
            : (array) $model->coords;

        if (!isset($GLOBALS['BERECONT_LEAFLET_ASSETS_INCLUDED']) || !$GLOBALS['BERECONT_LEAFLET_ASSETS_INCLUDED']) {
            // Öffentlicher Pfad zu Bundle-Assets:
            // /public/bundles/berecontcontaoleafletsimple/leaflet/dist/...
            $GLOBALS['TL_CSS']['berecont_leaflet_css'] = 'bundles/berecontcontaoleafletsimple/leaflet/dist/leaflet.css|static';
            $GLOBALS['TL_JAVASCRIPT']['berecont_leaflet_js'] = 'bundles/berecontcontaoleafletsimple/leaflet/dist/leaflet.js|static';

            $GLOBALS['BERECONT_LEAFLET_ASSETS_INCLUDED'] = true;
        }

        return $template->getResponse();
    }
}
