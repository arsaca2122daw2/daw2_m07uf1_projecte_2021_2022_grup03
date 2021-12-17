<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzacio Dades Usuari</title>
    <link rel="stylesheet" type="text/css" href="/css/estilsVisualitzacioDadesUsuari.css"> 
</head>
<body>
    <div>
        <h1 style="text-align: center;">Biblioteca Terra Alta</h1>
        <hr>
    </div>
    <div class="dadesUsuari1">
        <h4>Usuari: </h4><h4 id="UsuariObert"></h4>
        <h4>Vosté és: </h4><h4 id="funcio"></h4>
        <p id="codiUsuari"></p>
        <h4>Codi Sessió: </h4><h4> </h4>
        <input id="tancaSessio" type="submit" value="Log Out"></input>
    </div>
    <div class="dadesUsuari2">
        <table>
            <tr>
                <td>Nom i Cognoms:</td>
                <td> <?php echo "" ?> </td>
            </tr>
            <tr>
                <td>Adreça física:</td>
                <td> <?php echo "" ?> </td>
            </tr>
            <tr>
                <td>Correu Electrònic:</td>
                <td> <?php echo "" ?> </td>
            </tr>
            <tr>
                <td>Tèlefon:</td>
                <td> <?php echo "" ?> </td>
            </tr>
            <tr>
                <td>ID:ID:</td>
                <td> <?php echo "" ?> </td>
            </tr>
            <tr>
                <td>Contrassenya:</td>
                <td> <?php echo "" ?> </td>
            </tr>
            <tr>
                <td>Número seguretat social:</td>
                <td> <?php echo "" ?> </td>
            </tr>
            <tr>
                <td>Inici del treball:</td>
                <td> <?php echo "" ?> </td>
            </tr>
            <tr>
                <td>Salari:</td>
                <td> <?php echo "" ?> </td>
            </tr>
            <tr>
                <td>Bibliotecari cap?:</td>
                <td> <?php echo "" ?> </td>
            </tr>
        </table>
    </div>
</body>
</html>