<?php
$pays = fopen("pays.txt", "r");
$tableau = array();
$i = 1;
while(!feof($pays))
{
    $tableau[$i] = fgets($pays);
    $i++;
}
fclose($pays);
print_r($tableau);