<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];

    include('../Controlador/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar datos switches</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT * FROM switches WHERE ITEM='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos del Switche</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
    <br>
         Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_item" readonly value="<?php echo $row['ITEM'] ?>"><br>
         Nombre del switche: <input type="text" name="txt_nombre" readonly value="<?php echo $row['NOM_SWITCHE'] ?>"><br>
         Ambiente: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cbx_ambiente" readonly value="<?php echo $row['AMBIENTE'] ?>"></p>
         Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cbx_sede" readonly value="<?php echo $row['SEDE'] ?>"></p>
         Cantidad impactados: <input type="text" name="txt_swit" value="<?php echo $row['CANTIDAD_INTERRUPTORES'] ?>"><br>
         Marca:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_marca" value="<?php echo $row['MARCA'] ?>"><br>
         Tablero:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_tablero" id="cbx_tablero">
           <option value="#">Seleccionar...</option> 
           <?php
            include('../Controlador/conexion.php');
            $sql1="SELECT * FROM tableros ";
            $resultadosede1=$conn->query($sql1);
            while($row = $resultadosede1->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_TAB'];?>"><?php echo $row['Nom_tab'];?></option><?php } ?>
           </select><br>
           <p id="cbx_cto"></p><br>
			<input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="../Pagina/form_switches.php" class="btn1">Retroceder</a> 
           <script type="text/javascript" src="../Js/GetTablero.js"></script>	
           <br>	<br>	
		</form>
        <?php } ?>
	 </div>
</body>

<?php
    include('../Controlador/conexion.php');
       $serie=$_GET['txt_item'];
       $nombre=$_GET['txt_nombre'];
       $sede=$_GET['cbx_sede'];
       $amb=$_GET['cbx_ambiente'];
       $swit=$_GET['txt_swit'];
       $marca=$_GET['txt_marca'];
       $tab=$_GET['cbx_tablero'];
       $cto=$_GET['cbx_cto'];
            if($serie!=null){
                $sql2="UPDATE switches SET  NOM_SWITCHE='$nombre', SEDE='$sede', AMBIENTE='$amb', CANTIDAD_INTERRUPTORES='$swit', MARCA='$marca',TABLERO='$tab',CTO='$cto' WHERE ITEM='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Switche Actualizado con exito");</script>';
                   header('location:form_switches.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>