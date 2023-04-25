<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar datos planta</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $planta=$_GET['planta'];
    $sql="SELECT * FROM planta WHERE NUM_PLANTA='".$planta."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de planta</h2></p>
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
 
         Num_planta:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtitem" readonly value="<?php echo $fila['NUM_PLANTA'] ?>"><br>
         Nombre planta: <input type="text" name="txtnombre"  value="<?php echo $fila['NOM_PLANTA'] ?>"><br>
         Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cbx_sede"  value="<?php echo $fila['UBICACION'] ?>"><br>
		 Ambiente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtambiente"  value="<?php echo $fila['AMBIENTE'] ?>"><br>
		 Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtmod"  value="<?php echo $fila['MODELO'] ?>"><br>
         Serie:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtserie" value="<?php echo $fila['SERIE'] ?>"><br>
         KVA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtkva" value="<?php echo $fila['KVA'] ?>"><br>
         KW:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtkw" value="<?php echo $fila['KW'] ?>"><br>
		 Frecuencia_Hz:&nbsp; <input type="text" name="txtfrec" value="<?php echo $fila['FRECUENCIA_Hz'] ?>"><br>
         Potencia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtpot" value="<?php echo $fila['POTENCIA'] ?>"><br>
         Combustible:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="txtcomb" value="<?php echo $fila['COMBUSTIBLE'] ?>"><br>
           <option value="#">Seleccionar...</option>
           <option value="Diesel">Diesel</option>
           <option value="Gasolina">Gasolina</option>
           </select><br>
         Voltage_generado:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select  name="txtvolt" value="<?php echo $fila['VOLT_GEN'] ?>"><br>
           <option value="#">Seleccionar...</option>
           <option value="110">110</option>
           <option value="220">220</option>
           <option value="330">330</option>
           </select><br><br>
			<input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_planta.php" class="btn1">Retroceder</a> 
			<script type="text/javascript" src="../Js/GetTablero.js"></script>		
		      <br><br>      	   
		    </form>
	 </div>
		</form> 
        <?php } ?>
    </div> 
</body>

<?php
    $planta=$_GET['txtitem'];
    $name=$_GET['txtnombre'];
    $sede=$_GET['cbx_sede'];
    $ambiente=$_GET['txtambiente'];
    $mod=$_GET['txtmod'];
    $serie=$_GET['txtserie'];
    $kva=$_GET['txtkva'];
    $kw=$_GET['txtkw'];
    $frec=$_GET['txtfrec'];
    $pot=$_GET['txtpot'];
    $comb=$_GET['txtcomb'];
    $volt=$_GET['txtvolt'];
            if($planta!=null){
                $sql2="UPDATE planta SET  NOM_PLANTA='$name', UBICACION='$sede', AMBIENTE='$ambiente', MODELO='$mod', SERIE='$serie', KVA='$kva', KW='$kw', FRECUENCIA_Hz='$frec', POTENCIA='$pot', COMBUSTIBLE='$comb', VOLT_GEN='$volt' WHERE NUM_PLANTA='$planta'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Planta Actualizada con exito");</script>';
                   header('location:form_planta.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>