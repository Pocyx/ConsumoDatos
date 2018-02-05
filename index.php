<?php
require_once("conexion.php");
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Logueado!</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="jquery-2.1.4.min.js"></script>
        <script src="jquery-3.1.1.min.js" ></script>
        <script src="arbol.js"></script>

        <script>
            function titulo() {
                $(".cabeza").animate({opacity: 0}, 1000, 'linear');
                $(".cabeza").animate({opacity: 1}, 1000, 'linear');
                //$(".cabeza").animate({justifycontent: baseline}, 1000, 'linear');
                //$(".cabeza").animate({justifycontent: 'center'}, 1000, 'linear');
            }

            $(document).ready(function () {
                $("#capaoculta").toggle();
                $("#registro").on("click", function () {
                    $("#capaoculta").toggle();
                });
            });
        </script>
    </head>

    <body onload="titulo()" class="table-dark">
        <div class="cabeza">
            <div id="titulo"><h3>Consumo Datos</h3></div>
        </div>
        <div class="contenedor">
            <div class="container">
                <div id="contenedor" class="login-container">
                    <div id="output"></div>
                    <div class="grafico"></div>
                    <div class="form-box">
                        <form action="sesionUsuario.php" method="GET">
                            <div id="centro">
                                Usuario<input type="text" name="usuario">
                                Contraseña<input type="password" name="contrasena">
                                <button class="btn btn-outline-success">Iniciar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div id="controles">
                    <button id="registro" class="btn btn-outline-success">No tengo cuenta!</button>
                </div>

                <div id="capaoculta">
                    <div id="contenedor">
                        <form enctype="multipart/form-data"   action="registro.php" method="GET">
                            <div id="centro">
                                Usuario<input type="text" name="usuario">
                                Contraseña<input type="password" name="contrasena">                 
                                <button class="btn btn-outline-success">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
