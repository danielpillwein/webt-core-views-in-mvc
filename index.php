<?php
require './vendor/autoload.php';

use Dgl\WebtCoreViewsInMvc\Hotel;
use Dgl\WebtCoreViewsInMvc\HotelSeeder;

$index_template = file_get_contents('./templates/index.html');
$hotels_HTML = '';

// $seeder = new HotelSeeder();
$hotels = HotelSeeder::getHotels();

foreach($hotels as $hotel){
    /* @var $hotel Hotel*/
    $hotel_template = file_get_contents('./templates/hotel.html');
    $hotel_template = str_replace('###NAME###',$hotel->getName(),$hotel_template);
    $hotel_template = str_replace('###DESCRIPTION###',$hotel->getDescription(),$hotel_template);
    $hotel_template = str_replace('###IMAGELINK###',$hotel->getImageLink(),$hotel_template);
    $hotels_HTML .= $hotel_template;
}

echo str_replace('###HOTELS###',$hotels_HTML,$index_template);

