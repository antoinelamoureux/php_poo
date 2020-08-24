<?php
class Utilisateurs {
    private $nom;
    private $prenom;
    private $age = 23;
    private $email;

    public function __construct($nom, $prenom, $email) {
        echo "Je suis le constructeur";
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
    }

    public function seConnecter() {
        echo "Je suis un utilisateur de votre application, je peux me connecter.";
    }

    public function seDeConnecter() {
        echo "Je ne suis pas un utilisateur de votre application, je ne peux pas me connecter.";
    }

    public function recupererAge() {
        return $this->age;
    }

    public function setNom($nom) {
        $this->$nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPrenom($nom) {
        $this->$nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setEmail($email) {
        $this->email;
    }

    public function getEmail() {
        return $this->email;
    }

}