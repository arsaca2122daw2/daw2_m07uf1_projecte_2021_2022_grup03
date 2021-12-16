<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotecari</title>
    <link rel="stylesheet" type="text/css" href="/css/estilsBibliotecari.php"> 

</head>
<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        
        <hr>
    </div>
    <div class="dadesUsuari">
        <h4>Usuari: </h4><h4 id="UsuariObert"></h4>
        <h4>Vosté és: </h4><h4 id="funcio"></h4>
        <p id="codiUsuari"></p>
        <h4>Codi Sessió: </h4><h4> </h4>
        <input id="tancaSessio" type="submit" value="Log Out"></input>
    </div>
    <div>
        <a href="einesLlibres.html">Eines de Llibres</a><br><br>
        <a href="einesUsuaris.html">Eines d' Usuaris</a><br><br>
        <a href="visualitzacioDadesBibliotecari.html">Veure les teves dades personals</a>
    </div>
</body>
</html>