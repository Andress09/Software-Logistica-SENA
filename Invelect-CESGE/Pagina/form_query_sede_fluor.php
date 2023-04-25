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
    <title>Invelect-Sedes</title>
</head>
<body>
    <form action="">
		<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Bienvenido: <?php echo $usuario ?></h2>
        <h2>Formulario Consulta Fluorescente</h2> <br><br>
        <a href="form_query.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                    include('../Controlador/conexion.php');
                    $sql="SELECT sede.NOM_SEDE, lamps.NOM_LAMP AS sede_lamp, NOM_LAMP FROM sede, lamps WHERE Sede.NUM_SEDE=lamps.Sede AND (lamps.Tecno='Fluorescente')";
                    $resultado=mysqli_query($conn,$sql);
                ?>
                <div>
                    <table>
                        <thead>
                            <tr>
                            <th>Nombre Sede</th>
                            <th>Luminaria LED</th>
							</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=mysqli_fetch_assoc($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $row['NOM_SEDE'] ?></td>
                                <td><?php echo $row['NOM_LAMP'] ?></td>
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