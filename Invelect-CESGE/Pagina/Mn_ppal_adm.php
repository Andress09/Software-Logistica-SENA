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
    <link rel="stylesheet" href="../Css/estilo_menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Invelect-CESGE</title>
</head>
<body style="background-color: cornsilk;">
<center>
<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Bienvenido: <?php echo $usuario ?></h2>
        
</center>
    <form action="">
	
        <header>  
            <nav>
                <ul>
				<li><a href="form_equipos.php">Aire Acondicionado</a>
                        <div>
                            <ul>
                            <li><a href="form_Chillers.php">Chiller´s</a></li>
                            <li><a href="form_enfriamiento.php">Torres de enfriamiento</a></li>
                            <li><a href="form_umas.php">U M A´s</a></li>
                            <li><a href="form_fancoils.php">Fancoil´s</a></li>
                            </ul>                          
                        </div></li>
					<li><a href="form_sede.php">Sedes</a></li>
                    <li><a href="form_ambiente.php">Ambientes</a></li>
                    <li><a href="form_cuentadante.php">Subestaciones</a></li>
                    <li><a href="form_planta.php">Planta</a></li>
					<li><a href="form_motores.php">Motores</a></li>
					<li><a href="form_tabler.php">Tableros</a></li>
					<li><a href="form_lamp.php">Luminarias</a></li>
					<li><a href="form_tomas.php">Tomas</a></li>
                    <li><a href="form_switches.php">Switches</a></li>
					<li><a href="form_query.php">Consultas</a></li>
					<li><a href="form_registro.php">Registros</a></li>
					<li><a href="form_administrador.php">Administrador</a></li>
					<li><a href="../salir.php">Salir</a></li>
                </ul>
            </nav>
        </header>
        
    </form>
</body>
</html>
