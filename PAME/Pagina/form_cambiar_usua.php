<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
    if(!isset($usuario)){
        header('location:../index.html');
    }else{
    }
?>
<?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $ambiente=$_GET['ambiente'];
    $sql="SELECT * FROM PRESTAMOS INNER JOIN CUENTADANTE ON ID_USU=ID_CUE WHERE COD_REG='".$ambiente."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
 <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
<body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
 <link rel="stylesheet" href="../css/estilo_edit.css">

 <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:120px;">
    </header>
    <div>
    <h2>Devolución de elementos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <form action=""   style="border:2px black solid;margin-top: 5%;margin-left: 30%;margin-right: 30%;" autocomplete="OFF">
       
           <p>Número Préstamo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  style="opacity:40%;"name="txtnump" readonly value="<?php echo $fila['COD_REG'] ?>"></p>
		   <p>Número de documento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="opacity:40%;" name="txtid" readonly value="<?php echo $fila['ID_USU'] ?>"><br>
           Nombre Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="opacity:40%;" name="txtnuma" readonly value="<?php echo $fila['NOMBRE_CUE'] ?>"><br> 
           <label for="cbx_nove">Novedad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
           <select name="cbx_nove" style="opacity:40%;">
           <option value="<?php echo $fila['ESTADO'] ?>"><?php echo $fila['ESTADO'] ?></option>
           <option value="Cambiar de usuario">Cambiar de usuario</option>
           </select>
           <br>Observaciones: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="opacity:40%;" name="txtobs" value="<?php echo $fila['OBS'] ?>"></p>
           <p>Cambiar Usuario <select name="cbx_elem" id="cbx_elem" style="opacity:40%;">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');			
				$sql3="TRUNCATE TABLE PRESTEMP";
				$resultado2=mysqli_query($conn,$sql3);
            $sql="SELECT ID_CUE , CONCAT FROM CUENTADANTE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_CUE'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <br>
		   <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="form_prestamos.php" class="btn1">Retroceder</a>
           <br><br>
        </form>
        <?php } ?>
    </div>
    <?php
    $idpres=$_GET['txtnump'];
    $estado=$_GET['cbx_nove'];
    $id=$_GET['cbx_elem'];
    $obs=$_GET['txtobs'];
		if($id!=null){
        $sql2="UPDATE PRESTAMOS SET ID_USU='$id' , ESTADO='$estado', HORA_CHANGUSU=CURTIME(), OBS='$obs'  WHERE COD_REG ='$idpres'";
        $resultado2=mysqli_query($conn,$sql2);
        if($resultado2){
                    echo '<script language="javascript">alert("Elementos adiconados con exito");</script>'; 
                    header('location:form_prestamos.php');                  
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al adicionar");</script>';
                }
            }
?>
</body>