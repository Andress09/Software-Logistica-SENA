<?php
   session_start();
   $usuario= $_SESSION['username_oper'];
   if(!isset($usuario)){
       header('location:../index.html');
   }else{
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar Sede</title>
</head>
<body>
    <div>
        <form action=""   autocomplete="OFF">
        <h2>Agregar Sede</h2>
           <p>Nombre Sede: <input type="text" name="txtsede"></p> <br><br>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> <br><br>
            <a href="form_sede.php" class="btn1">Retroceder</a>
        </form>
    </div>
    <?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $cod_sede= $_GET['txtcod'];
    $sede=$_GET['txtsede'];
    if($sede!=null){
        $sql="INSERT INTO sede (NUM_SEDE,NOM_SEDE) VALUES ('','$sede')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("Sede guardada con exito");</script>';
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de sede no sea existente");</script>';
        }
    }
?>
</body>
</html>