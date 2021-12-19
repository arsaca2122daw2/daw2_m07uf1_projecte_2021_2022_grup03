<?php
session_start();
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
        <form action="eliminarLlibre.php" method="POST">
            Introdueixi l' ISBN del llibre a eliminar: <input type="text" name="ISBN"><br><br><br><br>
            <input type="hidden" name="_method" value="DELETE"/>
            <input type="submit" value="Crear"></input><br><br>
        </form>
        <?php
            if ($_POST["_method"]=="DELETE"){
                echo"hola";    
            }
        ?>
    </div>
</body>

</html>