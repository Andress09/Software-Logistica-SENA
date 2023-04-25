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
    $sql="SELECT * FROM PRESTEMP";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>  
<link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
<link rel="stylesheet" href="../css/estilo_edit.css">
<div>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 6%;padding-top:20px;">
        <h2 style="margin: 5%;margin-left: 30%;margin-right: 35%;">Editar Usuario</h2>
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 82%;padding-top:10px;">
    </header>
   
    </div>
<body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
 
    <div> 
        <br><br>   
        
        
        <form action="" method="GET" style="border:2px black solid;margin: 2%;margin-left: 30%;margin-right: 35%;"  autocomplete="OFF">
     
           <p>Código del préstamo:<input type="text" name="txtid" readonly value="<?php echo $fila['NUM_PREST'] ?>" style="opacity:40%;"></p> 
           <p>Nombre Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtnom" value="<?php echo $fila['ID_USU'] ?>" style="opacity:40%;"></p>
           <p>Novedad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtnove" readonly value="<?php echo $fila['NOVEDAD'] ?>" style="opacity:40%;"></p>
		   </select></p>
		   <p>Buscar Elemento: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_elem" id="cbx_elem" style="opacity:40%;">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , NOM_ELEM,  FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['NOM_ELEM'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento1: <select name="cbx_elem1" id="cbx_elem1">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , NOM_ELEM FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['NOM_ELEM'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Observaciones: <input type="text" name="txtobs" value="<?php echo $fila['OBS'] ?>"></p>
		   
		   <br><br>
           <input type="submit" value="Actualizar" name="btn-actualizar" class="btn1"> <br><br>
           <a href="../Pagina/form_prestar.php" class="btn1">Retroceder</a> 
           <br><br>
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $nove=$_GET['txtnove'];
    $elem=$_GET['cbx_elem'];
    $elem1=$_GET['cbx_elem1'];
    $obs=$_GET['txtobs'];
            if($id=="" || $nom=="" ||$nove=="" || $elem=="" || $elem1=="" || $obs=="" ){
                $sql2="UPDATE PRESTEMP SET ID_USU='$nom', NOVEDAD='$nove' WHERE NUM_PREST='$id'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){ 
					$sql3="INSERT INTO PRESTAMOS (ID_USU, FECHA_ENTRE, HORA_ENTRE, NOVEDAD, ELEM_, ELEM_1, OBS) VALUES ('$nom', CURDATE(), CURTIME(), '$nove','$elem','$elem1', '$obs')";
						$resultado1=mysqli_query($conn,$sql3);
						if($resultado1){ 
							$sql3="TRUNCATE TABLE PRESTEMP";
							$resultado2=mysqli_query($conn,$sql3);
							header('location:form_prestar.php');
							}else{
								echo '<script language="javascript">alert("Alerta!!! \n no se pudo agregar prestamo");</script>';
									}
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
				            
?>