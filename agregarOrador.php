<?php
include("conexion.php");

$conexion = conexion();

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$temario = $_POST["temario"];

$sql = "INSERT INTO oradores VALUES(NULL, '$nombre', '$apellido', '$email', '$temario')";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: index.php#conviertete");
}

?>