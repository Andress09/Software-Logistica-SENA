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
    <title>Administrador</title>
</head>
<link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <title>Administrador</title>
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:50px;">
    </header>
<body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
    <form action="">
        <center>
        <h2>Préstamo de ambientes y elementos PAME</h2>
        <h2>Bienvenido Administrador: <?php echo $usuario ?></h2>
        </center>
        <header>  
            <nav>
                <ul>
				<li><a href="Mn_pc_adm.php">Inicio</a></li>
				<li><a href="form_buscar.php">Consultar elemento prestado por código</a></li>
				 <li><a href="form_buscar_ope.php">Consultar préstamo por identificación</a></li>
				 <li><a href="form_usu.php">Consultar usuarios</a></li>
				 <li><a href="form_buscar_elemp.php">Mostrar elementos pendientes por devolución</a></li>
				 <li><a href="../salir.php">Salir</a></li>
                </ul>
            </nav>
        </header>
    </form>
</body>
</html>
