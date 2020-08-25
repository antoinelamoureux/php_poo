<?php

class Produit {
    protected $reference;
    protected $name;
    protected $price;

    protected static $remise = 20;

    public function __construct($reference, $name, $price) {
        $this->reference = $reference;
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public static function getRemise() {
        return self::$remise; //Valeur de la classe courante.
    }

    public function setRemise($remise) {
        self::$remise = $remise;
    }

    public function getNewPrice() {
        return $this->price * (1 * self::$remise/100);
    }
}