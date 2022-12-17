<?php
    include("conexion.php");

    $conexion = conexion();

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $temario = $_POST["temario"];

    $sql = "UPDATE oradores SET nombre='$nombre', apellido='$apellido', 
        email='$email', temario='$temario' WHERE id=$id";
    $query = mysqli_query($conexion, $sql);

    if($query){
        Header("Location: listaInscripcion.php");
    }

?>




