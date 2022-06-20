<?php
    include('db.php');
    $con=conectar();

    
    $ci = $_POST["ci"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];

    $sql = "INSERT INTO alumno (ci, nombres, apellidos) VALUES('$ci', '$nombres', '$apellidos')";
    $query = mysqli_query($con, $sql);

    if($query){
        header("Location: alumno.php");
    }else{

    }
?>
