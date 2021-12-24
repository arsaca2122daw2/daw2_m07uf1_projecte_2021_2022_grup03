<?php
session_start();
if (!isset($_SESSION["nom"])) {
    header("Location: ../../../inicio/aviso.php");}

include "../../POO/Llibre.php";

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
    <div>
        <h4>Modificar Llibre</h4>
        <form action="modificarLlibre.php" method="POST">
            Introdueixi l' ISBN del llibre a modificar: <input type="text" name="ISBN"><br><br><br><br>
            Prestat/No Prestat: <input type="text" name="prestat"><br><br>
            Inici del prèstec: <input type="text" name="inici"><br><br>
            ID usuari del prèstec: <input type="text" name="ID"><br><br>
            <input type="hidden" name="_method" value="PUT" />
            <input type="submit" value="Modificar"></input><br>
        </form>

        <?php
        if ($_POST["_method"] == "PUT") {

            $fitxer_llibre = "../../datos/llibres";
            $fp = fopen($fitxer_llibre, "a+") or die("No s'ha pogut validar el llibre");

            if ($fp) {
                $mida_fitxer = filesize($fitxer_llibre);
                $llibres = explode(PHP_EOL, fread($fp, $mida_fitxer));

                foreach ($llibres as $index => $llibre) {
                    $logpwd = explode(":", $llibre);

                    if ($logpwd[2] == $_POST['ISBN']) {

                        $nouLlibre = new Llibre($logpwd[0], $logpwd[1], $logpwd[2], $_POST['prestat'], $_POST['inici'], $_POST['ID']);
                        
                        $copia = file($fitxer_llibre);
                        unset($copia[$index]);
                        file_put_contents($fitxer_llibre, implode("", $copia));

                        fwrite($fp, "" . PHP_EOL);
                        fwrite($fp, $nouLlibre->gettitol());
                        fwrite($fp, ":");
                        fwrite($fp, $nouLlibre->getautor());
                        fwrite($fp, ":");
                        fwrite($fp, $nouLlibre->getisbn());
                        fwrite($fp, ":");
                        fwrite($fp, $nouLlibre->getllibrePrestec());
                        if($_POST['prestat'] == "Si" || $_POST['prestat'] == "si"){
                            fwrite($fp, ":");
                            fwrite($fp, $nouLlibre->getdataIniciPrestec());
                            fwrite($fp, ":");
                            fwrite($fp, $nouLlibre->getcodiUsuPrestec());
                        }else if($_POST['prestat'] == "No" || $_POST['prestat'] == "no"){
                            fwrite($fp, ":");
                            fwrite($fp, "0");
                            fwrite($fp, ":");
                            fwrite($fp, "0");
                        }
                        fclose($fp);

                    }
                }
            }
        }
        ?>
    </div>
</body>

</html>