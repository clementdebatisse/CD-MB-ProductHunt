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
    
                <!-- ----------------------------------------------------------------- -->
    
              </ul>
    
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

<div class="card">

<?php

$reponse = $bdd->prepare('SELECT * FROM products WHERE id = ?') or die(print_r($bdd->errorInfo()));
$reponse->execute(array($_GET['id']));

 
 
while ($donnees = $reponse->fetchAll())
{ 
?>  
                <div class="container">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 prods-img">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo $donnees['image']?>" alt="Card image cap">;>
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $donnees['name']; ?></h5>
                        <p class="card-text"><?php echo $donnees['description']; ?></p>
                        <small class="text-muted">Votez pour ce produit </br> <?php echo $product['ups'] ?></small>
                    </div>
                    </div>
                    </a>
                </div>
                </div>
                <?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?> 
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>