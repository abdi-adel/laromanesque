<?php
$monFichier = fopen('compteur.txt','r+');

$pages_vues = fgets($monFichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 2; // On augmente de 1 ce nombre de pages vues
fseek($monFichier, 0); // On remet le curseur au début du fichier
fputs($monFichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fclose($monFichier);

echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';

?>