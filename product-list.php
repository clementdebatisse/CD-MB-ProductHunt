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
    <link rel="stylesheet" href="style1.css">
    <title>Liste des produits</title>
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


        <!-- Liste des produits, avec description, notes, liens etc etc..... -->

        <div class="card-deck">
            <div class="card">
            <img class="card-img-top" src="Library/mask1.jpg" width=479.328px height=296.484px alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Urban Air Mask 2.0</h5>
                <p class="card-text"><ul>Sobre, efficace et flexible, l’Urban Air Mask 2.0 combine les qualités scandinaves avec succès. Offrant d’excellentes prestations et facile à porter, le dernier produit d’Airinum est idéal pour les citadins qui n’en peuvent plus de respirer un air chargé de particules et de mauvaises odeurs.</p>
                <strong>Cliquez sur le produit pour être redirigé vers notre partenaire</strong></ul>
            </div>
            <div class="card-footer">
                <small class="text-muted">Publié il a une semaine</small>
            </div>
            </div>
            <div class="card">
            <img class="card-img-top" src="Library/mask2.jpg" width=479.328px height=296.484px alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Mask Generation</h5>
                <p class="card-text"><ul>C'est dans l'optique de proposer aux français un masque de protection efficace, confortable, réutilisable et abordable que l'entreprise Mask Generation  a créé Le Mask Français.
                Un masque 100% Made in France à un tarif bien plus abordable que le masque haut de gamme déjà proposé par la marque (le Sirocco), puisqu'il est disponible sur le site LeMaskFrançais.com à 39€.</p>
                <strong>Cliquez sur le produit pour être redirigé vers notre partenaire</strong></ul>
            </div>
            <div class="card-footer">
                <small class="text-muted">Publié il y a 5 jours</small>
            </div>
            </div>
            <div class="card">
            <img class="card-img-top" src="Library/mask3.jpg" width=479.328px height=296.484px alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">NanoHack</h5>
                <p class="card-text"><ul>Le fabricant de matériaux d’impression 3D Copper3D vient de mettre en ligne un fichier STL open-source d’un masque N95, imprimable en 3D. Son initiative “Hack The Pandemic” est mondiale et vise à mobiliser tous les fabricants de machines, fablabs, services d’impression, etc. à créer ces masques dont le manque se fait ressentir dans les hôpitaux et chez les professionnels de santé.</p>
                <strong>Cliquez sur le produit pour être redirigé vers notre partenaire</strong></ul>
            </div>
            <div class="card-footer">
                <small class="text-muted">Publié il y a 5 jours</small>
            </div>
            </div>
        </div>

        <br />

        <div class="card-deck">
            <div class="card">
            <img class="card-img-top" src="Library/gloves1.jpg" width=479.328px height=296.484px alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Gants militaires</h5>
                <p class="card-text"><ul>Gant militaire à partir de 9€. Le gant est un accessoire de mode, un équipement de sport ou un élément de protection, recouvrant la main, utilisé pour se protéger notamment du froid, ou encore des écorchures et frottements.</p>
                <strong>Cliquez sur le produit pour être redirigé vers notre partenaire</ul></strong>
            </div>
            <div class="card-footer">
                <small class="text-muted">Publié il y a une semaine </small>
            </div>
            </div>
            <div class="card">
            <img class="card-img-top" src="Library/gloves2.jpg" width=479.328px height=296.484px alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Gants en latex</h5>
                <p class="card-text"><ul>Gants à usage unique en latex étanche, ultra fins. Très grande souplesse, effet seconde peau garantie. Pour risques mineurs uniquement.</p>
                <p class="partnerLink"><strong>Cliquez sur le produit pour être redirigé vers notre partenaire</ul></strong></p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Publié il y a 3 jours</small>
            </div>
            </div>
            <div class="card">
            <img class="card-img-top" src="Library/gloves3.jpg" width=479.328px height=296.484px alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Gants médicaux</h5>
                <p class="card-text"><ul>Les gants médicaux sont des consommables médicaux indispensables à tous les professionnels de santé, utilisés dans les cabinets médicaux, les hôpitaux... Ces gants sont à usage unique et permettent de protéger le patient et le soignant des infections pouvant se transmettre par contact.</p>
                <strong>Cliquez sur le produit pour être redirigé vers notre partenaire</strong></ul>
            </div>
            <div class="card-footer">
                <small class="text-muted">Publié il y a 3 jours</small>
            </div>
            </div>
        </div>

        <!-- --------------------------------------------------------------- -->

    <?php 
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
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>