<?php
require 'Utilisateurs.php';
require 'Ville';

$utilisateur1 = new Utilisateurs("Leclerc", "Delphine", "fgfgfdg@ghhhgf.com");

echo $utilisateur1->recupererAge();

$ville = new Ville("Paris", 75, "Ile-de-France",1000000);

$banquier = new Banquier("Money", "Bob", "CEO", "London");

$voiture = new Vehicule("Voiture", 4);

echo "$voiture->getType()";
echo "$voiture->getnbPlaces()";

$voiture->setType("Vélo");
$voiture->setNbPlaces(1);

echo "$voiture->getType()";
echo "$voiture->getnbPlaces()";

$yahourt = new Produit("Yahourt", 5);

echo $yahout::$remise;

echo $produit->getNewPrice();
