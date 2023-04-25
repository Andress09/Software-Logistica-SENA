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
    <title>Agregar planta</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar planta nueva</h2></p>
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
<br>
        Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtnombre"><br>
        Sede:&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <select name="cbx_sede" id="cbx_sede">
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
           Modelo:&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtmod"><br>
           Serie:&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="cbx_serie" name="cbx_serie"><br>
           KVA:  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtkva"><br>
           KW: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtkw"><br>
           Frecuencia_Hz: <input type="text" name="txtfrec"><br>
           Potencia:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtpot"><br>
           Combustible:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="cbx_comb" id="cbx_comb">
           <option value="#">Seleccionar...</option>
           <option value="Diesel">Diesel</option>
           <option value="Gasolina">Gasolina</option>
           </select><br>
           Voltage_generado:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="txtvolt" id="txtvolt">
           <option value="#">Seleccionar...</option>
           <option value="110">110</option>
           <option value="220">220</option>
           <option value="330">330</option>
           </select><br>
           <br><br>
            <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_planta.php" class="btn1">Retroceder</a>
        <script type="text/javascript" src="../Js/GetAmbiente.js"></script> 
        <br>   <br>
        </form>
    </div>
    <?php
    include('../Controlador/conexion.php');
    error_reporting(0);
    $nombre=$_GET['txtnombre'];
    $sede=$_GET['cbx_sede'];
    $amb=$_GET['cbx_ambiente'];
    $model=$_GET['txtmod'];
    $serie=$_GET['cbx_serie'];
    $kva=$_GET['txtkva'];
    $kw=$_GET['txtkw'];
    $frec=$_GET['txtfrec'];
    $pot=$_GET['txtpot'];
    $comb=$_GET['cbx_comb'];
    $volt=$_GET['txtvolt'];
        if($nombre!=null){
            $sql="INSERT INTO planta (NOM_PLANTA,UBICACION,AMBIENTE,MODELO,SERIE,KVA,KW,FRECUENCIA_Hz,POTENCIA,COMBUSTIBLE,VOLT_GEN) VALUES ('$nombre','$sede','$amb','$model','$serie','$kva','$kw','$frec','$pot','$comb','$volt')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
                echo '<script language="javascript">alert("Registro Exitoso");</script>';
				 header('location:form_planta.php');  
            }else{
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo del toma no sea existente");</script>';

            }
        }

?>
</body>
</html>