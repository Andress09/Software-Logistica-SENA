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
    $numtab=$_GET['serie'];
    $sql="SELECT * FROM Tableros WHERE NUM_TAB='".$numtab."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""   autocomplete="OFF">
        <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Tablero eléctrico</h2></p>
         Numero de tablero:<input type="text" name="txtitem" readonly value="<?php echo $fila['NUM_TAB'] ?>">
         Nombre del tablero: <input type="text" name="txtnombre" readonly value="<?php echo $fila['Nom_tab'] ?>">
         Cantidad circuitos: <input type="text" name="txtcancir" readonly value="<?php echo $fila['Cant_ctos'] ?>"></p>
		 Calibre cable alimentador:<input type="text" name="txtcandisp" readonly value="<?php echo $fila['CALIB_CONDUC'] ?>">
		Numero de lineas de entrada:<input type="text" name="txtnumline" value="<?php echo $fila['NUM_LINE'] ?>"></p>		 
         Espacios disponibles:<input type="text" name="txtcandisp" readonly value="<?php echo $fila['Cant_disp'] ?>">
         Sede:<input type="text" name="txtsede" readonly value="<?php echo $fila['Sede'] ?>">
         Ubicacion:<input type="text" name="txtubic" readonly value="<?php echo $fila['Ubicacion'] ?>"></p>
		 Alimentado por:<input type="text" name="txtcalsal" value="<?php echo $fila['ALIMENT_POR'] ?>"></p>
		 <a href="form_addetal_tabler.php?serie=<?php echo $row['NUM_TAB']?>">Agregar</a>
         <a href="form_tabler.php" class="btn1">Retroceder</a>
		</form>
        <?php } ?>
    </div> 
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Distribucion de Tableros</title>
</head>
<body>
    <form action="">
	   <h2>Formulario detallado del tablero</h2>
         <div>
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM dist_tab";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Item</th>
                                <th>Tablero</th>
                                <th>Numero del circuito</th>
                                <th>Distribucion del circuito</th>
                                <th>Cantidad de luminarias</th>
                                <th>Cantidad de tomas</th>
                                <th>Calibre salida 	</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['Item_detab'] ?></td>
                                    <td><?php echo $row['RL_CODE_TAB'] ?></td>
                                    <td><?php echo $row['Num_cto'] ?></td>
                                    <td><?php echo $row['Distri'] ?></td>
                                    <td><?php echo $row['Cant_lumin'] ?></td>
                                    <td><?php echo $row['Cant_tomas'] ?></td>
                                    <td><?php echo $row['CAL_SAL'] ?></td>
                                    <td><a href="form_addedit_tabler.php?serie=<?php echo $row['Item_detab']?>">Editar</a> 
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