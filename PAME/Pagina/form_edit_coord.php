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
    $sql="SELECT * FROM COOR WHERE ID_COORD='".$id."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
  <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/estilo_edit.css">
  <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:60px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
    <div> 
    <h2>Editar Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
 <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;" autocomplete="OFF">
 
           <p>Identificación:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtid" style="opacity:40%;" readonly value="<?php echo $fila['ID_COORD'] ?>"></p> 
           <p>Nombre Usuario: <input type="text" name="txtnom" style="opacity:40%;"value="<?php echo $fila['NOMBRE_COORD'] ?>"></p>
           <p>Contacto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtcont" style="opacity:40%;"value="<?php echo $fila['CONTACTO'] ?>"></p>
           <p>Correo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcorreo"style="opacity:40%;" value="<?php echo $fila['E_MAIL'] ?>"></p>
           <p>Sede actual:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" readonly name="txtsede" style="opacity:40%;" value="<?php echo $fila['SEDE'] ?>"></p>
           <p>Nueva sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_sede" id="cbx_sede" style="opacity:40%;">
           <option value="#"><?php echo $fila['SEDE']?></option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select> <br> <br><br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="../Pagina/form_coord.php" class="btn1">Retroceder</a> 
           <br><br>
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $cont=$_GET['txtcont'];
    $correo=$_GET['txtcorreo'];
    $sede=$_GET['cbx_sede'];
            if($id!=null){
                $sql2="UPDATE COOR SET NOMBRE_COORD='$nom', CONTACTO='$cont', E_MAIL='$correo', SEDE='$sede'  WHERE ID_COORD='$id'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){                    
                    header('location:form_usu.php');
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
            
?>