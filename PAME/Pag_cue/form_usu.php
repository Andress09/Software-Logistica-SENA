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
    $inactivo = 300;//5min en este caso.

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Información de usuario</title>
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;"><br><br>
       
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:30px;">
    </header>
<body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <form action="">
        <h2>Formulario usuario</h2> <br><br>
      
        <a href="Mn_pc_cue.php">Retroceder</a><br><br>
        <center>
        <h5 style="color:red;">! Si deseas chatear con algun usuario preciona la tecla Control + botón Chat !</h4>
        </center>
        <div>
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM CUENTADANTE INNER JOIN COOR ON COORD=ID_COORD ORDER BY ID_CUE ASC";
                $resultado=mysqli_query($conn,$sql);
            ?>
            <div>
                <table>
                    <thead>
                        <tr>
                        <th>Identificación</th>
                        <th>Nombre usuario</th>
                        <th>Contacto</th>
                        <th>Email</th>
                        <th>Coordinador</th>
                        <th>Chat</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row=mysqli_fetch_assoc($resultado)){
                    ?>
                        <tr>
                            <td><?php echo $row['ID_CUE'] ?></td>
                            <td><?php echo $row['NOMBRE_CUE'] ?></td>
                            <td><?php echo $row['CONTAC_CUE'] ?></td>
                            <td><?php echo $row['CORREO'] ?></td>
                            <td><?php echo $row['NOMBRE_COORD'] ?></td>							
							<td><a href="<?php echo $row['WHATSAPP']?>">Chat</a></td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
                </tr>
            </table>
        </div>
    </form>
</body>
<br><br>
</html>