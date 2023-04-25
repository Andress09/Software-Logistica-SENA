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
    <title>Agregar lámpara</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar lámpara nueva</h2></p>
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 5%;margin-right: 5%;"   autocomplete="OFF">
<br>
        Nombre: <input type="text" name="txtnombre">
        Sede: <select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option><?php } ?>
           </select>
		   <p id="cbx_ambiente">  </p><br>
		   <label for="cbx_tiplamp">Tipo de lámpara</label>
           <select name="cbx_tiplamp" >
                <option value="#">Seleccionar...</option>
                <option value="Empotrar">Empotrar</option>
                <option value="Sobreponer">Sobreponer</option>
                <option value="Tornillar">Tornillar</option>
                <option value="Enganchar">Enganchar</option>			
           </select>
        <label for="cbx_tiptub">Tipo de tubo</label>
           <select name="cbx_tiptub" >
             <option value="#">Seleccionar...</option>
                <option value="Recto">Recto</option>
                <option value="En U">En U</option>
                <option value="Panel LED">Panel LED</option>
                <option value="Reflector LED">Reflector LED</option>
                <option value="Bombillo">Bombillo</option>			
                <option value="Ojo de buey">Ojo de buey</option>  				
           </select>
		   <label for="cbx_tipsock">Tipo de socket</label>
           <select name="cbx_tipsock" >
                <option value="#">Seleccionar...</option>
                <option value="T5">T5</option>
                <option value="T8">T8</option>
                <option value="E27">E27</option>
                <option value="E40">E40</option>				
                <option value="GU10">GU10</option>				
                <option value="MR16">MR16</option>
				<option value="Driver">Driver</option>				
           </select></p>		   
		   <label for="cbx_tecno">Tecnología</label>
           <select name="cbx_tecno" >
                <option value="#">Seleccionar...</option>
                <option value="Fluorescente">Fluorescente</option>
                <option value="LED">LED</option>
                <option value="Incandescente">Incandescente</option>
                <option value="Halógeno">Halógeno</option>  				
                <option value="Ahorrador">Ahorrador</option>			
           </select>
		   <label for="cbx_cantub">Cantidad de tubos</label>
           <select name="cbx_cantub" >
                <option value="#">Seleccionar...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>				
           </select>
		   Marca: <input type="text" name="txtmarca"></p>
		   <label for="cbx_volt">Voltaje</label>
           <select name="cbx_volt" >
                <option value="#">Seleccionar...</option>
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="110">110</option>
                <option value="220">220</option>				
           </select>
		   Watiaje: <input type="text" name="txtwatt">
		   Amperaje: <input type="text" name="txtamp"></p>
		   <label for="cbx_largo">Tamaño</label>
           <select name="cbx_largo" >
                <option value="#">Seleccionar...</option>
                <option value="60">60</option>
                <option value="120">120</option>
                <option value="Bombillo">Bombillo</option>
                <option value="Ojo de buey">Ojo de buey</option>
                <option value="Panel Led">Panel Led</option>			
           </select></p><br>
            <input type="submit" value="Registrar" class="btn1"> <br><br>
           <a href="../Pagina/form_lamp.php" class="btn1">Retroceder</a>
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
    $tiptub=$_GET['cbx_tiptub'];
    $tipsock=$_GET['cbx_tipsock'];
    $tecno=$_GET['cbx_tecno'];
    $cantub=$_GET['cbx_cantub'];
    $marca=$_GET['txtmarca'];
    $volt=$_GET['cbx_volt'];
    $watt=$_GET['txtwatt'];
    //$amp=$_GET['txtamp'];
    $largo=$_GET['cbx_largo'];
        if($nombre!=null){
            $sql="INSERT INTO lamps (NOM_LAMP, Sede, UBICACION, Tip_lamp, Tip_tubo, Tip_sock, Tecno, Cant_tubos, Marca, Volt, Watts, Amp, Largo) VALUES ('$nombre','$sede','$amb','$tiplamp','$tiptub','$tipsock','$tecno','$cantub','$marca','$volt','$watt','$watt'/'$volt','$largo')";
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