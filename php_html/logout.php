<?php

session_unset();
session_destroy();

header("refresh:5;url=login.php");
?>

<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="/css/estilsIndex.css"> 
<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div class="mainLogOut" >
        <h1>Vosté a tancat sessió</h1>
        <h2>Redireccionant a l'inici, esperi...</h2>
        <br><br>
        <a href="login.html"><h3>Si no es redirecciona feu click aquí</h3></a>
    </div>
</body>
</html>