<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="loginStyle.css?version=51">
    <title>Login</title>
</head>
<body>
    
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

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="Library/site logo.jpg" id="icon" alt="Logo" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="nom" placeholder="Nom d'utilisateur">
      <input type="submit" class="fadeIn fourth" value="Se connecter">
    </form>


  </div>
</div>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>