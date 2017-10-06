<?php
$produit = $_GET['id'];
$requete = file_get_contents('https://fr.openfoodfacts.org/api/v0/produit/'.$produit.'.json');
$reponse    = json_decode($requete, true);
$affiche = $reponse['product']['nutrition_grade_fr'];
$nom = $reponse['product']['product_name'];
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
      

        <div class="how-it-works-container section-container" style="height: 100vh;">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-5 how-it-works-box" style="padding-left: 0px;right: 135px;bottom: 80px;">
	                	<img src="assets/img/bouffe.png">
	                </div>
	                <div class="col-sm-6 col-sm-offset-1 how-it-works-box how-it-works-box-right wow fadeInUp">
	                    <h3><?php echo $nom; ?></h3>
	                    <img src='https://static.openfoodfacts.org/images/misc/nutriscore-<?php echo $affiche;?>.svg'>
                    	<p>
                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                    	</p>
                    	<p>
                    		Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                    		Ut wisi enim ad minim veniam, quis nostrud. 
                    	</p>
	                </div>
	                <div class="subscribe">
	                	<div class="row">
               <div class="col-sm-6 subscribe">
                  <form class="form-inline" action="requete_multi_critere.php" method="post">
                     <div class="form-group">
                        <select class="form-control" style="width: 400px; height: 50px; margin-bottom: 20px;" name="categorie">
                           <option selected disabled>Rechercher une catégorie</option>
                           <option value="pizza">Pizzas</option>
                           <option value="biere">Bières</option>
                           <option value="flammekueche">Flammekueche</option>
                           <option value="sodas">Sodas</option>
                           <option value="légumes">Légumes</option>
                           <option value="céréales">Céréales</option>
                           <option value="viandes">Viandes</option>
                           <option value="desserts">Desserts</option>
                           <option value="cafés">Cafés</option>
                        </select>
                        <button type="submit" class="btn btn-block">Rechercher <i class="fa fa-search"></i></button>
                     </div>
                  </form>
               </div>
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
