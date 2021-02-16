<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>La romanesque</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <a href="deconnexion_membre.php"> Se déconnecter </a>
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
      <div>
        <article>
          <h1>
            <img
              src="img/ico_epingle.png"
              alt="présentation"
              class="ico_categorie"
            />
            La Maison Romanesque ouvre ses portes
          </h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo,
            magni alias? Rem, ipsum! Quo molestiae magnam non, optio incidunt
            nemo explicabo ullam excepturi quibusdam dicta nesciunt placeat,
            laudantium neque natus! Soluta at dignissimos, nihil ex explicabo
            voluptate culpa eveniet labore repudiandae quas quasi expedita
            asperiores ad vero, obcaecati ab iure!
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores
            quis deleniti adipisci est neque quae numquam? Voluptates velit
            temporibus delectus. Necessitatibus rerum, quidem officia dolorem
            temporibus quam in illum dolores quod aspernatur sint neque deleniti
            eveniet possimus porro iusto omnis quaerat ipsam illo vitae sunt
            eius. Assumenda dolorem eveniet excepturi!
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio
            aliquam minus, facere nostrum magni, quisquam obcaecati qui voluptas
            non quasi ratione provident explicabo adipisci fuga possimus
            reiciendis similique ullam eos corrupti debitis. Omnis expedita
            adipisci repudiandae, iusto in quo quaerat harum dolorum,
            dignissimos inventore laborum molestiae non accusamus quidem nulla?
          </p>
        </article>
        <aside>
          <h1>
            A PROPOS DE LA MAISON ROMANESQUE
          </h1>
          <img src="img/bulle.png" alt="fleche_bulle" id="fleche_bulle" />
          <p id="photo_presentation">
            <img src="#" alt="photo_presentation" />
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
