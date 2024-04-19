<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processform</title>
</head>
<body>
    <?php
if (isset[$_POST("exampleForm")])
    {
        echo"<h1>ingevoerde gegevens</h1><br>"
        echo"<p>je hebt de volgende gegevens ingevoerd</p>"
        echo"voornaam is " $_POST[firstname] "<br>" 

    }
    else die("NIET OP DE JUISTE MANIER GESTART")
    ?>
</body>
</html>