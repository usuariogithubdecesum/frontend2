<?php require_once "vistas/parte_superior.php"
?>


<!--<div class="container">
    <h1>Registros de Migrantes</h1>
    <div class="row">
        <div class="col-lg-12">
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
        </div>
    </div>




    <!--Modal para CRUD
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formPersonas">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="form-group">
                            <label for="pais" class="col-form-label">País:</label>
                            <input type="text" class="form-control" id="pais">
                        </div>
                        <div class="form-group">
                            <label for="edad" class="col-form-label">Edad:</label>
                            <input type="number" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="sexo" class="col-form-label">Sexo:</label>
                            <input type="text" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="edocivil" class="col-form-label">Estado Civil:</label>
                            <input type="text" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="fechanac" class="col-form-label">Fecha de Nacimiento:</label>
                            <input type="date" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-form-label">Corre Electronico:</label>
                            <input type="email" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="contacto" class="col-form-label">Contacto:</label>
                            <input type="text" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="direccion" class="col-form-label">Direccion:</label>
                            <input type="text" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-form-label">Altura Metros:</label>
                            <input type="number" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-form-label">Peso Kg:</label>
                            <input type="number" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="cabello" class="col-form-label">Cabello:</label>
                            <input type="text" class="form-control" id="edad">
                        </div>

                                       
                        <div class="form-group">
                            <label for="foto" class="col-form-label">Foto:</label>
                            <input type="file" class="form-control" id="foto">
                        </div>
                        
                        
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="file" id="btnGuardar" class="btn btn-dark">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>-->





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>
    <h2 class="container_tittle">Registro de Albergues</h2>
    <div class="container_add">

        <form action="./bd/insertaralbergue.php" method="post" class="container_form">

            <label for="" class="container_label">Nombre:</label>
            <input name="nombre" type="text" class="container_input">
            <label for="" class="container_label">Telefono:</label>
            <input name="telefono" type="text" class="container_input">
            <label for="" class="container_label">Direccion:</label>
            <input name="direccion" type="text" class="container_input">
            <label for="" class="container_label">Contacto:</label>
            <input name="contacto" type="text" class="container_input">
            <label for="" class="container_label">Correo Electronico:</label>
            <input name="correo" type="email" class="container_input">
            <label for="" class="container_label">Capacidad:</label>
            <input name="capacidad" type="text" class="container_input">
            <label for="" class="container_label">Perfil:</label>
            <input name="perfil" type="text" class="container_input">





            <input class="container_submit" type="submit" value="Registrar">
        </form>




    </div>




</body>

</html>



<?php require_once "vistas/parte_inferior.php" ?>