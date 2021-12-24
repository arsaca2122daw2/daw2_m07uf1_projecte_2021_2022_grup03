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
    <title>Bibliotecari</title>
    <link rel="stylesheet" type="text/css" href="css/estilsBibliotecari.php">

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
        <a href="../eines/einesLlibres.php">Eines de Llibres</a><br><br>
        <a href="../eines/einesUsuaris.php">Eines d' Usuaris</a><br><br>
        <a href="../metodos/bibliotecari/visualitzacioDadesBibliotecari.php">Veure les teves dades personals</a>
    </div>
</body>

</html>