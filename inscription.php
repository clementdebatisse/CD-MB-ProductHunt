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

<div>
<form method="post">
    <input type="text" placeholder="PSEUDO" name="username">
    <button type="submit" action="">
</form>
</div>

<?php


if(!empty($_POST["username"])) {
    $username = htmlspecialchars($_POST["username"]);

    setcookie('user_cookie', $username);
    $currentNickname = $username;

    // 0 : Je vérifie si le user existe déjà ou pas
    $userStatement = $bdd->prepare('SELECT * FROM users WHERE username = ?');
    $userStatement->execute([$username]);

    $user = $userStatement->fetch(PDO::FETCH_ASSOC);


    if($user) {
        // 1 : J'insère le nouveau user
        $insertUserStatement = $bdd->prepare('INSERT INTO users (username) VALUES (?)');
        $insertUserStatement->execute([$username]);
    }
    
?>
