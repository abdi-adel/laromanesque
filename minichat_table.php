<?php
try
{
	// $bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$bdd = new PDO('mysql:host=eu-cdbr-west-01.cleardb.com;dbname=heroku_ba0bff646bb9afe;charset=utf8', 'b8de40cd4aec92', '2fcf7585', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$req = $bdd -> prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)') or die(print_r($bdd->errorInfo()));
$req -> execute (array(
	strip_tags($_POST["pseudo"]),
	strip_tags($_POST["message_personnel"])
	));

echo 'Votre message a bien été envoyé !';

header('Location: minichat.php');

?>