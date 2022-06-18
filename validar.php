<?php
    include('db.php');
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);
    //se recive los datos ingresados y almacenamos en una variable local
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    //inicializamos la funcion session
    session_start();
    $_SESSION['usuario'] = $usuario;
    
    

    $consulta = "SELECT * FROM usuario WHERE usuario = '$usuario' and contraseña = '$contraseña'";
    //validando la consulta de variable conexion y consulta
    $resultado = mysqli_query($con, $consulta);
    //almacenando el resultado con el metodo rows
    $filas = mysqli_num_rows($resultado);

    //preguntamos con un if si la variable filas sus datos son correctos
    if($filas){
        //si esta todo bien redirecciona a home
        header("location:alumno.php");
    }else{
        //si no esta correcto nos redirecciona a index con un mensaje
        ?>
        <?php
        include("index.html");
        ?>
        <h1 class = "bad">Error en la Autenticacacion</h1>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($con);
