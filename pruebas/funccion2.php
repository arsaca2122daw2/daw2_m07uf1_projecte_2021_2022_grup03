<?php 

$fp = fopen("llibre.txt", "a") or die("No s'ha pogut validar el llibre");

fwrite ($fp, "".PHP_EOL);
fwrite ($fp , $_POST["Titol"]);
fwrite ($fp , ":");
fwrite ($fp , $_POST["Autor"]);
fwrite ($fp , ":");
fwrite ($fp , $_POST["ISBN"]);
fwrite ($fp , ":");
fwrite ($fp , "0");
fwrite ($fp , ":");
fwrite ($fp , "0");
fwrite ($fp , ":");
fwrite ($fp , "0");
fclose ($fp);


?>