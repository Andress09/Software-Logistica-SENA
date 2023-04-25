<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
    if(!isset($usuario)){
        header('location:../index.html');
    }else{
    }
    ini_set('display_errors', 0); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
?>
<?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $sql="SELECT * FROM PRESTEMPAMB";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?> <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <div> 
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Consultar agenda</title>
    <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:20px;"><br><br><br>
        <h2>Agenda para el ambiente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2><br>

        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 80%;padding-top:1px;">
    </header>
    <body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">


    <iframe src="<?php echo $fila['URL'] ?>" style="border: 20" width="900" height="70%" frameborder="0" scrolling="no"></iframe>
    <br>
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
     <p>Buscar Usuario <select name="cbx_elem" id="cbx_elem" style="opacity:40%;">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');			
				$sql3="TRUNCATE TABLE PRESTEMP";
				$resultado2=mysqli_query($conn,$sql3);
            $sql="SELECT ID_CUE , CONCAT FROM cuentadante";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_CUE'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		
		   <br><br>
            <input type="submit" name="btnnew" id="btnnew" Value="BUSCAR USUARIO" class="btn1" > <br><br>
            <a href="form_prestamos.php" class="btn1">Retroceder</a>
            <br><br>
        </form>
        <?php } ?>
    </div>
    
    <?php
        if ($_GET) {
            if(  !empty($_GET['cbx_elem'])) 
            { 
               include('../Controlador/conexion.php');
               print_r($_GET);
               $usu=$_GET['cbx_elem'];
         
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