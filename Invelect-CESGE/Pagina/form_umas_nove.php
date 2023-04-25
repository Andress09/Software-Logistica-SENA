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
    $sql="SELECT * FROM motores WHERE ITEM='".$lamps."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
      <div style="background-color: cornsilk;">
      <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Datos de las UMAS</h2></p>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
<br>
         Item:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtitem" readonly value="<?php echo $fila['ITEM'] ?>"><br>
         Nombre UMAS:&nbsp;&nbsp;&nbsp;<input type="text" name="txtnombre"  value="<?php echo $fila['NOMBRE'] ?>"><br>
         Referencia:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cbx_ref"  value="<?php echo $fila['REFERENCIA'] ?>"></p>
		 Serial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ser"  value="<?php echo $fila['SER'] ?>"><br>
		 Ref_correas: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_correas"  value="<?php echo $fila['REF_CORREAS'] ?>"><br>
		 Breckets:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_brek"  value="<?php echo $fila['BRECKETS'] ?>"><br>
		 Sede: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_sede" value="<?php echo $fila['SEDE'] ?>"><br>
         Ubicacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ambiente"  value="<?php echo $fila['UBICACION'] ?>"><br>
         Voltios:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_vol"  value="<?php echo $fila['VOLTIOS'] ?>"><br>
         HP:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_hp" value="<?php echo $fila['HP'] ?>"><br>
		 Componentes: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_com" value="<?php echo $fila['COMPONENTES'] ?>"><br>
         Observaciones:&nbsp;&nbsp;&nbsp; <input type="text" name="txt_obs" value="<?php echo $fila['OBSERVACIONES'] ?>"><br><br>
		 <a  style="margin-right: 3%;margin: 5%;" href="form_umas_adnove.php?serie=<?php echo $row['ITEM']?>">Agregar novedad</a>
         <a href="form_umas.php" class="btn1">Retroceder</a>
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
    <title>Agregar novedades a las UMAS</title>
</head>
<body>
    <form action="">
	   <h2>Novedades en las UMAS</h2>
       <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
				$lamp=$_GET['ITEM'];
                $sql="SELECT * FROM noveumas WHERE NOMBRE='".$lamps."'";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Item</th>
                                <th>Fecha de la novedad</th>
                                <th>Nombre UMAS</th>
                                <th>Actividad realizada</th>
                                <th>Estado de UMAS</th>
                                <th>Observaciones</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['RL_CODE_UMAS'] ?></td>
                                    <td><?php echo $row['FECHACT'] ?></td>
                                    <td><?php echo $row['NOMBRE'] ?></td>
                                    <td><?php echo $row['ACT_REALI'] ?></td>
                                    <td><?php echo $row['STATE'] ?></td>
                                    <td><?php echo $row['OBSERV'] ?></td>
                                    <td><a href="form_umas_adnove_edit.php?serie=<?php echo $row['RL_CODE_UMAS']?>">Editar</a> 
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