<?php
    session_start();
    
    $usuario= $_SESSION['username_cue'];
    if(!isset($usuario)){
        header('location:../index.html');
    }else{
    }
    // error_reporting(1);
    ini_set('display_errors', 0); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

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
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agenda</title>
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;"><br><br>
        <h2>Buscar agenda&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</h2>
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:30px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">

    <div>
        <form action=""  style=" margin-left:40%;border: solid; border-color:green ;width: 370px;height: 300px;margin-top: 60px;border: 2px black solid;" autocomplete="OFF">

		   <p>Buscar Ambiente <select name="cbx_id" id="cbx_id"style="opacity:40%;">
           <br><br>
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');			
				$sql="TRUNCATE TABLE prestempamb";
				$resultado=mysqli_query($conn,$sql);
            $sql1="SELECT URL_CALENDAR, ITEM  FROM ambiente";
            $resultadosede=$conn->query($sql1);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['URL_CALENDAR'];?>"><?php echo $row['ITEM'];?></option>                  
            <?php } ?>
           </select></p>
           <br>
            <input type="submit" name="btnnew" id="btnnew" Value="BUSCAR AGENDA" class="btn1"> <br><br>
            <a href="Mn_pc_cue.php" class="btn1">Retroceder</a>
        </form>
    </div>
    <?php
    if ($_GET) {
         if(  !empty($_GET['cbx_id'])) 
         { 
            include('../Controlador/conexion.php');
            print_r($_GET);
            $usu=$_GET['cbx_id'];
          
                echo"INSERT INTO prestempamb (URL) VALUES ('$usu')";
                $sql2="INSERT INTO prestempamb (URL) VALUES ('$usu')";
                $resultado2=mysqli_query($conn,$sql2);
                if($resultado2){  
                    echo 'insert';        
                 
                    echo '<script type="text/javascript"> window.location = " form_query_amb_agenda.php " </script>';
                    die();
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n No se encuentra el ambiente \n verificar que el ambiente exista");</script>';
                }
        
            
             } else { echo 'no llego'; } } 


?>
</body>
</html>