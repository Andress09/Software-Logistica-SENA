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
    <title>Agregar datos UMAS</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT * FROM umas WHERE ITEM='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos UMAS</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
 <br>
         Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>"><br>
         Nombre UMAS:&nbsp;&nbsp;&nbsp;<input type="text" name="txtnombre"  value="<?php echo $fila['NOMBRE'] ?>"><br>
         Referencia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cbx_ref"  value="<?php echo $fila['REFERENCIA'] ?>"></p>
		 Serial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ser"  value="<?php echo $fila['SER'] ?>"><br>
		 Ref_correas: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_correas"  value="<?php echo $fila['REF_CORREAS'] ?>"><br>
		 Breckets:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_brek"  value="<?php echo $fila['BRECKETS'] ?>"><br>
		 Sede: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_sede" value="<?php echo $fila['SEDE'] ?>"><br>
         Ubicacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ambiente"  value="<?php echo $fila['UBICACION'] ?>"><br>
         Voltios:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_vol"  value="<?php echo $fila['VOLTIOS'] ?>"><br>
         HP:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_hp" value="<?php echo $fila['HP'] ?>"><br>
		 Componentes: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_com" value="<?php echo $fila['COMPONENTES'] ?>"><br>
         Observaciones:&nbsp;&nbsp;&nbsp; <input type="text" name="txt_obs" value="<?php echo $fila['OBSERVACIONES'] ?>"><br><br>
  	     <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_umas.php" class="btn1">Retroceder</a> 
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
    $ref=$_GET['cbx_ref'];
    $ser=$_GET['txt_ser'];
    $correas=$_GET['txt_correas'];
    $brek=$_GET['txt_brek'];
    $sede=$_GET['txt_sede'];
    $ambiente=$_GET['txt_ambiente'];
	$vol=$_GET['txt_vol'];
    $hp=$_GET['txt_hp'];
    $com=$_GET['txt_com'];
    $obs=$_GET['txt_obs'];
         if($serie!=null){
                $sql2="UPDATE umas SET NOMBRE='$name',REFERENCIA='$ref',SER='$ser',REF_CORREAS='$correas',BRECKETS='$BREK',SEDE='$sede',UBICACION='$ambiente',VOLTIOS='$vol',HP='$hp',COMPONENTES='$com',OBSERVACIONES='$obs'  WHERE ITEM='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Umas Actualizada con exito");</script>';
                   header('location:form_umas.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>