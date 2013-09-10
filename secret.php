<?php
$expire = 10;
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
    <style>p {color:#ff0000;}</style>
</head>

<body>
    <?php
    if($_COOKIE["prenom"] and $_COOKIE["sexe"])
    {
        echo '<img src="bienvenue-1.jpg">';

    }
    else
    {
        echo '<p>Impossible d’accéder à cette page, vous devez être logué!</p>';
        header("Refresh: 5;login.php");
    }

    ?>
    <button type="button" title="retour" onclick="self.location.href='login.php'">Retour</button>
</body>
</html>