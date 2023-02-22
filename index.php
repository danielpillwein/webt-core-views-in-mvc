<?php
require './Hotel_Seeder.php';

$index_template = file_get_contents('./templates/index.html');
$hotels_HTML = '';

$seeder = new Hotel_Seeder();
$hotels = $seeder->getHotels();

foreach($hotels as $hotel){
    $hotel_template = file_get_contents('./templates/hotel.html');
    $hotel_template = str_replace('###NAME###',$hotel->getName(),$hotel_template);
    $hotel_template = str_replace('###DESCRIPTION###',$hotel->getDescription(),$hotel_template);
    $hotels_HTML .= $hotel_template;
}

echo str_replace('###HOTELS###',$hotels_HTML,$index_template);

