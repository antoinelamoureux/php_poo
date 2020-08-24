<?php

class Ville {
    protected $nom;
    protected $departement;
    protected $region;
    protected $habitants;

    public function __construct($nom, $departement, $region, $habitants)
    {
        $this->setNom($nom);
        $this->setDepartement($departement);
        $this->setRegion($region);
        $this->setHabitants($habitants);
    }

    public function getNom() {
        return $this->nom;
     }

    public function setNom($nom) {
        $this->nom;
    }

    public function getDepartement() {
        return $this->departement;
     }

    public function setDepartement($departement) {
        $this->departement;
    }

    public function getRegion() {
        return $this->region;
     }

    public function setRegion($region) {
        $this->region;
    }

    public function getHabitants() {
        return $this->habitants;
     }

    public function setHabitants($habitants) {
        $this->habitants;
    }
    
}