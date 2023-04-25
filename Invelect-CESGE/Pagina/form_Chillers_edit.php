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
    <title>Agregar datos Chillers</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT * FROM chilers WHERE NUM_CHILLERS='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos Chillers</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
 <br>
         Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtitem" readonly value="<?php echo $fila['NUM_CHILLERS'] ?>"><br>
         Nombre Chillers:&nbsp;<input type="text" name="txtnombre"  value="<?php echo $fila['NOMBRE_CHIL'] ?>"><br>
         Marca:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cbx_marca"  value="<?php echo $fila['MARCA'] ?>"></p>
		 Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_model"  value="<?php echo $fila['MODELO'] ?>"><br>
		 Referencia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_ref"  value="<?php echo $fila['REFERENCIA'] ?>"><br>
		 Serie:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_ser"  value="<?php echo $fila['SER'] ?>"><br>
		 Cant de motores:&nbsp;<input type="text" name="txt_cant" value="<?php echo $fila['CANT_MOTORES'] ?>"><br>
         Motores:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_motores1"  value="<?php echo $fila['MOTORES1'] ?>"><br>
         Motores:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_motores1"  value="<?php echo $fila['MOTORES2'] ?>"><br>
         Circuito:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_cir" value="<?php echo $fila['CIRCUITO'] ?>"><br>
		 Ubicacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ubi" value="<?php echo $fila['UBICACION'] ?>"><br>
         Observaciones:&nbsp;&nbsp;&nbsp; <input type="text" name="txt_obs" value="<?php echo $fila['OBSERVACIONES'] ?>"><br><br>
  	     <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_chillers.php" class="btn1">Retroceder</a> 
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
    $name=$_GET['txtnombre'];
    $marca=$_GET['cbx_marca'];
    $model=$_GET['txt_model'];
    $ref=$_GET['txt_ref'];
    $ser=$_GET['txt_ser'];
    $cant=$_GET['txt_cant'];
    $motores1=$_GET['txt_motores1'];
	$motores2=$_GET['txt_motores2'];
    $cir=$_GET['txt_cir'];
    $ubi=$_GET['txt_ubi'];
    $obs=$_GET['txt_obs'];
         if($serie!=null){
                $sql2="UPDATE chilers SET NOMBRE_CHIL='$name',MARCA='$marca',MODELO='$model',REFERENCIA='$ref',SER='$ser',CANT_MOTORES='$cant',MOTORES1='$motores1',MOTORES2='$motores2',CIRCUITO='$cir',UBICACION='$ubi',OBSERVACIONES='$obs'  WHERE NUM_CHILLERS='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Motor Actualizado con exito");</script>';
                   header('location:form_chillers.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>