<?php
 $tabla_db1='cuentadante';
 $tabla_db2='historico';
 $tabla_db3='prestamos';
 
    $conn=mysqli_connect('localhost','root','','logisticesge');
   if ( $conn->connect_error){
        die('Error de conexion' . $conn->connect_error);
   }

?>

