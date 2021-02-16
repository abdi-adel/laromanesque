<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperation justificatif inscription</title>
</head>
<body>
    <p>
        <?php 
            include('connexion.php'); 
        ?>
        <?php 
            if (isset($_FILES['justificatif_identite']) AND $_FILES['justificatif_identite']['error'] == 0){
                if ($_FILES['justificatif_identite']['size'] <= 1000000) {
                    $infosfichier = pathinfo($_FILES['justificatif_identite']['name']);
                    $extension_upload = $infosfichier['extension'];
                    $extensions_autorisees = array('JPG','jpg','JPEG','jpeg','gif','png','PNG','pdf','PDF');
                    if (in_array($extension_upload,$extensions_autorisees)) {
                        move_uploaded_file($_FILES['justificatif_identite']['tmp_name'], 'uploads/' . basename($_FILES['justificatif_identite']['name']));
                        echo "L'envoi a bien été effectué! Veuillez retourner à la page <a href='connexion.php'> précédente </a>";
                    } else {echo 'extension non autorisée';}
                } else {echo "Fichier trop volumineux, le stockage ce n'est pas votre mère qui le paie";}
            } else {echo 'Fichier non envoyé ou comporte des erreurs, renouveler votre envoie';}
        ?>
    </p>
</body>
</html>