<?php
    $host_db = "localhost";
    $user_db = "root";
    $pass_db = "";
    $db_name = "login_2019";
    $tbl_name ="personas";
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

    if($conexion){
        echo "<script>alert('Se ha Registrado el Migrante con exito');
        window.location='/logincrud'";
    }else{
        echo "<script>alert('No se puedo registrar'); window.history.go(-1);<script>";
    
    }