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
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de la luminaria</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 3%;margin-right: 3%;"   autocomplete="OFF">
       <br>
         Item<input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>">
         Nombre de la lámpara: <input type="text" name="txtnombre" readonly value="<?php echo $fila['NOM_LAMP'] ?>">
         Sede: <input type="text" name="cbx_sede" readonly value="<?php echo $fila['Sede'] ?>"></p>
		 Ubicación:<input type="text" name="txtambiente" readonly value="<?php echo $fila['UBICACION'] ?>">
		 Tipo de lampara:<input type="text" name="txtlamp" readonly value="<?php echo $fila['Tip_lamp'] ?>">
		 Tipo de tubo Actual:<input type="text" name="txttub" readonly value="<?php echo $fila['Tip_tubo'] ?>">
		 </select>
        <label for="cbx_tiptub">Tipo de tubo</label>
           <select name="cbx_tiptub" >
             <option value="<?php echo $fila['Tip_tubo'] ?>"><?php echo $fila['Tip_tubo'] ?></option>
                <option value="Recto">Recto</option>
                <option value="En U">En U</option>
                <option value="Panel LED">Panel LED</option>
                <option value="Bombillo">Bombillo</option>			
                <option value="Ojo de buey">Ojo de buey</option>  				
           </select>
         Tipo de socket:<input type="text" name="txtsock" readonly value="<?php echo $fila['Tip_sock'] ?>">
         Tecnología actual:<input type="text" name="txtecno" readonly value="<?php echo $fila['Tecno'] ?>">
		 </select></p>		   
		   <label for="cbx_tecno">Tecnología</label>
           <select name="cbx_tecno" >
                <option value="<?php echo $fila['Tecno'] ?>"><?php echo $fila['Tecno'] ?></option>
                <option value="Fluorescente">Fluorescente</option>
                <option value="LED">LED</option>
                <option value="Incandescente">Incandescente</option>
                <option value="Halógeno">Halógeno</option>  				
                <option value="Ahorrador">Ahorrador</option>			
           </select>
         Cantidad de tubos actual:<input type="text" name="txtcantub" readonly value="<?php echo $fila['Cant_tubos'] ?>"></p>
		 <label for="cbx_cantub">Cantidad de tubos</label>
           <select name="cbx_cantub" >
                <option value="<?php echo $fila['Cant_tubos'] ?>"><?php echo $fila['Cant_tubos'] ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>				
           </select>
         Marca:<input type="text" name="txtmarca" value="<?php echo $fila['Marca'] ?>">
         Voltaje:<input type="text" name="txtvolt" readonly value="<?php echo $fila['Volt'] ?>">
         Watiaje:<input type="text" name="txtwatts" value="<?php echo $fila['Watts'] ?>">
         Amperaje:<input type="text" name="txtamp" readonly value="<?php echo $fila['Amp'] ?>">
         Tamaño:<input type="text" name="txtlargo" readonly value="<?php echo $fila['Largo'] ?>"></p>
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
            <p id="cbx_cto"></p><br>
			<input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_lamp.php" class="btn1">Retroceder</a> 
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