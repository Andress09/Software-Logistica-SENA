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
<body style="background-color: cornsilk;"><br><br>
    <center>
<h2>Bienvenido Administrador: <?php echo $usuario ?></h2><br><br>
</center>
    <form action="">
   
        <header>  
            <nav>
                <ul>
                    <li><a href="Mn_pc_adm.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio</a></li>
                    <li><a href="form_equipos.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Equipos</a>
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
                    <li><a href="form_sede.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sedes</a></li>
                    <li><a href="form_ambiente.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ambientes</a></li>
                    <li><a href="form_cuentadante.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cuentadantes</a></li>
                    <li><a href="form_registro.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Movimientos</a></li>
                    <li><a href="form_administrador.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrador</a></li>
                    <li><a href="../salir.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salir</a></li>
                </ul>
            </nav>
        </header>
        
    </form>
</body>
</html>
