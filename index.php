<?php
require './vendor/autoload.php';

use Dgl\WebtCoreViewsInMvc\Hotel;
use Dgl\WebtCoreViewsInMvc\HotelSeeder;

$hotels = HotelSeeder::getHotels();
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);
$template = $twig->load('one-column.html');

echo $template->render([
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
    'hotels' => $hotels]
);