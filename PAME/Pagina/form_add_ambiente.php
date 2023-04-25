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
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <title>Agregar Ambiente</title>
</head>

<body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
 
    </header>
<h2>Centro de Servicios y Gestión Empresarial - Regional&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Antioquia.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
<img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:30px;">
		<h2>INVELECT-CESGE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <h2>Bienvenido: <?php echo $usuario ?></h2>
      
        <h2>Agregar Ambiente</h2><br>
    <div>
        <form action="" style="border:2px black solid;;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
      <p>Nombre Ambiente: <input type="text" name="txtamb" style="opacity:40%;" placeholder="Digite nombre del ambiente"></p>
		   </select>
		   <label for="cbx_tipo" >Piso&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <select name="cbxtipo" style="opacity:40%;">
                <option value="#" >Seleccionar piso...</option>
                <option value="Sótano">Sótano</option>
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
				<option value="Terraza">Terraza</option>
           </select><br>
           <p>Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="cbx_sede" id="cbx_sede" style="opacity:40%;">
           <option value="#" >Seleccionar sede...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT NUM_SEDE,NOM_SEDE FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select></p> 
           <p> Url:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="url" style="opacity:40%;" placeholder="Digite url"></p>
           <br><br>
           <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> <br><br>
            <a href="form_admin.php" class="btn1">Retroceder</a>
            <br><br>
        </form>
    </div>
    <?php
    error_reporting(0);
    include('../Controlador/conexion.php');

    $cod1=$_GET['txtcod1'];
    $amb=$_GET['txtamb'];
	$piso=$_GET['cbxtipo'];
    $cod2=$_GET['cbx_sede'];
    $calen=$_GET['url'];
      if($cod2!=null){
        $sql="INSERT INTO AMBIENTE ( NOM_AMBIENTE, RL_COD_SEDE, NUM_PISO,URL_CALENDAR) VALUES ('$amb','$cod2','$piso','$calen')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("Ambiente agregado con exito!");</script>';
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de ambiente no sea existente");</script>';

        }
      }
?>
</body>
</html>