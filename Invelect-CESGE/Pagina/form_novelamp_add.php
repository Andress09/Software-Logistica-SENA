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
    <title>Agregar Lámpara</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
	<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
	<h2>INVELECT-CESGE</h2>
    <title>Agregar novedades a la lampara</title>
    <form action=""   autocomplete="OFF">
	<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
	<h2>INVELECT-CESGE</h2>		
        <h2>Agregar Novedades de la lámpara</h2> 
        <p>Fecha Registro: <input type="date" name="txtfecha" value="<?= $fecha ?>"></p><br>
		Nombre de la lámpara: <input type="text" name="txtnombre" readonly value="<?php echo $fila['NOM_LAMP'] ?>">
		<p>Actividad realizada: <input type="text" name="txtact"></p></p>
        <label for="cbx_state">Estado final de la lámpara</label>
           <select name="cbx_state" >
                <option value="#">Seleccionar...</option>
                <option value="Funcional">Funcional</option>
                <option value="Por reparar">Por reparar</option>
                <option value="Mala">Mala</option>				
           </select><br>
		   <p>Observaciones: <input type="text" name="txtobs"></p></p>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> 
            <a href="form_novelamp.php" class="btn1">Retroceder</a>
        </form>
</body>
</html>