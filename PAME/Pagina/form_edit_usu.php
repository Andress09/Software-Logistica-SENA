<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
    if(!isset($usuario)){
        header('location:../index.html');
    }else{
    }
?>

<?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM CUENTADANTE WHERE ID_CUE='".$id."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>

  <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/estilo_edit.css">
  <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 4%;padding-top:50px;">
        <br><br>
        <h2>Editar Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:50px;">
    </header>
<body class="fondoIndex" style=" background-image: url('../Imgs/fondo1.jpeg');background-repeat: no-repeat;background-position: center center;
background-attachment: fixed;background-size: cover;">

    <div> 
   
<form action=""  style="border:2px black solid;margin-top: 5%;margin-left: 30%;margin-right: 30%;" autocomplete="OFF">
           <p>Identificación:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  style="opacity:40%;"name="txtid" readonly value="<?php echo $fila['ID_CUE'] ?>"></p> 
           <p>Nombre Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="opacity:40%; "name="txtnom" value="<?php echo $fila['NOMBRE_CUE'] ?>"></p>
           <p>Contacto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  style="opacity:40%;"name="txtcont" value="<?php echo $fila['CONTAC_CUE'] ?>"></p>
           <p>Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  style="opacity:40%;"name="txtcorreo" value="<?php echo $fila['CORREO'] ?>"></p>
           <p>Coordinador actual:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  style="opacity:40%;"type="text" readonly name="txtsede" value="<?php echo $fila['COORD'] ?>"></p>
           <p>Nuevo coordinador:&nbsp;<select  style="opacity:40%;"name="cbx_coord" id="cbx_coord">
           <option value="<?php echo $row['ID_COORD'];?>"><?php echo $fila['COORD']?></option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM COOR";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_COORD'];?>"><?php echo $row['NOMBRE_COORD'];?></option>                  
            <?php } ?>
           </select> <br> <br><br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="../Pagina/form_usu.php" class="btn1">Retroceder</a> 
           <BR></BR>
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $cont=$_GET['txtcont'];
    $correo=$_GET['txtcorreo'];
    $coord=$_GET['cbx_coord'];
            if($id!=null){
                $sql2="UPDATE CUENTADANTE SET NOMBRE_CUE='$nom', CONTAC_CUE='$cont', CORREO='$correo', COORD='$coord'  WHERE ID_CUE='$id'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){                    
                    header('location:form_usu.php');
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
            
?>