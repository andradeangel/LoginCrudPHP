<?php
    //definimos la variable que servira para llamar la conexion
    //$conexion = mysqli_connect("localhost", "root", "", "logincrud");
    function conectar(){
        $host="localhost";
        $user="id19118635_root";
        $pass="Usr\}@-M*w0W~l[b";
    
        $bd="id19118635_logincrud";
    
        $con=mysqli_connect($host,$user,$pass);
    
        mysqli_select_db($con, $bd);
    
        return $con;
    }
?>
