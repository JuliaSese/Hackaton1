<?php

$categorie = $_POST['categorie'];

$requete = file_get_contents('https://fr.openfoodfacts.org/cgi/search.pl?search_terms='.$categorie.'&search_simple=1&action=process&page_size=50&json=1');
$reponse    = json_decode($requete, true);
$resultat = array(($reponse['products']));
?>

<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>HACKATHON WCS</title>
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
   </head>
   <body>
      <div class="features-container section-container">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 features section-description wow fadeIn">
                  <h2>Tous les produits de la catégorie <?php echo $categorie;?></h2>
               </div>
            </div>
            <div class="row">
            	<?php foreach ($resultat as $r) {
	foreach ($r as $key => $value) {
		echo " <div class='col-md-4 col-xs-12' style='max-height: 300px;'>
      <div class='thumbnail' style='height: 285 !important;'>";
		if (!isset($value['image_front_thumb_url'])) {
			echo "<img src='http://via.placeholder.com/500x300'";
		}
		else {
			echo "<img src='".($value['image_front_thumb_url'])."'style='max-width: 87px;'>";
		}
		echo "<div class='caption'>";
		echo "<h3 class='text-center'>".($value['product_name'])."</h3>";
		if (!($value['nutriments']['energy_serving'])) {
			echo "<p class='text-danger'>Aucune valeur nutritionnelle n'existe pour ce produit</p>";
		}
		elseif (!isset(($value['nutriments']['energy_serving']))) {
			echo "<p class='text-danger'>Aucune valeur nutritionnelle n'existe pour ce produit</p>";
		}
		else {
			echo "<p class='text-center'>".($value['nutriments']['energy_serving'])." Kcal</p>";
		}
		echo "<br><a class='btn btn-warning' href='sport?id=".($value['code'])."'>Cliquer ici</a>";
		echo "</div>";
		echo "</div>";
		echo "</div>";

	}
}
?>

               </div>
            </div>
         </div>
      </div>
      </div>
      <script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.backstretch.min.js"></script>
      <script src="assets/js/scripts.js"></script>
   </body>
</html>
