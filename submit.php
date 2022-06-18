<?php session_start();
?>
<?php
    include('db.php');
    $con=conectar();

    $id = $_POST["id"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    $sql = "INSERT INTO usuario VALUES('$id', '$usuario', '$contraseña')";
    $query = mysqli_query($con, $sql);

    if($query){
        header("Location: index.html");
    }else{

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>estoy registrado</h1>
</body>
</html>