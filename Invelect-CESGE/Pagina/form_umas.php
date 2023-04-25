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
    <title>UMAS</title>
</head>
<body>
    <form action="">
		<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Formulario UMAS</h2> <br><br>
        <a href="form_umas_add.php">Agregar</a> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM umas";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Referencia</th>
                                <th>Serial</th>
                                <th>Ref_correas</th>
                                <th>Breckets</th>
                                <th>Sede</th>
                                <th>Ambiente</th>
                                <th>Voltios</th>
                                <th>HP</th>
                                <th>Componentes</th>
                                <th>Observaciones</th>
							    <th>Edición</th>
								<th>Agregar actividad</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['ITEM'] ?></td>
                                    <td><?php echo $row['NOMBRE'] ?></td>                                    
                                    <td><?php echo $row['REFERENCIA'] ?></td>
                                    <td><?php echo $row['SER'] ?></td>
                                    <td><?php echo $row['REF_CORREAS'] ?></td>
                                    <td><?php echo $row['BRECKETS'] ?></td>
                                    <td><?php echo $row['SEDE'] ?></td>
                                    <td><?php echo $row['UBICACION'] ?></td>
                                    <td><?php echo $row['VOLTIOS'] ?></td>
                                    <td><?php echo $row['HP'] ?></td>
                                    <td><?php echo $row['COMPONENTES'] ?></td>
                                    <td><?php echo $row['OBSERVACIONES'] ?></td>
                                    <td><a href="form_umas_edit.php?serie=<?php echo $row['ITEM'] ?>">Editar</a></td>
									<td><a href="form_umas_nove.php?serie=<?php echo $row['ITEM'] ?>">Novedad</a></td>
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