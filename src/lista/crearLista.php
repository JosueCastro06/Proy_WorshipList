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
    $sqlCantC = "SELECT COUNT(id) FROM Cancion";

    $consultaCanciones = mysqli_query($enlace, $sqlCanciones);
    $consultaCantCan = mysqli_query($enlace, $sqlCantC);

    $totalPaginas = intval($cantidadCanciones/$cantidad);

    if($cantidadCanciones%$cantidad != 0){
        $totalPaginas++;
    }

    $ultimaPagina = ($totalPaginas == $pagina);

    if(!$consultaCanciones){
        echo "Error consulta";
    }
?>

<div class="lista-container">
        
    <h2>Lista</h2>

        <div class="tabla-lista-container">
            <table class="table">

                <tr>
                    <td class="table-title">Canción 1<br></td>
                    <td class="borrar-cancion"><a href="#"><svg id="Icon_ionic-ios-close-circle-outline" data-name="Icon ionic-ios-close-circle-outline" xmlns="http://www.w3.org/2000/svg" width="39.359" height="39.359" viewBox="0 0 39.359 39.359">
                        <path id="Trazado_64" data-name="Trazado 64" d="M27.074,24.937l-4.986-4.986,4.986-4.986a1.512,1.512,0,1,0-2.138-2.138l-4.986,4.986-4.986-4.986a1.512,1.512,0,0,0-2.138,2.138l4.986,4.986-4.986,4.986a1.462,1.462,0,0,0,0,2.138,1.5,1.5,0,0,0,2.138,0l4.986-4.986,4.986,4.986a1.519,1.519,0,0,0,2.138,0A1.5,1.5,0,0,0,27.074,24.937Z" transform="translate(-0.27 -0.272)" fill="#c26969"/>
                            <path id="Trazado_65" data-name="Trazado 65" d="M23.055,6.024A17.024,17.024,0,1,1,11.01,11.01,16.918,16.918,0,0,1,23.055,6.024m0-2.649a19.68,19.68,0,1,0,19.68,19.68,19.677,19.677,0,0,0-19.68-19.68Z" transform="translate(-3.375 -3.375)" fill="#c26969"/>
                    </svg></a></td>
                </tr>

                </table>
            </div>            

        </div>

        <br>
        <br>

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
                        
                    for ($i=0; $i < count($row); $i++) { 

                        $numAl = rand(1, 10);
                        if ($numAl == $id){ 
        ?>
                            <tr>
                                <td class=table-title><?php echo $nombre; ?><br></td>
                                    <td class="agregar-cancion">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="39.861" height="39.861" viewBox="0 0 39.861 39.861">
                                                <path id="Trazado_60" data-name="Trazado 60" d="M18,7.5V44.361" transform="translate(0.43 -7.5)" fill="none" stroke="#b7b7b7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                <path id="Trazado_61" data-name="Trazado 61" d="M7.5,18H44.361" transform="translate(-7.5 0.43)" fill="none" stroke="#b7b7b7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                            </svg>
                                        </a>
                                </td>
                            </tr>  

                    <?php }
                    }
                } ?>
                        
        <?php } else { 

            while($row = $consultaCanciones -> fetch_array()){
                    $id = $row["id"];
                    $nombre = $row["nombre"]; 
        ?>
                    <tr>
                        <td class=table-title><?php echo $nombre; ?><br></td>
                            <td class="agregar-cancion">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="39.861" height="39.861" viewBox="0 0 39.861 39.861">
                                        <path id="Trazado_60" data-name="Trazado 60" d="M18,7.5V44.361" transform="translate(0.43 -7.5)" fill="none" stroke="#b7b7b7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                        <path id="Trazado_61" data-name="Trazado 61" d="M7.5,18H44.361" transform="translate(-7.5 0.43)" fill="none" stroke="#b7b7b7" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                    </svg>
                                </a>
                        </td>
                    </tr>    
        <?php }?>

        <?php } ?>
                
    </table>

</div>

<br>

<button>crear</button>
