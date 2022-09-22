$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo migrante");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
                  //botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    pais = fila.find('td:eq(2)').text();
    edad = parseInt(fila.find('td:eq(3)').text());
    sexo = fila.find('td:eq(4)').text();
    fecha_nac = fila.find('td:eq(5)').text();
    edo_civil = fila.find('td:eq(6)').text();
    telefono = fila.find('td:eq(7)').text();
    direccion = fila.find('td:eq(8)').text();
    altura = fila.find('td:eq(9)').text();
    peso = fila.find('td:eq(10)').text();
    color = fila.find('td:eq(11)').text();
    foto = fila.find('td:eq(12)').text();
    
    $("#nombre").val(nombre);
    $("#pais").val(pais);
    $("#edad").val(edad);
    $("#sexo").val(sexo);
    $("#fecha_nac").val(fecha_nac);
    $("#edo_civil").val(edo_civil);
    $("#telefono").val(telefono);
    $("#direccion").val(direccion);
    $("#altura").val(altura);
    $("#peso").val(peso);
    $("#color").val(color);
    $("#foto").val(foto);
  
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Migrante");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    pais = $.trim($("#pais").val());
    edad = $.trim($("#edad").val());   
    sexo = $.trim($("#sexo").val());    
    fecha_nac = $.trim($("#fecha_nac").val());
    edo_civil = $.trim($("#edo_civil").val());
    telefono = $.trim($("#telefono").val());
    direccion = $.trim($("#direccion").val());
    altura = $.trim($("#altura").val());
    peso = $.trim($("#peso").val());
    color = $.trim($("#color").val());
    foto = $.trim($("#foto").val());

    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, pais:pais, edad:edad, id:id, sexo:sexo,fecha_nac:fecha_nac,edo_civil:edo_civil,telefono:telefono,direccion:direccion,altura:altura,peso:peso,color:color,foto:foto, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;            
            nombre = data[0].nombre;
            pais = data[0].pais;
            edad = data[0].edad;
            sexo = data[0].sexo;
            fecha_nac = data[0].fecha_nac;
            edo_civil = data[0].edo_civil;
            telefono = data[0].telefono;
            direccion = data[0].direccion;
            altura = data[0].altura;
            peso = data[0].peso;
            color = data[0].color;
            foto = data[0].foto;
            if(opcion == 1){tablaPersonas.row.add([id,nombre,pais,edad,sexo,fecha_nac,edo_civil,telefono,direccion,altura,peso,color,foto]).draw();}
            else{tablaPersonas.row(fila).data([id,nombre,pais,edad,sexo,fecha_nac,edo_civil,telefono,direccion,altura,peso,color,foto]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});




