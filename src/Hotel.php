<?php
namespace Dgl\WebtCoreViewsInMvc;
class Hotel
{
    public function __construct(
        public string $name, 
        public string $description, 
        public string $imageLink
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImageLink(): string
    {
        return $this->imageLink;
    }
}