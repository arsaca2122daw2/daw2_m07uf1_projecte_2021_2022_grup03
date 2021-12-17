<?php
    session_start();

    if(isset($_SESSION['rol'])){
        if($_SESSION['rol'] == "Usuari"){
            header('Location: usuari.php');
        } else if($_SESSION['rol'] == "Bibliotecari"){
            header('Location: bibliotecari.php');
        }else if($_SESSION['rol'] == "Bibliotecari Cap"){
            header('Location: bibliotecariCap.php');
        }else{
            session_destroy();
            header('Location: login.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuari</title>
    <link rel="stylesheet" type="text/css" href="css/estilsUsuari.php">

</head>
<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom'];?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo "Usuari"?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id();?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../inicio/logout.php'"/>
    </div>
    <div class="links">
        <a href="../metodos/llibres/visualitzacioLlibres.php">Veure tots el Llibres</a><br><br>
        <a href="../metodos/usuari/visualitzacioDadesUsuari.php">Veure les teves dades personals</a>
    </div>
</body>
</html>

