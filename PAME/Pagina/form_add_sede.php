<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
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
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <title>Agregar Sede</title>

   
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 5%;padding-top:70px;">
       
    </header>
<body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
<h2>Centro de Servicios y Gestión Empresarial &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Regional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Antioquia.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
		<h2>INVELECT-CESGE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
    <div><br>
    <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 80%;padding-top:1px;">
    <h2>Bienvenido: <?php echo $usuario ?></h2>
        <h2>Agregar Sede</h2>
        <form action=""   style="border:2px black solid;margin-top: 2%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
		
        
           <p>Nombre Sede: <input type="text" name="txtsede" style="opacity:40%;"placeholder="Digite el nombre de la sede"></p> <br><br>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> <br><br>
            <a href="form_admin.php" class="btn1">Retroceder</a>
            <br><br>
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