<?php
    $conn=mysqli_connect('localhost','root','','bd_equipos');
    if($conn){

    }else{
        echo "Error de Conexion" .mysqli_error($conn);
    }
?>