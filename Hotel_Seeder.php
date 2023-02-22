<?php
require './Hotel.php';
class Hotel_Seeder
{
    public function __construct() {}
    
    public function getHotels(){
        $data = file_get_contents('./hotels.json');
        $data = json_decode($data, true);
        $data = $data['hotels'];
        $hotels = [];

        foreach($data as $hotel){
            $hotels[] = new Hotel($hotel['name'],$hotel['description'],$hotel['picture']);
        }

        return $hotels;
    }
}