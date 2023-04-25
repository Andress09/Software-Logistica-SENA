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
    <title>Planta</title>
</head>
<body>
    <form action="">
		<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Formulario plantas</h2> <br><br>
        <a href="form_planta_add.php">Agregar</a> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM planta";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                     <div style="background-color: cornsilk;">
                        <table>
                            <thead>
                                <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Sede</th>
								<th>Ambiente</th>
                                <th>Modelo</th>
								<th>Serie</th>
                                <th>KVA</th>
                                <th>KW</th>
								<th>Frecuencia_Hz</th>
								<th>Potencia</th>
								<th>Combustible</th>
								<th>Voltaje generado</th>
                                <th>Editar</th>
                                <th>Novedad </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['NUM_PLANTA'] ?></td>
                                    <td><?php echo $row['NOM_PLANTA'] ?></td>
                                    <td><?php echo $row['UBICACION'] ?></td>
                                    <td><?php echo $row['AMBIENTE'] ?></td>
                                    <td><?php echo $row['MODELO'] ?></td>
                                    <td><?php echo $row['SERIE'] ?></td>
                                    <td><?php echo $row['KVA'] ?></td>
									<td><?php echo $row['KW'] ?></td>
                                    <td><?php echo $row['FRECUENCIA_Hz'] ?></td>
                                    <td><?php echo $row['POTENCIA'] ?></td>
									<td><?php echo $row['COMBUSTIBLE'] ?></td>
									<td><?php echo $row['VOLT_GEN'] ?></td>
                                    <td><a href="form_planta_edit.php?planta=<?php echo $row['NUM_PLANTA'] ?>">Editar</a></td>
									<td><a href="form_planta_nove.php?serie=<?php echo $row['NUM_PLANTA'] ?>">Novedad</a></td>
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