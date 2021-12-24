<?php
session_start();
if (!isset($_SESSION["nom"])) {
    header("Location: ../../../inicio/aviso.php");}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzacio Dades Usuari</title>
    <link rel="stylesheet" type="text/css" href="css/estilsVisualitzacioLlibres.php">
</head>

<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div>
        <a href="../../roles/usuari.php"><input type="button" Value="<-- Enrere" /></a><br><br>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom']; ?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo $_SESSION['rol'] ?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id(); ?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../../inicio/logout.php'" />
    </div>
    </div>
    <table>
        <tr>
            <td>Títol</td>
            <td>Autor</td>
            <td>ISBN</td>
            <td>Llibre en Préstec</td>
            <td>Inici del préstec</td>
            <td>Codi Usuari amb el préstec</td>

        </tr>
        <?php

        $fitxer_llibres = "../../datos/llibres";
        $fp = fopen($fitxer_llibres, "r") or die("No s'han pogut validar els llibres");

        if ($fp) {
            $mida_fitxer = filesize($fitxer_llibres);
            $llibres = explode(PHP_EOL, fread($fp, $mida_fitxer));

            $dompdf_temp = "";

            foreach ($llibres as $llibre) {
                $logpwd = explode(":", $llibre);

                echo "";

                echo "<tr>";
                echo "<td> $logpwd[0] </td>";
                echo "<td> $logpwd[1] </td>";
                echo "<td> $logpwd[2] </td>";
                echo "<td> $logpwd[3] </td>";
                echo "<td> $logpwd[4] </td>";
                echo "<td> $logpwd[5] </td>";
                echo "</tr>";
            }
        }

        fclose($fitxer);

        ?>
    </table>
</body>

</html>