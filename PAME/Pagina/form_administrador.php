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
    <title>Administrador</title>
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:120px;">
    </header>
<body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar Administrador&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
    <div>
    
        <form action=""  style="border:2px black solid;margin-top: 8%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
       <br>
           <p>Identificacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"style="opacity:40%;" name="txtid" placeholder="Digite la identificacion"></p> 
           <p>Nombre Administrador:&nbsp;<input type="text"style="opacity:40%;" name="txtnom" placeholder="Digite nombre administrador"></p>
           <p>Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password"style="opacity:40%;"name="txtpw" placeholder="Digite password"></p> <br><br>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> <br><br>
            <a href="Mn_pc_adm.php" class="btn1">Retroceder</a>
            <br><br>
        </form>
    </div>
    <?php
    error_reporting(0);
    include('../Controlador/conexion.php');

    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $pw=$_GET['txtpw'];
    if($id!=null){
        $sql="INSERT INTO ADMINISTRADOR (ID_ADMINISTRADOR, NOM_ADMINISTRADOR, PASSWORD_ADMIN) VALUES ('$id','$nom','$pw')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("Administrador agregado con exito");</script>';
        }else{
            echo "error" .mysqli_error($conn);
        }
    }

?>
</body>
</html>