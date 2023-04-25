<?php
include ("../Controlador/conexion.php");

$sql="SELECT * FROM prestamos";

$id = $_GET['txtid'];
$nom=$_GET['txtnom'];
$nove=$_GET['txtnove'];
$fechent=$_GET['txtfechent'];
$horent=$_GET['txthorent'];
$hadelem=$_GET['txthadelem'];
$hcusu=$_GET['txthcusu'];
$elem = $_GET['cbx_elem'];
$elem1 = $_GET['cbx_elem1'];
$elem2= $_GET['cbx_elem2'];
$elem3 = $_GET['cbx_elem3'];
$elem4 = $_GET['cbx_elem4'];
$elem5 = $_GET['cbx_elem5'];
$elem6 = $_GET['cbx_elem6'];
$elem7 = $_GET['cbx_elem7'];
$elem8 = $_GET['cbx_elem8'];
$elem9= $_GET['cbx_elem9'];
$obs= $_GET['txtobs'];

if($id!=null){ 
$sql2="UPDATE prestamos SET txtnom='$nom',FECHA_ENTRE=CURDATE(),HORA_ENTRE=CURTIME(), txtnove='$nove',HORA_ADDELEM=CURTIME(),HORA_CHANGUSU=CURTIME(),cbx_elem='$elem', cbx_elem1='$elem1', cbx_elem2='$elem2' , cbx_elem3='$elem3', cbx_elem4='$elem4', cbx_elem5='$elem5' , cbx_elem6='$elem6' , cbx_elem7='$elem7' , cbx_elem8='$elem8' , cbx_elem9='$elem9' , txtobs='$obs'  WHERE NUM_PREST='$id' ";
      $query=mysqli_query($conn,$sql2);
    if($query){
       echo"<script> alert('CAMPOS VACIOS')</script>";
       header('refresh:0;url=form_edit_prestemp.php');
      } 
    }else{
       echo $sql="<script> alert('datos guardados')</script>";
       header('refresh:0;url=form_edit_prestemp.php');
     } 

      
?>




