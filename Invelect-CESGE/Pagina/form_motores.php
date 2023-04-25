<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
    if(!isset($usuario)){
        header('location:../index.html');
    }else{
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Motores</title>
</head>
<body>
    <form action="">
		<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Formulario Motores</h2> <br><br>
        <a href="form_motor_add.php">Agregar</a> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM motores";;
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Sede</th>
								<th>Ubicación</th>
                                <th>Fabricante</th>                               
                                <th>Modelo</th>                               
                                <th>Tipo</th>
								<th>Voltaje</th>
								<th>Watts</th>
                                <th>Amperaje</th>
								<th>Potencia</th>								
                                <th>Frecuencia</th>
                                <th>RPM</th>
                                <th>Tipo Conexión</th>
								<th>Cantidad de Fases</th>                                
								<th>F.M.M.</th>
								<th>Tablero</th>
								<th>Circuito</th>
								<th>Calibre Cable</th>
								<th>Uso</th>
								<th>Agregar TAB-CTO</th>
								<th>Edición</th>
								<th>Agregar actividad</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['ITEM'] ?></td>
                                    <td><?php echo $row['NOM_MOTOR'] ?></td>
                                    <td><?php echo $row['SEDE'] ?></td>
                                    <td><?php echo $row['UBICACION'] ?></td>
                                    <td><?php echo $row['FABRIC'] ?></td>                                   
                                    <td><?php echo $row['MODELO'] ?></td>
                                    <td><?php echo $row['TIP_MOT'] ?></td>                                   
                                    <td><?php echo $row['VOLT'] ?></td>
                                    <td><?php echo $row['WATTS'] ?></td>
                                    <td><?php echo $row['AMP'] ?></td>
									<td><?php echo $row['POT'] ?></td>
									<td><?php echo $row['FREC'] ?></td>
									<td><?php echo $row['RPM'] ?></td>
									<td><?php echo $row['TIP_CON'] ?></td>
									<td><?php echo $row['CANT_FASES'] ?></td>
									<td><?php echo $row['FMM'] ?></td>
									<td><?php echo $row['TABLERO'] ?></td>
									<td><?php echo $row['CTO'] ?></td>
									<td><?php echo $row['CALIBRE'] ?></td>
									<td><?php echo $row['USO'] ?></td>
                                    <td><a href="form_motortabcir_edit.php?serie=<?php echo $row['ITEM'] ?>">Editar</a></td>
                                    <td><a href="form_motor_edit.php?serie=<?php echo $row['ITEM'] ?>">Editar</a></td>
									<td><a href="form_motor_nove.php?serie=<?php echo $row['ITEM'] ?>">Novedad</a></td>
                                </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>