<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Titre</title>
</head>

<body>
    <?
    $expire = 365*24*3600;
    $nom = $_REQUEST["nom"];
    $sexe = $_REQUEST["sexe"];
    setcookie("Biscuit",$nom,$sexe,time()+$expire);
    ?>
    <p>Bite</p>
</body>
</html>