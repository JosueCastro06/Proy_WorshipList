<?php

session_start();

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
    <link rel="stylesheet" href="css/normalize.css">
    <title>WorshipList</title>
</head>

<body>
    
    <?php

        $paginaSinSesion = array(
            "src/lista/crearLista.php",
            "src/cancion/crearCancion.php",
            "src/nosotros.php"
        );

        if (in_array($pid, $paginaSinSesion)){
            include $pid;
        } else {
            include 'src/inicio.php';
        }


    ?>


</body>

</html>

