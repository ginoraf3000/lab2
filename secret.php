<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ceci est un secret ;)</title>
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
</head>

<body>
    <?php

        if($_COOKIE["prenom"] and $_COOKIE["sexe"])
        {
            $_SESSION["pseudo"] = $_POST["pseudo"];
            echo '<img src="bienvenue-1.jpg" ><br>';
            echo '<a href="mystere.php">Page Mystère...</a><br>';

        }
        else
        {
            $expire = 60;
            $nom = $_POST["nom"];
            $sexe = $_POST["sexe"];
            setcookie("prenom",$nom,time()+$expire);
            setcookie("sexe",$sexe,time()+$expire);
            echo '<p style="color:#ff0000">Impossible d’accéder à cette page, vous devez être logué!</p>';
            header("Refresh: 5;login.php");
        }

    ?>
    <button type="button" title="retour" onclick="self.location.href='login.php'">Retour</button>
</body>
</html>