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
    <title>Agregar Chillers</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar Chillers nuevo</h2></p>
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
      <br>
        Numero: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_numero" id="txt_numero"><br>
        Nombre: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_nombre" id="txt_nombre"><br>
        Marca: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_marca" id="txt_marca"><br>
        Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_mod" id="txt_mod"><br>
        Referencia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ref" id="txt_ref"><br>
        Serial: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ser" id="txt_ser"><br>
        <label for="cbx_cant">Cant motores:</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<select name="cbx_cant" >
                <option value="#">Seleccionar...</option>
                <option value="1">1</option>
                <option value="2">2</option>				
            </select><br>
           
        Nombre del Motor- 1:&nbsp;<select name="cbx_motor1" id="cbx_motor1">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM motores";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ITEM'];?>"><?php echo $row['NOM_MOTOR'];?></option><?php } ?>
           </select>
           Nombre del Motor- 2:&nbsp;<select name="cbx_motor2" id="cbx_motor2">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM motores";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ITEM'];?>"><?php echo $row['NOM_MOTOR'];?></option><?php } ?>
           </select>
           Circuito:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<select name="cbx_cir" id="cbx_cir">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM dist_tab";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['Item_detab'];?>"><?php echo $row['Num_cto'];?></option><?php } ?>
           </select><br>
           Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
            <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM sede";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option><?php } ?>
           </select>
           <br>
           Observaciones: <input type="text" name="txt_obs" id="txt_obs"><br>
          <br><br>
           <input type="submit" value="Registrar" class="btn1"><br><br>
           <a href="../Pagina/form_Chillers.php" class="btn1">Retroceder</a>
           <script type="text/javascript" src="../Js/GetMotores.js"></script> 
         <br><br>
        </form>
    </div>
    <?php
    include('../Controlador/conexion.php');
    error_reporting(0);
    $numero=$_GET['txt_numero'];
    $nombre=$_GET['txt_nombre'];
    $marca=$_GET['txt_marca'];
    $mod=$_GET['txt_mod'];
    $ref=$_GET['txt_ref'];
    $ser=$_GET['txt_ser'];
    $cant=$_GET['cbx_cant'];
    $motor1=$_GET['cbx_motor1'];
    $motor2=$_GET['cbx_motor2'];
    $cir=$_GET['cbx_cir'];
    $sede=$_GET['cbx_sede'];
    $obs=$_GET['txt_obs'];
        if($nombre!=null){
            $sql="INSERT INTO chilers(NUM_CHILLERS,NOMBRE_CHIL,MARCA,MODELO,REFERENCIA,SER,CANT_MOTORES,MOTORES1,MOTORES2,CIRCUITO,UBICACION,OBSERVACIONES )
             VALUES ('$numero','$nombre','$marca','$mod','$ref','$ser','$cant','$motor1','$motor2','$cir','$sede','$obs')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
             
                echo '<script language="javascript">alert("Registro Exitoso");</script>';

                header('location:form_Chillers_add.php');  
            }else{
               
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo del toma no sea existente");</script>';
            }
        }

             
?>
</body>
</html>