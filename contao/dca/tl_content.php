<?php

declare(strict_types=1);

$GLOBALS['TL_DCA']['tl_content']['palettes']['leafletmap'] =
    '{type_legend},type,headline;'
  . '{leaflet_legend_content},height,zoom,coordlat,coordlong,coordlatcenter,coordlongcenter,coordpopup,coords;'
  . '{template_legend:hide},customTpl;'
  . '{protected_legend:hide},protected;'
  . '{expert_legend:hide}cssID;' 
  . '{invisible_legend:hide},invisible,start,stop'
;

$GLOBALS['TL_DCA']['tl_content']['fields']['height'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['height'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => [
        'mandatory' => true, 
        'tl_class' => 'w50'
    ],
    'sql'       => "char(32) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['zoom'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['zoom'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => [
        'mandatory' => true, 
        'tl_class' => 'w50'
    ],
    'sql'       => "char(8) NOT NULL default '13'"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['coordlat'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['coordlat'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => [
        'tl_class' => 'w50'
    ],
    'sql'       => "char(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['coordlong'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['coordlong'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => [
        'tl_class' => 'w50'
    ],
    'sql'       => "char(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['coordlatcenter'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['coordlatcenter'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => [
        'tl_class' => 'w50'
    ],
    'sql'       => "char(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['coordlongcenter'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['coordlongcenter'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => [
        'tl_class' => 'w50'
    ],
    'sql'       => "char(255) NOT NULL default ''"
];

$GLOBALS['TL_DCA']['tl_content']['fields']['coordpopup'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['coordpopup'],
    'exclude'   => true,
    'inputType' => 'textarea',
    'eval'      => [
        'decodeEntities' => true,
        'allowHtml'      => true,
        'explanation'    => 'insertTags',
        'preserveTags'   => true,
        'tl_class'       => 'clr',

    ],
    'sql'       => "mediumtext NULL",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['coords'] = [
    'inputType' => 'group',
    'exclude'   => true,
    'palette'   => ['latitude','longitude','popup'],
    'min'       => 1,
    'fields'    => [
        'latitude' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['latitude'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => [
                'maxlength' => 255, 
                'tl_class' => 'w50'
            ],
        ],
        'longitude' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['longitude'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => [
                'maxlength' => 255, 
                'tl_class' => 'w50'
            ],
        ],
        'popup' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['popup'],
            'exclude'   => true,
            'inputType' => 'textarea',
            'eval'      => [
                'decodeEntities' => true,
                'allowHtml'      => true,
                'explanation'    => 'insertTags',
                'preserveTags'   => true,
                'tl_class'       => 'clr',
                'maxlength'      => 1024
            ],
        ],
    ],
    'sql'       => 'blob NULL',
];