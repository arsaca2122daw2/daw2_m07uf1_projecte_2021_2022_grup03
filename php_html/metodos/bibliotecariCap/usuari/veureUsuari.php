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
    <title>Visualitzacio Usuari</title>
    <link rel="stylesheet" type="text/css" href="css/estilsVeureUsuari.php">

</head>

<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div>
        <a href="../../../eines/einesUsuarisBC.php"><input type="button" Value="<-- Enrere" /></a><br><br>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom']; ?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo $_SESSION['rol'] ?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id(); ?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../../../inicio/logout.php'" />
    </div>
    <h4>Cerca Usuari</h4>
    <div>
        <form action="veureUsuari.php" method="POST">
            Introdueix el codi d'usuari a Cercar:
            <input type="text" name="codiUsuari">
            <input type="submit" value="Cercar"></input><br><br><br>
        </form>
    </div>
    <?php

    $fitxer_usuari = "../../../datos/usuarisdades";
    $fp = fopen($fitxer_usuari, "r") or die("No s'ha pogut validar l'usuari");
    
    if ($fp) {
        
        $mida_fitxer = filesize($fitxer_usuari);
        $usuaris = explode(PHP_EOL, fread($fp, $mida_fitxer));

        foreach ($usuaris as $usuari) {
            $logpwd = explode(":", $usuari);
            

            if (($logpwd[5] == $_POST['codiUsuari']) && ($logpwd[9] == 'usuari')) { //CONDICION CON LA COOKIE COGER EL ID DEL USUARIO;
                echo"hola";
                $zero = $logpwd[0];
                $u = $logpwd[1];
                $dos = $logpwd[2];
                $tres = $logpwd[3];
                $quatre = $logpwd[4];
                $cinc = $logpwd[5];
                $sis = $logpwd[6];
                $set = $logpwd[7];
                $vuit = $logpwd[8];

                echo "<table>";
                echo "<tr>";
                echo "<td>Nom:</td>";
                echo "<td> $zero </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Cognom:</td>";
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
                echo "<td>Llibre en prèstec:</td>";
                echo "<td> $sis </td>";
                echo "<tr>";
                echo "<tr>";
                echo "<td>Inici del prèstec:</td>";
                echo "<td> $set </td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>ISBN del llibre en prèstec:</td>";
                echo "<td> $vuit </td>";
                echo "</tr>";
                echo "</table>";

                fclose($fitxer);
                break;
            } else {
            }
        }
    }
    ?>
        
        <?php

        $fitxer_usuaris = "../../../datos/usuarisdades";
        $fp = fopen($fitxer_usuaris, "r") or die("No s'han pogut validar els llibres");

        $printdeechos = "";

        if ($fp) {
            $mida_fitxer = filesize($fitxer_usuaris);
            $usuaris = explode(PHP_EOL, fread($fp, $mida_fitxer));


            $printdeechos = "<table>
                <br><br><hr style=\"float:left; width:78.5%\"><br>
                <h4>Tots els Usuaris</h4>
                <tr>
                    <td><b>Nom</td>
                    <td><b>Cognom</td>
                    <td><b>Adreça electrònica</td>
                    <td><b>Telefon</td>
                    <td><b>Contrasenya</td>
                    <td><b>ID usuari</td>
                    <td><b>Llibre prestat</td>
                    <td><b>Data Inici Prèstec</td>
                    <td><b>ISBN del llibre prestat</td>

                </tr>";

            foreach ($usuaris as $usuari) {
                $logpwd = explode(":", $usuari);
                
                if($logpwd[9] == "usuari"){
                    

                    $printdeechos .= "<tr>";
                    $printdeechos .= "<td> $logpwd[0] </td>";
                    $printdeechos .= "<td> $logpwd[1] </td>";
                    $printdeechos .= "<td> $logpwd[2] </td>";
                    $printdeechos .= "<td> $logpwd[3] </td>";
                    $printdeechos .= "<td> $logpwd[4] </td>";
                    $printdeechos .= "<td> $logpwd[5] </td>";
                    $printdeechos .= "<td> $logpwd[6] </td>";
                    $printdeechos .= "<td> $logpwd[7] </td>";
                    $printdeechos .= "<td> $logpwd[8] </td>";
                    $printdeechos .= "</tr>";
                }
            }
        }
        
        fclose($fitxer);
        echo $printdeechos;

        $_SESSION["PDF"] = $printdeechos;

        ?>


    </table>
    <br><br><hr><br>
    <a target="_blank" href= "/dompdf/html2pdf.php"><button  >Crear PDF</button></a>
</body>

</html>