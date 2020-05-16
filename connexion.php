<?php
session_start();

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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="loginStyle.css?version=52">
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
          </ul>
          

            <!-- --------------------BARRE DE RECHERCHE------------------------ -->

          

<!-- <form method="post">
      <label>Rechercher</label>
      <input type="text" name="search">
      <input type="submit" name="submit">
    </form> -->

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

 

 <!-- ------------------------------------------------------ -->


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="Library/site logo.jpg" id="icon" alt="Logo" />
    </div>

    <!-- Login Form -->
    <form method="post">
      <input type="text" id="login" class="fadeIn second" name="nomconnect" placeholder="Nom d'utilisateur">
      <input type="submit" class="fadeIn fourth" name="formconnexion" value="Se connecter">
    </form>

<h2>
<?php 

if(!empty($_POST['formconnexion']))

    $nomconnect = htmlspecialchars($_POST['nomconnect']);
    if(!empty($nomconnect))
    {
        $requser = $bdd->prepare("SELECT * FROM infos WHERE nom = ?");
        $requser->execute(array($nomconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['nom'] = $userinfo['nom'];
            header("Location: index.php?id=".$_SESSION['id']);

        }
        else
        {
            echo "Utilisateur introuvable &#128550";
        }
    }
    else
    {
        echo "Pseudo manquant &#128531";
    }








//     {
//         $userinfo = $requser->fetch();
//         $_SESSION['id'] = $userinfo['id'];
//         $_SESSION['nom'] = $userinfo['nom'];
//         header("Location: index.php?id=")
//     }
//     else
//     {
//         echo "Utilisateur inconnu &#128563";
//     }

//     }
//     if (empty($_POST['nomconnect']))
//     {
//         echo "Pseudo manquant &#128531";
    
// }


?>
</h2>


  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>