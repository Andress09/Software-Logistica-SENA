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
    <title>Agregar novedad planta</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT * FROM noveplanta WHERE RL_CODE_PLANTA	='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de la novedad de la planta</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
      
         Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtitem" readonly value="<?php echo $fila['RL_CODE_PLANTA'] ?>"><br>
         Fecha de la novedad: <input type="text" name="txtdate" readonly value="<?php echo $fila['FECHACT'] ?>"><br>
         Nombre de planta:&nbsp;&nbsp;&nbsp;<input type="text" name="txtnamelamp" readonly  value="<?php echo $fila['NUM_PLANTA'] ?>"></p>
		 Actividad realizada:&nbsp;&nbsp;&nbsp;<input type="text" name="txtactreal" readonly  value="<?php echo $fila['ACT_REALI'] ?>"><br>
		 Estado de planta:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtestlamp"  value="<?php echo $fila['STATE'] ?>"><br>
		 Observaciones:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtobs" value="<?php echo $fila['OBSERV'] ?>"></p><br>
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
    $serie=$_GET['txtitem'];
    $date=$_GET['txtdate'];
    $namelamp=$_GET['txtnamelamp'];
    $actreal=$_GET['txtactreal'];
    $estlamp=$_GET['txtestlamp'];
    $obs=$_GET['txtobs'];
            if($serie!=null){
                $sql2="UPDATE noveplanta SET  OBSERV='$obs' WHERE RL_CODE_PLANTA='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Novedad Actualizada con exito");</script>';
                   header('location:form_planta.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>