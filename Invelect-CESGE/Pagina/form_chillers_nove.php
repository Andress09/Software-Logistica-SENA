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
    $sql="SELECT * FROM chilers WHERE NUM_CHILLERS='".$lamps."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
     <div style="background-color: cornsilk;">
     <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos del Chillers</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 3%;margin-right: 3%;"  autocomplete="OFF">
      <br>
         Item:<input type="text" name="txtitem" readonly value="<?php echo $fila['NUM_CHILLERS'] ?>">
         Nombre del chillers: <input type="text" name="txt_nombre" readonly value="<?php echo $fila['NOMBRE_CHIL'] ?>">
         Marca:<input type="text" name="txtmarca" readonly value="<?php echo $fila['MARCA'] ?>"><br>
         Modelo: <input type="text" name="cbx_model" readonly value="<?php echo $fila['MODELO'] ?>"></p>
		 Referencia:<input type="text" name="txt_ref" readonly value="<?php echo $fila['REFERENCIA'] ?>">
		 Ser:<input type="text" name="txt_ser" readonly value="<?php echo $fila['SER'] ?>"><br>
         Cant_motores:<input type="text" name="txt_cant" readonly value="<?php echo $fila['CANT_MOTORES'] ?>">
         Motores1:<input type="text" name="cbx_motores1" readonly value="<?php echo $fila['MOTORES1'] ?>"></p>
         Motores2:<input type="text" name="cbx_motores2" readonly value="<?php echo $fila['MOTORES2'] ?>"></p>
         Circuito:<input type="text" name="cbx_cto" readonly value="<?php echo $fila['CIRCUITO'] ?>"></p>
         Ubicacion:<input type="text" name="cbx_ubi" readonly value="<?php echo $fila['UBICACION'] ?>"></p>
         Obs:<input type="text" name="cbx_obs" readonly value="<?php echo $fila['OBSERVACIONES'] ?>"></p>
         <br>
		 <a style="margin-right: 3%;margin: 5%;" href="form_chillers_adnove.php?serie=<?php echo $row['NUM_CHILLERS']?>">Agregar novedad</a>
         <a href="form_chillers.php" class="btn1">Retroceder</a><br><br>
		</form>
        <?php } ?>
    </div> 
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Agregar novedades al Chillers</title>
</head>
<body>
    <form action="">
	   <h2>Novedades en el Chillers</h2>
       <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
				$lamp=$_GET['ITEM'];
                $sql="SELECT * FROM novechillers WHERE NOM_CHILLERS ='".$lamps."'";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Item</th>
                                <th>Fecha de la novedad</th>
                                <th>Nombre del Chillers</th>
                                <th>Actividad realizada</th>
                                <th>Estado del Chillers</th>
                                <th>Observaciones</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['RL_CODE_CHILLERS'] ?></td>
                                    <td><?php echo $row['FECHACT'] ?></td>
                                    <td><?php echo $row['NOM_CHILLERS'] ?></td>
                                    <td><?php echo $row['ACT_REALI'] ?></td>
                                    <td><?php echo $row['ESTADO'] ?></td>
                                    <td><?php echo $row['OBSERVA'] ?></td>
                                    <td><a href="form_chillers_adnove_edit.php?serie=<?php echo $row['RL_CODE_CHILLERS']?>">Editar</a> 
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