<?php header('Content-Type: text/html; charset=utf-8');
echo '<h1>Bonjour le monde! Héhéhé</h1>';
echo 'Vous avez demandé cette page le ';
echo date(" d/m/Y à H\hi");
echo '</br>';
echo 'Dernière modification de la page le ';
echo date( "d/m/Y à H\hi", filemtime("lab1b.php") );
$lien = fopen("addresse.txt", "r");
$i = 1;
while(!feof($lien))
  {
  echo "</br><a href=". fgets($lien). ">Site mystérieux numéro $i</a>" ;
  $i++;
  }
fclose($lien);
