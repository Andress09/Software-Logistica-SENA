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
    <title>Agregar novedad de las UMAS</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT * FROM noveumas WHERE RL_CODE_UMAS='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de la novedad de las UMAS</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
   <br>
         Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtitem" readonly value="<?php echo $fila['RL_CODE_CHILLERS'] ?>"><br>
         Fecha de la novedad: <input type="text" name="txtdate" readonly value="<?php echo $fila['FECHACT'] ?>"><br>
         Nombre de la UMAS:<input type="text" name="txtnamelamp" readonly value="<?php echo $fila['NOM_CHILLERS'] ?>"></p>
		 Actividad realizada:&nbsp;&nbsp;&nbsp;<input type="text" name="txtactreal" readonly value="<?php echo $fila['ACT_REALI'] ?>"><br>
		 Estado de la UMAS:&nbsp;&nbsp;&nbsp;<input type="text" name="txtestlamp" readonly value="<?php echo $fila['ESTADO'] ?>"><br>
		 Observaciones:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtobs" value="<?php echo $fila['OBSERVA'] ?>"></p><br>
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
    $date=$_GET['txtdate'];
    $namelamp=$_GET['txtnamelamp'];
    $actreal=$_GET['txtactreal'];
    $estlamp=$_GET['txtestlamp'];
    $obs=$_GET['txtobs'];
      $user=$usuario;
            if($serie!=null){
                $sql2="UPDATE noveumas SET  OBSERVA='$obs' WHERE RL_CODE_UMAS='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Umas Actualizada con exito");</script>';
                   header('location:form_umas.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>