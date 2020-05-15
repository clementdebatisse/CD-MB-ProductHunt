<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=product-hunt;charset=utf8',
                   'root',
                   '',
                   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style1.css?version=51">
    <title>Product-Hunt</title>
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="Library/simplon logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">Product-Hunt</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Page d'accueil <span class="sr-only">(current)</span></a>
            </li>

            <!-- Doit redigirer vers une page ou user peut se connecter -->

            <li class="nav-item">
              <a class="nav-link" href="login.php">Se connecter</a>

            <!-- ---------------------------------------------------------- -->

            <!-- Rediriger vers les produits populaires, nouveaux, et tous les produits  -->

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produits proposés
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="produit.php">Produits les plus populaires</a>
                <a class="dropdown-item" href="#">Nouveautés</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="product-list.php">Liste des produits mis en avant</a>
              </div>
            </li>

            <!-- --------------------BARRE DE RECHERCHE------------------------ -->

          </ul>

<form method="post">
      <label>Rechercher</label>
      <input type="text" name="search">
      <input type="submit" name="submit">
    </form>

    <?php
    
    if (isset($_POST["submit"])) {
      $str = $_POST["search"];
      $sth = $bdd->prepare("SELECT * FROM products WHERE name = '$str'");

      $sth->setFetchMode(PDO:: FETCH_OBJ);
      $sth-> execute();

      if($row = $sth->fetch())
      {
        ?>
        <br><br><br>
        <table>
           <tr>
             <th>name</th>
             <th>description</th>
           </tr>
            <tr>
              <td><?php echo $row->name; ?></td>
              <td><?php echo $row->description; ?></td>
            </tr>
      </table>
    <?php  
    }
      
      else {
        echo "Product does not exist";
      }
    }
    ?>
    </div>
    </nav>
    
            <!-- ----------------------------------------------------------------- -->
      
      <!-- Carousel qui doit afficher 1 produit populaire et 1 nouveauté -->
      <!-- N'est pas responsive et devra l'être -->

      
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Library/slide1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="carousel-title">Product-Hunt</h5>
              <p class="carousel-description">Le but de Product-Hunt Simplon est de ralier les meilleurs produits au marché</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Library/slide2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Système de vote</h5>
              <p>Pour cela, nous avons instauré un système de vote par utilisateur</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Library/slide3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Mettre en avant les meilleurs produits</h5>
              <p>Ainsi, les entreprises ainsi que les particuliers sont tenus au courant des meilleurs produits du moment</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    
    <div class="Services">
      <section class="page-section" id="services">
              <div class="container">
                  <div class="text-center">
                      <h2 class="section-heading text-uppercase">Qu'est ce que Product-Hunt ?</h2>
                      <h3 class="section-subheading text-muted">Nous proposons 3 services</h3>
                  </div>
                  <div class="row text-center">
                      <div class="col-md-4">
                          <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                          <h4 class="my-3">Produits sur le marché</h4>
                          <p class="text-muted">Une liste de produits est mise en avant par notre site</p>
                      </div>
                      <div class="col-md-4">
                          <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-laptop fa-stack-1x fa-inverse"></i></span>
                          <h4 class="my-3">Système de upvote</h4>
                          <p class="text-muted">Chaque utilisateur inscrit et connecté peut choisir de voter pour son produit préferé</p>
                      </div>
                      <div class="col-md-4">
                          <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-lock fa-stack-1x fa-inverse"></i></span>
                          <h4 class="my-3">Produits mis en avant</h4>
                          <p class="text-muted">Les produits ayant reçu le plus de votes sont mis en avant par notre site, garantissant une meilleure visiblité pour les potentiels acheteurs/investisseurs </p>
                      </div>
                  </div>
              </div>
          </section>
  </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>