<?php
session_start();
if (!isset($_SESSION["nom"])) {
    header("Location: ../../../inicio/aviso.php");}
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
include_once "../../POO/Usuari.php";

?>

<!DOCTYPE html>
<html lang="cat">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzacio Llibres</title>
    <link rel="stylesheet" type="text/css" href="css/estilsVeureUsuari.php">
</head>

<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div>
        <a href="../../eines/einesUsuaris.php"><input type="button" Value="<-- Enrere" /></a><br><br>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom']; ?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo $_SESSION['rol'] ?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id(); ?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../../inicio/logout.php'" />
    </div>
    <h4>Eliminar Usuari</h4>
    <div>
        <form action="eliminarUsuari.php" method="POST">
            Introdueixi el codi de l'usuari a eliminar: <input type="text" name="ISBN"><br><br><br><br>
            <input type="hidden" name="_method" value="DELETE" />
            <input type="submit" value="Eliminar"></input><br>
        </form>
        <?php

        if ($_POST["_method"] == "DELETE") {
            
            $fitxer_usuari = "../../datos/usuarisdades";
            $fp = fopen($fitxer_usuari, "a+") or die("No s'ha pogut validar l'usuari");

            if ($fp) {
                $mida_fitxer = filesize($fitxer_usuari);
                $usuaris = explode(PHP_EOL, fread($fp, $mida_fitxer));
                
                foreach ($usuaris as $index => $usuari) {
                    $logpwd = explode(":", $usuari);
                    
                    if ($logpwd[5] == $_POST['ISBN']) {
                        
                        $nouUsuari = new Usuari($logpwd[0], $logpwd[1], $logpwd[2], $logpwd[3], $logpwd[4], $logpwd[5], $_POST['prestat'], $_POST['inici'], $_POST['ID']);
                        
                        $copia = file($fitxer_usuari);
                        unset($copia[$index]);
                        file_put_contents($fitxer_usuari, implode("", $copia));
                    }
                }
            }
        }
        ?>
    </div>
</body>

</html>