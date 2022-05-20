<?php

$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
        'id'          => 'unitorder',
        'title'       => [ 'de' => 'unitorder',
                           'en' => 'unitorder',
                         ],
    'description' => [ 'de' => 'unitorder',
                       'en' => 'unitorder'
                     ],
    'thumbnail'   => 'icon.png',
    'version'     => '1.0.0',
    'author'      => '',
    'url'         => 'unitorder',
    'email'       => '',
    'extend'      => [
						\OxidEsales\Eshop\Application\Model\Order::class                         => \oe\unitorder\Model\Order::class,
					 ],    
    'templates'   => [],
    'blocks'      => [],    
    'events'       => [],
];

