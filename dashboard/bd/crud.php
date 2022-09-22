<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();



// Recepción de los datos enviados mediante POST desde el JS   



$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$pais = (isset($_POST['pais'])) ? $_POST['pais'] : '';
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : '';
$fecha_nac = (isset($_POST['fecha_nac'])) ? $_POST['fecha_nac'] : '';
$edo_civil = (isset($_POST['edo_civil'])) ? $_POST['edo_civil'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$altura = (isset($_POST['altura'])) ? $_POST['altura'] : '';
$peso = (isset($_POST['peso'])) ? $_POST['peso'] : '';
$color = (isset($_POST['color'])) ? $_POST['color'] : '';
$foto = (isset($_POST['foto'])) ? $_POST['foto'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO personas (nombre, pais, edad, sexo,fecha_nac,edo_civil,telefono,direccion,altura,peso,color,foto) VALUES('$nombre', '$pais', '$edad','$sexo','$fecha_nac''$edo_civil','$telefono','$direccion','$altura','$peso','$color') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, nombre, pais, edad, sexo,fecha_nac,edo_civil,telefono,direccion,altura,peso,color,foto FROM personas ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE personas SET nombre='$nombre', pais='$pais', edad='$edad', sexo='$sexo', fecha_nac='$fecha_nac', edo_civil='$edo_civil', telefono='$telefono', direccion='$direccion', altura='$altura',peso='$peso', color='$color', foto='$foto' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, nombre, pais, edad, sexo,fecha_nac,edo_civil,telefono,direccion,altura,peso,color,foto FROM personas WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM personas WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
