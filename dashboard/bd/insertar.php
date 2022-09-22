<?php
include_once'conexion2.php';


$nombre = $_POST["nombre"];
$pais = $_POST["pais"];
$edad= $_POST["edad"];
$sexo = $_POST["sexo"];
$fecha_nac = $_POST["fecha_nac"];
$edo_civil = $_POST["edo_civil"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$altura = $_POST["altura"];
$peso = $_POST["peso"];
$color = $_POST["color"];
$correo = $_POST["correo"];
$foto = $_POST["foto"];
$ocupacion = $_POST["ocupacion"];

$insertar = "INSERT INTO personas(nombre, pais, edad, sexo,fecha_nac,edo_civil,telefono,direccion,altura,peso,color,correo,foto,ocupacion)
VALUES ('$nombre', '$pais', '$edad','$sexo','$fecha_nac','$edo_civil','$telefono','$direccion','$altura','$peso','$color','$correo','$foto','$ocupacion')";

$resultado = mysqli_query($conexion,$insertar);

if($resultado){
    echo "<script>alert('Se ha registrado');
    windows.location='../dashboard/guardarmig.php'</script>";
}else{
    echo "<script>alert ('No se puedo conectar');
   windows.history.go(-1);</script>";
}