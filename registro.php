<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del cliente</title>
</head>
<body>
    <p><a href="index.html"></a>Regresar</p>
    <input type="button" value="Volver"> <br>

    <div id="mensajeregistro"></div>
    
    <?php
    $nombre = $_POST["nombre"];
    $pais = $_POST["pais"];
    $email = $_POST["email"];
    $usuario1 = $_POST["usuario1"];

    print "<p>Su usuario es <strong>$Usuario</strong>.</p>\n";
    print "\n";

    include("basededatos.php");
    $con = mysqli_connect($host, $usuario, $clave, $basededatos) or die ("No se ha podido conectar al servidor");
    if (!$con){
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $db = mysqli_select_db($con, $basededatos) or die ("Ups , ha habido un error con la base de datos");
    $consulta = "INSERT INTO usuarios (Usuario , pais , email , nombre) VALUES ('$usuario1', '$pais', '$email', '$nombre')";

    if(mysqli_query($con, $consulta)){
        echo "<p>Registro agregado.</p>";
    } else {
        echo "<p>No se agrego correctamente</p>";
        echo "error: " . $consulta . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
    ?>

</body>

</html>