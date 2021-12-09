<?php
    $nombre = $_POST['usuari'];
    $password =$_POST['contrassenya'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuari</title>
    <link rel="stylesheet" type="text/css" href="../css/estilsUsuari.php">

</head>
<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $nombre;?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo $password;?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo $password;?>">
        <input id="tancaSessio" type="submit" value="Log Out"></input>
    </div>
    <div class="links">
        <a href="visualitzacioLlibres.html">Veure tots el Llibres</a><br><br>
        <a href="visualitzacioDadesUsuari.html">Veure les teves dades personals</a>
    </div>
</body>
</html>

