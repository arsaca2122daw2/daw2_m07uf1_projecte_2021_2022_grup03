<!DOCTYPE html>
<html lang="cat">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzacio Usuari</title>
    <link rel="stylesheet" type="text/css" href="css/estilsVeureBibliotecari.php">

</head>

<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div>
        <a href="../../eines/einesBibliotecaris.php"><input  type="button" Value="<-- Enrere"/></a><br><br>
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
        <form action="veureBibliotecari.php" method="POST">
            Introdueix el codi del bibliotecari a Cercar:
            <input type="text" name="codiBiblio">
            <input type="submit" value="Cercar"></input><br><br><br>
        </form>
    </div>

    <?php

    $fitxer_usuari = "../../datos/usuarisdades";
    $fp = fopen($fitxer_usuari, "r") or die("No s'ha pogut validar el bibliotecari");

    if ($fp) {
        
        $mida_fitxer = filesize($fitxer_usuari);
        $usuaris = explode(PHP_EOL, fread($fp, $mida_fitxer));

        foreach ($usuaris as $usuari) {
            $logpwd = explode(":", $usuari);

            if (($logpwd[4] == $_POST['codiBiblio']) && ($logpwd[11] == 'bibliotecari')){
                
                $zero = $logpwd[0];
                $u = $logpwd[1];
                $dos = $logpwd[2];
                $tres = $logpwd[3];
                $quatre = $logpwd[4];
                $cinc = $logpwd[5];
                $sis = $logpwd[6];
                $set = $logpwd[7];
                $vuit = $logpwd[8];
                $nou = $logpwd[9];

                echo "<table>";
                echo "<tr>";
                echo "<td>Nom I Cognoms:</td>";
                echo "<td> $zero </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Adreça física::</td>";
                echo "<td> $u </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Correu Electrònic:</td>";
                echo "<td> $dos </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Tèlefon:</td>";
                echo "<td> $tres </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>ID:</td>";
                echo "<td> $quatre </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Contrassenya:</td>";
                echo "<td> $cinc </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Número seguretat social:</td>";
                echo "<td> $sis </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Inici del treball:</td>";
                echo "<td> $set </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Salari:</td>";
                echo "<td> $vuit </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Bibliotecari Cap:</td>";
                echo "<td> $nou </td>";
                echo "</tr>";
                echo "</table>";

                fclose($fitxer);
                break;
            }
        }
    }
    ?>
</body>

</html>