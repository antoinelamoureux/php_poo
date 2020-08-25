<?php
class Utilisateurs {
    private $nom;
    private $prenom;
    private $age = 23;
    private $email;
    private $note;

    const NREF_BASSE = 10;
    const NREF_HAUTE = 15;

    public function __construct($nom, $prenom, $email, $note) {
        echo "Je suis le constructeur";
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setEmail($email);
        $this->setNote($note);
    }

    function degreImplication() {
        if ($this->getNote() >= self::NREF_HAUTE) {
            echo 'La contribution de cet utilisateur est excellente';
        } elseif ($this->getNote() >= self::NREF_BASSE) {
            echo 'La contribution de cet utilisateur est moyenne';
        } else {
            echo 'La contribution de cet utilisateur est excellente';
        }
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
        $this->$nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNote($note) {
        $this->note = $note;
    }

    public function getNote() {
        return $this->note;
    }

}