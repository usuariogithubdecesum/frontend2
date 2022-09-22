<?php require_once "vistas/parte_superior.php" ?>

<!--INICIO del cont principal-->


<?php
include_once './bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, nombre, pais, edad,sexo,fecha_nac,edo_civil,telefono,direccion,altura,peso,color,foto FROM personas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!--<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
            </div>
        </div>
    </div>-->
<div>
    <div class="container">
        <a href="guardarmig.php"><button class="btn btn-primary">Agregar Migrante</button></a>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tablaPersonas" class="table table-hover" style="width:100%">
                    <thead class="text-center">
                        <tr class>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>País</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Fecha_nac</th>
                            <th>Edo_Civil</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Altura</th>
                            <th>Peso</th>
                            <th>Color</th>
                            <th>Foto</th>
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
                                <td><?php echo $dat['pais'] ?></td>
                                <td><?php echo $dat['edad'] ?></td>
                                <td><?php echo $dat['sexo'] ?></td>
                                <td><?php echo $dat['fecha_nac'] ?></td>
                                <td><?php echo $dat['edo_civil'] ?></td>
                                <td><?php echo $dat['telefono'] ?></td>
                                <td><?php echo $dat['direccion'] ?></td>
                                <td><?php echo $dat['altura'] ?></td>
                                <td><?php echo $dat['peso'] ?></td>
                                <td><?php echo $dat['color'] ?></td>
                                <td><?php echo $dat['foto'] ?></td>

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



<script src="/jquery/jquery-3.3.1.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/smoothproducts.min.js"></script>
<script src="assets/js/theme.js"></script>




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
                        <label for="sexo" class="col-form-label">Sexo</label>
                        <input type="text" class="form-control" id="sexo">
                    </div>
                    <div class="form-group">
                        <label for="fecha_nac" class="col-form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nac">
                    </div>
                    <div class="form-group">
                        <label for="edo_civil" class="col-form-label">Estado civil:</label>
                        <input type="text" class="form-control" id="edo_civil">
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" id="telefono">
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" id="direccion">
                    </div>
                    <div class="form-group">
                        <label for="altura" class="col-form-label">Altura:</label>
                        <input type="num" class="form-control" id="altura">
                    </div>
                    <div class="form-group">
                        <label for="peso" class="col-form-label">Peso:</label>
                        <input type="num" class="form-control" id="peso">
                    </div>
                    <div class="form-group">
                        <label for="color" class="col-form-label">Color:</label>
                        <input type="tex" class="form-control" id="color">
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








<?php require_once "vistas/parte_inferior.php" ?>