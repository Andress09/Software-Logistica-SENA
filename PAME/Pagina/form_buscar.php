<?php
   include("../Controlador/conexion.php");	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
</head>
<title>buscar elementos en el préstamo diario</title>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:170px;">
    </header>
<body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
  
   
         <center>
        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Espacio PAME SOFT para Consultas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <h2>Módulo consultas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        </center>
       

    <form action="form_buscar_elemento.php" style=" ;margin-left:33%;border: solid; border-color:green ;width: 340px;height: 270px;margin-top: 20px;border: 2px black solid;" method="POST">
        <div class="container text-center">
           <br>
            <div class="row">
                <div class="col-sm-12">
                    <label for="codigor"></label>
                    <h5>Consulta por código de elemento del día</h5>
                    <input type="text" name="cbx_idel" id="cbx_idel"  placeholder="Digite numero documento" style="opacity:40%;">
                    <br><br>
                   
                    <input  type="submit" id="cuadro_buscar" name="buscar" class="btn btn-success" value="BUSCAR">
                    <br><br>
                 
                    <a href="form_prestamos.php" style="color:waith"class="btn1 btn-success ">Retroceder</a> 
                </div>
               </div>
        </div>
     </form>
     <form action="form_buscar_elementoh.php" style=" ;margin-left:33%;border: solid; border-color:green ;width: 340px;height: 270px;margin-top: 20px;border: 2px black solid;" method="POST">
        <div class="container text-center">   
           <br>
            <div class="row">
                <div class="col-sm-12">
                    <label for="codigor"></label>
                    <h5>Consulta por código de elemento histórico</h5>
                    <input type="text" name="cbx_idel" id="cbx_idel"  placeholder="Digite numero documento" style="opacity:40%;">
                    <br><br>
                   
                    <input  type="submit" id="cuadro_buscar" name="buscar" class="btn btn-success" value="BUSCAR">
                    <br><br>
                 
                    <a href="form_prestamos.php" style="color:waith"class="btn1 btn-success ">Retroceder</a> 
                </div>
               </div>
        </div>
     </form>
	