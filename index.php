<?php
require 'Utilisateurs.php';
require 'Ville.php';
require 'Banquier.php';
require 'Vehicule.php';
require 'Produit.php';

$utilisateur1 = new Utilisateurs("Leclerc", "Delphine", "fgfgfdg@ghhhgf.com", 5);
echo'<br>';

echo $utilisateur1->recupererAge();

$ville = new Ville("Paris", 75, "Ile-de-France",1000000);

$banquier = new Banquier("Money", "Bob", "CEO", "London");

$voiture = new Vehicule("Voiture", 4);

$voiture->setType("Vélo");
echo'<br>';

$voiture->setNbPlaces(1);
echo'<br>';

echo $voiture->getType();
echo'<br>';
echo $voiture->getnbPlaces();
echo'<br>';
echo'<br>';
$produit1 = new Produit("P1", "Yahourt", 5);

echo $produit1::getRemise();
echo'<br>';
echo Produit::getRemise();
echo'<br>';

echo $produit1->getPrice();
echo'<br>';

echo $produit1->getNewPrice();
echo'<br>';

$produit1->setRemise(50);
echo 'La nouvelle remise est: '. $produit1::getRemise();
echo'<br>';

