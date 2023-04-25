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
    $lamps=$_GET['serie'];
    $sql="SELECT * FROM fancoils WHERE ITEM='".$lamps."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
     <div style="background-color: cornsilk;">
     <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos del fancoils</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 3%;margin-right: 3%;"  autocomplete="OFF">
      <br>
         Item:<input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>">
         Nombre del fancoils: <input type="text" name="txt_nombre" readonly value="<?php echo $fila['NOM_FANCOILS'] ?>">
         Modelo:<input type="text" name="txtmodel" readonly value="<?php echo $fila['MODELO'] ?>"><br>
         Referencia: <input type="text" name="cbx_ref" readonly value="<?php echo $fila['REFERENCIA'] ?>"></p>
		 Serial:<input type="text" name="txt_ser" readonly value="<?php echo $fila['SER'] ?>">
		 Cantidad_motores:<input type="text" name="txt_cant" readonly value="<?php echo $fila['CANTIDAD_MOT'] ?>"><br>
         Motor1:<input type="text" name="txt_mot1" readonly value="<?php echo $fila['MOTOR1'] ?>">
         Motor2:<input type="text" name="cbx_mot2" readonly value="<?php echo $fila['MOTOR2'] ?>"></p>
         Breckets:<input type="text" name="cbx_brek" readonly value="<?php echo $fila['BRECKETS'] ?>"></p>
         Sede:<input type="text" name="cbx_sede" readonly value="<?php echo $fila['SEDE'] ?>"></p>
         Ambiente:<input type="text" name="cbx_ambiente" readonly value="<?php echo $fila['UBICACION'] ?>"></p>
         Cubre:<input type="text" name="cbx_cubre" readonly value="<?php echo $fila['CUBRE'] ?>"></p>
         Obs:<input type="text" name="cbx_obs" readonly value="<?php echo $fila['OBSERVACIONES'] ?>"></p>
         <br>
		 <a style="margin-right: 3%;margin: 5%;" href="form_fancoils_adnove.php?serie=<?php echo $row['ITEM']?>">Agregar novedad</a>
         <a href="form_fancoils.php" class="btn1">Retroceder</a><br><br>
		</form>
        <?php } ?>
    </div> 
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Agregar novedades al fancoils</title>
</head>
<body>
    <form action="">
	   <h2>Novedades en el fancoils</h2>
       <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
				$lamp=$_GET['ITEM'];
                $sql="SELECT * FROM novefancoils WHERE NOMBRE ='".$lamps."'";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Item</th>
                                <th>Fecha de la novedad</th>
                                <th>Nombre del fancoils</th>
                                <th>Actividad realizada</th>
                                <th>Estado del fancoils</th>
                                <th>Observaciones</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['RL_CODE_FANCOIL'] ?></td>
                                    <td><?php echo $row['FECHACT'] ?></td>
                                    <td><?php echo $row['NOMBRE'] ?></td>
                                    <td><?php echo $row['ACT_REALI'] ?></td>
                                    <td><?php echo $row['STATE'] ?></td>
                                    <td><?php echo $row['OBSERV'] ?></td>
                                    <td><a href="form_fancoils_adnove_edit.php?serie=<?php echo $row['RL_CODE_FANCOILS']?>">Editar</a> 
                                    </td>
                                </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </tr>
            </table> 
			<td>
        </div>
    </form>
</body>
</html>