<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base = "WorshipList";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $base);

    if(!$enlace){
        echo "Error en la conexion";
    }
?>

<form action="index.php?pid=<?php echo base64_encode("src/cancion/crearCancion.php")?>" method="POST" enctype="multipart/form-data">

    <input type="text" name="nombre" class="nombre-input" placeholder="Nombre de la canción" required>
    <input type="text" name="autor" class="autor-input" placeholder="autor de la cancion" required>

    <br>

    <select class="datalist-tipo" name="tipo" required>

        <option value="Alabanza">Alabanza</option>
        <option value="Adoración">Adoracion</option>

    </select>

    <br>

    <textarea rows="20" name="letra" class="textarea-input"></textarea>

    <input type="submit" name="insertar">

</form>

<?php

if(isset($_POST["insertar"])) {
    $nombre = $_POST["nombre"];
    $autor = $_POST["autor"];
    $letra = $_POST["letra"];
    $tipo = $_POST["tipo"];

    $insertarDatos = "INSERT INTO Cancion (nombre, autor, letra, tipo) VALUES ('$nombre', '$autor', '$letra', '$tipo')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if(!$ejecutarInsertar){
        echo "error al insertar";
    }

}

?>