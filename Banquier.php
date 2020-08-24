<?php

class Banquier {
    private $nom;
    private $prenom;
    private $grade;
    private $lieuTravail;

    public function __construct($nom, $prenom, $grade, $lieuTravail) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setGrade($grade);
        $this->setLieuTravail($lieuTravail);
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }

    public function getNom() { 
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom;
    }

    public function getPrenom() { 
        return $this->nom;
    }

    public function setPrenom($prenom) {
        $this->prenom;
    }

    public function getGrade() { 
        return $this->grade;
    }

    public function setGrade($grade) {
        $this->grade;
    }

    public function getLieuTravail($lieuTravail) { 
        return $this->lieuTravail;
    }

    public function setLieuTravail($lieuTravail) {
        $this->lieuTravail;
    }
}