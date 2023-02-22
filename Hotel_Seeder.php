<?php
require './Hotel.php';
class Hotel_Seeder
{
    public function __construct() {}
    
    public function getHotels(){
        $hotelsArray = [];
        $hotels = [
            [
                "name" => "Burj Al Arab",
                "description" => "The iconic sail-shaped hotel that rises 321 meters above the Arabian Gulf in Dubai, known for its opulence and luxurious amenities.",
                "picture" => ""
            ],
            [
                "name" => "Ritz-Carlton, Hong Kong",
                "description" => "Luxurious hotel located on the top floors of the International Commerce Centre, the tallest building in Hong Kong, known for its breathtaking views of Victoria Harbour and the city skyline.",
                "picture" => ""
            ],
            [
                "name" => "The Plaza Hotel",
                "description" => "Historic landmark in New York City that has been a symbol of luxury and grandeur since its opening in 1907, featuring classic European style and world-class dining options.",
                "picture" => ""
            ],
            [
                "name" => "Hotel Bel-Air",
                "description" => "Secluded oasis in the heart of Los Angeles, known for its lush gardens, celebrity guests, and classic California style.",
                "picture" => ""
            ],
            [
                "name" => "The Ritz London",
                "description" => "Iconic hotel located in the heart of Mayfair, known for its impeccable service and sophisticated style.",
                "picture" => ""
            ],
            [
                "name" => "Four Seasons Hotel George V, Paris",
                "description" => "Luxury hotel located in the heart of Paris, known for its classic French elegance and impeccable service.",
                "picture" => ""
            ],
            [
                "name" => "The Savoy",
                "description" => "Iconic hotel located in the heart of London, known for its rich history and Art Deco style.",
                "picture" => ""
            ],
            [
                "name" => "Mandarin Oriental, Bangkok",
                "description" => "Historic hotel located on the banks of the Chao Phraya River in Bangkok, known for its luxurious accommodations and world-class dining options.",
                "picture" => ""
            ]
        ];
          
        foreach($hotels as $hotel){
            $hotelsArray[] = new Hotel($hotel['name'],$hotel['description'],$hotel['picture']);
        }   

        return $hotelsArray;
    }
}