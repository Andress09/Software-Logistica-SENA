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
<h2>Espacio PAME SOFT para administración&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <h2>Módulo consultas de préstamos</h2>
       
       <div class="container">
</head>
<br>
<h3 class="text-center">Resultado de la busqueda :</h3>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
</header><br><br>
<body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    </center>
    <form action="form_buscar_elemento.php" style=" ;margin-left:33%;border: solid; border-color:green ;width: 340px;height: 270px;margin-top: 20px;border: 2px black solid;" method="POST">
        <div class="container text-center">
           <br>
            <div class="row">
                <div class="col-sm-12">
                    <label for="codigor"></label>
                    <h5>Consulta por código del elemento </h5>
                    <input type="text" name="cbx_idel" id="cbx_idel"  placeholder="Digite numero documento" style="opacity:40%;">
                    <br><br>
                   
                    <input  type="submit" id="cuadro_buscar" name="buscar" class="btn btn-success" value="BUSCAR">
                    <br><br>
                 
                    <a href="Mn_pc_user.php" style="color:waith"class="btn1 btn-success ">Retroceder</a> 
                </div>
               </div>
        </div>
     </form>
	<form action="form_buscar_elementoh.php" style=" ;margin-left:33%;border: solid; border-color:green ;width: 340px;height: 380px;margin-top: 20px;border: 2px black solid;" method="POST">
        <div class="container text-center">
           <br>
            <div class="row">
                <div class="col-sm-12">
                    <label for="codigor"></label>
                    <h5>Consulta por fecha de prestamo</h5><br>
                    Fecha:<input type="date" name="cbx_fech" id="cbx_fech" value="<?php if(isset($_POST['cbx_fech'])) ?>" style="opacity:40%;"><br>
                    <p>Cuentadante:<select name="cbx_nom" id="cbx_nom">
                    <option value="#">Seleccionar...</option>
                    <?php
                    include('../Controlador/conexion.php');
                    $sql="SELECT ID_CUE,CONCAT FROM cuentadante";
                    $resultado=$conn->query($sql);
                    while($row = $resultado->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['ID_CUE'];?>"><?php echo $row['CONCAT'];?></option>                  
                    <?php } ?>
                    </select></p>
                    <br><br>
                    <input  type="submit" id="cuadro_buscar" name="buscar" class="btn btn-success" value="BUSCAR">
                    <br><br>
                    <a href="Mn_pc_user.php" style="color:waith"class="btn1 btn-success ">Retroceder</a> 
                </div>
               </div>
        </div>
     </form>