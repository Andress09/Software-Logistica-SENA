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
    $sql="SELECT ID_CUE,NOMBRE_CUE,PASSWORD_CUE,CORREO,SEDE_CUE,NOM_SEDE FROM CUENTADANTE INNER JOIN SEDE ON NUM_SEDE=SEDE_CUE WHERE ID_CUE='".$id."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div> 
    <h2>Editar Sede</h2>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
      
           <p>Identificación:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtid" readonly value="<?php echo $fila['ID_CUE'] ?>"></p> 
           <p>Nombre Cuentadante: <input type="text" name="txtnom" value="<?php echo $fila['NOMBRE_CUE'] ?>"></p>
           <p>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtpw" value="<?php echo $fila['PASSWORD_CUE'] ?>"></p>
           <p>Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtcorreo" value="<?php echo $fila['CORREO'] ?>"></p>
           <p>Sede actual:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" readonly name="txtsede" value="<?php echo $fila['NOM_SEDE'] ?>"></p>
           <p>Nueva Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="cbx_sede" id="cbx_sede">
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
           <a href="../Pagina/form_cuentadante.php" class="btn1">Retroceder</a>
           <br><br>
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $pw=$_GET['txtpw'];
    $correo=$_GET['txtcorreo'];
    $nom_sede=$_GET['cbx_sede'];
    $conca= $id.'-'.$nom;
            if($id!=null){
                $sql2="UPDATE CUENTADANTE SET NOMBRE_CUE='$nom',CONCAT= '$conca', PASSWORD_CUE='$pw', CORREO='$correo', SEDE_CUE='$nom_sede'  WHERE ID_CUE='$id'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){                    
                    header('location:form_cuentadante.php');
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
            
?>