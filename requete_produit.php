<?php
$requete = file_get_contents('https://fr.openfoodfacts.org/api/v0/produit/3263858402410.json');
$reponse    = json_decode($requete, true);
$resultat = array(($reponse['product']['quantity']));
var_dump($resultat);
