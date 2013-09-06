<?php
$expire = 365*24*3600;
$nom = $_POST["nom"];
$sexe = $_POST["sexe"];
setcookie("Biscuit",$nom,$sexe,time()+$expire);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Titre</title>
</head>

<body>

    <p>Bite</p>
</body>
</html>