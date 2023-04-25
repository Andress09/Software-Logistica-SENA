<?php 
include("../Controlador/conexion.php");


?>
<?php
//Comprobamos si esta definida la sesión 'tiempo'.
if(isset($_SESSION['tiempo']) ) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 300;//5min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();              
            //Redirigimos pagina.
            header("Location: ../index.html");

            exit();
        } else {  // si no ha caducado la sesion, actualizamos
            $_SESSION['tiempo'] = time();
        }


} else {
    //Activamos sesion tiempo.
    $_SESSION['tiempo'] = time();
}
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
        <h2>Espacio PAME SOFT para administración</h2>
        <h2>Módulo consultas:</h2>
        </center>
       <div class="container">
</head>
<h1 class="text-center">Registros</h1>
         <center>
        <a href="form_buscar_cod.php" style="color:waith;" class="btn btn-success">!Refrescar página¡</a>
        </center>
		<form action="form_buscar_cod.php" style=" ;margin-left:33%;border: solid; border-color:green ;width: 340px;height: 270px;margin-top: 20px;border: 2px black solid;" method="POST">
        <div class="container text-center">
           <br>
            <div class="row">
                <div class="col-sm-12">
                    <label for="codigor"></label>
                    <h5>Consulta por número de identificación del día</h5>
                    <input type="text" name="ID_CUE" id="ID_CUE"  placeholder="Digite numero documento" style="opacity:40%;">
                    <br><br>
                   
                    <input  type="submit" id="cuadro_buscar" name="buscar" class="btn btn-success" value="BUSCAR">
                    <br><br>
                 
                    <a href="Mn_pc_cue.php" style="color:waith"class="btn1 btn-success ">Retroceder</a> 
                </div>
               </div>
        </div>
     </form>
    <form action="form_buscar_codh.php" style=" ;margin-left:33%;border: solid; border-color:green ;width: 340px;height: 270px;margin-top: 20px;border: 2px black solid;" method="POST">
        <div class="container text-center">
           <br>
            <div class="row">
                <div class="col-sm-12">
                    <label for="codigor"></label>
                    <h5>Consulta por número de identificación histórico</h5>
                    <input type="text" name="ID_CUE" id="ID_CUE"  placeholder="Digite numero documento" style="opacity:40%;">
                    <br><br>
                   
                    <input  type="submit" id="cuadro_buscar" name="buscar" class="btn btn-success" value="BUSCAR">
                    <br><br>
                 
                    <a href="Mn_pc_cue.php" style="color:waith"class="btn1 btn-success ">Retroceder</a> 
                </div>
               </div>
        </div>
     </form>
</body>
</html> 
