<?php
    header('Content-Type: text/html; charset=utf-8');
    $pays = fopen("pays.txt", "r");

    $i = 1;
    while(!feof($pays))
    {
        $tableau[$i] = fgets($pays);
        echo $tableau[$i]."<br>";
        $i++;
    }
    fclose($pays);
?>
