<?php

session_start();
require_once 'logica/Cancion.php';
require_once 'logica/Lista.php';

$pid = '';
if(isset($_GET['pid'])) {
    $pid = base64_decode($_GET['pid']);
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>WorshipList</title>
</head>

<body>
    
    <?php

        $paginaSinSesion = array(
            "presentacion/lista/CrearLista.php",
            "presentacion/cancion/CrearCancion.php"
        );

        if (in_array($pid, $paginaSinSesion)){
            include $pid;
        }else {
            include 'presentacion/inicio.php';
        }


    ?>


</body>

</html>

