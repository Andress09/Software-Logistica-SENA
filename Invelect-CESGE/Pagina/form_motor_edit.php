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
    <title>Agregar datos Lámpara</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT * FROM motores WHERE ITEM='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos del motor</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 3%;margin-right: 3%;"   autocomplete="OFF">
 <br>
         Item<input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>">
         Nombre del motor: <input type="text" name="txtnombre" readonly value="<?php echo $fila['NOM_MOTOR'] ?>">
         Sede: <input type="text" name="cbx_sede" readonly value="<?php echo $fila['SEDE'] ?>"></p>
		 Ubicación:<input type="text" name="txtambiente" readonly value="<?php echo $fila['UBICACION'] ?>">
		 Fabricante:<input type="text" name="txtlamp" readonly value="<?php echo $fila['FABRIC'] ?>">
		 Modelo:<input type="text" name="txttub" readonly value="<?php echo $fila['MODELO'] ?>">
		 Tipo de motor:<input type="text" name="txttub" readonly value="<?php echo $fila['TIP_MOT'] ?>">
		 Voltaje:<input type="text" name="txtvolt" readonly value="<?php echo $fila['VOLT'] ?>">
         Watiaje:<input type="text" name="txtwatts" readonly value="<?php echo $fila['WATTS'] ?>">
         Amperaje:<input type="text" name="txtamp" readonly value="<?php echo $fila['AMP'] ?>">
		 Potencia:<input type="text" name="txtvolt" readonly value="<?php echo $fila['POT'] ?>">
         Frecuencia:<input type="text" name="txtwatts" value="<?php echo $fila['FREC'] ?>">
         Rev X minuto:<input type="text" name="txtamp" readonly value="<?php echo $fila['RPM'] ?>">		 
		 <label for="cbx_tipcon">Tipo de Conexión</label>
           <select name="cbx_tipcon" >
             <option value="<?php echo $fila['TIP_CON'] ?>"><?php echo $fila['TIP_CON'] ?></option>
                <option value="Delta">Delta</option>
                <option value="Doble delta">Doble delta</option>
                <option value="Estrella">Estrella</option>
                <option value="Doble estrella">Doble estrella</option>		
           </select></p>
         Cantidad de fases:<input type="text" name="txtfas" readonly value="<?php echo $fila['CANT_FASES'] ?>">
         Fuerza magnetomotriz:<input type="text" name="txtecno" readonly value="<?php echo $fila['FMM'] ?>">
		 Tablero: <select name="cbx_tablero" id="cbx_tablero">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM tableros";
            $resultadocto=$conn->query($sql);
            while($row = $resultadocto->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_TAB'];?>"><?php echo $row['Nom_tab'];?></option>                
            <?php } ?>
           </select>
            <p id="cbx_cto"></p>			
         Calibre:<input type="text" name="txtecno" readonly value="<?php echo $fila['CALIBRE'] ?>">
         Uso:<input type="text" name="txtecno" readonly value="<?php echo $fila['USO'] ?>"></p><br>
			<input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_motores.php" class="btn1">Retroceder</a> 
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
    $sede=$_GET['cbx_sede'];
    $amb=$_GET['txtambiente'];
    $tiplamp=$_GET['txtlamp'];
    $tiptub=$_GET['cbx_tiptub'];
    $tecno=$_GET['cbx_tecno'];
	$tsock=$_GET['txtsock'];
	$cantub=$_GET['cbx_cantub'];
    $marca=$_GET['txtmarca'];
    $volt=$_GET['txtvolt'];
    $watts=$_GET['txtwatts'];
    $amp=$_GET['txtamp'];
    $largo=$_GET['txtlargo'];
    $tab=$_GET['cbx_tablero'];
    $cto=$_GET['cbx_cto'];
            if($serie!=null){
                $sql2="UPDATE motores SET Tablero='$tab', Cto='$cto' WHERE ITEM='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Motor Actualizado con exito");</script>';
                   header('location:form_motores.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>