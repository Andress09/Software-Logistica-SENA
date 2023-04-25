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
    <title>Agregar switchs</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar switches nuevo</h2></p>
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
      <br>
        Nombre: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_nombre" id="txt_nombre"><br>
        Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option><?php } ?>
           </select>
           <p id="cbx_ambiente" name="cbx_ambiente"></p>
           <p>Cant impactadas: &nbsp;<input type="text" name="txt_swit" id="txt_swit"></p>
           Marca: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_marca" id="txt_marca"><br>
		   <label for="cbx_num">Numero de switches</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_num" >
                <option value="#">Seleccionar...</option>
                <option value="1">1</option>
                <option value="2">2</option>				
                <option value="3">3</option>				
            			</select>
                        <br><br>
           <input type="submit" value="Registrar" class="btn1"><br><br>
           <a href="../Pagina/form_switches.php" class="btn1">Retroceder</a>
           <script type="text/javascript" src="../Js/GetAmbiente.js"></script>  
         <br><br>
        </form>
    </div>
    <?php
    include('../Controlador/conexion.php');
    error_reporting(0);

    $nombre=$_GET['txt_nombre'];
    $sede=$_GET['cbx_sede'];
    $amb=$_GET['cbx_ambiente'];
    $swit=$_GET['txt_swit'];
    $marca=$_GET['txt_marca'];
    $num=$_GET['cbx_num'];
    $tab=$_GET['cbx_tab'];
    $cir=$_GET['cbx_cir'];
        if($nombre!=null){
            $sql="INSERT INTO switches(NOM_SWITCHE,SEDE,AMBIENTE,CANTIDAD_INTERRUPTORES, MARCA, ) VALUES ('$nombre','$sede', '$amb',' $swit','$marca','$num',' $tab', '$cir)";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
             
                echo '<script language="javascript">alert("Registro Exitoso");</script>';

                header('location:form_switches.php');  
            }else{
               
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo del toma no sea existente");</script>';
            }
        }

             
?>
</body>
</html>