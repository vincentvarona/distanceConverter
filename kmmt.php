<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CURSO PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <div class="cuadro">
      <h1>Pasaje de KILOMETROS a METROS</h1>
      <h3>Por favor, escriba la distancia a convertir:</h3>
      <form method="post" action="kmmt.php">
        <input class="txt" type="text" name="km" placeholder="Distancia en KM"/>
        <input class="text" type="submit" />
      </form>
<?php

function conversion()
{
    if (is_numeric($_POST["km"]) == true) {
        $calculo = $_POST["km"] * 1000;
        echo "<br> " .
            $_POST["km"] .
            " kilometros son: <br> " .
            $calculo .
            " metro(s)";
    }
}

if (isset($_POST["km"])) {
    conversion();
} else {
    echo "";
}

?>	
		</div>
	</body>
</html>