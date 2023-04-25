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
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <title>Administrador</title>
</head>
<body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
    <center>
<h2>Espacio PAME para administración</h2>
        <h2>Bienvenido Administrador: <?php echo $usuario ?></h2>
        </center>
    <form action="">
      
        <header>  
            <nav>
                <ul>
                    <li><a href="Mn_pc_adm.php">Inicio</a></li>
					<li><a href="form_prestados.php">Préstamos</a>
						<div>
                            <ul>
                            <li><a href="form_prestar.php">Prestar</a></li>
                            <li><a href="form_add_devolución.php">Regresar</a></li>
                            </ul>                          
                        </div>
					</li>
					<li><a href="form_cambios.php">Cambiar</a></li>
					<li><a href="form_consulta.php">Consultar</a></li>
                    <li><a href="../salir.php">Salir</a></li>
                </ul>
            </nav>
        </header>
        
    </form>
</body>
</html>
