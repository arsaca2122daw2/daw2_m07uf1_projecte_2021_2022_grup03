<?php
    //Doucmento que inicia la sesion (login)
    session_start();

    $numRandom = rand(1, 100000); //Numero random entre 1 y 100000
    $nombre = $_GET("noseke mas del post");//Creo que era get, pones lo que pillas con el post en el login (formulario).
    $role = $_GET("noseke mas del post");

    $_SSESSION['Nombre de la session'] = array(); //Dentro del nombre de la sesion para que sea unico podriamos poner nombre + 
                                                  //role + numRandom para que sea unico
    $_SSESSION['Nombre de la session']['variableCualkiera'] = $nombre + $role + $numRandom;
    //Donde quiere que pongamos la sesion (cuadrado de la derecha arriba)
    echo $_SSESSION['Nombre de la sesion']['variableCualkiera'];//Este meterlo dentro del div correspondiente


?>



<?php
    //En los otros documentos que bayan ligados de la sesion

    if($_SSESSION['Nombre de la session']['variableCualkiera']){
        //todo el codigo.
    }

    else{
        //Mensaje de que la sesion se ha expirado.
    }
?>



<?php

//Cuando se haya acabado de usar la sesion (logout)

session_destroy();

//Esto destruye la sesion y no permite usar las otras paginas como el usuario que se ha entrado

?>