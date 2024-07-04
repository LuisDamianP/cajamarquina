<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "tienda";

    $db_conexion = mysqli_connect($server,$user,$pass,$bd);
    /*
    if($db_conexion){
        echo 'Conectado exitosamente a la Base de Datos';
    }else{
        echo 'No se ah podido conectar a la Base de Datos';
    }*/

?>