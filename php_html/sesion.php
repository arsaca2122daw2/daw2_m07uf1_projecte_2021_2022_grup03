<?php

$usuari1 = "usuari";
$usuari2 = "bibliotecari";
$usuari3 = "bibliotecariCap";
$url1 = "usuari.php";
$url2 = "bibliotecari.php";
$url3 = "bibliotecariCap.php";
$url4 = "aviso.html";

$fitxer_usuaris="usuaris";
$fp=fopen($fitxer_usuaris,"r") or die ("No s'ha pogut validar l'usuari");

if ($fp) {
    $mida_fitxer=filesize($fitxer_usuaris);	
    $usuaris = explode(PHP_EOL, fread($fp,$mida_fitxer));
}
   foreach ($usuaris as $usuari) {
    $logpwd = explode(":",$usuari);

    if (($_POST['usuari'] == $logpwd[0]) && ($_POST['contrassenya'] == $logpwd[1]) && ($usuari1 == $logpwd[2])){
        fclose($fitxer);
        session_unset();
        session_start();
        $_SSESSION['nom'] = $_POST['usuari'];
        $_SSESSION['rol'] = "Usuari";
        $_SSESSION['codiSesion'] = $nombre + $role + session_id();
        
        header('Location: '.$url1);
        break;
    }

    if (($_POST['usuari'] == $logpwd[0]) && ($_POST['contrassenya'] == $logpwd[1]) && ($usuari2 == $logpwd[2])){
        fclose($fitxer);
        session_unset();
        session_start();
        $_SSESSION['nom'] = $_POST['usuari'];
        $_SSESSION['rol'] = "Bibliotecari";
        $_SSESSION['codiSesion'] = $nombre + $role + session_id();
        header('Location: '.$url2);
        break;

    }

    if (($_POST['usuari'] == $logpwd[0]) && ($_POST['contrassenya'] == $logpwd[1]) && ($usuari3 == $logpwd[2])){
        fclose($fitxer);
        session_unset();
        session_start();
        $_SSESSION['nom'] = $_POST['usuari'];
        $_SSESSION['rol'] = "Bibliotecari Cap";
        $_SSESSION['codiSesion'] = $nombre + $role + session_id();
        header('Location: '.$url3);
        break;
    }

    else{
        fclose($fitxer);
        header('Location: '.$url4);
    }

}
