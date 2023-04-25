<?php
    session_start();
    $usuario= $_SESSION['username_cue'];
    if(!isset($usuario)){
        header('location:../index.html');
    }else{
    }
?>
<?php
//Comprobamos si esta definida la sesión 'tiempo'.
if(isset($_SESSION['tiempo']) ) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 180;//5min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();              
            //Redirigimos pagina.
            header("Location: ../index.html");

            exit();
        } else {  // si no ha caducado la sesion, actualizamos
            $_SESSION['tiempo'] = time();
        }


} else {
    //Activamos sesion tiempo.
    $_SESSION['tiempo'] = time();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Css/estilo_menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Operador</title>
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
</head>

 
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:70px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <center>


<h2>Préstamo de ambientes y elementos PAME&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </h2>
        <h2>Bienvenido Operador: <?php echo $usuario ?></h2>
        </center>
    <form action="">
      
        <header>  
            <nav>
                <ul>
					<li><a href="Mn_pc_cue.php"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Préstamos</a>
						<div>
                            <ul>
                            <li><a href="form_query_amb.php">Prestar ambiente y elemento</a></li>
                            <li><a href="form_prestar.php">Prestar solo elementos</a></li>
                            <li><a href="form_add_elem_pres.php">Adicionar elementos al préstamo</a></li>
                            <!-- <li><a href="form_ret_elem_pres.php">Retirar elementos al préstamo</a></li> -->
                            <li><a href="form_add_devolución.php">Devolver todo</a></li>
                            </ul>                          
                        </div>
					</li>
					<li><a href="form_buscar.php">  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Consultar prestamo</a></li>
                    <li><a href="form_buscar_ope.php">  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Consultar prestamo por identificacion</a></li>	 
                    <li><a href="form_buscar_elemp.php"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Elementos pendientes por devolución</a></li>
                    <li><a href="form_usu.php"> &nbsp;&nbsp;&nbsp; Consultar telefono usuario </a></li>
                    <li><a href="../salir.php"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  Salir</a></li>
                </ul>
            </nav>
        </header>
    </form>
    </div>
    </div>
    </div>
</body>
</html>
