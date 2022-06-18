<?php
include("db.php");
$con=conectar();

$sql="SELECT *  FROM alumno";
$query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel = "stylesheet" href = "css/login.css">
    <link rel = "stylesheet" href = "css/cabecera.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    <h1>Estoy registrandome</h1>
    <form action="submit.php" method = "post">
        <h1 class = "animate__animated animate__backInRight">Registro Usuario</h1>
        <p>Usuario <input type="text" placeholder = "Ingrese su Nombre" name = "usuario"></p>
        <p>Contraseña <input type="password" placeholder = "Ingrese su Contraseña" name = "contraseña"></p>
        <input type="submit" value = "Registrarme">
    </form>
</body>
</html>