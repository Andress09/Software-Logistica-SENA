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
    <title>Tableros</title>
</head>
<body>
    <form action="">
		<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Formulario tableros</h2> <br><br>
        <a href="form_tabler_add.php">Agregar</a> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM tableros";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Item</th>
                                <th>Nombre del tablero</th>
                                <th>Cantidad de circuitos</th>
                                <th>Espacios disponibles</th>
                                <th>Calibre alimentador</th>
                                <th>Num Lineas IN</th>
                                <th>Sede</th>
                                <th>Ubicacion</th>
                                <th>Alimentado por:</th>
                                <th>Editar</th>
								<th>Detallado</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['NUM_TAB'] ?></td>
                                    <td><?php echo $row['Nom_tab'] ?></td>
                                    <td><?php echo $row['Cant_ctos'] ?></td>
                                    <td><?php echo $row['Cant_disp'] ?></td>
                                    <td><?php echo $row['CALIB_CONDUC'] ?></td>
                                    <td><?php echo $row['NUM_LINE'] ?></td>
									<td><?php echo $row['Sede'] ?></td>
                                    <td><?php echo $row['Ubicacion'] ?></td>
                                    <td><?php echo $row['ALIMENT_POR'] ?></td>
                                    <td><a href="form_tabler_edit.php?serie=<?php echo $row['NUM_TAB'] ?>">Editar</a> 
									<td><a href="form_tabler_detal.php?serie=<?php echo $row['NUM_TAB'] ?>">Detallado</a> 
                                    </td>
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