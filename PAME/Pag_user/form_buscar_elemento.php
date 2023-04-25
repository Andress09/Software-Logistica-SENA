<?php 
include("../Controlador/conexion.php");
?>   +

<!DOCTYPE html>
<html>
<head>
	<title>Resultado de búsqueda</title>
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
        <h2>Módulo consultas de préstamos</h2>
       
       <div class="container">
</head>
<br>
<h3 class="text-center">Resultado de la busqueda :</h3>
<br>
<a href="../Pag_user/form_buscar.php" style="color:waith"class="btn1 btn-success ">Retroceder</a> 
<br><br>

</center>
<br><br>
<?php
		

	
		if(isset($_POST['buscar']))
		{
		include("../Controlador/conexion.php");	
		
		$cod = $_POST['cbx_idel'];
	
		
   
	
	$resultado = mysqli_query($conn,"SELECT * FROM prestamos INNER JOIN cuentadante ON  ID_USU= ID_CUE WHERE ELEM_= '$cod' OR ELEM_1= '$cod'  OR ELEM_2= '$cod'  OR ELEM_3= '$cod'  OR ELEM_4= '$cod'  OR ELEM_5= '$cod'  OR ELEM_6= '$cod'  OR ELEM_7= '$cod'  OR ELEM_8= '$cod'  OR ELEM_9= '$cod' ");
	while($consultas = mysqli_fetch_assoc($resultado))
	  {
		echo 
		'
		<table class="table table-hover">
			<tr>
			  
			  <th scope="col">ELEM-</th>
			  <th scope="col">ELEM-1</th>
			  <th scope="col">ELEM-2</th>
			  <th scope="col">ELEM-3</th>
			  <th scope="col">ELEM-4</th>
			  <th scope="col">ELEM-5</th>
			  <th scope="col">ELEM-6</th>
			  <th scope="col">ELEM-7</th>
			  <th scope="col">ELEM-8</th>
			  <th scope="col">ELEM-9</th>
			  <th scope="col">ID USUARIO</th>
			  <th scope="col">NOMBRE</th>
			  <th scope="col">FECHA_ENTREGA</th>
			  <th scope="col">HORA ENTREGA</th>
			  <th scope="col">HORA_DEV</th>
			
			</tr>
				
			<tr>
		      <td><b>'.$consultas['ELEM_'].'</b></td>
			  <td><b>'.$consultas['ELEM_1'].'</b></td>
			  <td><b>'.$consultas['ELEM_2'].'</b></td>
			  <td><b>'.$consultas['ELEM_3'].'</b></td>
			  <td><b>'.$consultas['ELEM_4'].'</b></td>
			  <td><b>'.$consultas['ELEM_5'].'</b></td>
			  <td><b>'.$consultas['ELEM_6'].'</b></td>
			  <td><b>'.$consultas['ELEM_7'].'</b></td>
			  <td><b>'.$consultas['ELEM_8'].'</b></td>
			  <td><b>'.$consultas['ELEM_9'].'</b></td>
			  <td><b>'.$consultas['ID_USU'].'</b></td>
			  <td><b>'.$consultas['NOMBRE_CUE'].'</b></td>
			  <td><b>'.$consultas['FECHA_ENTRE'].'</b></td>
			  <td><b>'.$consultas['HORA_ENTRE'].'</b></td>
		      <td><b>'.$consultas['HORA_DEV'].'</b></td>
			
		      
			  
		   
		    </tr>
	    ';
		
	}
	  }	


echo '</table>';

	?>