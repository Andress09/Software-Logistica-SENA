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
    <title>Agregar tablero</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar tablero nuevo</h2>
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
        <br>
           <p>Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtnombre"></p>
        <label for="cbx_cantctos">Cantidad de circuitos:</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_cantctos" >
                <option value="#">Seleccionar...</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="18">18</option>
                <option value="24">24</option>
                <option value="30">30</option>
                <option value="36">36</option>
                <option value="48">48</option>
				
           </select>
           <p>Cantidad disponibles: <input type="text" name="txtcantdisp"></p></p>
           <p>Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option><?php } ?>
           </select></p>
		   <p id="cbx_ambiente">  </p>
        <label for="cbx_calimen">Calibre alimentador:</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_calimen" >
                <option value="#">Seleccionar...</option>
                <option value="4/0">4/0</option>
                <option value="3/0">3/0</option>
                <option value="2/0">2/0</option>
                <option value="1/0">1/0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
                <option value="14">14</option>
                <option value="16">16</option>
                <option value="18">18</option>
                <option value="20">20</option>				
           </select><br>
		   <label for="cbx_canline">Cantidad lineas In:</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="cbx_canline" >
                <option value="#">Seleccionar...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>				
           </select>
		   <p>Alimentado por:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcalimex"></p><br>
            <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_tabler.php" class="btn1">Retroceder</a>
        <script type="text/javascript" src="../Js/GetAmbiente.js"></script> 
        <br><br>   
        </form>
    </div>
    <?php
    include('../Controlador/conexion.php');
    error_reporting(0);
    $nombre=$_GET['txtnombre'];
    $ctos=$_GET['cbx_cantctos'];
    $disp=$_GET['txtcantdisp'];
    $sede=$_GET['cbx_sede'];
    $amb=$_GET['cbx_ambiente'];
    $cantline=$_GET['cbx_canline'];
    $calimen=$_GET['cbx_calimen'];
    $calimex=$_GET['txtcalimex'];
        if($nombre!=null){
            $sql="INSERT INTO tableros (Nom_tab, Cant_ctos, Cant_disp, CALIB_CONDUC, NUM_LINE, Sede, Ubicacion, ALIMENT_POR) VALUES ('$nombre','$ctos','$disp','$calimen','$cantline','$sede','$amb','$calimex')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
                echo '<script language="javascript">alert("Registro Exitoso");</script>';
				 header('location:form_tabler.php');  
            }else{
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de cuentadante no sea existente");</script>';

            }
        }

?>
</body>
</html>