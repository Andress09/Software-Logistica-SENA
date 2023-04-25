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
    <title>Agregar tomas</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar toma nuevo</h2></p>
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
<br>
        Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtnombre"><br>
        Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option><?php } ?>
           </select><br>
		   <p id="cbx_ambiente">  </p>
		   <label for="cbx_tiplamp">Tipo de toma:</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_tiplamp" >
                <option value="#">Seleccionar...</option>
                <option value="MnFase Sllo sobrep X1">MnFase Sllo sobrep X1</option>
                <option value="MnFase Sllo sobrep X2">MnFase Sllo sobrep X2</option>
                <option value="MnFase gnd Empot X2">MnFase gnd Empot X2</option>
                <option value="BiFase Empot X1">BiFase Empot X1</option>			
                <option value="BiFase Empot X2">BiFase Empot X2</option>			
                <option value="BiFase 3 hilos Empot">BiFase 3 hilos Empot</option>		
                <option value="TriFase 4 hilos Empot">TriFase 4 hilos Empot</option>		
           </select><br>
           Marca:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtmarca"></p>
		   <label for="cbx_volt">Voltaje:</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_volt" >
                <option value="#">Seleccionar...</option>
                <option value="110">110</option>
                <option value="220">220</option>				
                <option value="330">330</option>				
                <option value="440">440</option>				
           </select><br>
          Calibre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_cal" >
                <option value="#">Seleccionar...</option>
                <option value="0/0">0/0</option>
                <option value="1/0">1/0</option>				
                <option value="2/0">2/0</option>				
                <option value="3/0">3/0</option>
                <option value="4/0">4/0</option>				
           </select><br><br>
            <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_tomas.php" class="btn1">Retroceder</a>
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
    $tiplamp=$_GET['cbx_tiplamp'];
    $marca=$_GET['txtmarca'];
    $volt=$_GET['cbx_volt'];
    $cali=$_GET['cbx_cal'];
        if($nombre!=null){
            $sql="INSERT INTO tomas (NOM_TOMA , Sede, UBICACION, TIP_TOMA, Marca, Volt,CALIBRE) VALUES ('$nombre','$sede','$amb','$tiplamp','$marca','$volt',' $cali')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
                echo '<script language="javascript">alert("Registro Exitoso");</script>';
				 header('location:form_tomas.php');  
            }else{
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo del toma no sea existente");</script>';

            }
        }

?>
</body>
</html>