<?php return [

    'brand' => 'Playground',

    'brand_url' => '/',

    'dashboard' => 'backend',

    'uri' => 'backend',

    'permissions' => 'stub',

    'auth_filter' => null,

    'entities' => [
        'posts' => 'App\Entities\Post',
        'meta' => 'App\Entities\Meta',
        'tags' => 'App\Entities\Tag',
        'products' => 'App\Entities\Product',
        'parameters' => 'App\Entities\Parameter',
        'parameter_options' => 'App\Entities\ParameterOption',
        'parameter_values' => 'App\Entities\ParameterValue',
    ],

    'menu' =>   [
        'Welcome' => '/backend',

        'entities.menu.store' => [

            'items' => [
                [ 'entity' => 'products', 'icon' => 'barcode' ],
                '-',
                [ 'entity' => 'parameters' ],
                [ 'entity' => 'parameter_options' ],
            ]
        ],

        [ 'entity' => 'posts', 'icon' => 'file' ],

        'entities.menu.collections' => [
            'items' => [
                [ 'entity' => 'tags', 'icon' => 'tag' ],
            ]
        ],
    ],
];