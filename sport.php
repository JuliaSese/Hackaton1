<?php
$produit = $_GET['id'];
$requete = file_get_contents('https://fr.openfoodfacts.org/api/v0/produit/'.$produit.'.json');
$reponse    = json_decode($requete, true);
$resultat = array(($reponse['product']['nutrition_grade_fr']));
var_dump($resultat);
