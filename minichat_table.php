<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=chat;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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