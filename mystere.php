<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Mystère</title>
</head>

<body>
    <?php


    if(isset($_SESSION["pseudo"]))
    {
        echo '<a href="login.php" alt="Cliquez pour déconnecter..." onclick="';
        session_destroy();
        echo '"><img src="wireless.jpg" ></a>';
    }
    else
    {
        echo '<p style="color:#ff0000">Impossible d’accéder à cette page, vous devez être logué!</p>';
        header("Refresh: 5;login.php");
    }
    ?>
</body>
</html>