<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar datos fancoils</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT * FROM fancoils WHERE ITEM='".$serie."'"; 
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos fancoils</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
 <br>
         Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>"><br>
         Nom_fancoils: <input type="text" name="txt_nombre" value="<?php echo $fila['NOM_FANCOILS'] ?>"><br>
         Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_model"  value="<?php echo $fila['MODELO'] ?>"><br>
         Referencia: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cbx_ref"  value="<?php echo $fila['REFERENCIA'] ?>"></p>
		 Serial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ser" value="<?php echo $fila['SER'] ?>"><br>
		 Cant_motore:<input type="text" name="txt_cant"  value="<?php echo $fila['CANTIDAD_MOT'] ?>"><br>
         Motor1:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_mot1"  value="<?php echo $fila['MOTOR1'] ?>"><br>
         Motor2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_mot2"  value="<?php echo $fila['MOTOR2'] ?>"></p>
         Breckets:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cbx_brek"  value="<?php echo $fila['BRECKETS'] ?>"></p>
         Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cbx_sede"  value="<?php echo $fila['SEDE'] ?>"></p>
         Ambiente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cbx_ambiente"  value="<?php echo $fila['UBICACION'] ?>"></p>
         Cubre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cbx_cubre"  value="<?php echo $fila['CUBRE'] ?>"></p>
         Observacion:&nbsp;&nbsp;<input type="text" name="txt_obs"  value="<?php echo $fila['OBSERVACIONES'] ?>"></p>
         <br>
  	     <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_fancoils.php" class="btn1">Retroceder</a> 
			<script type="text/javascript" src="../Js/GetTablero.js"></script>		
		         <br><br>   	   
		    </form>
	 </div>
		</form> 
        <?php } ?>
    </div> 
</body>

<?php
    $serie=$_GET['txtitem'];
    $name=$_GET['txt_nombre'];
    $model=$_GET['txt_model'];
    $ref=$_GET['cbx_ref'];
    $ser=$_GET['txt_ser'];
    $cant=$_GET['txt_cant'];
    $motor1=$_GET['txt_mot1'];
	$motor2=$_GET['txt_mot2'];
    $brek=$_GET['cbx_brek'];
    $ambiente=$_GET['cbx_ambiente'];
    $cubre=$_GET['cbx_cubre'];
    $obs=$_GET['txt_obs'];
         if($serie!=null){
                $sql2="UPDATE fancoils SET NOM_FANCOILS='$name',MODELO='$model',REFERENCIA='$ref',SER='$ser',CANTIDAD_MOT='$cant',MOTOR1='$motor1',MOTOR2='$motor2',BRECKETS='$brek',SEDE='$sede',UBICACION='$ambiente',CUBRE='$cubre',OBSERVACIONES='$obs'  WHERE ITEM='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Fancoils Actualizado con exito");</script>';
                   header('location:form_fancoils.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>