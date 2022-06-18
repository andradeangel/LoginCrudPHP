<?php
    include('db.php');
    $con=conectar();

    $cod_estudiante = $_POST["cod_estudiante"];
    $ci = $_POST["ci"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];

    $sql = "INSERT INTO alumno VALUES('$cod_estudiante', '$ci', '$nombres', '$apellidos')";
    $query = mysqli_query($con, $sql);

    if($query){
        header("Location: alumno.php");
    }else{

    }
?>
