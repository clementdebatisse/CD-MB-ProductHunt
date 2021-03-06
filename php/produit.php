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
    <link rel="stylesheet" type="text/css" href="../css/style1.css?version=55">
    <title>Product-Hunt</title>
</head>
<body>

          <!-- ----------------------------Début NAVBAR------------------------------------------ -->

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="../Library/simplon logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">Product-Hunt</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Page d'accueil <span class="sr-only">(current)</span></a>
            </li>

            <!-- Doit redigirer vers une page ou user peut se connecter -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profil
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="connexion.php">Se connecter</a>
                <a class="dropdown-item" href="inscription.php">S'inscrire</a>
              </div>
            </li>

            <!-- ---------------------------------------------------------- -->

            <!-- Rediriger vers les produits populaires, nouveaux, et tous les produits  -->

            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Produits proposés
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="produit.php">Produits les plus populaires</a>
                <a class="dropdown-item" href="nouveautes.php">Nouveautés</a>
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
        <table>
        </br> </br>
            <tr>
              <td><?php echo $row->name; ?></td>
              <td><a href="fiche-produit.php?id=<?php echo $row->id;?>">Cliquez ici pour en savoir plus sur le produit !</a> </td>
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
    
            <!-- -----------------FIN NAVBAR--------------------- -->


    
</div>
</nav>

<!-- FIN DE LA BARRE DE RECHERCHE -->
</br>

  <?php
      $selectProducts = $bdd->prepare('SELECT * FROM products ORDER BY ups DESC');
  $selectProducts->execute();
  $products = $selectProducts->fetchAll(PDO::FETCH_ASSOC);

  //echo "<pre>";
  //var_dump($products); exit;

  foreach($products as $product) { 
   // $id = $_GET['id'];

 ?>
   
   <div class="card col-8">
      <a href="fiche-produit.php?id=<?php echo $product["id"]?>">
        <div class="d-flex flex-row">
          <img class="card-img-top img-thumbnail" src="<?php echo $product['image']?>" style="width: 400px; height: 200px;">
           <div class="card-body" style="color: black;">
             <h5 class="card-title"><?php echo $product['name'] ?></h5>
             <p class="card-text"><ul><?php echo substr($product['description'], 0, 120); ?>...</ul></strong>
           </div>
             <div class="card-footer">
              <a class="btn btn-primary btn-lg" href="addups.php?id=<?php echo $product["id"]?>">
              <small class="text-white">Votez pour ce produit </br> <?php echo $product['ups'] ?><strong> votes !</strong></small>
              </a>
             </div>
             </a>
           </div>
           </div>
           </br>


  <?php } ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
