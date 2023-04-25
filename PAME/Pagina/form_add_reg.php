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
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <title>Agregar préstamo</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;"><br><br>
        <h2>Agregar nuevos equipos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2> 
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:100px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
	
    <div>
        <form action=""  style="border:2px black solid;margin-top: 8%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">     
        	
           <p>Código elemento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  style="opacity:40%;"name="txtid"  placeholder="Digite codigo elemento"></p>
           <p>Nombre del elemento: &nbsp;<input type="text" style="opacity:40%;"name="txtname" placeholder="Digite nombre elemento "></p>
           <p>Características:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" style="opacity:40%;"name="txtcaract" placeholder="Digite las caracteristicas "></p>
           <p>Número placa Sena:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"style="opacity:40%;" name="txtplaca" placeholder="Digite numero placa sena "></p>
           <p>Cuentadante: <select name="cbx_cue" id="cbx_cue" style="opacity:40%;"placeholder="Digite la identificacion ">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT ID_CUE,NOMBRE_CUE FROM CUENTADANTE";
            $resultado=$conn->query($sql);
            while($row = $resultado->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_CUE'];?>"><?php echo $row['NOMBRE_CUE'];?></option>                  
            <?php } ?>
           </select></p>
            <p>Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select style="opacity:40%;"name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT NUM_SEDE,NOM_SEDE FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select></p>
            <p id="cbx_ambiente">  </p> <br>
            <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_elemento.php" class="btn1">Retroceder</a>
           <br><br>
        <script type="text/javascript" style="opacity:40%;"src="../Js/GetAmbiente.js"></script>    
        </form>
    </div>
    <?php

    include('../Controlador/conexion.php');
    error_reporting(0);
    $cod1=$_GET['txtid'];
    $name=$_GET['txtname'];
    $carac=$_GET['txtcaract'];
	$placa=$_GET['txtplaca'];
	$cue=$_GET['cbx_cue'];
	$sede=$_GET['cbx_sede'];
    $amb=$_GET['cbx_ambiente'];
      if($cod1!=null){
        $sql="INSERT INTO ELEMENTO ( COD_ELEM, NOM_ELEM, CAR_ELEM, SEDE_ELEM, UBIC_ELEM, NUM_PLACA, CUE) VALUES ('$cod1','$name','$carac','$sede','$amb','$placa','$cue')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
                echo '<script language="javascript">alert("Registro Exitoso");</script>';
            }else{
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de cuentadante no sea existente");</script>';

            }
        }

?>
</body>
</html>