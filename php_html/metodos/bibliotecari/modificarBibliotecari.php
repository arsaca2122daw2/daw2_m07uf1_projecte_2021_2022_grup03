<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
session_start();
if (!isset($_SESSION["nom"])) {
    header("Location: ../../inicio/aviso.php");}
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
        <a href="../../eines/einesBibliotecaris.php"><input type="button" Value="<-- Enrere" /></a><br><br>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom']; ?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo $_SESSION['rol'] ?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id(); ?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../../inicio/logout.php'" />
    </div>
    <div>
        <form action="modificarBibliotecari.php" method="POST">
            Introdueixi el codi del bibliotecari a modificar:<input type="text" name="ISBN"><br><br><br><br>
            Salari: <input type="text" name="Salari"><br><br>
            Cap: <input type="text" name="Cap"><br><br>
            <input type="hidden" name="_method" value="PUT" />
            <input type="submit" value="Modificar"></input><br><br><br>
        </form>
        <?php

        if ($_POST["_method"] == "PUT") {

            $fitxer_usuari = "../../datos/usuarisdades";
            $fp = fopen($fitxer_usuari, "a+") or die("No s'ha pogut validar l'usuari");

            if ($fp) {

                $mida_fitxer = filesize($fitxer_usuari);
                $usuaris = explode(PHP_EOL, fread($fp, $mida_fitxer));

                foreach ($usuaris as $index => $usuari) {
                    $logpwd = explode(":", $usuari);

                    if($logpwd[5] == $_POST['ISBN']){

                        if($_POST['Cap'] == "si" || $_POST['Cap'] == "Si"){

                            $nouUsuari = new BibliotecariCap($logpwd[0], $logpwd[1], $logpwd[2], $logpwd[3], $logpwd[4], $logpwd[5],$logpwd[6], $logpwd[7], $_POST['Salari'], $_POST['Cap']);

                            $copia = file($fitxer_usuari);
                            unset($copia[$index]);
                            file_put_contents($fitxer_usuari, implode("", $copia));
                            
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
                            fclose($fp);
                        }else {

                            $nouUsuari = new Bibliotecari($logpwd[0], $logpwd[1], $logpwd[2], $logpwd[3], $logpwd[4], $logpwd[5],$logpwd[6], $logpwd[7], $_POST['Salari'], $_POST['Cap']);

                            $copia = file($fitxer_usuari);
                            unset($copia[$index]);
                            file_put_contents($fitxer_usuari, implode("", $copia));

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
                            fclose($fp);
                        }
                    }
                }
            }
        }

    ?>
    </div>
</body>

</html>