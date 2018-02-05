
<?php
session_start();


if (isset($_GET['usuario'])) {
    $user2 = $_GET['usuario'];
    $contrasena2 = $_GET['contrasena'];
    comprobar($user2, $contrasena2);
    $_SESSION['usuario'] = $_GET['usuario'];
    $usuario = $_SESSION['usuario'];
}

function comprobar($u, $c) {
    require_once("conexion.php");

    $usr = $con->real_escape_string($u);
    $pass = $con->real_escape_string($c);

    $sql = "SELECT * FROM usuarios WHERE name='$usr' ;";

    $reg = $con->query($sql) or die("**ERROR: $con->error.<br/>");
    $contar = $reg->num_rows;

    if ($contar == 0) {
        if (empty($_GET['usuario']) || empty($_GET['contrasena'])) {
            echo "<span style='font-weight:bold;color:red;'>Campos vacios.</span>";
        } else {
            $datos = rand(0, 100);
            $total = 100;
            $insert_value = 'INSERT INTO `consumo`.`usuarios` 
            (`email` ,`password` , `name`, `datosConsumidos`, `datosRestantes`, `cargo`) 
            VALUES 
            ("","' . $_GET['contrasena'] . '", "' . $_GET['usuario'] . '","'.$datos.'","'.($total-$datos).'",2)';
            $con->query($insert_value) or die("**ERROR: $con->error.<br/>");
            header("Location:inicio.php");
        }
    } else {
        echo "<span style='font-weight:bold;color:red;'>Usuario ocupado.</span>";
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registrate!</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="contenedor">
            <form enctype="multipart/form-data"   action="registro.php" method="GET">
                <div id="centro">
                    Usuario<input type="text" name="usuario">
                    Contraseña<input type="password" name="contrasena">
                    <button class="botones">Registrar</button>
                </div>
            </form>
        </div>
        <button class="botones"  onclick = "location = 'index.php'">inicio</button>
    </body>
</html>