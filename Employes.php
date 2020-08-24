<?php

class Employes {
    private $nom;
    private $prenom;
    private $age;

    public function __construct($nom, $prenom, $age) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
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

    public function getAge() { 
        return $this->age;
    }

    public function setAge($grade) {
        $this->age;
    }
}