<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
</head>

<body>
    <form method="post" action="secret.php">
        <?php
        if($_COOKIE["prenom"] and $_COOKIE["sexe"])
        {
            if($_COOKIE["sexe"] == "fem")
            {
                $genre = "Mmd.";
            }
            else
            {
                $genre = "M.";
            }
            echo "<p>Bonjour ".$genre." ".$_COOKIE["prenom"]."! Vous pouvez maintenant vous connectez ;)</p>";
            echo '<p> Nom d&#39;usager : <input type="text" name="pseudo" />
                Mot de passe :  <input type="password" name="pwd" />
                <input type="submit" value="Valider" />
                </p>';
        }
        else
        {
            echo '<p>Préparation de la pâte à biscuit :</p>';
            echo '<p> Nom : <input type="text" name="nom" />
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