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
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
<!DOCTYPE html>
<html lang="en">

<head>
<header>

        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;"><br><br>
     
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:70px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
<h1>Concultar agenda</h1><br><br>
	<?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $sql="SELECT * FROM prestempamb";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?> <iframe src="<?php echo $fila['URL'] ?>" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
		<?php } ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">

    <title>Concultar agenda</title>
	
</head>
<br><br>
<h2>Agregar Préstamo</h2>

    <div>
        <form action="" style=" margin-left:35%;border: solid; border-color:green ;width: 350px;height: 200px;margin-top: 60px;border: 2px black solid;"  autocomplete="OFF">
        
		   <p>Buscar Usuario <select name="cbx_id" id="cbx_id"style="opacity:40%;">
           <br><br>
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');			
				$sql="TRUNCATE TABLE prestemp";
				$resultado=mysqli_query($conn,$sql);
            $sql1="SELECT ID_CUE , CONCAT FROM cuentadante";
            $resultadosede=$conn->query($sql1);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_CUE'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
           <br>
            <input type="submit" name="btnnew" id="btnnew" Value="BUSCAR USUARIO" class="btn1"> <br><br>
            <a href="Mn_pc_cue.php" class="btn1">Retroceder</a>
			   <a href="form_add_usu.php" class="btn1">registro</a>
        </form>
    </div>
    <?php
    if ($_GET) {
         if(  !empty($_GET['cbx_id'])) 
         { 
            include('../Controlador/conexion.php');
            print_r($_GET);
            $usu=$_GET['cbx_id'];
          
                echo"INSERT INTO prestemp (ID_USU) VALUES ($usu)";
                $sql2="INSERT INTO prestemp (ID_USU) VALUES ($usu)";
                $resultado2=mysqli_query($conn,$sql2);
                if($resultado2){  
                    echo 'insert';        
                 
                    echo '<script type="text/javascript"> window.location = " form_edit_prestemp.php " </script>';
                    die();
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de sede no sea existente");</script>';
                }
        
            
             } else { echo 'no llego'; } } 


?>
</body>
</html>