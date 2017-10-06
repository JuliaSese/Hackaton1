<?php
   $produit = $_GET['id'];
   $requete = file_get_contents('https://fr.openfoodfacts.org/api/v0/produit/'.$produit.'.json');
   $reponse    = json_decode($requete, true);
   if (!isset($reponse['product']['nutrition_grade_fr'])) {
   	$affiche = "";
   }
   elseif (empty($reponse['product']['nutrition_grade_fr'])) {
   	$affiche = "";
   }
   else {
   	$affiche = $reponse['product']['nutrition_grade_fr'];
   }



   if (!isset($reponse['product']['stores'])) {
      $magasin = "";
   }
   elseif (empty($reponse['product']['stores'])) {
      $magasin = "";
   }
   else {
      $magasin = $reponse['product']['stores'];
   }



   if (!isset($reponse['product']['countries'])) {
      $pays = "";
   }
   elseif (empty($reponse['product']['countries'])) {
      $pays = "";
   }
   else {
      $pays = $reponse['product']['countries'];
   }


   
   
   
   
   $nom = $reponse['product']['product_name'];
   $kilo = $reponse['product']['nutriments']['energy_value'];
   
   $c1 = $kilo * 60;
   $course = $c1 / 950;
   $natation = $c1 / 700;
   $cyclisme = $c1 / 352;
   $basket = $c1 / 317;
   $danse = $c1 / 317;
   $tennis = $c1 / 281;
   $promenade = $c1 / 246;
   $sexe = $c1 / 800;
   
   $course_h = $kilo / 950;
   $natation_h = $kilo / 700;
   $cyclisme_h = $kilo / 352;
   $basket_h = $kilo / 317;
   $danse_h = $kilo / 317;
   $tennis_h = $kilo / 281;
   $promenade_h = $kilo / 246;
   $sexe_h = $kilo / 800;
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
         <div>
            <div class="row" style=" margin-bottom: 100px; ">
               <div class="col-sm-5 how-it-works-box" style=" bottom: 80px; ">
                  <img src="assets/img/bouffe.png">
               </div>
               <div class="col-sm-6 col-sm-offset-1 how-it-works-box how-it-works-box-right wow fadeInUp">
                  <h3><?php echo $nom; ?></h3>
                  <h3>Magasins de vente : <?php echo $magasin; ?></h3>
                  <h3>Pays de vente : <?php echo $pays; ?></h3>
                  <?php 
                     echo "<img src='https://static.openfoodfacts.org/images/misc/nutriscore-".$affiche.".svg'>";
                     ?>
                     <h4>100 grammes de ce produit correspondant à <?php echo $kilo;?> kcal, il vous faudra pratiquer un effort physique de :</h4>
                  <table class="table">
                     <thead>
                        <tr>
                           <th>Sport</th>
                           <th>Durée (en minutes)</th>
                           <th>Durée (en heures)</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>Course à pied (13km/h)</td>
                           <td><?php echo number_format($course,2);?> minutes</td>
                           <td><?php echo number_format($course_h,2);?> heures</td>
                        </tr>
                        <tr>
                           <td>Natation</td>
                           <td><?php echo number_format($natation,2);?> minutes</td>
                           <td><?php echo number_format($natation_h,2);?> heures</td>
                        </tr>
                        <tr>
                           <td>Cyclisme</td>
                           <td><?php echo number_format($cyclisme,2);?> minutes</td>
                           <td><?php echo number_format($cyclisme_h,2);?> heures</td>
                        </tr>
                        <tr>
                           <td>Basket</td>
                           <td><?php echo number_format($basket,2);?> minutes</td>
                           <td><?php echo number_format($basket_h,2);?> heures</td>
                        </tr>
                        <tr>
                           <td>Danse</td>
                           <td><?php echo number_format($danse,2);?> minutes</td>
                           <td><?php echo number_format($danse_h,2);?> heures</td>
                        </tr>
                        <tr>
                           <td>Tennis de table</td>
                           <td><?php echo number_format($tennis,2);?> minutes</td>
                           <td><?php echo number_format($tennis_h,2);?> heures</td>
                        </tr>
                        <tr>
                           <td>Promenade à pied</td>
                           <td><?php echo number_format($promenade,2);?> minutes</td>
                           <td><?php echo number_format($promenade_h,2);?> heures</td>
                        </tr>
                        <tr>
                           <td>Sexe</td>
                           <td><?php echo number_format($sexe,2);?> minutes</td>
                           <td><?php echo number_format($sexe_h,2);?> heures</td>
                        </tr>
                     </tbody>
                  </table>
                  <a class="btn btn-warning" onclick="retour()">Retour à la liste</a>
                  <hr>
                  <div class="subscribe">
                     <form class="form-inline" action="produits.php" method="post">
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
      <script>
function retour() {
    window.history.back();
}
</script>
      <script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.backstretch.min.js"></script>
      <script src="assets/js/scripts.js"></script>
   </body>
</html>