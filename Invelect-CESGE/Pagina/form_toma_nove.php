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
    $sql="SELECT * FROM TOMAS WHERE ITEM='".$lamps."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
   <div style="background-color: cornsilk;">
   <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos del tomacorriente</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 3%;margin-right: 3%;"   autocomplete="OFF">
   <br>
         Item<input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>">
         Nombre del toma: <input type="text" name="txtnombre" readonly value="<?php echo $fila['NOM_TOMA'] ?>">
         Sede: <input type="text" name="cbx_sede" readonly value="<?php echo $fila['SEDE'] ?>"></p>
		 Ubicación:<input type="text" name="txtambiente" readonly value="<?php echo $fila['UBICACION'] ?>">
		 Tipo de toma:<input type="text" name="txtlamp" readonly value="<?php echo $fila['TIP_TOMA'] ?>">
         Marca:<input type="text" name="txtmarca" readonly value="<?php echo $fila['MARCA'] ?>">
         Voltaje:<input type="text" name="txtvolt" readonly value="<?php echo $fila['VOLT'] ?>">
         Tablero:<input type="text" name="txtlargo" readonly value="<?php echo $fila['TABLERO'] ?>">
         Circuito:<input type="text" name="txtlargo" readonly value="<?php echo $fila['CTO'] ?>"></p><br>
		 <a style="margin-right: 3%;margin: 5%;" href="form_toma_adnove.php?serie=<?php echo $row['ITEM']?>">Agregar novedad</a>
         <a href="form_tomas.php" class="btn1">Retroceder</a>
         <br><br><br>
		</form>
        <?php } ?>
    </div> 
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Agregar novedades al tomacorriente</title>
</head>
<body>
    <form action="">
	   <h2>Novedades en el tomacorriente</h2>
       <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
				$lamp=$_GET['ITEM'];
                $sql="SELECT * FROM novetoma WHERE NUME_TOMA='".$lamps."'";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Item</th>
                                <th>Fecha de la novedad</th>
                                <th>Nombre del tomacorriente</th>
                                <th>Actividad realizada</th>
                                <th>Estado del toma</th>
                                <th>Observaciones</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['RL_CODE_TOMA'] ?></td>
                                    <td><?php echo $row['FECHACT'] ?></td>
                                    <td><?php echo $row['NUME_TOMA'] ?></td>
                                    <td><?php echo $row['ACT_REALI'] ?></td>
                                    <td><?php echo $row['STATE'] ?></td>
                                    <td><?php echo $row['OBSERV'] ?></td>
                                    <td><a href="form_toma_adnove_edit.php?serie=<?php echo $row['RL_CODE_TOMA']?>">Editar</a> 
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