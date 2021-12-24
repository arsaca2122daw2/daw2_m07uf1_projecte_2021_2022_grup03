<?php
session_start();
if (!isset($_SESSION["nom"])) {
    header("Location: ../../../inicio/aviso.php");}
$fitxer_usuarisdades = "../../datos/usuarisdades";
$fp = fopen($fitxer_usuarisdades, "r") or die("No s'ha pogut validar l'usuari");

if ($fp) {
    $mida_fitxer = filesize($fitxer_usuarisdades);
    $usuaris = explode(PHP_EOL, fread($fp, $mida_fitxer));

    foreach ($usuaris as $usuari) {
        $logpwd = explode(":", $usuari);

        if ($logpwd[4] == "arnau") { //CONDICION CON LA COOKIE COGER EL ID DEL USUARIO;

            $zero = $logpwd[0];
            $u = $logpwd[1];
            $dos = $logpwd[2];
            $tres = $logpwd[3];
            $quatre = $logpwd[4];
            $cinc = $logpwd[5];
            $sis = $logpwd[6];
            $set = $logpwd[7];
            $vuit = $logpwd[8];

            fclose($fitxer);
            break;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzacio Dades Usuari</title>
    <link rel="stylesheet" type="text/css" href="css/estilsVisualitzacioDadesUsuari.php">
</head>

<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div>
        <a href="../../roles/usuari.php"><input type="button" Value="<-- Enrere" /></a><br><br>
    </div>
    <div class="dadesUsuari1">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom']; ?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo $_SESSION['rol'] ?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id(); ?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../../inicio/logout.php'" />
    </div>
    <table>
        <tr>
            <td>Nom i Cognoms:</td>
            <td> <?php echo $zero ?> </td>
        </tr>
        <tr>
            <td>Adreça física:</td>
            <td> <?php echo $u ?> </td>
        </tr>
        <tr>
            <td>Correu Electrònic:</td>
            <td> <?php echo $dos ?> </td>
        </tr>
        <tr>
            <td>Tèlefon:</td>
            <td> <?php echo $tres ?> </td>
        </tr>
        <tr>
            <td>ID:</td>
            <td> <?php echo $quatre ?> </td>
        </tr>
        <tr>
            <td>Contrassenya:</td>
            <td> <?php echo $cinc ?> </td>
        </tr>
        <tr>
            <td>Llibre en prèstec:</td>
            <td> <?php echo $sis ?> </td>
        </tr>
        <tr>
            <td>Inici del prèstec:</td>
            <td> <?php echo $set ?> </td>
        </tr>
        <tr>
            <td>ISBN del llibre en prèstec:</td>
            <td> <?php echo $vuit ?> </td>
        </tr>
    </table>

    <?php

    ?>
</body>

</html>