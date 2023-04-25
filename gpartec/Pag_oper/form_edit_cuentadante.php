<?php
  session_start();
  $usuario= $_SESSION['username_oper'];
  if(!isset($usuario)){
      header('location:../index.html');
  }else{
  }
?>

<?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $id=$_GET['id'];
    $sql="SELECT ID_CUE,NOMBRE_CUE,PASSWORD_CUE,CORREO,SEDE_CUE,NOM_SEDE FROM CUENTADANTE INNER JOIN SEDE ON NUM_SEDE=SEDE_CUE WHERE ID_CUE='".$id."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div> 
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""   autocomplete="OFF">
        <h2>Editar Sede</h2>
           <p>Identificación:<input type="text" name="txtid" readonly value="<?php echo $fila['ID_CUE'] ?>"></p> 
           <p>Nombre Cuentadante: <input type="text" name="txtnom" value="<?php echo $fila['NOMBRE_CUE'] ?>"></p>
           <p>Password: <input type="text" name="txtpw" value="<?php echo $fila['PASSWORD_CUE'] ?>"></p>
           <p>Correo: <input type="text" name="txtcorreo" value="<?php echo $fila['CORREO'] ?>"></p>
           <p>Sede actual: <input type="text" readonly name="txtsede" value="<?php echo $fila['NOM_SEDE'] ?>"></p>
           <p>Nueva Sede: <select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT NUM_SEDE,NOM_SEDE FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select> <br> <br><br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="../Pag_oper/form_cuentadante.php" class="btn1">Retroceder</a> 
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $pw=$_GET['txtpw'];
    $correo=$_GET['txtcorreo'];
    $nom_sede=$_GET['cbx_sede'];
            if($id!=null){
                $sql2="UPDATE CUENTADANTE SET NOMBRE_CUE='$nom', PASSWORD_CUE='$pw', CORREO='$correo', SEDE_CUE='$nom_sede'  WHERE ID_CUE='$id'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){                    
                    header('location:form_cuentadante.php');
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
            
?>