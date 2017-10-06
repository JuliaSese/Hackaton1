<?php
$requete = file_get_contents('https://world.openfoodfacts.org/cgi/search.pl?search_terms=pizza&search_simple=1&action=process&json=1');
$reponse    = json_decode($requete, true);
$resultat = array(($reponse['products']));

foreach ($resultat as $r) {
	foreach ($r as $key => $value) {
		echo "<br>".($value['product_name']);
	}
}