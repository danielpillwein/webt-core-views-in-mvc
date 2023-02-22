<?php
$index_template = file_get_contents('./templates/index.html');
$hotels_HTML = '';
$data = file_get_contents('./hotels.json');
$data = json_decode($data, true);
$data = $data['hotels'];

foreach($data as $hotel){
    $hotel_template = file_get_contents('./templates/hotel.html');
    $hotel_template = str_replace('###NAME###',$hotel['name'],$hotel_template);
    $hotel_template = str_replace('###DESCRIPTION###',$hotel['description'],$hotel_template);
    $hotels_HTML .= $hotel_template;
}

echo str_replace('###HOTELS###',$hotels_HTML,$index_template);
