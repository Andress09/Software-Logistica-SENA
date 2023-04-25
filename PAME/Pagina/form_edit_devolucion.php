<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
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
<?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $prestamo=$_GET['prestamo'];
    $sql="SELECT * FROM PRESTAMOS INNER JOIN CUENTADANTE ON ID_USU=ID_CUE WHERE COD_REG ='".$prestamo."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?> <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
<title>Devolución completa</title>
<header>
   <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:60px;">
   <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:170px;">
</header>
<link rel="stylesheet" href="../css/estilo_edit.css">
<h2>Devolución completa de elementos &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</h2>
<body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
background-attachment: fixed;  background-size: cover;">
   <div>
       <form action=""   style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;" autocomplete="OFF">
       <p>Número Préstamo:&nbsp;&nbsp;&nbsp;<input type="text" name="txtnump" style="opacity:40%;"readonly value="<?php echo $fila['COD_REG'] ?>">
		   Estado:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtestado"style="opacity:40%;" readonly value="<?php echo $fila['ESTADO'] ?>"></p>
		   <p>Número documento: <input type="text" name="txtid"style="opacity:40%;" readonly value="<?php echo $fila['ID_USU'] ?>">
		   Nombre Usuario:<input type="text" name="txtnuma" style="opacity:40%;"readonly value="<?php echo $fila['NOMBRE_CUE'] ?>"> <br>
           <p>Fecha préstamo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtfechent" style="opacity:40%;"readonly value="<?php echo $fila['FECHA_ENTRE'] ?>">
		   Hora préstamo:&nbsp;&nbsp;&nbsp;<input type="text" name="txthorent" style="opacity:40%;"readonly value="<?php echo $fila['HORA_ENTRE'] ?>">
           <p>Hora adición:<input type="text" name="txtadd"style="opacity:40%;" readonly value="<?php echo $fila['HORA_ADDELEM'] ?>"> 
		   Hora devolución parcial:&nbsp;&nbsp;&nbsp;<input type="text" name="txtdevpar"style="opacity:40%;" readonly value="<?php echo $fila['HORA_DEVTEMP'] ?>"><br>
           Hora cambio usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcamus"style="opacity:40%;" readonly value="<?php echo $fila['HORA_CHANGUSU'] ?>"> 
		   <p>Fecha devolución:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtfedev" style="opacity:40%;"readonly value="<?php echo $fila['FECHA_DEV'] ?>">
		   Hora devolución:&nbsp;&nbsp;<input type="text" name="txthordev" style="opacity:40%;"readonly value="<?php echo $fila['HORA_DEV'] ?>">
           <p><label for="cbx_nove">Novedad</label>
           <select name="cbx_nove" style="opacity:40%;" >
                <option readonly value="Devuelto"><?php echo $fila['ESTADO'] ?></option>
                <option value="Devuelto">Devolver</option>
           </select></p>  
		   <p>Elemento 1:<input type="text" name="txtelem" style="opacity:40%;" readonly value="<?php echo $fila['ELEM_'] ?>">
		   <label for="cbx_estado">Novedad</label>
           <select name="cbx_estado" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM'] ?>"><?php echo $fila['DEV_ELEM'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p>
		   <p>Elemento 2:<input type="text" name="txtelem1" style="opacity:40%;" readonly value="<?php echo $fila['ELEM_1'] ?>">
           <label for="cbx_estado1">Novedad</label>
           <select name="cbx_estado1" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM1'] ?>"><?php echo $fila['DEV_ELEM1'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p></p>
		   <p>Elemento 3:<input type="text" name="txtelem2" style="opacity:40%;" readonly value="<?php echo $fila['ELEM_2'] ?>">
		   <label for="cbx_estado2">Novedad</label>
           <select name="cbx_estado2" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM2'] ?>"><?php echo $fila['DEV_ELEM2'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p></p>
		   <p>Elemento 4:<input type="text" name="txtelem3" style="opacity:40%;" readonly value="<?php echo $fila['ELEM_3'] ?>">
		   <label for="cbx_estado3">Novedad</label>
           <select name="cbx_estado3" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM3'] ?>"><?php echo $fila['DEV_ELEM3'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p></p>
		   <p>Elemento 5:<input type="text" name="txtelem4"style="opacity:40%;"  readonly value="<?php echo $fila['ELEM_4'] ?>">
		   <label for="cbx_estado4">Novedad</label>
           <select name="cbx_estado4" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM4'] ?>"><?php echo $fila['DEV_ELEM4'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p></p>
		   <p>Elemento 6:<input type="text" name="txtelem5"style="opacity:40%;"  readonly value="<?php echo $fila['ELEM_5'] ?>">
		   <label for="cbx_estado5">Novedad</label>
           <select name="cbx_estado5" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM5'] ?>"><?php echo $fila['DEV_ELEM5'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p></p>
		   <p>Elemento 7:<input type="text" name="txtelem6" style="opacity:40%;" readonly value="<?php echo $fila['ELEM_6'] ?>">
		   <label for="cbx_estado6">Novedad</label>
           <select name="cbx_estado6" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM6'] ?>"><?php echo $fila['DEV_ELEM6'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p></p>
		   <p>Elemento 8:<input type="text" name="txtelem7"style="opacity:40%;"  readonly value="<?php echo $fila['ELEM_7'] ?>">
		   <label for="cbx_estado7">Novedad</label>
           <select name="cbx_estado7" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM7'] ?>"><?php echo $fila['DEV_ELEM7'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p></p>
		   <p>Elemento 9:<input type="text" name="txtelem8" style="opacity:40%;" readonly value="<?php echo $fila['ELEM_8'] ?>">
		   <label for="cbx_estado8">Novedad</label>
           <select name="cbx_estado8" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM8'] ?>"><?php echo $fila['DEV_ELEM8'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p></p>
		   <p>Elemento 10:<input type="text" name="txtelem9" style="opacity:40%;" readonly value="<?php echo $fila['ELEM_9'] ?>">
		   <label for="cbx_estado9">Novedad</label>
           <select name="cbx_estado9" style="opacity:40%;" >
                <option value="<?php echo $fila['DEV_ELEM9'] ?>"><?php echo $fila['DEV_ELEM9'] ?></option>
                <option value="Disponible">Devolver</option>
           </select></p></p>
		   <p>Observaciones:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtobs" style="opacity:40%;" value="<?php echo $fila['OBS'] ?>"></p>
		   <p>Op Reg inicial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtoper" style="opacity:40%;" value="<?php echo $fila['OPER'] ?>"></p>
		   <p>Op Reg agregar:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtoperad"style="opacity:40%;"  value="<?php echo $fila['OPER_ADD'] ?>"></p>
		   <p>Op Reg cambio usuario: <input type="text" style="opacity:40%;" name="txtopecam" value="<?php echo $fila['OPER_CHAN'] ?>"></p>
		   <p>Op Reg retirar:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtoperet" style="opacity:40%;" value="<?php echo $fila['OPER_RET'] ?>"></p>
		   <br>
		   <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="form_prestamos.php" class="btn1">Retroceder</a>
           <br><br>
        </form>
        <?php } ?>
    </div>
    <?php
    $idpres=$_GET['txtnump'];
    $id=$_GET['txtid'];
    $fechent=$_GET['txtfechent'];
    $horent=$_GET['txthorent'];
    $horadd=$_GET['txtadd'];
    $hordevpar=$_GET['txtdevpar'];
    $horcambus=$_GET['txtcamus'];
    $hordev=$_GET['txthordev'];
	$fedevt=$_GET['txtfedev'];
    $obs=$_GET['txtobs'];
    $elem=$_GET['txtelem'];
    $state=$_GET['cbx_estado'];
    $elem1=$_GET['txtelem1'];
	$state1=$_GET['cbx_estado1'];
    $elem2=$_GET['txtelem2'];
	$state2=$_GET['cbx_estado2'];
    $elem3=$_GET['txtelem3'];
	$state3=$_GET['cbx_estado3'];
    $elem4=$_GET['txtelem4'];
	$state4=$_GET['cbx_estado4'];
    $elem5=$_GET['txtelem5'];
	$state5=$_GET['cbx_estado5'];
    $elem6=$_GET['txtelem6'];
	$state6=$_GET['cbx_estado6'];
    $elem7=$_GET['txtelem7'];
	$state7=$_GET['cbx_estado7'];
    $elem8=$_GET['txtelem8'];
	$state8=$_GET['cbx_estado8'];
    $elem9=$_GET['txtelem9'];
	$state9=$_GET['cbx_estado9'];
    $estado=$_GET['cbx_nove'];
	$oper=$_GET['txtoper'];
	$operad=$_GET['txtoperad'];
	$opecam=$_GET['txtopecam'];
	$operet=$_GET['txtoperet'];
	$user=$usuario;
	if($idpres!=null and $state !='Prestado' and $state1 !='Prestado' and $state2 !='Prestado' and $state3 !='Prestado' and $state4 !='Prestado' and $state5 !='Prestado' and $state6 !='Prestado'
		and $state7 !='Prestado' and $state8 !='Prestado' and $state9 !='Prestado'){$sql="INSERT INTO historico (ID_USU, FECHA_ENTRE, HORA_ENTRE, HORA_ADDELEM, HORA_DEVTEMP, HORA_CHANGUSU, FECHA_DEV, HORA_DEV, OBS,	ELEM_, DEV_ELEM, ELEM_1, DEV_ELEM1, 
		ELEM_2, DEV_ELEM2,ELEM_3, DEV_ELEM3, ELEM_4, DEV_ELEM4, ELEM_5, DEV_ELEM5,ELEM_6, DEV_ELEM6, ELEM_7, DEV_ELEM7,ELEM_8, DEV_ELEM8,ELEM_9, DEV_ELEM9, ESTADO,OPER, OPER_ADD, OPER_CHAN, OPER_RET, OPER_END) VALUES 
		('$id', '$fechent', '$horent','$horadd','$hordevpar','$horcambus',CURDATE(), CURTIME(),'$obs','$elem','$state','$elem1','$state1','$elem2','$state2', '$elem3','$state3','$elem4','$state4','$elem5','$state5','$elem6','$state6','$elem7','$state7','$elem8','$state8','$elem9','$state9', '$estado','$oper','$operad','$opecam',
					'$operet','$user')";
        $resultado=mysqli_query($conn,$sql);
		$sql1="UPDATE elemento SET  ESTADO='$state' WHERE COD_ELEM ='$elem'";
        $resultado1=mysqli_query($conn,$sql1);
        if($resultado1){
			$sql2="UPDATE elemento SET  ESTADO='$state1' WHERE COD_ELEM ='$elem1'";
        $resultado2=mysqli_query($conn,$sql2);
        if($resultado2){
			$sql3="UPDATE elemento SET  ESTADO='$state2' WHERE COD_ELEM ='$elem2'";
        $resultado3=mysqli_query($conn,$sql3);
        if($resultado3){
			$sql4="UPDATE elemento SET  ESTADO='$state3' WHERE COD_ELEM ='$elem3'";
        $resultado4=mysqli_query($conn,$sql4);
        if($resultado4){
			$sql5="UPDATE elemento SET  ESTADO='$state4' WHERE COD_ELEM ='$elem4'";
        $resultado5=mysqli_query($conn,$sql5);
        if($resultado5){			
			$sql6="UPDATE elemento SET  ESTADO='$state5' WHERE COD_ELEM ='$elem5'";
        $resultado6=mysqli_query($conn,$sql6);
        if($resultado6){			
			$sql7="UPDATE elemento SET  ESTADO='$state6' WHERE COD_ELEM ='$elem6'";
        $resultado7=mysqli_query($conn,$sql7);
        if($resultado7){			
			$sql8="UPDATE elemento SET  ESTADO='$state7' WHERE COD_ELEM ='$elem7'";
        $resultado8=mysqli_query($conn,$sql8);
        if($resultado8){			
			$sql9="UPDATE elemento SET  ESTADO='$state8' WHERE COD_ELEM ='$elem8'";
        $resultado9=mysqli_query($conn,$sql9);
        if($resultado9){			
			$sql10="UPDATE elemento SET  ESTADO='$state9' WHERE COD_ELEM ='$elem9'";
        $resultado10=mysqli_query($conn,$sql10);
        if($resultado10){$sql11="DELETE FROM prestamos WHERE COD_REG ='$idpres'";
				$resultado11=mysqli_query($conn,$sql11);
				if($resultado11){
                    echo '<script language="javascript">alert("Elementos retirados con exito");</script>'; 
                    header('location:form_prestamos.php');    
    
        }}}}}}}}}}}} elseif ($idpres!=null and $state !='Disponible' or $state1 !='Disponible' or $state2 !='Disponible' or $state3 !='Disponible' or $state4 !='Disponible' or $state5 !='Disponible' or $state6 !='Disponible'
		or $state7 !='Disponible' or $state8 !='Disponible' or $state9 !='Disponible') {$sql1="UPDATE PRESTAMOS SET ESTADO='$estado', HORA_DEVTEMP=CURTIME(), DEV_ELEM = '$state', DEV_ELEM1 = '$state1', DEV_ELEM2 = '$state2', DEV_ELEM3 = '$state3',
		DEV_ELEM4 = '$state4', DEV_ELEM5 = '$state5', DEV_ELEM6 = '$state6', DEV_ELEM7 = '$state7', DEV_ELEM8 = '$state8',DEV_ELEM9 = '$state9', OBS='$obs', OPER_RET = '$user'  WHERE COD_REG ='$idpres'";
		$resultado1=mysqli_query($conn,$sql1);
				if($resultado1){$sql1="UPDATE elemento SET  ESTADO='$state' WHERE COD_ELEM ='$elem'";
        $resultado1=mysqli_query($conn,$sql1);
        if($resultado1){
			$sql2="UPDATE elemento SET  ESTADO='$state1' WHERE COD_ELEM ='$elem1'";
        $resultado2=mysqli_query($conn,$sql2);
        if($resultado2){
			$sql3="UPDATE elemento SET  ESTADO='$state2' WHERE COD_ELEM ='$elem2'";
        $resultado3=mysqli_query($conn,$sql3);
        if($resultado3){
			$sql4="UPDATE elemento SET  ESTADO='$state3' WHERE COD_ELEM ='$elem3'";
        $resultado4=mysqli_query($conn,$sql4);
        if($resultado4){
			$sql5="UPDATE elemento SET  ESTADO='$state4' WHERE COD_ELEM ='$elem4'";
        $resultado5=mysqli_query($conn,$sql5);
        if($resultado5){			
			$sql6="UPDATE elemento SET  ESTADO='$state5' WHERE COD_ELEM ='$elem5'";
        $resultado6=mysqli_query($conn,$sql6);
        if($resultado6){			
			$sql7="UPDATE elemento SET  ESTADO='$state6' WHERE COD_ELEM ='$elem6'";
        $resultado7=mysqli_query($conn,$sql7);
        if($resultado7){			
			$sql8="UPDATE elemento SET  ESTADO='$state7' WHERE COD_ELEM ='$elem7'";
        $resultado8=mysqli_query($conn,$sql8);
        if($resultado8){			
			$sql9="UPDATE elemento SET  ESTADO='$state8' WHERE COD_ELEM ='$elem8'";
        $resultado9=mysqli_query($conn,$sql9);
        if($resultado9){			
			$sql10="UPDATE elemento SET  ESTADO='$state9' WHERE COD_ELEM ='$elem9'";
        $resultado10=mysqli_query($conn,$sql10);
        if($resultado10){
            //  echo '<script language="javascript">alert("Elementos retirados con exito");</script>'; 
            header('location:form_prestamos.php');      }			
            // echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor verifique, \n el usuario ya tiene préstamo activo, \n ingrese por el módulo adicionar elemento.");</script>';
		} }}}}}}}}}}else {
    echo '<script language="javascript">alert("Alerta!!! \por favor verifique);</script>';
}
?>