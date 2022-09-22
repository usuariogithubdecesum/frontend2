<?php require_once "vistas/parte_superior.php"?>
<div class="container">
    <h1>Registros de Albergues</h1>



    <?php
    include_once './bd/conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $consulta = "SELECT id, nombre, telefono, direccion,contacto,correo,capacidad,perfil FROM albergues";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
            </div>
        </div>
    </div>
    <br>




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
                                <th>Acciones</th>

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





    <!--Modal para CRUD-->
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
                            <label for="pais" class="col-form-label">Telefono:</label>
                            <input type="text" class="form-control" id="pais">
                        </div>
                        <div class="form-group">
                            <label for="edad" class="col-form-label">Direccion:</label>
                            <input type="number" class="form-control" id="edad">
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-form-label">Contacto:</label>
                            <input type="text" class="form-control" id="foto">
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



</div>

<?php require_once "vistas/parte_inferior.php"?>