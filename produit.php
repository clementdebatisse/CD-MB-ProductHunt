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


$selectProducts = $bdd->prepare('SELECT * FROM products');
$selectProducts->execute();
$products = $selectProducts->fetchAll(PDO::FETCH_ASSOC);

//echo "<pre>";
//var_dump($products); exit;
foreach($products as $product) { ?>
    <div class="product">
    <h2><?=$product['name']?></h2>
    <p><?=$product['description']?></p>
    <a href="<?=$product['url']?>"><?=$product['url']?></a>
    <a href="/addups.php?id=<?=$product['id']?>"><?=$product['ups']?></a>
     <!--récuperer le paramètre id sur addups.php : $_GET['id'] -->
</div>
<?php }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Product-Hunt</title>
</head>
<body>

    <!-- Balise ouvrante pour contenu responsive -->

    <div class="container-fluid">

        <!-- ---------------------------------- -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="Library/simplon logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">Product-Hunt</a>
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
                  <a class="nav-link" href="inscription.php">Se connecter</a>
    
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
                    <a class="dropdown-item" href="product-list.html">Liste des produits mis en avant</a>
                  </div>
                </li>
    
                <!-- ----------------------------------------------------------------- -->
    
                <!-- Ajouter qlq chose ici ? si on veut -->
    
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
    
                <!-- -------------------------------------------- -->
    
              </ul>
    
              <!-- Ajouter champ de recherche dans BDD -->
    
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
              </form>
    
              <!-- ------------------------------------- -->
            </div>
          </nav>
    </div>    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
