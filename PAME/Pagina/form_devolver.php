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
    $sql="SELECT * FROM PRESTAMOS WHERE ID_USU= ";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div> 
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
        <form action=""   autocomplete="OFF">
        <h2>Editar Usuario</h2>
           <p>Código del préstamo:<input type="text" name="txtid" readonly value="<?php echo $fila['NUM_PREST'] ?>"></p> 
           <p>Nombre Usuario: <input type="text" name="txtnom" value="<?php echo $fila['ID_USU'] ?>"></p>
           <p>Novedad: <input type="text" name="txtnove" readonly value="<?php echo $fila['NOVEDAD'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem" value="<?php echo $fila['ELEM_'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem1" value="<?php echo $fila['ELEM_1'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem2" value="<?php echo $fila['ELEM_2'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem3" value="<?php echo $fila['ELEM_3'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem4" value="<?php echo $fila['ELEM_4'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem5" value="<?php echo $fila['ELEM_5'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem6" value="<?php echo $fila['ELEM_6'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem7" value="<?php echo $fila['ELEM_7'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem8" value="<?php echo $fila['ELEM_8'] ?>"></p>
		   <p>Codigo elemento: <input type="text" name="txtelem9" value="<?php echo $fila['ELEM_9'] ?>"></p>
		   <p>Observaciones: <input type="text" name="txtobs" value="<?php echo $fila['OBS'] ?>"></p>
		   
		   <br><br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="../Pagina/form_prestar.php" class="btn1">Retroceder</a> 
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $nove=$_GET['txtnove'];
    $elem=$_GET['txtelem'];
    $elem1=$_GET['txtelem1'];
    $elem2=$_GET['txtelem2'];
    $elem3=$_GET['txtelem3'];
    $elem4=$_GET['txtelem4'];
    $elem5=$_GET['txtelem5'];
    $elem6=$_GET['txtelem6'];
    $elem7=$_GET['txtelem7'];
    $elem8=$_GET['txtelem8'];
    $elem9=$_GET['txtelem9'];
    $obs=$_GET['txtobs'];
            if($id!=null){
                $sql2="UPDATE PRESTEMP SET ID_USU='$nom', NOVEDAD='$nove', ELEM_='$elem', ELEM_1='$elem1', ELEM_2='$elem2', ELEM_3='$elem3', ELEM_4='$elem4', ELEM_5='$elem5', ELEM_6='$elem6', ELEM_7='$elem7', ELEM_8='$elem8', ELEM_9='$elem9'  WHERE NUM_PREST='$id'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){ 
					$sql3="INSERT INTO PRESTAMOS (ID_USU, DATIME_PREST, NOVEDAD, ELEM_, ELEM_1,ELEM_2,ELEM_3,ELEM_4,ELEM_5,ELEM_6,ELEM_7,ELEM_8,ELEM_9, OBS) VALUES ('$nom',NOW(),'$nove','$elem','$elem1','$elem2','$elem3','$elem4','$elem5','$elem6','$elem7','$elem8','$elem9', '$obs')";
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