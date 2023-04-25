<?php
   session_start();
   $usuario= $_SESSION['usernameadmi'];
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
    <title>Agregar fancoils</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar fancoils nuevo</h2></p>
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
      <br>
        Nombre: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_nombre" id="txt_nombre"><br>
        Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_model" id="txt_model"><br>
        Referencia: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ref" id="txt_ref"><br>
        Serial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ser" id="txt_ser"><br>
        <label for="cbx_cant">Cant motores:</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<select name="cbx_cant" >
                <option value="#">Seleccionar...</option>
                <option value="1">1</option>
                <option value="2">2</option>				
            </select><br>
        Nombre del Motor-1:&nbsp;&nbsp;<select name="cbx_motor1" id="cbx_motor1">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM motores";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ITEM'];?>"><?php echo $row['NOM_MOTOR'];?></option><?php } ?>
           </select><br>
        Nombre del Motor-2:&nbsp;&nbsp;<select name="cbx_motor2" id="cbx_motor2">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM motores";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ITEM'];?>"><?php echo $row['NOM_MOTOR'];?></option><?php } ?>
           </select>
           Breckets:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_brek" id="cbx_brek">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM dist_tab";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['Item_detab'];?>"><?php echo $row['Num_cto'];?></option><?php } ?>
           </select><br>
           Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
            <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM sede";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option><?php } ?>
           </select>
           <p id="cbx_ambiente"></p>
           Cubre: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="cbx_cubre" id="cbx_cubre">
           Observaciones: <input type="text" name="txt_obs" id="txt_obs"><br>
          <br><br>
           <input type="submit" value="Registrar" class="btn1"><br><br>
           <a href="../Pagina/form_fancoils.php" class="btn1">Retroceder</a>
           <script type="text/javascript" src="../Js/GetAmbiente.js"></script> 
         <br><br>
        </form>
    </div>
    <?php
    include('../Controlador/conexion.php');
    error_reporting(0);
    $nombre=$_GET['txt_nombre'];
    $model=$_GET['txt_model'];
    $ref=$_GET['txt_ref'];
    $ser=$_GET['txt_ser'];
    $cant=$_GET['cbx_cant'];
    $motor1=$_GET['cbx_motor1'];
    $motor2=$_GET['cbx_motor2'];
    $brek=$_GET['cbx_brek'];
    $sede=$_GET['cbx_sede'];
    $ambiente=$_GET['cbx_ambiente'];
    $cubre=$_GET['cbx_cubre'];
    $obs=$_GET['txt_obs'];
        if($nombre!=null){
            $sql="INSERT INTO fancoils(NOM_FANCOILS,MODELO,REFERENCIA,SER,CANTIDAD_MOT,MOTOR1,MOTOR2,BRECKETS,SEDE,UBICACION,CUBRE,OBSERVACIONES)
             VALUES ('$nombre','$model','$ref','$ser','$cant','$motor1','$motor2','$brek','$sede','$ambiente','$cubre','$obs')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
             
                echo '<script language="javascript">alert("Registro Exitoso");</script>';

                header('location:form_fancoils_add.php');  
            }else{
               
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo del toma no sea existente");</script>';
            }
        }

             
?>
</body>
</html>