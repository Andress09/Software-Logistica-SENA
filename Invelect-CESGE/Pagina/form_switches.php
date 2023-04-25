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
    <title>Switches</title>
</head>
<body>
    <form action="">
		<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Formulario switches</h2> <br><br>
        <a href="form_switches_add.php">Agregar</a> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM switches";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Sede</th>
                                <th>Ambiente</th>
                                <th>Cantidad de interruptores</th>
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
                                    <td><?php echo $row['NOM_SWITCHE'] ?></td>                                    
                                    <td><?php echo $row['MARCA'] ?></td>
                                    <td><?php echo $row['SEDE'] ?></td>
                                    <td><?php echo $row['AMBIENTE'] ?></td>
                                    <td><?php echo $row['CANTIDAD_INTERRUPTORES'] ?></td>
                                    <td><?php echo $row['TABLERO'] ?></td>
                                    <td><?php echo $row['CTO'] ?></td>
						            <td><a href="form_switches_edit.php?serie=<?php echo $row['ITEM'] ?>">Editar</a></td>
									<td><a href="form_switches_nove.php?serie=<?php echo $row['ITEM'] ?>">Novedad</a></td>
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