<?php
class HotelModel {
    public function __construct(public $name, public $description){}
    
    public function getName() {    
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }
}
