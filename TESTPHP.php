<?php
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=product-hunt;charset=utf8',
                   'root',
                   '',
                   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>


<?php
  
$reponse = $bdd->query('SELECT * FROM `products` WHERE 1');

$donnees = $reponse->fetchAll();

echo "<pre>" . var_export($donnees, true) . "</pre>";

echo "<br>";

echo "<pre>" . var_export($donnees[0], true) . "</pre>";

echo "<br>";

echo "<pre>" . var_export($donnees[0]['name'], true) . "</pre>";

echo "<br>";

echo "<pre>" . var_export($donnees[1]['description'], true) . "</pre>";



?>