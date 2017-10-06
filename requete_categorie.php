<?php
$requete = file_get_contents('https://fr.openfoodfacts.org/categories.json');
$reponse    = json_decode($requete, true);
$resultat = array(($reponse['tags'][1]['name']));
var_dump($resultat);
