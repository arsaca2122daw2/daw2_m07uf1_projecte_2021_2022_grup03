<?php

session_unset();
$cookie_sessio = session_get_cookie_params();
setcookie(session_name(), '', time() - 86400, $cookie_sessio['path'], $cookie_sessio['domain'], $cookie_sessio['secure'], $cookie_sessio['httponly']);
session_destroy();

header("refresh:10;url=login.php");

?>

<!DOCTYPE html>
<html lang="cat">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/estilsLogout.php">

<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div class="mainLogOut">
        <h1>Vosté a tancat sessió</h1>
        <h2>Redireccionant a l'inici, esperi...</h2>
        <br><br>
        <a href="login.php">
            <h3>Si no es redirecciona feu click aquí</h3>
        </a>
    </div>
</body>

</html>