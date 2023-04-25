
<?php
 include('../Controlador/conexion.php');
    session_start();
    $usuario= $_SESSION['usernameadmi'];
    if(!isset($usuario)){
        header('location:../index.html');
    }else{
    }
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
<?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $sql="SELECT * FROM prestemp INNER JOIN cuentadante ON ID_USU=ID_CUE";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
 <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <div> 
    <link rel="stylesheet" href="../css/estilo_edit.css">

   
    <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:20px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:140px;">
    </header>
    <body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agregar elementos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 5%;"  autocomplete="OFF">
      
           <p>Id usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtid" readonly value="<?php echo $fila['ID_CUE'] ?>" style="opacity:40%;"></p> 
           <p>Nombre Usuario:<input type="text" name="txtnom" value="<?php echo $fila['NOMBRE_CUE'] ?>" style="opacity:40%;"></p>
       
           <label for="cbx_nove">Novedad:</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_nove"style="opacity:40%;" >
                <option value="En préstamo">En préstamo</option>
           </select>
		   <p>Buscar Elemento1: <select name="cbx_elem" id="cbx_elem" style="opacity:40%;">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO WHERE ESTADO = 'Disponible' ";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo">Novedad elemento1</label>
           <select name="cbx_tipo" style="opacity:40%;">
                <option value="#">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Buscar Elemento2: <select name="cbx_elem1" id="cbx_elem1" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO WHERE ESTADO = 'Disponible'";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo1">Novedad elemento2</label>
           <select name="cbx_tipo1" style="opacity:40%;">
                <option value="0">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Buscar Elemento3: <select name="cbx_elem2" id="cbx_elem2" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO WHERE ESTADO = 'Disponible'";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo2">Novedad elemento3</label>
           <select name="cbx_tipo2" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Buscar Elemento4: <select name="cbx_elem3" id="cbx_elem3" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO WHERE ESTADO = 'Disponible'";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo3">Novedad elemento4</label>
           <select name="cbx_tipo3" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Buscar Elemento5: <select name="cbx_elem4" id="cbx_elem4" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT, NOM_ELEM FROM ELEMENTO WHERE ESTADO = 'Disponible'";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo4">Novedad elemento5</label>
           <select name="cbx_tipo4" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Buscar Elemento6: <select name="cbx_elem5" id="cbx_elem5" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO WHERE ESTADO = 'Disponible'";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo5">Novedad elemento6</label>
           <select name="cbx_tipo5" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Buscar Elemento7: <select name="cbx_elem6" id="cbx_elem6" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO WHERE ESTADO = 'Disponible'";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo6">Novedad elemento7</label>
           <select name="cbx_tipo6" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Buscar Elemento8: <select name="cbx_elem7" id="cbx_elem7" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO WHERE ESTADO = 'Disponible'";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo7">Novedad elemento8</label>
           <select name="cbx_tipo7" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Buscar Elemento9: <select name="cbx_elem8" id="cbx_elem8" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO WHERE ESTADO = 'Disponible'";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo8">Novedad elemento9</label>
           <select name="cbx_tipo8" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Buscar Elemento10:<select name="cbx_elem9" id="cbx_elem9" style="opacity:40%;">
          
           <option value="0">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO  WHERE ESTADO = 'Disponible'";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select>
		   <label for="cbx_tipo9">Novedad Elemento10</label>
           <select name="cbx_tipo9" style="opacity:40%;">
           <option value="0">Seleccionar...</option>
                <option value="Prestado">Prestar</option>
           </select>
		   <p>Observaciones: <input type="text" style="opacity:40%;"name="txtobs" value="<?php echo $fila['OBS'] ?>"></p>
		   <br>
           <input type="submit" value="Actualizar" href="../Pagina/form_prestamos.php" class="btn1"> <br><br>
           <a href="../Pagina/form_prestamos.php" class="btn1">Retroceder</a> 
		      <a href="../Pagina/form_add_usu.php" class="btn1">Registrar</a> 
              <br><br>
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $nove=$_GET['cbx_nove'];
    $fechent=$_GET['txtfechent'];
    $horent=$_GET['txthorent'];
    $elem=$_GET['cbx_elem'];
    $elem1=$_GET['cbx_elem1'];
    $elem2=$_GET['cbx_elem2'];
    $elem3=$_GET['cbx_elem3'];
    $elem4=$_GET['cbx_elem4'];
    $elem5=$_GET['cbx_elem5'];
    $elem6=$_GET['cbx_elem6'];
    $elem7=$_GET['cbx_elem7'];
    $elem8=$_GET['cbx_elem8'];
    $elem9=$_GET['cbx_elem9'];
    $noved=$_GET['cbx_tipo'];
    $noved1=$_GET['cbx_tipo1'];
    $noved2=$_GET['cbx_tipo2'];
    $noved3=$_GET['cbx_tipo3'];
    $noved4=$_GET['cbx_tipo4'];
    $noved5=$_GET['cbx_tipo5'];
    $noved6=$_GET['cbx_tipo6'];
    $noved7=$_GET['cbx_tipo7'];
    $noved8=$_GET['cbx_tipo8'];
    $noved9=$_GET['cbx_tipo9'];
    $estado=$_GET['cbx_state'];
    $obs=$_GET['txtobs'];
	$user=$usuario;
            if($id!=null){
        $sql="INSERT INTO prestamos ( ID_USU,FECHA_ENTRE,HORA_ENTRE,OBS, ELEM_, DEV_ELEM, ELEM_1, DEV_ELEM1, ELEM_2, DEV_ELEM2, ELEM_3, DEV_ELEM3, ELEM_4, DEV_ELEM4, ELEM_5, DEV_ELEM5, ELEM_6, DEV_ELEM6, ELEM_7, DEV_ELEM7, ELEM_8, DEV_ELEM8, ELEM_9, DEV_ELEM9, ESTADO, OPER) VALUES ('$id',CURDATE(), CURTIME(),'$obs','$elem', '$noved','$elem1', '$noved1','$elem2', '$noved2','$elem3', '$noved3','$elem4', '$noved4','$elem5', '$noved5','$elem6', '$noved6','$elem7', '$noved7','$elem8', '$noved8','$elem9', '$noved9','$nove', '$user')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
			$sql1="UPDATE elemento SET  ESTADO='$noved' WHERE COD_ELEM ='$elem'";
        $resultado1=mysqli_query($conn,$sql1);
        if($resultado1){
			$sql2="UPDATE elemento SET  ESTADO='$noved1' WHERE COD_ELEM ='$elem1'";
        $resultado2=mysqli_query($conn,$sql2);
        if($resultado2){
			$sql3="UPDATE elemento SET  ESTADO='$noved2' WHERE COD_ELEM ='$elem2'";
        $resultado3=mysqli_query($conn,$sql3);
        if($resultado3){
			$sql4="UPDATE elemento SET  ESTADO='$noved3' WHERE COD_ELEM ='$elem3'";
        $resultado4=mysqli_query($conn,$sql4);
        if($resultado4){
			$sql5="UPDATE elemento SET  ESTADO='$noved4' WHERE COD_ELEM ='$elem4'";
        $resultado5=mysqli_query($conn,$sql5);
        if($resultado5){			
			$sql6="UPDATE elemento SET  ESTADO='$noved5' WHERE COD_ELEM ='$elem5'";
        $resultado6=mysqli_query($conn,$sql6);
        if($resultado6){			
			$sql7="UPDATE elemento SET  ESTADO='$noved6' WHERE COD_ELEM ='$elem6'";
        $resultado7=mysqli_query($conn,$sql7);
        if($resultado7){			
			$sql8="UPDATE elemento SET  ESTADO='$noved7' WHERE COD_ELEM ='$elem7'";
        $resultado8=mysqli_query($conn,$sql8);
        if($resultado8){			
			$sql9="UPDATE elemento SET  ESTADO='$noved8' WHERE COD_ELEM ='$elem8'";
        $resultado9=mysqli_query($conn,$sql9);
        if($resultado9){			
			$sql10="UPDATE elemento SET  ESTADO='$noved9' WHERE COD_ELEM ='$elem9'";
        $resultado10=mysqli_query($conn,$sql10);
        if($resultado10){
           echo '<script language="javascript">alert("Prestamo agregado con exito");</script>';
			  // echo 'insert';        
                 
                    echo '<script type="text/javascript"> window.location = " form_prestamos.php " </script>';
                    die();
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor verifique, \n el usuario ya tiene préstamo activo, \n ingrese por el módulo adicionar elemento.");</script>';
        }
      }       
			}
			}	
			}	
			}
			}	
			}
			}
			}
			}
			}
?>