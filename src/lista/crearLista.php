<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $base = "WorshipList";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $base);

    if(!$enlace){
        echo "Error en la conexion";
    }

    $cantidad = 5;
    if(isset($_GET["cantidad"])){
        $cantidad = $_GET["cantidad"];
    }

    $pagina = 1;
    if(isset($_GET["pagina"])){
        $pagina = $_GET["pagina"];
    }

    $sqlCanciones = "SELECT id, nombre FROM Cancion LIMIT ". (($pagina-1) * $cantidad). ", " . $cantidad;

    $consultaCanciones = mysqli_query($enlace, $sqlCanciones);

    if(!$consultaCanciones){
        echo "Error consulta";
    }


?>

<div class="crearlista-container">

    <form action="/action_page.php">
        <input type="text" placeholder="Buscar canción" name="search">
        <button type="submit"><i class="fa fa-search">Buscar</i></button>
    </form>

    <form action="index.php?pid=<?php echo base64_encode("src/lista/crearLista.php")?>" method="POST">
        <button name="Random">Random</button>                            
    </form>

    <table class="table">
                   
        <?php

            if (isset($_POST["Random"])) { 
                            
                while($row = $consultaCanciones -> fetch_array()){
                    $id = $row["id"];
                    $nombre = $row["nombre"]; 
                        

                    $numeros = array();
                    $j = 0;
                        
                    while ($j<count($row)) {
                        $numAl = rand(1,10);
                        if (!in_array($numAl,$numeros)) {
                            array_push($numeros,$numAl);
                            $j++;
                        }
                    }

                    for($i=0; $i < count($numeros); $i++) {

                        if ($numeros[$i] == $id){
        ?>                  
                            <form action="index.php?pid=<?php echo base64_encode("src/lista/crearLista.php")?>" method="POST">
                                <tr>
                                    <td class=table-title><?php echo $nombre; ?><br></td>
                                        <td class="agregar-cancion">
                                                <input type="checkbox" name="ids[ ]" value="<?php echo $numeros[$i] ?>">                                         
                                        </td>
                                </tr>
                                
                        <?php }
                        }
                    }?>       
                                <input type="submit" name="agregar">
                            </form>
        <?php } ?>
                
    </table>

</div>

<!-- <script>
    function seleccionar(tr,value){
        $(function(){
            console.log("entra funcion");
            if($("#chk"+value).attr("checked") == "checked"){
                $("#chk"+value).removeAttr("checked");
                $(tr).css("background-color", "#FFFFFF");
            }else {
                $("#chk"+value).attr("checked","true");
                $("#chk"+value).prop("checked","true");
                $(tr).css("background.color", "#BEDAE8");
            }
        })
    }
</script> -->

<br>
<br>

<div class="lista-container">
        
    <h2>Lista</h2>

        <div class="tabla-lista-container">
            <table class="table">

            <?php  
                
                if(isset($_POST["agregar"])){
                    // echo "entro a agregar". "<br>";
                    if(!empty($_POST["ids"])){
                        // echo "entro a ids". "<br>";
                        foreach($_POST["ids"] as $idCan){
                        
                            $sqlIdCan = "SELECT id, nombre FROM Cancion WHERE id =" . intval($idCan);
                            $consultaIdCan = mysqli_query($enlace, $sqlIdCan); 
                            
        
                            while($row = $consultaIdCan -> fetch_array()){
                                // echo "Entro al While". "<br>";
                                $id = $row["id"];
                                $nombre = $row["nombre"]; 
                                
            ?>                
                                    <tr>
                                        <td class="table-title"><?php echo $nombre ?><br></td>
                                        <td class="borrar-cancion"><a href="#"><svg id="Icon_ionic-ios-close-circle-outline" data-name="Icon ionic-ios-close-circle-outline" xmlns="http://www.w3.org/2000/svg" width="39.359" height="39.359" viewBox="0 0 39.359 39.359">
                                            <path id="Trazado_64" data-name="Trazado 64" d="M27.074,24.937l-4.986-4.986,4.986-4.986a1.512,1.512,0,1,0-2.138-2.138l-4.986,4.986-4.986-4.986a1.512,1.512,0,0,0-2.138,2.138l4.986,4.986-4.986,4.986a1.462,1.462,0,0,0,0,2.138,1.5,1.5,0,0,0,2.138,0l4.986-4.986,4.986,4.986a1.519,1.519,0,0,0,2.138,0A1.5,1.5,0,0,0,27.074,24.937Z" transform="translate(-0.27 -0.272)" fill="#c26969"/>
                                                <path id="Trazado_65" data-name="Trazado 65" d="M23.055,6.024A17.024,17.024,0,1,1,11.01,11.01,16.918,16.918,0,0,1,23.055,6.024m0-2.649a19.68,19.68,0,1,0,19.68,19.68,19.677,19.677,0,0,0-19.68-19.68Z" transform="translate(-3.375 -3.375)" fill="#c26969"/>
                                        </svg></a></td>
                                    </tr>                   

            <?php
                            }

                        }


                    }

                }
            ?>
                
            </table>
            <input type="submit" name="enviarLista">
        </div>            

</div>