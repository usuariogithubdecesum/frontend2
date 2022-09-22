<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="bootstrap/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="bootstrap/smoothproducts.css">

    
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Contactenos</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">Principal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="servicios.html">Servicios</a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">Acerca de Nosotros</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="contactanos.html">Contactenos</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="login.php">Inicio de Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>


<?php

include("conexioncontac.php");
$nom = $_POST['Nombre'];
$nac = $_POST['Nacionalidad'];
$tel = $_POST['Telefono'];
$mensaje = $_POST['Mensaje'];


$sql = "INSERT INTO $tbl_name (Nombre,Nacionalidad,Telefono,Mensaje)
 VALUES ('$nom','$nac','$tel','$mensaje')";

if(mysqli_query($conexion, $sql)){
} else { 
echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

//Cerrar Base de Datos

mysqli_close($conexion); 
if($conexion){
    ?>
    <br>
    <br>
    <br>
    <br>
    <center>
    <h1>!Se ha enviado Correctamente!</h1>
    <h2>Enseguida te contactaremos</h2>
   
    <?php
}else{
    ?>
    <h2>!Error de Conexion!</h2>
    <?php
}


?>
</center>

</body>
</html>