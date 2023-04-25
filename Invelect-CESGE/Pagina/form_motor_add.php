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
    <title>Agregar Motor</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar motor nuevo</h2></p>
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
<br>
        Nombre motor:<input type="text" name="txtnombre"><br>
        Sede:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;   <select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option><?php } ?>
           </select>
		   <p id="cbx_ambiente">  </p>
		   Fabricante:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtfab"></p>
		   Modelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtmod"></p>
		   <label for="cbx_tipmot">Tipo de motor:</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_tipmot" >
                <option value="#">Seleccionar...</option>
                <option value="Motobomba">Motobomba</option>
                <option value="Extractor">Extractor</option>
                <option value="Ventilador">Ventilador</option>
                <option value="Fancoil">Fancoil</option>			
                <option value="Otro">Otro</option>			
           </select></p>
		   <label for="cbx_volt">Voltaje:</label>
           <select name="cbx_volt" >
                <option value="#">Seleccionar...</option>
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="110">110</option>
                <option value="220">220</option>				
                <option value="330">330</option>				
                <option value="440">440</option>				
           </select> Voltios:</p>
		   Watiaje: <input type="text" name="txtwatt"> Watts</p>
		   Potencia: <input type="text" name="txthp"> HP</p>
		   Frecuencia: <input type="text" name="txtfrec"> HZ</p>
		   Rev x Min: <input type="text" name="txtrpm"> RPM</p>
        <label for="cbx_tipcon">Tipo de Conexión</label>
           <select name="cbx_tipcon" >
             <option value="#">Seleccionar...</option>
                <option value="Delta">Delta</option>
                <option value="Doble delta">Doble delta</option>
                <option value="Estrella">Estrella</option>
                <option value="Doble estrella">Doble estrella</option>		
           </select></p>
		   <label for="cbx_canfas">Cantidad de fases</label>
           <select name="cbx_canfas" >
                <option value="#">Seleccionar...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>				
           </select></p>
		   Fuerza magnetomotriz: <input type="text" name="txtfmm"> Ø</p>			
		   <label for="cbx_cal">Calibre conductor</label>
           <select name="cbx_cal" >
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
           </select></p>
		   Uso: <input type="text" name="txtuso"></p>
            <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_motores.php" class="btn1">Retroceder</a>
        <script type="text/javascript" src="../Js/GetAmbiente.js"></script> 
        <br><br>   
        </form>
    </div>
    <?php
    include('../Controlador/conexion.php');
    error_reporting(0);
    $nombre=$_GET['txtnombre'];
    $sede=$_GET['cbx_sede'];
    $amb=$_GET['cbx_ambiente'];
    $fab=$_GET['txtfab'];
    $mod=$_GET['txtmod'];
    $tipmot=$_GET['cbx_tipmot'];
    $volt=$_GET['cbx_volt'];
    $watt=$_GET['txtwatt'];
    //$amp=$_GET['txtamp'];
    $hp=$_GET['txthp'];
    $frec=$_GET['txtfrec'];
    $rpm=$_GET['txtrpm'];
    $tipcon=$_GET['cbx_tipcon'];
    $canfas=$_GET['cbx_canfas'];
    $fmm=$_GET['txtfmm'];
    $cal=$_GET['cbx_cal'];
    $uso=$_GET['txtuso'];
        if($nombre!=null){
            $sql="INSERT INTO motores (NOM_MOTOR, SEDE, UBICACION, FABRIC, MODELO, TIP_MOT, VOLT, WATTS, AMP, POT, FREC, RPM, TIP_CON, CANT_FASES, FMM, CALIBRE,USO) VALUES ('$nombre','$sede','$amb','$fab','$mod','$tipmot','$volt','$watt','$watt'/'$volt','$hp','$frec','$rpm','$tipcon','$canfas','$fmm','$cal','$uso')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
                echo '<script language="javascript">alert("Registro Exitoso");</script>';
				 header('location:form_lamps.php');  
            }else{
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de cuentadante no sea existente");</script>';

            }
        }

?>
</body>
</html>