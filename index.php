<?php
require 'Utilisateurs.php';
require 'Ville';

$utilisateur1 = new Utilisateurs("Leclerc", "Delphine", "fgfgfdg@ghhhgf.com");

echo $utilisateur1->recupererAge();

$ville1 = new Ville("Paris", 75, "Ile-de-France",1000000);