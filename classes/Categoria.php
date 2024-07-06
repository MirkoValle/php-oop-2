<?php 

class Categoria {
    private $icon;
    private $species;

    public function __construct($icon, $species) {
        $this->icon = $icon;
        $this->species = $species;
    }

    public function getIcon(){
        return $this->icon;
    }

    public function getSpecies(){
        return $this->species;
    }
}