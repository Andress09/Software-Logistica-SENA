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
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:1px;">
    </header>
<body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <form action="form_buscar_elementohh.php" style=" ;margin-left:33%;border: solid; border-color:green ;width: 380px;height: 390px;margin-top: 10px;border: 2px black solid;" method="POST">
        <div class="container text-center">
           <br>
            <div class="row">
                <div class="col-sm-12">
                    <label for="codigor"></label>
                    <h5>Consulta por fecha de prestamo</h5><br>
                    Fecha:<input type="date" name="cbx_fech" id="cbx_fech" value="<?php if(isset($_POST['cbx_fech'])) ?>" style="opacity:40%;"><br>
                    <p>Elemento:<select name="cbx_idel" id="cbx_idel">
                    <option value="#">Seleccionar...</option>
                    <?php
                    include('../Controlador/conexion.php');
                    $sql="SELECT COD_ELEM,CONCAT FROM elemento";
                    $resultado=$conn->query($sql);
                    while($row = $resultado->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
                    <?php } ?>
                    </select></p>
                    <br>
                    <input  type="submit" id="cuadro_buscar" name="buscar" class="btn btn-success" value="BUSCAR">
                    <br><br>
                 
                    <a href="Mn_pc_user.php" style="color:waith"class="btn1 btn-success ">Retroceder</a> 
                </div>
               </div>
        </div>
     </form>