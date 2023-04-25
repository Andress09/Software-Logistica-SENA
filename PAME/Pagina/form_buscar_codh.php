<?php 
include("../Controlador/conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Probando</title>
	<script src="jquery.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/estilos">
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
  <title>Consultar</title>
  <body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 4%;padding-top:50px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:70px;">
    </header>
<center>
        <h2>Espacio PAME SOFT para administración&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <h2>Módulo consultas </h2>
       
       <div class="container">
</head>
<br>
<h3 class="text-center">Resultado de la busqueda :</h3>
<br>
<a href="form_prestamos.php" style="color:waith"class="btn1 btn-success ">Retroceder</a> 
<br><br>
<!-- <a href="form_buscador_cod.php" style="color:waith;" class="btn btn-success">!Refrescar página¡</a> -->
</center>
<br><br>
<?php
		

	
		if(isset($_POST['buscar']))
		{
		include("../Controlador/conexion.php");	
		
		$doc = $_POST['ID_CUE'];

	
	$resultado = mysqli_query($conn,"SELECT historico.COD_REG,historico.FECHA_ENTRE,historico.HORA_ENTRE,historico.HORA_ADDELEM,historico.HORA_CHANGUSU,historico.FECHA_DEV,historico.HORA_DEV,historico.OBS,historico.ESTADO,historico.OPER,cuentadante.ID_CUE,cuentadante.NOMBRE_CUE FROM historico INNER JOIN cuentadante ON historico.ID_USU= cuentadante.ID_CUE and  cuentadante.ID_CUE=$doc");
	while($consulta = mysqli_fetch_array($resultado))
	  {
		echo 
		'
		<table class="table table-hover">
			<tr>
			  
			  <th scope="col">CODIGO</th>
			  <th scope="col">ID_USUARIO</th>
			  <th scope="col">NOMBRE</th>
			  <th scope="col">FECHA_ENTREGA</th>
			  <th scope="col">HORA_ENTREGA</th>
			  <th scope="col">HORA_ADDELEM</th>
			  <th scope="col">HORA_CHANGUSU</th>
			  <th scope="col">FECHA_DEV</th>
			  <th scope="col">HORA_DEV</th>
			  <th scope="col">OBSERVACION</th>
			  <th scope="col">ESTADO</th>
			  <th scope="col">OPERADOR</th>
			</tr>	
			<tr>
		      <td><b>'.$consulta['COD_REG'].'</b></td>
			  <td><b>'.$consulta['ID_CUE'].'</b></td>
			  <td><b>'.$consulta['NOMBRE_CUE'].'</b></td>
			  <td><b>'.$consulta['FECHA_ENTRE'].'</b></td>
			  <td><b>'.$consulta['HORA_ENTRE'].'</b></td>
			  <td><b>'.$consulta['HORA_ADDELEM'].'</b></td>
			  <td><b>'.$consulta['HORA_CHANGUSU'].'</b></td>
			  <td><b>'.$consulta['FECHA_DEV'].'</b></td>
			  <td><b>'.$consulta['HORA_DEV'].'</b></td>
			  <td><b>'.$consulta['OBS'].'</b></td>
			  <td><b>'.$consulta['ESTADO'].'</b></td>
			  <td><b>'.$consulta['OPER'].'</b></td>
		      
			  
		   
		    </tr>
	    ';
		
	}
	  }	


echo '</table>';

	?>