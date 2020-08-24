<?php

class Produit {
    protected static $remise;
    protected $name;
    protected $price;

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

    public function getNewPrice() {
        return $this->price * (1 * self::$remise/100);
    }

}