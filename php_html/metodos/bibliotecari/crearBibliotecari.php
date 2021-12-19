<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
session_start();
include_once "../../POO/Bibliotecari.php";
include_once "../../POO/BibliotecariCap.php";
?>

<!DOCTYPE html>
<html lang="cat">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzacio Llibres</title>
    <link rel="stylesheet" type="text/css" href="css/estilsVeureBibliotecari.php">
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
        <form action="crearBibliotecari.php" method="POST">
            Nom: <input type="text" name="nom"><br><br>
            Cognoms: <input type="text" name="cognom"><br><br>
            Adreça electrònica: <input type="text" name="adrecaElec"><br><br>
            Telèfon: <input type="text" name="tel"><br><br>
            Contrassenya: <input type="text" name="contrasenya"><br><br>
            ID Usuari: <input type="text" name="ID"><br><br>
            Número Seguretat Social: <input type="text" name="numSS"><br><br>
            Data inici del treball: <input type="text" name="dataIniciTreball"><br><br>
            Salari: <input type="text" name="Salari"><br><br>
            Cap: <input type="text" name="Cap"><br><br>
            <input type="submit" value="Crear"></input><br><br><br>
        </form>
        <?php

        $password = $_POST['contrasenya'];

        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            echo 'La contrasenya no es bastant segura, recorda que has de tenir mínim 1 majśucula, 1 minúscula, 1 número i 1 caràcter especial.';
        } else {

            if ($_POST['Cap'] == "si" || $_POST['Cap'] == "Si") {

                $nouBilbiotecariCap = new BibliotecariCap($_POST['nom'], $_POST['cognom'], $_POST['adrecaElec'], $_POST['tel'], $_POST['contrasenya'], $_POST['ID'], $_POST['numSS'], $_POST['dataIniciTreball'], $_POST['Salari'], $_POST['Cap']);

                echo $nouBilbiotecariCap;
                $fitxer_usuaris = "../../datos/usuarisdades";
                $fp = fopen($fitxer_usuaris, "a") or die("<br>No s'ha pogut crear l'usuari");

                fwrite($fp, "" . PHP_EOL);
                fwrite($fp, $nouUsuari->getnom());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getcognom());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getadrecaElec());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->gettel());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getcontrasenya());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getidBiblotecari());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getnumSS());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getdataIniciTreball());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getsalari());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getcap());
                fwrite($fp, ":");
                fwrite($fp, "bibliotecariCap");
                fwrite($fp, ":");
                fwrite($fp, "bibliotecari");
                fwrite($fp, ":");
            }else {

                $nouBilbiotecari = new Bibliotecari($_POST['nom'], $_POST['cognom'], $_POST['adrecaElec'], $_POST['tel'], $_POST['contrasenya'], $_POST['ID'], $_POST['numSS'], $_POST['dataIniciTreball'], $_POST['Salari'], $_POST['Cap']);

                echo $nouBilbiotecari;
                $fitxer_usuaris = "../../datos/usuarisdades";
                $fp = fopen($fitxer_usuaris, "a") or die("<br>No s'ha pogut crear l'usuari");

                fwrite($fp, "" . PHP_EOL);
                fwrite($fp, $nouUsuari->getnom());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getcognom());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getadrecaElec());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->gettel());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getcontrasenya());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getidBiblotecari());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getnumSS());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getdataIniciTreball());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getsalari());
                fwrite($fp, ":");
                fwrite($fp, $nouUsuari->getcap());
                fwrite($fp, ":");
                fwrite($fp, "bibliotecari");
                fwrite($fp, ":");
                fwrite($fp, "bibliotecari");
                fwrite($fp, ":");
            }
        }


        ?>
    </div>
</body>

</html>