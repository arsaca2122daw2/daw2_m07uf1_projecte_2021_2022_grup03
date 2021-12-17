<?php

//require_once ('Usuari.php');
$fitxer_usuaris = "usuaris";
$fp = fopen($fitxer_usuaris, "r") or die("No s'ha pogut validar l'usuari");

if ($fp) {
    $mida_fitxer = filesize($fitxer_usuaris);
    $usuaris = explode(PHP_EOL, fread($fp, $mida_fitxer));
}
foreach ($usuaris as $usuari) {
    $logpwd = explode(":", $usuari);
}
echo ($logpwd[1]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <table>
        <tr>
            <td><?php echo ($logpwd[0]); ?></td>
            <td><?php echo ($logpwd[1]); ?></td>            
            <td><?php echo ($logpwd[2]); ?></td>
            <td><?php echo ($logpwd[3]); ?></td>        
        </tr>
    </table>

</head>

<body>


</body>

</html>