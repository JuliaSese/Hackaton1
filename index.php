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
      <div class="top-content" style="height: 100vh;">
         <div class="container">
            <div class="row">
               <div class="col-sm-8 col-sm-offset-2 text">
                  <h1>Rechercher un produit</h1>
                  <div class="description">
                     <p>Découvrez l'ensemble des produits d'Open Food Facts</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 subscribe wow fadeInUp">
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
      <script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.backstretch.min.js"></script>
      <script src="assets/js/scripts.js"></script>
   </body>
</html>