<?php
    session_start();
    $usuario= $_SESSION['username_cue'];
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
    <title>Cuentadante</title>
</head>
<body>
    <form action="">
        <h2>Bienvenido Cuentadante: <?php echo $usuario ?></h2>
        <header>  
            <nav>
                <ul>
                    <li><a href="Mn_pc_cue.php">Inicio</a></li>
                    <li><a href="form_equipos.php">Equipos</a>
                        <div>
                            <ul>
                            <li><a href="form_desktop.php">Desktops</a></li>
                            <li><a href="form_laptop.php">Laptops</a></li>
                            <li><a href="form_cabina.php">Cabinas de sonido</a></li>
                            <li><a href="form_tv.php">Televisores</a></li>
                            <li><a href="form_pantalla.php">Pantallas</a></li>
                            <li><a href="form_beam.php">Video Beams</a></li>
                            <li><a href="form_escaner.php">Escáneres</a></li>
                            <li><a href="form_impresora.php">Impresoras</a></li>
                            </ul>                          
                        </div>
                    </li>
                    <li><a href="form_sede.php">Sedes</a></li>
                    <li><a href="form_ambiente.php">Ambientes</a></li>
                    <li><a href="form_registro.php">Registros</a></li>
                    <li><a href="../salir.php">Salir</a></li>
                </ul>
            </nav>
        </header>
        
    </form>
</body>
</html>
