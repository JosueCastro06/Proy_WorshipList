
<div id="LogoWL-container">
    <a href="/">
        <img id= "LogoWL" src="img/LogoWL.svg" alt="LogoWL">
    </a>
</div>

    <div class="botones_tabla-container" style="margin: 5% 20%; display: flex;">

        <div class="botones-container" style="display: block; align-self: center;">
            <div>
                <a class="btn btn__1" href="index.php?pid=<?php echo base64_encode("presentacion/lista/CrearLista.php")?>" style="text-decoration: none;">Crear Lista</a>
            </div>
            <div>
                <a class="btn btn__1" href="index.php?pid=<?php echo base64_encode("presentacion/cancion/CrearCancion.php")?>" style="text-decoration: none;">Crear Canción</a>
            </div>
        </div>

        <div class="table-container" style="display: block;">

            <table class="table">

                <tr>
                    <td class="table-title">Canción 1 <br><p style="font-size: 15px; margin: 0;">autor</p></td>
                    <td class="ir-cancion"><a href="#"><img src="img/next.svg" style="width: 20px;"></a></td>
                </tr>
                <tr>
                    <td class="table-title">Canción 2</td>
                    <td class="ir-cancion"><a href="#"><img src="img/next.svg" style="width: 20px;"></a></td>
                </tr>
                <tr>
                    <td class="table-title">Canción 3</td>
                    <td class="ir-cancion"><a href="#" ><img src="img/next.svg" style="width: 20px;"></img></a></td>
                </tr>

            </table>

        </div>

    </div>