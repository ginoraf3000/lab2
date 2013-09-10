<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    </head>
    <body>
    <table border="3">
        <?php

        echo '<img src="http://tinyurl.com/ktougt4" />
        <br>
        <a href="http://tinyurl.com/ktougt4"> Source</a>';
        $pays = fopen("pays.txt", "r");
        $i = 1;
        while(!feof($pays))
        {
            $tableau[$i] = fgets($pays);
            echo "<tr><td>".$tableau[$i]."</td></tr>";
            $i++;
        }
        fclose($pays);
        ?>
    </table>
    </body>
</html>


