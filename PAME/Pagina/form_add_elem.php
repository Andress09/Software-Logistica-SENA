<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
    include("../Controlador/conexion.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <title>Agregar elementos</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:130px;">
    </header>
<body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar nuevo elemento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2> 
    <div>
        <form action=""  style="border:2px black solid;margin-top: 10%;margin-left: 30%;margin-right: 30%;" autocomplete="OFF">     
      	   <p>Código elemento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtid" style="opacity:40%;" placeholder="Digite nombre del elemento"></p>
           <p>Nombre del elemento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtname" style="opacity:40%;" placeholder="Digite nombre del elemento"></p>
           <p>Características:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcaract" style="opacity:40%;" placeholder="Digite las caracteristicas"></p>
           <p>Número placa:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtplaca" style="opacity:40%;" placeholder="Digite numero de placa"></p>
           <p>Cuentadante:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_cue" id="cbx_cue" style="opacity:40%;" >
           <option value="#">Seleccionar cuentadante...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT ID_CUE,CONCAT FROM CUENTADANTE";
            $resultado=$conn->query($sql);
            while($row = $resultado->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_CUE'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
            <p>Sede: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="cbx_sede" id="cbx_sede" style="opacity:40%;">
           <option value="#">Seleccionar sede...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT NUM_SEDE,NOM_SEDE FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select></p>
        <p id="cbx_ambiente" class=""></p> <br>
            <input type="submit" value="Registrar" class="btn1">
             <br><br>
             <a href="../Pagina/form_admin.php" class="btn1">Retroceder</a>
           
           <br><br>
        <script type="text/javascript" src="../Js/GetAmbiente.js"></script>    
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
    $conca1= $cod1.' - '.$name;
    $dispo='Disponible';
      if($cod1!=null){
        $sql="INSERT INTO ELEMENTO ( COD_ELEM, NOM_ELEM, CAR_ELEM, SEDE_ELEM, UBIC_ELEM, NUM_PLACA, CUE,CONCAT,ESTADO) VALUES ('$cod1','$name','$carac','$sede','$amb','$placa','$cue',' $conca1','$dispo')";
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