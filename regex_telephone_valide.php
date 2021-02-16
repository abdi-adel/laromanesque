<p>
                  <?php
                  if (isset($_POST['telephone']))
                  {
                      $_POST['telephone'] = strip_tags($_POST['telephone']); // On rend inoffensives les balises HTML que le visiteur a pu entrer

                      if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['telephone']))
                      {
                          echo 'Le ' . $_POST['telephone'] . ' est un numéro <strong>valide</strong> !';
                      }
                      else
                      {
                          echo 'Le ' . $_POST['telephone'] . ' n\'est pas valide, recommencez !';
                      }
                  }
                  ?>
                </p>  <br>