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
    $sql="SELECT * FROM enfriamiento WHERE ITEM='".$lamps."'";
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
         Item:<input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>">
         Nombre Torre enfriamiento: <input type="text" name="txt_nombre" readonly value="<?php echo $fila['TIPO_EQUIPO'] ?>">
         Marca:<input type="text" name="txtmarca" readonly value="<?php echo $fila['MARCA'] ?>"><br>
         Modelo: <input type="text" name="cbx_model" readonly value="<?php echo $fila['MODELO'] ?>"></p>
		 Sede:<input type="text" name="txt_ref" readonly value="<?php echo $fila['SEDE'] ?>">
		 Ambiente:<input type="text" name="txt_ser" readonly value="<?php echo $fila['UBICACION'] ?>"><br>
         Cantidad:<input type="text" name="txt_cant" readonly value="<?php echo $fila['CANTIDAD'] ?>">
         UN_medida:<input type="text" name="cbx_motores1" readonly value="<?php echo $fila['UN_MEDIDA'] ?>"></p>
         <br>
		 <a style="margin-right: 3%;margin: 5%;" href="form_enfriamiento_adnove.php?serie=<?php echo $row['TIPO_EQUIPO']?>">Agregar novedad</a>
         <a href="form_enfriamiento.php" class="btn1">Retroceder</a><br><br>
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
                $sql="SELECT * FROM noveenfriamiento WHERE TIPO_EQUIPO ='".$lamps."'";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Item</th>
                                <th>Fecha de la novedad</th>
                                <th>Nombre Torre Enfriamiento</th>
                                <th>Actividad realizada</th>
                                <th>Estado del torre</th>
                                <th>Observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['RL_CODE_ENFRIA'] ?></td>
                                    <td><?php echo $row['FECHACT'] ?></td>
                                    <td><?php echo $row['TIPO_EQUIPO'] ?></td>
                                    <td><?php echo $row['ACT_REALI'] ?></td>
                                    <td><?php echo $row['ESTADO'] ?></td>
                                    <td><?php echo $row['OBSERVA'] ?></td> 
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