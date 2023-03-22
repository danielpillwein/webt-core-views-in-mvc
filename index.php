<?php
require './vendor/autoload.php';

use Dgl\WebtCoreViewsInMvc\Hotel;
use Dgl\WebtCoreViewsInMvc\HotelSeeder;

$hotels = HotelSeeder::getHotels();

// Initializing the View: rendering in Fluid takes place through a View instance
// which contains a RenderingContext that in turn contains things like definitions
// of template paths, instances of variable containers and similar.
$view = new \TYPO3Fluid\Fluid\View\TemplateView();
// TemplatePaths object: a subclass can be used if custom resolving is wanted.
$paths = $view->getTemplatePaths();
// Assigning the template path and filename to be rendered. Doing this overrides
// resolving normally done by the TemplatePaths and directly renders this file.
$paths->setTemplatePathAndFilename('resources/templates/base.html');
$paths->setPartialRootPaths(['resources/partials/']);
$paths->setLayoutRootPaths(['resources/layouts/']);
// In this example we assign all our variables in one array. Alternative is
// to repeatedly call $view->assign('name', 'value').
$view->assignMultiple([
    'authors' => ['Dani','|','Luki','|','Gabriel'],
    'navigation' => [
        [
        'link' => 'https://www.booking.com',
        'name' => 'Booking.com'
        ],
        [
        'link' => 'https://www.expedia.com',
        'name' => 'Expedia'
        ],
        [
        'link' => 'https://www.hotels.com',
        'name' => 'Hotels.com'
        ],
        [
        'link' => 'https://www.agoda.com',
        'name' => 'Agoda'
        ]
    ],
    'hotels' => $hotels
    ]
);
// Rendering the View: plain old rendering of single file, no bells and whistles.
$output = $view->render();

echo $output;