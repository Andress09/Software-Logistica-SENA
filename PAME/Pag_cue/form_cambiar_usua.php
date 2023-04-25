<?php
    session_start();
    $usuario= $_SESSION['username_cue'];
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
 <link rel="stylesheet" href="../css/estilo_edit.css">
 <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;"><br><br>
        <h2>Cambiar de usuario</h2>
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:50px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <div>
    <form action=""   style=" ;margin-left:40%;width:500px;height: 400px;margin-top: 90px;border: 2px black solid;" autocomplete="OFF">
       
           <p>Número Préstamo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtnump" style="opacity:40%;"readonly value="<?php echo $fila['COD_REG'] ?>"></p>
		   <p>Número de documento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtid"style="opacity:40%;" readonly value="<?php echo $fila['ID_USU'] ?>"><br> Nombre Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtnuma" style="opacity:40%;"readonly value="<?php echo $fila['NOMBRE_CUE'] ?>"><br>
           <label for="cbx_nove">Novedad</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_nove" style="opacity:40%;">
                <option value="<?php echo $fila['ESTADO'] ?>"><?php echo $fila['ESTADO'] ?></option>
                <option value="Cambiar de usuario">Cambiar de usuario</option>
           </select> <br> Observaciones:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtobs" style="opacity:40%;"value="<?php echo $fila['OBS'] ?>"></p>
		    <p>Cambiar Usuario <select name="cbx_elem" style="opacity:40%;"id="cbx_elem">
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
           <a href="Mn_pc_cue.php" class="btn1">Retroceder</a>
           
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
                    header('location:Mn_pc_cue.php');                  
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al adicionar");</script>';
                }
            }
?>