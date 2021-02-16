<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout nouveau membre</title>
</head>
<body>
    <p>
        <?php 

            // Hachage du mot de passe et récupération des variables $_POST
            $pseudo = strip_tags($_POST["pseudo"]);
            $email = strip_tags($_POST["email"]);
            $password = strip_tags($_POST['password']);
            $verification_password = strip_tags($_POST['verification_password']);

            //vérification de champs non vides

            if (isset($email) and isset($pseudo) and isset($password) AND isset($verification_password))
            {

                //vérification que les deux mots de passe rentrés pas l'utilisateur sont identiques
                if ($password==$verification_password) 
                {
                    $pass_hache = password_hash($password, PASSWORD_DEFAULT);

                    //connexion à la bdd

                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=laromanesque;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                    }
                    catch (Exception $e)
                    {
                    die('Erreur : ' . $e->getMessage());
                    }

                    // Vérification de la validité des informations

                        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email) AND 
                        preg_match("#^[a-z0-9._-]{3,}$#i", $pseudo))
                        {
                            
                            // Insertion
                            $req = $bdd->prepare('INSERT INTO membres(pseudo, mot_de_passe, email) VALUES(:pseudo, :mot_de_passe, :email)');
                            $req->execute(array(
                                'pseudo' => $pseudo,
                                'mot_de_passe' => $pass_hache,
                                'email' => $email));
                        } else {
                            echo 'Le pseudo choisi ' .$pseudo . ' ou l\'adresse ' . $_POST['email'] . ' n\'est ou ne sont pas valide(s), recommencez !';
                        }
                } else {
                    echo 'les deux mots de passes doivent être identiques!'; 
                }
            } else {
                echo 'Remplissez les champs vides!';
            }  
        ?>           
    </p>

</body>
</html>

