<?php require_once "vistas/parte_superior.php"
?>

<!DOCTYPE html>
<html lang="en">
<?php @include("includes/head.php"); ?>

<body>

    <div class="container-scroller">



        <div class="container-fluid page-body-wrapper">


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="float: left;">Informacion General del Albergue</h5>
                                </div>

                                <div class="card-body">

                                    <form action="./bd/insertar.php" method="post" class="container_form">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="col-sm-12 pl-0 pr-0">Nombre del Albergue</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <input type="text" name="nombre" id="nombre" placeholder="Ingresa el nombre" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="col-sm-12 ">Contacto</label>
                                                <div class="col-sm-12 ">
                                                    <input type="text" name="contacto" id="contacto" onBlur="checkAvailability()" placeholder="Contacto del albergue" class="form-control" required />
                                                    <span id="user-availability-status" style="font-size:12px;"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <label class="col-sm-12 pl-0 pr-0">Con</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                <input type="text" name="perfil" id="contacto" onBlur="checkAvailability()" placeholder="Ingresa contacto" class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4 pl-md-0">
                                                <label class="col-sm-12 pl-0 pr-0">Edad</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <input type="text" name="edad" id="age" placeholder="Ingresa la edad" class="form-control" required />
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4 pl-md-0">
                                                <label class="col-sm-12 pl-0 pr-0">Perfil</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <select name="occupation" class="form-control" required>
                                                        <option value="">Seleciona Perfil</option>
                                                        <option value="Doctor">Familias</option>
                                                        <option value="Abogado">Hombres</option>
                                                        <option value="Obrero">Mujeres</option>
                                                        <option value="Negociante">LGBT</option>
                                                        <option value="Dentista">Juveniles</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                          
                                            <div class="form-group col-md-2 pl-md-3 ">
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <label for="" class="container_label">Fecha de Apertura:</label>
                                                    <input name="fecha_nac" type="date" class="form-control">
                                                </div>
                                            </div>





                                            <div class="form-group col-md-2 pl-md-0 ">
                                                <label class="col-sm-12 pl-0 pr-0">Estado Civil</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <select name="edo_civil" class="form-control" required>
                                                        <option value="">Selecciona</option>
                                                        <option value="Casado">Casado</option>
                                                        <option value="Soltero">Soltero</option>
                                                        <option value="Divorciado">Divorsiado</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2 pl-md-0 ">
                                                <label class="col-sm-12 pl-0 pr-0">Altura Cm</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <input name="altura" type=text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2 pl-md-0 ">
                                                <label class="col-sm-12 pl-0 pr-0">Peso Kg</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <input name="peso" type=text" class="form-control">
                                                    
                                                </div>
                                            </div>

                                        </div>
                                        <hr>
                                        <p class="card-title"> Informacion de Domicilio</p>
                                        <div class="row mt-5">

                                            <div class="form-group col-md-4 ">
                                                <label class="col-sm-12 pl-0 pr-0 ">Domicilio</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    
                                                        <input name="direccion" type=text" class="form-control">
                                                  
                                                </div>
                                            </div>


                                            <div class="form-group col-md-4 pl-md-0">
                                                <label class="col-sm-12 pl-0 pr-0 ">Calle</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <input type="text" name="district" placeholder="Ingresa Calle" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4 pl-md-0">
                                                <label class="col-sm-12 pl-0 pr-0 ">Detalles</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <input type="text" name="parish" placeholder="Detalles de la calle" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4 pl-md-0">
                                                <label class="col-sm-12 pl-0 pr-0">Colonia</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <input type="text" name="village" placeholder="Colonia" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="col-sm-12 pl-0 pr-0 ">Correo Electronico</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <input type="form-control" name="email" placeholder="Ingresa el correo" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4 pl-md-0">
                                                <label class="col-sm-12 pl-0 pr-0">Telefono</label>
                                                <div class="col-sm-12 pl-0 pr-0">
                                                    <input type="text" name="telefono" placeholder="Ingresa Telefono" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-fw mr-2" style="float: right;" value="Registrar">Agregar</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php @include("includes/footer.php"); ?>

            </div>

        </div>


        <?php require_once "vistas/parte_inferior.php" ?>
</body>

</html>