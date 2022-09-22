<?php
include_once'conexion3.php';


$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$direccion= $_POST["direccion"];
$contacto = $_POST["contacto"];
$correo = $_POST["correo"];
$capacidad = $_POST["capacidad"];
$perfil = $_POST["perfil"];


$insertar = "INSERT INTO albergues(nombre, telefono, direccion, contacto,correo,capacidad,perfil)
VALUES ('$nombre', '$telefono', '$direccion','$contacto','$correo','$capacidad','$perfil')";

$resultado = mysqli_query($conexion,$insertar);

