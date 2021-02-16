<?php 

//connexion à la bdd

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=laromanesque;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

//On renomme les variables du $_POST

$pseudo=$_POST['pseudo'];
$password=$_POST['password'];

//  Récupération de l'utilisateur et de son mot de pass hashé

$req = $bdd->prepare('SELECT id, mot_de_passe FROM membres WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($password, $resultat['mot_de_passe']);

if (!$resultat)
{
    echo "Cet identifiant n'existe pas !";
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
        echo '<a href="index.php"> vous pouvez parcourir le site </a>';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}

?>
