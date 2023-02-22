<?php
class Hotel
{
    public function __construct(
        public string $name, 
        public string $description, 
        public string $imageLink
    ) {}

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getImageLink(){
        return $this->imageLink;
    }
}