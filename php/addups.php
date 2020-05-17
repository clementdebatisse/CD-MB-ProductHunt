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

//incrementation manuelle UP

$updateProduct = $bdd->prepare('UPDATE products SET ups = ups+1 WHERE id=?');
$updateProduct->execute([$_GET["id"]]);

header('Location: produit.php');

