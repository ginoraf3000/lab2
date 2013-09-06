<!DOCTYPE html>
<html>
	<head>
		<title>Hello World</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<h1>Ceci est un titre Mother ****** Héhéhéhéhéhéhéhééhéhééhéhéhééhé</h1>
		<h2>Mon nom est Jean-Raphaël</2>
		<h3>Lien vers mes autres pages!!! :</h3>
		<a href="lab1b.php">Lab1b</a>
		<br>
		<a href="lab1c.php">Lab1c</a
		<br>
		<a href="visiteurs.php">LAB2</a>
		<p>
            Votre addresse ip se trouve à être
		    <?php echo $_SERVER['REMOTE_ADDR'];
            IE()?>
        </p>
        <?php
        function IE()
        {
            if(strpos($_SERVER["HTTP_USER_AGENT"],'MSIE') !== FALSE)
            {
                echo '<script>alert("Attention, c est est un message d intérêt public. Vous utilisé actuellement une version de navigateur web inconue de nos système. Pour le bien de tous, veuillez quittez cette page au plus cr*** et utilisez un navigateur web qui a de l allure!!!!!!")</script>';
            }
        }
        ?>

	</body>
</html>
