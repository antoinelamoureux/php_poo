<?php

class Vehicule {
    private $type;
    private $nbPlaces;

    public function __construct($type, $nbPlaces) {
        $this->setType($type);
        $this->setNbPlaces($nbPlaces);
    }

    public function getType() {
        return $this->type;
     }

    public function setType($type) {
        $this->type;
    }

    public function getNbPlaces() {
        return $this->nbPlaces;
     }

    public function setNbPlaces($nbPlaces) {
        $this->nbPlaces;
    }

}