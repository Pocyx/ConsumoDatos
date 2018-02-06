<?php
require_once("conexion.php");
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Página principal</title>
        <link rel="stylesheet" type="text/css" href="./css/estilos.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="./js/scripts.js"></script>

    </head>

    <body onload="titulo()" class="table-dark">
        <div class="cabeza">
            <h3>Consumo de Datos</h3>
        </div>
        <div class="contenedor">
            <div class="container">
                <div id="contenedor" class="login-container">
                    <div id="output"></div>
                    <div class="grafico"></div>
                    <div class="form-box">
                    <img src="./css/grafico.png" height="82" width="82"><br><br>
                        <form id = "formLogin" action="sesionUsuario.php" method="GET">
                            <div id="centro">
                                Usuario<input class="form-control input-sm" type="text" name="usuario"><br>
                                Contraseña<input class="form-control input-sm" type="password" name="contrasena"><br><br>
                                <button class="btn btn-outline-success">Iniciar</button>
                            </div>
                        </form><br>
                        <div id="controles">
                            <a id ="registro" href="#">Registrarse</a>
                            <div id="capaoculta">
                    <div id="contenedor">
                        <form enctype="multipart/form-data"   action="registro.php" method="GET">
                            <div id="centro">
                                Elija un usuario: <input type="text" name="usuario"><br><br>
                                Elija una contraseña: <input type="password" name="contrasena"><br><br>              
                                <button class="btn btn-outline-success">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                        </div>
                    </div>
                </div>
                <br>


            </div>
        </div>
    </body>
</html>
