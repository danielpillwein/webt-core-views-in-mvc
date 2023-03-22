<?php
require './vendor/autoload.php';

use Dgl\WebtCoreViewsInMvc\Hotel;
use Dgl\WebtCoreViewsInMvc\HotelSeeder;

$hotels = HotelSeeder::getHotels();

$layout = "OneColumn";
if (isset($_GET['Columns'])){
    $layout = strcmp($_GET['Columns'],'1')?'TwoColumn':'OneColumn';
}

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$paths = $view->getTemplatePaths();

$paths->setTemplatePathAndFilename('resources/templates/base.html');
$paths->setPartialRootPaths(['resources/partials/']);
$paths->setLayoutRootPaths(['resources/layouts/']);

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
    'hotels' => $hotels,
    'layout' => $layout
    ]
);

$output = $view->render();

echo $output;