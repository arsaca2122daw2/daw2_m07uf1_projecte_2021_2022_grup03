<?php
session_start();
if (!isset($_SESSION["nom"])) {
    header("Location: ../inicio/aviso.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotecari Cap</title>
    <link rel="stylesheet" type="text/css" href="css/estilsBibliotecariCap.php">

</head>

<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom']; ?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo $_SESSION['rol'] ?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id(); ?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../inicio/logout.php'" />
    </div>
    <div class="links">
        <a href="../eines/einesLlibresBC.php">Eines de Llibres</a><br><br>
        <a href="../eines/einesUsuarisBC.php">Eines d' Usuaris</a><br><br>
        <a href="../eines/einesBibliotecaris.php">Eines de Bibliotecaris</a><br><br>
        <a href="../metodos/bibliotecariCap/visualitzacioDadesBibliotecariCap.php">Veure les teves dades personals</a>
    </div>
</body>

</html>