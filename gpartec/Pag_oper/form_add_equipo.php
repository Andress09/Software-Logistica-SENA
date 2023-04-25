<?php
    session_start();
    $usuario= $_SESSION['username_oper'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar equipo</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <form action=""   autocomplete="OFF">     
        <h2>Agregar nuevos equipos</h2> <br><br>
        <label for="cbx_tipo">Tipo Equipo</label>
           <select name="cbx_tipo" >
                <option value="#">Seleccionar...</option>
                <option value="Desktop">Desktop</option>
                <option value="Laptop">Laptop</option>
                <option value="Cabina de Sonido">Cabina de Sonido</option>
                <option value="Televisor">Televisor</option>
                <option value="Pantalla">Pantalla</option>
                <option value="Video beam">Video beam</option>
                <option value="Escaner">Escaner</option>
                <option value="Impresora">Impresora</option>
           </select>
           <p>Marca: <input type="text" name="txtmarca"></p>
           <p>Modelo: <input type="text" name="txtmodelo"></p>
           <p>Número de serie:<input type="text" name="txtserie"></p> 
           <p>Características:<input type="text" name="txtcaract"></p>
           <p>Número placa Sena:<input type="text" name="txtplaca"></p>
           <p>Cuentadante: <select name="cbx_cue" id="cbx_cue">
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
            <p>Sede: <select name="cbx_sede" id="cbx_sede">
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
           <a href="../Pagina/form_impresora.php" class="btn1">Retroceder</a>
        <script type="text/javascript" src="../Js/GetAmbiente.js"></script>    
        </form>
    </div>
    <?php

    include('../Controlador/conexion.php');
    error_reporting(0);
    $serie=$_GET['txtserie'];
    $modelo=$_GET['txtmodelo'];
    $caracteristicas=$_GET['txtcaract'];
    $marca=$_GET['txtmarca'];
    $placa=$_GET['txtplaca'];
    $tipo=$_GET['cbx_tipo'];
    $cue=$_GET['cbx_cue'];
    $amb=$_GET['cbx_ambiente'];
        if($serie!=null){
            $sql="INSERT INTO equipo (NUM_SERIE, MODELO, CARACTERISTICAS, MARCA, NUM_PLACA_SENA, TIPO_EQUIPO, RL_ID_CUE, RL_COD_AMB) VALUES ('$serie','$modelo','$caracteristicas','$marca','$placa','$tipo','$cue','$amb')";
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