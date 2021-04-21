<?php
try
{
	// $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $bdd = new PDO('mysql:host=eu-cdbr-west-01.cleardb.com;dbname=heroku_ba0bff646bb9afe;charset=utf8', 'b8de40cd4aec92', '2fcf7585', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd -> query('select * from jeux_video');

while ($donnees = $reponse -> fetch())
{
    ?>
        <p>
            <strong>Jeu</strong> : <?php echo $donnees['nom']; ?> <br/>
            Le possesseur de ce jeu est : <?php $donnees['possesseur']; ?>, et il 
            le vend à <?php echo $donnees['prix']; ?> euros. <br>
            Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y 
            jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum. <br>
            <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php 
            echo $donnees['nom'];?> : <em><?php echo $donnees['commentaires']; ?> </em>
        </p>
    <?php
}

$reponse->closeCursor();

?>
