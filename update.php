<?php
    include("db.php");
    $con = conectar();

    $cod_estudiante = $_POST["cod_estudiante"];
    $ci = $_POST["ci"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];

    $sql = "UPDATE alumno SET ci = '$ci', nombres = '$nombres', apellidos = '$apellidos' WHERE cod_estudiante = '$cod_estudiante'";
    $query = mysqli_query($con, $sql);

        if($query){
            header("Location: alumno.php");
        }
?>