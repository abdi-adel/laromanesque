<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>notre page pour poster dans le minichat</title>
    </head>
    <body>
        <form action="minichat_table.php" method="post">
            <p>
                <label for="pseudonyme"> Ton pseudo </label>
                <input type="text" name="pseudo" class="pseudo" id="pseudo"> <br>
                <label for="message_personnel"> Ton message </label>
                <input type="textarea" name="message_personnel" class="message" id="message_personnel"><br>
                <input type="submit" name="Envoyer" value="Envoyer mon message" id="bouton_envoi_message">
            </p>
        </form>
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
        $reponse = $bdd -> query('select * from minichat order by id desc limit 10') or die(print_r($bdd->errorInfo()));

        while ($donnees = $reponse -> fetch())
        {
        ?>
            <p>
                <strong> <?php echo $donnees['pseudo']; ?> </strong> : <?php echo $donnees['message']; ?> <em> <?php echo $donnees['date_creation'] ?> </em> <br/>
            </p>
        <?php
        }

        $reponse->closeCursor();

        ?>
    
    </body>
</html>