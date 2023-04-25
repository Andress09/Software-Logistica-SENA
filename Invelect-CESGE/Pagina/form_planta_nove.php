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
    $sql="SELECT * FROM planta WHERE NUM_PLANTA='".$lamps."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
   <div style="background-color: cornsilk;">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de planta</h2></p>
        <form action=""style="border:2px black solid;margin: 2%;margin-left: 3%;margin-right: 3%;"    autocomplete="OFF">
     
         Item:&nbsp;<input type="text" name="txtitem" readonly value="<?php echo $fila['NUM_PLANTA'] ?>">
         Nombre del toma:&nbsp; <input type="text" name="txtnombre" readonly value="<?php echo $fila['NOM_PLANTA'] ?>">
         Sede:&nbsp; <input type="text" name="cbx_sede" readonly value="<?php echo $fila['UBICACION'] ?>"></p>
		 Ambiente:<input type="text" name="txtambiente" readonly value="<?php echo $fila['AMBIENTE'] ?>">
		 Modelo:&nbsp;<input type="text" name="txtlamp" readonly value="<?php echo $fila['MODELO'] ?>">
         Serie:&nbsp;<input type="text" name="txtmarca" readonly value="<?php echo $fila['SERIE'] ?>">
          <br>Kva:&nbsp;&nbsp;&nbsp;<input type="text" name="txtvolt" readonly value="<?php echo $fila['KVA'] ?>">
          <br> Kw:<input type="text" name="txtlargo" readonly value="<?php echo $fila['KW'] ?>">
         Frecuencia_Hz:<input type="text" name="txtlargo" readonly value="<?php echo $fila['FRECUENCIA_Hz'] ?>"></p>
         Potencia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtlargo" readonly value="<?php echo $fila['POTENCIA'] ?>"></p>
         Combustible:&nbsp;<input type="text" name="txtlargo" readonly value="<?php echo $fila['VOLT_GEN'] ?>"></p><br>
		 <a style="margin-right: 3%;margin: 5%;"href="form_planta_adnove.php?serie=<?php echo $row['NUM_PLANTA']?>">Agregar novedad</a>
         <a href="form_planta.php" class="btn1">Retroceder</a>
         <br><br>
		</form>
        <?php } ?>
    </div> 
	
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Agregar novedades a la planta</title>
</head>
<body>
    <form action="">
	   <h2>Novedades de planta</h2>
       <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
				$lamp=$_GET['ITEM'];
                $sql="SELECT * FROM noveplanta WHERE NUM_PLANTA='".$lamps."'";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Item</th>
                                <th>Fecha de la novedad</th>
                                <th>Nombre de planta</th>
                                <th>Actividad realizada</th>
                                <th>Estado de planta</th>
                                <th>Observaciones</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['RL_CODE_PLANTA'] ?></td>
                                    <td><?php echo $row['FECHACT'] ?></td>
                                    <td><?php echo $row['NUM_PLANTA'] ?></td>
                                    <td><?php echo $row['ACT_REALI'] ?></td>
                                    <td><?php echo $row['STATE'] ?></td>
                                    <td><?php echo $row['OBSERV'] ?></td>
                                    <td><a href="form_planta_adnove_edit.php?serie=<?php echo $row['RL_CODE_PLANTA']?>">Editar</a> 
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