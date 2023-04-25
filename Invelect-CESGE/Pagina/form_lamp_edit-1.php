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
    $sql="SELECT * FROM lamps WHERE ITEM='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""   autocomplete="OFF">
        <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de la luminaria</h2></p>
         Item<input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>">
         Nombre de la lámpara: <input type="text" name="txtnombre" readonly value="<?php echo $fila['NOM_LAMP'] ?>">
         Sede: <input type="text" name="cbx_sede" readonly value="<?php echo $fila['Sede'] ?>"></p>
		 Ubicación:<input type="text" name="txtambiente" readonly value="<?php echo $fila['UBICACION'] ?>">
		 Tipo de lampara:<input type="text" name="txtlamp" readonly value="<?php echo $fila['Tip_lamp'] ?>">
		 Tipo de tubo:<input type="text" name="txttub" value="<?php echo $fila['Tip_tubo'] ?>">         
         Tipo de socket:<input type="text" name="txtsock" readonly value="<?php echo $fila['Tip_sock'] ?>">
         Tecnología:<input type="text" name="txtecno" value="<?php echo $fila['Tecno'] ?>">
         Cantidad de tubos:<input type="text" name="txtcantub" readonly value="<?php echo $fila['Cant_tubos'] ?>"></p>
         Marca:<input type="text" name="txtmarca" readonly value="<?php echo $fila['Marca'] ?>">
         Voltaje:<input type="text" name="txtvolt" readonly value="<?php echo $fila['Volt'] ?>">
         Watiaje:<input type="text" name="txtwatts" readonly value="<?php echo $fila['Watts'] ?>">
         Amperaje:<input type="text" name="txtamp" readonly value="<?php echo $fila['Amp'] ?>">
         Tamaño:<input type="text" name="txtlargo" readonly value="<?php echo $fila['Largo'] ?>"</p><br><br>
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
            <p id="cbx_cto"></p><br><br>
			<input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_lamp.php" class="btn1">Retroceder</a> 
			<script type="text/javascript" src="../Js/GetTablero.js"></script>		
		            	   
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
    $tiptub=$_GET['txttub'];
    $tecno=$_GET['txtecno'];
	$tsock=$_GET['txtsock'];
	$cantub=$_GET['txtcantub'];
    $marca=$_GET['txtmarca'];
    $volt=$_GET['txtvolt'];
    $watts=$_GET['txtwatts'];
    $amp=$_GET['txtamp'];
    $largo=$_GET['txtlargo'];
    $tab=$_GET['cbx_tablero'];
    $cto=$_GET['cbx_cto'];
            if($serie!=null){
                $sql2="UPDATE lamps SET  NOM_LAMP='$name', Sede='$sede', UBICACION='$amb', Tip_lamp='$tiplamp', Tip_tubo='$tiptub', Tip_sock='$tsock', Tecno='$tecno', Cant_tubos='$cantub', Marca='$marca', Volt='$volt', Watts='$watts', Amp='$amp', Largo='$largo', Tablero='$tab', Cto='$cto' WHERE ITEM='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Lampara Actualizada con exito");</script>';
                   header('location:form_lamp.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>