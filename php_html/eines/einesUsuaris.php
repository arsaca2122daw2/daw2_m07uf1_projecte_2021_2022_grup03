<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotecari</title>
    <link rel="stylesheet" type="text/css" href="css/estilsEines.php"> 

</head>
<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        
        <hr>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom'];?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo "Bibliotecari Cap"?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id();?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../inicio/logout.php'"/>
    </div>
    <div>
        <a href="../metodos/usuari/crearUsuari.php">Crear Usuari</a><br><br>
        <a href="../metodos/usuari/veureUsuari.php">Visualitzar Usuari</a><br><br>
        <a href="../metodos/usuari/modificarUsuari.php">Modificar Usuari</a><br><br>
        <a href="../metodos/usuari/eliminarUsuari.php">Eliminació Usuari</a>
    </div>
</body>
</html>