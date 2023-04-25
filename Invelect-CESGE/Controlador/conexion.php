<?php
    $conn=mysqli_connect('localhost','root','','bd_elecesge');
    if($conn){

    }else{
        echo "Error de Conexion" .mysqli_error($conn);
    }
?>