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
    <title>Agregar novedades en fancoils</title>
</head>

<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Bienvenido: <?php echo $usuario ?></h2>
        <h2>Formulario novedades en fancoils</h2> <br><br>
        <h2>Agregar Novedad</h2>
        <form action=""   style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;" autocomplete="OFF">
	<br>
		<p>Fecha Registro:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="txtamb" value="<?= $fecha ?>"></p>
			Nombre del fancoils:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbxtipo" id="cbxtipo"><br>
           <option value="#">Seleccionar...</option> 
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM fancoils";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ITEM'];?>"><?php echo $row['NOM_FANCOILS'];?></option><?php } ?>
           </select>
		   <p>Actividad realizada: <input type="text" name="txtact"></p></p>
          <label for="cbx_sede">Estado final del FANCOILS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <select name="cbx_sede" >
                <option value="#">Seleccionar...</option>
                <option value="Funcional">Funcional</option>
                <option value="Por reparar">Por reparar</option>
                <option value="Mala">Malo</option>				
           </select><br>     
		   <p>Observaciones:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtobs"></p></p><br>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> <br><br>
            <a href="form_fancoils.php" class="btn1">Retroceder</a><br><br>
        </form>
     
    </div>
    <?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $cod1=$_GET['txtcod1'];
    $amb=$_GET['txtamb'];
	$piso=$_GET['cbxtipo'];
	$activit=$_GET['txtact'];
    $cod2=$_GET['cbx_sede'];
    $cod3=$_GET['txtobs'];
      if($piso!=null){
        $sql="INSERT INTO novefancoils ( FECHACT,NOMBRE,ACT_REALI,STATE,OBSERV ) VALUES ('$amb','$piso','$activit','$cod2','$cod3')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("Novedad agregada con exito!");</script>';
            header('location:form_fancoils.php');  
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de la novedad no sea existente");</script>';

        }
      }
?>
</body>
</html>