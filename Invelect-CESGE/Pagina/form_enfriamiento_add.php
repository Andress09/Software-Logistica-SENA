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
    <title>Agregar Torres de Enfriamiento</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar Torre de enfriamiento nuevo</h2></p>
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
      <br>
       
        Tipo equipo:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_nombre" id="txt_nombre"><br>
        Marca: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_marca" id="txt_marca"><br>
        Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_mod" id="txt_mod"><br>
        Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option><?php } ?>
           </select>
		   <p id="cbx_ambiente"></p>
        Cantidad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_cant" id="txt_cant"><br>
        UN_medida:&nbsp;&nbsp; <input type="text" name="txt_medida" id="txt_medida"><br>
        
          <br><br>
           <input type="submit" value="Registrar" class="btn1"><br><br>
           <a href="../Pagina/form_enfriamiento.php" class="btn1">Retroceder</a>
           <script type="text/javascript" src="../Js/GetAmbiente.js"></script> 
         <br><br>
        </form>
    </div>
    <?php
    include('../Controlador/conexion.php');
    error_reporting(0);
   
    $nombre=$_GET['txt_nombre'];
    $marca=$_GET['txt_marca'];
    $mod=$_GET['txt_mod'];
    $sede=$_GET['cbx_sede'];
    $ambiente=$_GET['cbx_ambiente'];
    $cant=$_GET['txt_cant'];
    $medida=$_GET['txt_medida'];
        if($nombre!=null){
            $sql="INSERT INTO enfriamiento(TIPO_EQUIPO,MARCA,MODELO,SEDE,UBICACION,CANTIDAD,UN_MEDIDA)
             VALUES ('$nombre','$marca','$mod','$sede','$ambiente','$cant','$medida')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
             
                echo '<script language="javascript">alert("Registro Exitoso");</script>';

                header('location:form_enfriamiento_add.php');  
            }else{
               
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo del toma no sea existente");</script>';
            }
        }

             
?>
</body>
</html>