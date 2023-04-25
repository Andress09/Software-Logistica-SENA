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
    $sede=$_GET['sede'];
    $sql="SELECT * FROM SEDE WHERE NUM_SEDE='".$sede."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Bienvenido: <?php echo $usuario ?></h2>
        <h2>Editar Sede</h2>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""   style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
	<br>
           <p>Codigo Sede:&nbsp;&nbsp; <input type="text" name="txtnum" readonly value="<?php echo $fila['NUM_SEDE'] ?>"></p> 
           <p>Nombre Sede: <input type="text" name="txtsede" value="<?php echo $fila['NOM_SEDE'] ?>"></p><br> <br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="form_sede.php" class="btn1">Retroceder</a>
           <br><br>
        </form>
        <?php } ?>
    </div>   
    <?php
    $sede=$_GET['txtnum'];
    $nom_sede=$_GET['txtsede'];
            if($sede!=null){
                $sql2="UPDATE SEDE SET NOM_SEDE='$nom_sede' WHERE NUM_SEDE='$sede'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){                  
                    echo '<script language="javascript">alert("Sede editada con exito");</script>';
                    header('location:form_sede.php');                 
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
?>