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
    $sql="SELECT * FROM lamps WHERE ITEM='".$lamps."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div style="background-color: cornsilk;">  
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de la luminaria</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""    style="border:2px black solid;margin: 3%;margin-left: 5%;margin-right: 5%;"   autocomplete="OFF">
      
         Item<input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>">
         Nombre de la luminiaria: <input type="text" name="txtnombre" readonly value="<?php echo $fila['NOM_LAMP'] ?>">
         Sede: <input type="text" name="cbx_sede" readonly value="<?php echo $fila['Sede'] ?>"></p>
		 Ubicación:<input type="text" name="txtambiente" readonly value="<?php echo $fila['UBICACION'] ?>">
		 Forma de Fijar:<input type="text" name="txtlamp" readonly value="<?php echo $fila['Tip_lamp'] ?>"><br>
		 Tipo de Luminaria:<input type="text" name="txtlamp" readonly value="<?php echo $fila['Tip_tubo'] ?>"></p>         
         Tipo de socket:<input type="text" name="txtsock" readonly value="<?php echo $fila['Tip_sock'] ?>">
         Tecnología:<input type="text" name="txtecno" readonly value="<?php echo $fila['Tecno'] ?>"><br>
         Cantidad de tubos:<input type="text" name="txtcantub" readonly value="<?php echo $fila['Cant_tubos'] ?>"></p>
         Marca:<input type="text" name="txtmarca" readonly value="<?php echo $fila['Marca'] ?>">
         Voltaje:<input type="text" name="txtvolt" readonly value="<?php echo $fila['Volt'] ?>">
         Watiaje:<input type="text" name="txtwatts" readonly value="<?php echo $fila['Watts'] ?>"></p>
         Amperaje:<input type="text" name="txtamp" readonly value="<?php echo $fila['Amp'] ?>">
         Tamaño:<input type="text" name="txtlargo" readonly value="<?php echo $fila['Largo'] ?>">
         Tablero:<input type="text" name="txtlargo" readonly value="<?php echo $fila['Tablero'] ?>"><br>
         Circuito:<input type="text" name="txtlargo" readonly value="<?php echo $fila['Cto'] ?>"></p>
         <br>
		 <a  style="margin-right: 3%;margin: 5%;" href="form_lamp_adnove.php?serie=<?php echo $row['ITEM']?>">Agregar novedad</a>
         <a href="form_lamp.php" class="btn1">Retroceder</a>
         <br><br>
		</form>
        <?php } ?>
    </div> 
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Agregar novedades a la luminaria</title>
</head>
<body>
    <form action="">
	   <h2>Novedades en la luminaria</h2>
       <div style="background-color: cornsilk;">  
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
				$lamp=$_GET['ITEM'];
                $sql="SELECT * FROM novelamp WHERE NUME_LAMP='".$lamps."'";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Item</th>
                                <th>Fecha de la novedad</th>
                                <th>Nombre de la Lámpara</th>
                                <th>Actividad realizada</th>
                                <th>Estado de la lámpara</th>
                                <th>Observaciones</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['RL_CODE_LAMP'] ?></td>
                                    <td><?php echo $row['FECHACT'] ?></td>
                                    <td><?php echo $row['NUME_LAMP'] ?></td>
                                    <td><?php echo $row['ACT_REALI'] ?></td>
                                    <td><?php echo $row['STATE'] ?></td>
                                    <td><?php echo $row['OBSERV'] ?></td>
                                    <td><a href="form_lamp_adnove_edit.php?serie=<?php echo $row['RL_CODE_LAMP']?>">Editar</a> 
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