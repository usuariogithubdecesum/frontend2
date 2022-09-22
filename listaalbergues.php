<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Principal</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


</head>

<body>


    <main class="container">


        <?php
        include_once './bd/conexion.php';
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();

        $consulta = "SELECT id, nombre, telefono, direccion,contacto,correo,capacidad,perfil FROM albergues";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
        ?>


        <nav class="navbar navbar-light navbar-expand-lg fixed-top">
            
               
            <a class="navbar-brand" href="#"></a>
                <img /assetsimg src="Logo Sam.png" style="width: 70px;">

                
                <div class="navbar-brand mr-auto" id="navcol-5">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">Principal</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="servicios.html">Servicios</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">Acerca de Nosotros</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contactanos.html">Contactenos</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Inicio de Sesion</a></li>

                    </ul>
                </div>
           
        </nav>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="container">
            <h1>Lista de Albergues</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="tablaPersonas" class="table table-hover" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Contacto</th>
                                    <th>Correo</th>
                                    <th>Capacidad</th>
                                    <th>Perfil</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $dat) {
                                ?>
                                    <tr>
                                        <td><?php echo $dat['id'] ?></td>
                                        <td><?php echo $dat['nombre'] ?></td>
                                        <td><?php echo $dat['telefono'] ?></td>
                                        <td><?php echo $dat['direccion'] ?></td>
                                        <td><?php echo $dat['contacto'] ?></td>
                                        <td><?php echo $dat['correo'] ?></td>
                                        <td><?php echo $dat['capacidad'] ?></td>
                                        <td><?php echo $dat['perfil'] ?></td>
                                        <td></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>






    </main>
</body>

</html>