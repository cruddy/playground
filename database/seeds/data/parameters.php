<?php return
[
    'vol' =>
    [
        'name' => 'Volume, ml',
        'type' => 'numeric',
    ],

    'thickness' =>
    [
        'name' => 'Thickness',
        'type' => 'optional',

        'options' => [ '100 mm', '200 mm', '300 mm' ],
    ],

    'conn' =>
    [
        'name' => 'Connection',
        'type' => 'optional',
        'options' => [ 'VGA', 'DVI', 'HDMI' ],
    ],
];