<?php
session_start();
if (!isset($_SESSION["nom"])) {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="en">

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
        <a href="../../eines/einesLlibres.php"><input type="button" Value="<-- Enrere" /></a><br><br>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom']; ?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo $_SESSION['rol'] ?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id(); ?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../../inicio/logout.php'" />
    </div>
    <h4>Cerca Llibre</h4>
    <div>
        <form action="veureLlibre.php" method="POST">
            Introdueix l'ISBN del llibre a cercar:
            <input type="text" name="ISBN">
            <input type="submit" value="Cercar"></input><br><br><br>
        </form>
        
    </div>

    <?php

    $fitxer_llibre = "../../datos/llibres";
    $fp = fopen($fitxer_llibre, "r") or die("No s'ha pogut validar l'usuari");

    if ($fp) {
        $mida_fitxer = filesize($fitxer_llibre);
        $llibres = explode(PHP_EOL, fread($fp, $mida_fitxer));

        foreach ($llibres as $llibre) {
            $logpwd = explode(":", $llibre);

            if ($logpwd[2] == $_POST['ISBN']) { //CONDICION CON LA COOKIE COGER EL ID DEL USUARIO;

                $zero = $logpwd[0];
                $u = $logpwd[1];
                $dos = $logpwd[2];
                $tres = $logpwd[3];
                $quatre = $logpwd[4];
                $cinc = $logpwd[5];
                echo "<table>";
                echo "<tr>";
                echo "<td>Títol del llibre:</td>";
                echo "<td> $zero </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Autor del llibre:</td>";
                echo "<td> $u </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>ISBN del llibre:</td>";
                echo "<td> $dos </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Estat del llibre:</td>";
                echo "<td> $tres </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Inici del prèstec:</td>";
                echo "<td> $quatre </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>ID de l'usuari amb el llibre prestat: </td>";
                echo "<td> $cinc </td>";
                echo "</tr>";
                echo "</table>";

                fclose($fitxer);
                break;
            }
        }
    }
    ?>
    <table>
        <br><br><hr style="float:left; width:78.5%"><br>
        <h4>Tots els llibres</h4>
        <tr>
            <td><b>Títol</td>
            <td><b>Autor</td>
            <td><b>ISBN</td>
            <td><b>Llibre en Préstec</td>
            <td><b>Inici del préstec</td>
            <td><b>Codi Usuari amb el préstec</td>

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
    <br><br><hr><br>
    <form action="crearPDFLibros.php"> 
        <input type="submit" value="Cercar">
    </form>
    
</body>

</html>