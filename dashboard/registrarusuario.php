<?php require_once "vistas/parte_superior.php" ?>


<h1> Registrar Usuario de Sistema</h1>
<div class="container">
    <!-- Start Page Content -->

    <!-- /# row -->
    <div class="row">
        <div class="col-lg-8" style="    margin-left: 20%;">
            <div class="card">
                <div class="card-title">

                </div>
                <div class="card-body">
                    <div class="input-states">
                        <form class="form-horizontal" method="POST" action="pages/save_person.php" name="userform" enctype="multipart/form-data">

                            <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date; ?>">

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Nombre (s)</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fname" class="form-control" placeholder="Ingresa nombre" id="event" onkeydown="return alphaOnly(event);" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Apellidos</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="lname" id="lname" class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="Ingresa apellidos" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Correo</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Ingresa Correo" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Confirma Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Sexo</label>
                                    <div class="col-sm-9">
                                        <select name="gender" id="gender" class="form-control" required="">
                                            <option value=" ">--Selecciona Sexo--</option>
                                            <option value="Male">Hombre</option>
                                            <option value="Female">Mujer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Fecha de nacimiento</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="dob" class="form-control" placeholder="Ingresa fecha de nacimiento">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Telefono</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="contact" class="form-control" placeholder="Ingresa telefono" id="tbNumbers" minlength="10" maxlength="10" onkeypress="javascript:return isNumber(event)" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Direccion</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="4" name="address" placeholder="Address" style="height: 80px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Grupo</label>
                                    <div class="col-sm-9">
                                        <select name="group_id" id="group_id" class="form-control" required="">
                                            <option value=" ">--Selecciona Perfil--</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">Usuario</option>
                                            <?php
                                            $sql2 = "SELECT * FROM tbl_group where id!=1";
                                            $result2 = $conn->query($sql2);
                                            while ($row2 = mysqli_fetch_array($result2)) {
                                            ?>
                                                <option value="<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Image</label>
                                    <div class="col-sm-9image">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>


                                <button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php require_once "vistas/parte_inferior.php" ?>