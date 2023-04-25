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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar detalle del tablero</title>
</head>
<body>
    <div>
        <form action=""   autocomplete="OFF">
	<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
	<h2>INVELECT-CESGE</h2>		
        <h2>Agregar Detalles del tablero</h2> 
		<p>Nombre del tablero: <select name="cbx_tab" id="cbx_tab">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM Tableros";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_TAB'];?>"><?php echo $row['Nom_tab'];?></option>                  
            <?php } ?>
           </select></p> <br>
        <label for="cbx_cto">Numero del circuito</label>
           <select name="cbx_cto" >
                <option value="#">Seleccionar...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
				<option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                <option value="32">32</option>
                <option value="33">33</option>
                <option value="34">34</option>
                <option value="35">35</option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
				<option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
           </select>
           <p>Distribucion: <input type="text" name="txtdist"></p>
           </select></p>
        <label for="cbx_lum">Cantidad de luminarias</label>
           <select name="cbx_lum" >
                <option value="#">Seleccionar...</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
				</select>
           </select></p>
        <label for="cbx_tomas">Cantidad de Tomas</label>
           <select name="cbx_tomas" >
                <option value="#">Seleccionar...</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
				</select><br><br>
				<label for="cbx_calsal">Calibre Salida</label>
           <select name="cbx_calsal" >
                <option value="#">Seleccionar...</option>
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
                <option value="14">14</option>
                <option value="16">16</option>
                <option value="18">18</option>
                <option value="20">20</option>				
           </select><br><br>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> 
            <a href="form_tabler.php" class="btn1">Retroceder</a>
        </form>
    </div>
    <?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $tab=$_GET['cbx_tab'];
    $ctos=$_GET['cbx_cto'];
    $dist=$_GET['txtdist'];
	$lum=$_GET['cbx_lum'];
    $tom=$_GET['cbx_tomas'];
    $salida=$_GET['cbx_calsal'];
      if($tab!=null){
        $sql="INSERT INTO Dist_tab ( RL_CODE_TAB, Num_cto, Distri, Cant_lumin,Cant_tomas, CAL_SAL) VALUES ('$tab','$ctos','$dist','$lum','$tom','$salida')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("Detalle de tablero agregado con exito!");</script>';
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el circuito no sea existente");</script>';

        }
      }
?>
</body>
</html>