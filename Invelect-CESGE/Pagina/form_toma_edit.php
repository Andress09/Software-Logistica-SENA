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
    <title>Agregar datos tomas</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT * FROM TOMAS WHERE ITEM='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de tomas</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""   style="border:2px black solid;margin: 3%;margin-left: 3%;margin-right: 3%;"  autocomplete="OFF">
    <br>
         Item<input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>">
         Nombre del toma: <input type="text" name="txtnombre" readonly value="<?php echo $fila['NOM_TOMA'] ?>">
         Sede: <input type="text" name="cbx_sede" readonly value="<?php echo $fila['SEDE'] ?>"></p>
		 Ubicación:<input type="text" name="txtambiente" readonly value="<?php echo $fila['UBICACION'] ?>">
		 Tipo de toma:<input type="text" name="txtlamp" readonly value="<?php echo $fila['TIP_TOMA'] ?>">
         Marca:<input type="text" name="txtmarca" value="<?php echo $fila['MARCA'] ?>">
         Voltaje:<input type="text" name="txtvolt" value="<?php echo $fila['Volt'] ?>">
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
           <a href="../Pagina/form_tomas.php" class="btn1">Retroceder</a> 
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
    $marca=$_GET['txtmarca'];
    $volt=$_GET['txtvolt'];
    $tab=$_GET['cbx_tablero'];
    $cto=$_GET['cbx_cto'];
            if($serie!=null){
                $sql2="UPDATE tomas SET  NOM_TOMA='$name', Sede='$sede', UBICACION='$amb', TIP_TOMA='$tiplamp', MARCA='$marca', Volt='$volt', Tablero='$tab', Cto='$cto' WHERE ITEM='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Toma Actualizada con exito");</script>';
                   header('location:form_tomas.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>