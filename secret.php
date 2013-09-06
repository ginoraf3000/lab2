<?php
$expire = 365*24*3600;
$nom = $_POST["nom"];
$sexe = $_POST["sexe"];
setcookie("prenom",$nom,time()+$expire);
setcookie("sexe",$sexe,time()+$expire);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ceci est un secret ;)</title>
</head>

<body>
    <img src="bienvenue-1.jpg">
</body>
</html>