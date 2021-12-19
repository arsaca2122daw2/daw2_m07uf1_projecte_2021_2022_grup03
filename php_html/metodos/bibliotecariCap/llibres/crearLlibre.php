<?php
session_start();
?>

<!DOCTYPE html>
<html lang="cat">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzacio Llibres</title>
    <link rel="stylesheet" type="text/css" href="css/estilsVeureLlibre.php">

</head>

<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div>
        <a href="../../roles/bibliotecari.php"><input type="button" Value="<-- Enrere" /></a><br><br>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom']; ?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo "Bibliotecari" ?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id(); ?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../../inicio/logout.php'" />
    </div>
    <div>
        <form action="crearLlibre.php" method="POST">
            Títol: <input type="text" name="titol"><br><br>
            Autor: <input type="text" name="autor"><br><br>
            ISBN: <input type="text" name="ISBN"><br><br>
            Prestat/No Prestat: <input type="text" name="prestat"><br><br>
            Inici del prèstec: <input type="text" name="inici"><br><br>
            ID usuari del prèstec: <input type="text" name="ID"><br><br>
            <input type="submit" value="Crear"></input><br><br><br>
        </form>
        <?php

            include "../../POO/Llibre.php";

            $nouLlibre = new Llibre($_POST['titol'],$_POST['autor'],$_POST['ISBN'],$_POST['prestat'],$_POST['inici'],$_POST['ID']);
            
            echo $nouLlibre;
            $fitxer_usuaris = "../../datos/llibres";
            $fp = fopen($fitxer_usuaris, "a") or die("<br>No s'ha pogut validar l'usuari");

            fwrite($fp, "" . PHP_EOL);
            fwrite($fp, $nouLlibre->gettitol());
            fwrite($fp, ":");
            fwrite($fp, $nouLlibre->getautor());
            fwrite($fp, ":");
            fwrite($fp, $nouLlibre->getisbn());
            fwrite($fp, ":");
            fwrite($fp, $nouLlibre->getllibrePrestec());
            fwrite($fp, ":");
            fwrite($fp, $nouLlibre->getdataIniciPrestec());
            fwrite($fp, ":");
            fwrite($fp, $nouLlibre->getcodiUsuPrestec());
            fclose($fp);
        ?>
    </div>
</body>

</html>