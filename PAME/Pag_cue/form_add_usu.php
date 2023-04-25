<?php
    session_start();
    $usuario= $_SESSION['username_cue'];
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
    <title>Agregar Usuario</title>
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;"><br><br>
        <h2>Agregar Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:50px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">



    <div> 
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""   style=" ;margin-left:40%;width:500px;height: 350px;margin-top: 90px;border: 2px black solid;" autocomplete="OFF">
      
           <p>Identificacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtid"style="opacity:40%;"></p> 
           <p>Nombre completo: <input type="text" name="txtnom"style="opacity:40%;"></p>
           <p>Contacto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcont"style="opacity:40%;"></p>
           <p>Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="txtcorreo"style="opacity:40%;"></p>
		   <label for="cbx_tipo">Grupo</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <select name="cbx_tipo"style="opacity:40%;" >
                <option value="#">Seleccionar...</option>
                <option value="1">Instructor</option>
                <option value="2">Contratista</option>
                <option value="3">Administrativo</option>
                <option value="4">T.O.</option>
                <option value="5">Servicios Generales</option>
                <option value="6">Otros</option>
           </select>
           <p>Coordinador: <select name="cbx_coord" id="cbx_coord"style="opacity:40%;">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT ID_COORD,NOMBRE_COORD FROM COOR";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_COORD'];?>"><?php echo $row['NOMBRE_COORD'];?></option>                  
            <?php } ?>
           </select></p>
             <br> <br>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> <br><br>
            <a href="Mn_pc_cue.php" class="btn1">Retroceder</a>
      <a href="form_prestar.php" class="btn1">prestar</a>
        </form>
    </div>
    <?php
    error_reporting(0);
    include('../Controlador/conexion.php');  
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $cont=$_GET['txtcont'];
    $correo=$_GET['txtcorreo'];
    $tipo=$_GET['cbx_tipo'];
    $coord=$_GET['cbx_coord'];
    $conca=$id.' - '.$nom;
    $conca1='https://wa.me/57'.$cont;
    if($id!=null){
        $sql="INSERT INTO cuentadante (ID_CUE, NOMBRE_CUE, CONCAT, CONTAC_CUE, CORREO, TIPO, COORD,WHATSAPP) VALUES ('$id','$nom', '$conca','$cont','$correo','$tipo','$coord',' $conca1')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("Usuario agregado con exito");</script>';
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el código del Usuario no sea existente");</script>';
        }
    }

?>
</body>
</html>