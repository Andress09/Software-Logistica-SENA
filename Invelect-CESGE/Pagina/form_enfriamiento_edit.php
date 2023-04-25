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
    <title>Agregar datos Torres enfriamiento</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT * FROM enfriamiento WHERE ITEM='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos Torres enfriamiento</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
 <br>
         Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>"><br>
         Nombre Chillers:&nbsp;<input type="text" name="txtnombre"  value="<?php echo $fila['TIPO_EQUIPO'] ?>"><br>
         Marca:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cbx_marca"  value="<?php echo $fila['MARCA'] ?>"></p>
		 Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_model"  value="<?php echo $fila['MODELO'] ?>"><br>
		 Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_sede"  value="<?php echo $fila['SEDE'] ?>"><br>
		 Ambiente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ambiente"  value="<?php echo $fila['AMBIENTE'] ?>"><br>
		 Cantidad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_cant" value="<?php echo $fila['CANTIDAD'] ?>"><br>
         UN_medida:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_medida"  value="<?php echo $fila['UN_MEDIDA'] ?>"><br><br>
         <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_enfriamiento.php" class="btn1">Retroceder</a> 
			<script type="text/javascript" src="../Js/GetAmbiente.js"></script>		
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
    $sede=$_GET['txt_sede'];
    $ambiente=$_GET['txt_ambiente'];
    $cant=$_GET['txt_cant'];
    $medida=$_GET['txt_medida'];
         if($serie!=null){
                $sql2="UPDATE enfriamiento SET TIPO_EQUIPO='$name',MARCA='$marca',MODELO='$model',SEDE='$sede',UBICACION='$ambiente',CANTIDAD='$cant',UN_MEDIDA='$medida' WHERE ITEM='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Motor Actualizado con exito");</script>';
                   header('location:form_enfriamiento.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>