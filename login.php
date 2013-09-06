<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
</head>

<body>
    <form method="post" action="secret.php">
        <?php
        if($_COOKIE["prenom"] && $_COOKIE["sexe"])
        {
            if($_COOKIE["sexe"] == "fem")
            {
                $genre = "Mmd.";
            }
            else
            {
                $genre = "M.";
            }
            echo "Bonjour ".$genre.$_COOKIE["prenom"];
        }
        else
        {
            echo '<p>
            Nom : <input type="text" name="nom" />
            Sexe :  <select name="sexe">
                        <option value="hom">Homme</option>
                        <option value="fem">Femme</option>
                    </select>
            <input type="submit" value="Valider" />
        </p>';
        }
        ?>
    </form>
</body>
</html>