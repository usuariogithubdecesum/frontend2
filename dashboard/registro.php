<?php require_once "vistas/parte_superior.php"?>


<!--INICIO del cont principal-->
<div class="container">
    <h1>Registro de Migrantes</h1>
        
    
    
    <section class="clean-block">
            <div class="container">
                
                
                    <form action="guardar1.php" method="post"> 
                        
                    <div class="form-group"><label>Nombre</label><input class="form-control" type="text" name="Nombre" id="Nombre"> </div>
                    <div class="form-group"><label>Nacionalidad</label><input class="form-control" type="text" name="Nacionalidad" id="Nacionalidad"></div>
                    <div class="form-group"><label>Telefono</label><input class="form-control" type="Telefono" name="Telefono" id="Telefono"></div>
                    <div class="form-group"><label>Mensaje</label><input class="form-control" type="Mensaje" name="Mensaje" id="Mensaje" ></textarea></div>
                    <div class="form-group"><button class="btn btn-primary" type="submit">Envio</button></div>
                 </form>
                 </div>
             
     
        </sec
</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>