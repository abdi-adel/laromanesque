<?php
$monFichier = fopen('compteur.txt','r+');
$ligne=fgets($monFichier);

$pages_vues = fgets($monFichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monFichier, 0); // On remet le curseur au début du fichier
fputs($monFichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fclose($monFichier);

echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>La romanesque</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div id="bloc_page">
      <header>
        <div id="titre_principal">
          <div id="logo">
            <img src="img/logo_la_romanesque.jpeg" alt="La Romanesque" />
            <h1>La Romanesque</h1>
          </div>
          <h2>La Maison Romanesque est aussi votre maison</h2>
        </div>

        <?php include("menu.php"); ?>
      </header>

      <div id="banniere_image">
        <div id="banniere_description">
          <a href="achats.php" class="bouton_rouge"
            >Acheter <img src="img/fleche_blanche.png" alt=""
          /></a>
        </div>
      </div>

      <section>
        <article>
          <div class="contact">
            <div class="banniere_connexion">
              <p>Déjà inscrit</p>
              <form method="POST" action="connexion_membre.php">
                <div class="bloc_connexion_membre">
                  <p>
                    <label for="identifiant">Identifiant</label>
                    <input
                      value=""
                      type="text"
                      name="pseudo"
                      placeholder=""
                      id="identifiant"
                      size="40"
                      maxlength="30"
                      autofocus
                    />
                  </p>
                  <p>
                    <label for="mot_de_passe">Mot de passe</label>
                    <input
                      value=""
                      type="password"
                      name="password"
                      placeholder=""
                      id="mot_de_passe"
                      size="40"
                      maxlength="30"
                    />
                  </p>
                  <p>
                    <input type="checkbox" name="connexion_automatique" id="connexion_automatiques">
                    <label for="connexion_automatique"> Rester connecté </label>
                  </p>
                  <p>
                    <input
                      type="submit"
                      value="Connexion"
                      class="bouton_connexion"
                    />
                  </p> 
                </div>
              </form>
            </div>
            <div class="banniere_inscription">
              <p>Vous n'êtes pas encore inscrit</p>
              <form method="post" action="ajout_nouveau_membre.php">
                
                <!-- 
                <p> 
                  <label for="nom">Nom</label>
                  <input
                    value=""
                    placeholder=""
                    type="text"
                    name="nom"
                    id="nom"
                    size="30"
                    maxlength="20"
                    required
                  />
                </p>
                <p>
                  <label for="prenom">Prenom</label>
                  <input
                    value=""
                    placeholder=""
                    type="text"
                    name="prenom"
                    id="prenom"
                    size="30"
                    maxlength="20"
                    required
                  />
                </p> -->
                <p>
                  <label for="pseudo">Identifiant</label>
                  <input
                    type="text"
                    placeholder=""
                    name="pseudo"
                    value=""
                    id="pseudo"
                    size="30"
                    maxlength="20"
                    required
                  />
                </p>
                <p>
                  <label for="mot_de_passe_inscription">Mot de passe</label>
                  <input
                    type="password"
                    name="password"
                    placeholder=""
                    value=""
                    id="mot_de_passe_inscription"
                    size="40"
                    maxlength="30"
                    required
                  />
                <p>
                  <label for="verification_mot_de_passe_inscription">Retapez votre mot de passe</label>
                  <input
                      type="password"
                      name="verification_password"
                      placeholder=""
                      value=""
                      id="verification_mot_de_passe_inscription"
                      size="40"
                      maxlength="30"
                      required
                  />
                <p>
                  <label for="email">Adresse mail</label>
                  <input
                    type="email"
                    name="email"
                    placeholder=""
                    value=""
                    id="email"
                    size="100"
                    maxlength="100"
                    required
                  />
                </p>

                <!--
                <p>
                  <label for="tel">Numéro tel</label>
                  <input
                    type="tel"
                    name="telephone"
                    placeholder=""
                    value=""
                    id="tel"
                    size="20"
                    maxlength="30"
                  />
                </p>
                -->
                <p>
                  <input
                    type="submit"
                    value="S'inscrire"
                    class="bouton_inscription"
                  />
                </p>
              </form>
                <form method="post" action="recuperation_justificatif_inscription.php" enctype="multipart/form-data"> <br />
                  <p class="envoie_formulaire"> 
                    Envoie du justificatif d'identité : <br>
                    <input type="file" name="justificatif_identite" id="id_justificatif_identite"> <br>
                    <input type="submit" value="Envoyer mon fichier">
                  </p>
                </form>
                <form method='post' action='mysql_connexion.php'>
                  <input type="submit" value='récupéreration mysql'>

                </form>
                <a href="minichat.php">accédez à notre chat</a>
            </div>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. ipsam illo
            vitae sunt eius. Assumenda dolorem eveniet excepturi!
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          </p>
        </article>
        <aside>
          <h1>
            A PROPOS DE LA MAISON ROMANESQUE
          </h1>
          <img src="img/bulle.png" alt="fleche_bulle" id="fleche_bulle" />
          <p id="photo_presentation">
            <img
              src="img/logo_la_romanesque.jpeg"
              alt="photo_presentation"
              id="logo_propos"
            />
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
            accusamus.
          </p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore
            quaerat tempora amet ea laboriosam saepe aliquid autem quam
            praesentium illum.
          </p>
          <p>
            <img src="img/facebook.png" alt="facebook" />
            <img src="img/twitter.png" alt="twitter" />
            <img src="img/vimeo.png" alt="vimeo" />
            <img src="img/flickr.png" alt="flickr" />
            <img src="img/rss.png" alt="rss" />
          </p>
        </aside>
      </section>

      <footer>
        <div id="tweet">
          <h1>NOS TWEETS</h1>
          <p>Quel plaisir ce gâteau !</p>
          <p>le 25 août 2020 à 10h00</p>
        </div>

        <div id="nos_realisations">
          <h1>
            NOS REALISATIONS
          </h1>
          <p>
            <img src="#" alt="gâteau1" />
            <img src="#" alt="gâteau2" />
            <img src="#" alt="gâteau3" />
            <img src="#" alt="gâteau4" />
          </p>
        </div>

        <div id="ils_parlent_de_nous">
          <h1>ILS PARLENT DE NOUS</h1>
          <div id="listes">
            <ul>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
            </ul>
            <ul>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li><a href="#">7</a></li>
              <li><a href="#">8</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
