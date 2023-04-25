<?php
   session_start();
   $usuario= $_SESSION['username_oper'];
   if(!isset($usuario)){
       header('location:../index.html');
   }else{
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar Registro</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
<?php
    date_default_timezone_set('America/Bogota');
    $fecha=date('Y-m-d');
    ?>
  
    <div>
        <form action=""   autocomplete="OFF">
            <h2>Movimiento de equipos</h2>
            <p>Fecha Registro: <input type="date" name="txtfecha" value="<?= $fecha ?>"></p>
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
           <p>Cuentadante: <select name="cbx_cue" id="cbx_cue">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT ID_CUE,NOMBRE_CUE FROM cuentadante";
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
            <p id="cbx_ambiente"></p> 
            
            <p>Serie del equipo:<select name="cbx_serie" id="cbx_serie"></p>
            <option value="#">Seleccionar serie</option> 
            <?php
            include('../Controlador/conexion.php');
            $sql="SELECT NUM_SERIE FROM equipo";
            $resultado=$conn->query($sql);
            while($row = $resultado->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SERIE'];?>"><?php echo $row['NUM_SERIE'];?></option>                  
            <?php } ?>
            </select></p>
            <p>Fecha salida: <input type="date" name="txtfecha_sal" value="<?= $fecha ?>"></p>
            <p>Fecha retorno: <input type="date" name="txtfecha_ret" value="<?= $fecha ?>"></p>
            <p>Operador<select name="cbx_oper" id="cbx_oper">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT ID_OPE,NOMBRE_CUE FROM operador";
            $resultado=$conn->query($sql);
            while($row = $resultado->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_OPE'];?>"><?php echo $row['NOMBRE_CUE'];?></option>                  
            <?php } ?>
           </select></p>
            <p>Observacion:<input type="text"name="txtobs"id="txtobs" ></p><br><br> 
           <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="form_registro.php" class="btn1">Retroceder</a> 
           <script type="text/javascript" src="../Js/GetAmbiente.js"></script>
        </form>
    </div>

<?php
    error_reporting(0);
    include('../Controlador/conexion.php');
 
    $fecha=$_GET['txtfecha'];
    $tipo=$_GET['cbx_tipo'];
    $cue=$_GET['cbx_cue'];
    $serie=$_GET['cbx_serie'];
    $sede=$_GET['cbx_sede'];
    $amb=$_GET['cbx_ambiente'];
    $fech=$_GET['txtfecha_sal'];
    $fechr=$_GET['txtfecha_ret'];
    $oper=$_GET['cbx_oper'];
    $obs=$_GET['txtobs'];
   if($obs){
    $sql="INSERT INTO registro_equipos(FECHA_REGISTRO,NOM_EQUIPO,RG_CUENTADANTE,RL_NUM_SERIE_REG,RL_COD_SEDE_REG,RL_COD_AMB_REG,FECH_SALIDA,FECH_RETORNO,OPERADOR,OBS) VALUES ('$fech',' $tipo','$cue','$serie','$sede','$amb','$fechr','$fecha','$oper','$obs')";
    $resultado=mysqli_query($conn,$sql);
     if($resultado){
        $sqlup="UPDATE equipo SET RL_COD_AMB='$amb',RL_ID_CUE='$cue' WHERE NUM_SERIE='$serie'";
        $r=mysqli_query($conn,$sqlup);
        if($r){
            
        echo '<script language="javascript">alert("Registro guardado con exito");</script>';   
        header('location:form_registro.php'); 
    }else{
          echo '<script language="javascript">alert("Alerta!!! \n Error al actualizar, por favor \n intentelo de nuevo ");</script>';  
      }
      }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al actualizar, por favor \n intentelo de nuevo ");</script>';  
        }
   }
   
?>
