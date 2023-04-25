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
    <title>Toma corrientes</title>
</head>
<body>
    <form action="">
		<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Formulario Tomacorrientes</h2> <br><br>
        <a href="form_toma_add.php">Agregar</a> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM tomas";;
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
                                <th>Tipo de toma</th>
								<th>Marca</th>
                                <th>Voltaje</th>
                                <th>Calibre</th>
								<th>Tablero</th>
								<th>Circuito</th>
								<th>Edición</th>
								<th>Agregar actividad</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['ITEM'] ?></td>
                                    <td><?php echo $row['NOM_TOMA'] ?></td>
                                    <td><?php echo $row['SEDE'] ?></td>
                                    <td><?php echo $row['UBICACION'] ?></td>
                                    <td><?php echo $row['TIP_TOMA'] ?></td>
                                    <td><?php echo $row['MARCA'] ?></td>
									<td><?php echo $row['VOLT'] ?></td>
                                    <td><?php echo $row['CALIBRE'] ?></td>
									<td><?php echo $row['TABLERO'] ?></td>
									<td><?php echo $row['CTO'] ?></td>
                                    <td><a href="form_toma_edit.php?serie=<?php echo $row['ITEM'] ?>">Editar</a></td>
									<td><a href="form_toma_nove.php?serie=<?php echo $row['ITEM'] ?>">Novedad</a></td>
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