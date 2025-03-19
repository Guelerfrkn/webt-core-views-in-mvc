<?php
namespace Moe\WebtCoreViewsInMvc\Model\Entity;
class HotelModel {
    public function __construct(public string $name, public string $description){}
    
    public function getName() {    
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }
}
