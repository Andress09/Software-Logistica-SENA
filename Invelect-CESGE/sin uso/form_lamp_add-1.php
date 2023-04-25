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
    <div>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""   autocomplete="OFF">
        <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de la luminaria</h2></p>
		<p>Nombre Ambiente: <input type="text" name="txtamb"></p>
        <p>Observaciones: <input type="text" name="txtobs"></p></p>
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
           </select></p>
            <p id="cbx_cto"></p><br><br>
			<script type="text/javascript" src="../Js/GetTablero.js"></script>		
		            	   
		    </form>
	 </div>
		 <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="../Pagina/form_lamp.php" class="btn1">Retroceder</a> 
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
    $tecno=$_GET['txtecno'];
	$tsock=$_GET['txtsock'];
	$cantub=$_GET['txtcantub'];
    $marca=$_GET['txtmarca'];
    $volt=$_GET['txtvolt'];
    $watts=$_GET['txtwatts'];
    $amp=$_GET['txtamp'];
    $largo=$_GET['txt_largo'];
    $tab=$_GET['cbx_tablero'];
    $cto=$_GET['cbx_cto'];
            if($serie!=null){
                $sql2="UPDATE Lamps SET NOM_LAMP='$name', Sede='$sede', UBICACION='$amb', Tip_lamp='$tiplamp', Tip_tubo='$tiptub', Tip_sock='$tsock', Tecno='$tecno', Cant_tubos='$cantub', Marca='$marca', Volt='$volt', Watts='$watts', Amp='$amp', Largo='$largo', Tablero='$tab', Cto='$cto' WHERE ITEM='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Lampara Actualizada con exito");</script>';
                  #  header('location:form_lamp.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>