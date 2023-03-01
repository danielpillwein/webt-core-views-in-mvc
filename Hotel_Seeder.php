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
                "picture" => "https://traveldigg.com/wp-content/uploads/2016/06/Burj-Al-Arab-United-Arab-Emirates-720x404.jpg"
            ],
            [
                "name" => "Ritz-Carlton, Hong Kong",
                "description" => "Luxurious hotel located on the top floors of the International Commerce Centre, the tallest building in Hong Kong, known for its breathtaking views of Victoria Harbour and the city skyline.",
                "picture" => "https://s1.it.atcdn.net/wp-content/uploads/2013/09/custom_RCHKKOW_00045_149793-800x600.jpg"
            ],
            [
                "name" => "The Plaza Hotel",
                "description" => "Historic landmark in New York City that has been a symbol of luxury and grandeur since its opening in 1907, featuring classic European style and world-class dining options.",
                "picture" => "https://www.themilliardaire.com/wp-content/uploads/2014/10/the-plaza-hotel-new-york-4.jpg"
            ],
            [
                "name" => "Hotel Bel-Air",
                "description" => "Secluded oasis in the heart of Los Angeles, known for its lush gardens, celebrity guests, and classic California style.",
                "picture" => "https://images.trvl-media.com/lodging/2000000/1690000/1680600/1680522/5843f2d1.jpg?impolicy=resizecrop&rw=1200&ra=fit"
            ],
            [
                "name" => "The Ritz London",
                "description" => "Iconic hotel located in the heart of Mayfair, known for its impeccable service and sophisticated style.",
                "picture" => "https://i2.wp.com/welovefood-itsallweeat.com/wp-content/uploads/2014/06/the-ritz-london-we-love-food-its-all-we-eat17.jpg?resize=768%2C610&ssl=1"
            ],
            [
                "name" => "Four Seasons Hotel George V, Paris",
                "description" => "Luxury hotel located in the heart of Paris, known for its classic French elegance and impeccable service.",
                "picture" => "https://true5stars.com/api/hashstore_get/4ef0eaad2ab66e9ccf35529cc4b79b40.jpg?large=true"
            ],
            [
                "name" => "The Savoy",
                "description" => "Iconic hotel located in the heart of London, known for its rich history and Art Deco style.",
                "picture" => "https://londontopia.net/wp-content/uploads/2015/07/savoy8-600x398.jpg"
            ],
            [
                "name" => "Mandarin Oriental, Bangkok",
                "description" => "Historic hotel located on the banks of the Chao Phraya River in Bangkok, known for its luxurious accommodations and world-class dining options.",
                "picture" => "https://i0.wp.com/silencio.fr/wp-content/uploads/2015/10/hotel-luxe-bangkok-meileur-mandarin-oriental-silencio.jpeg?resize=238%2C178&ssl=1"
            ]
        ];
          
        foreach($hotels as $hotel){
            $hotelsArray[] = new Hotel($hotel['name'],$hotel['description'],$hotel['picture']);
        }   

        return $hotelsArray;
    }
}