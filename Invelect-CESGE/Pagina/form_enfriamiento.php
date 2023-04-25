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
    <title>Torres de enfriamiento</title>
</head>
<body>
    <form action="">
		<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Formulario Torres de Enfiramiento</h2> <br><br>
        <a href="form_enfriamiento_add.php">Agregar</a> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM enfriamiento";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Código</th>
                                <th>Tipo_ Equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Sede</th>
                                <th>Ubicacion</th>
                                <th>Cantidad</th>
                                <th>UN_medida</th>
                                <th>Edición</th>
								<th>Agregar actividad</th>
                                <th>Motores</th>

                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['ITEM'] ?></td>
                                    <td><?php echo $row['TIPO_EQUIPO'] ?></td>  
                                    <td><?php echo $row['MARCA'] ?></td>  
                                    <td><?php echo $row['MODELO'] ?></td>  
                                    <td><?php echo $row['SEDE'] ?></td>  
                                    <td><?php echo $row['UBICACION'] ?></td>                                    
                                    <td><?php echo $row['CANTIDAD'] ?></td>
                                    <td><?php echo $row['UN_MEDIDA'] ?></td>
                                    <td><a href="form_enfriamiento_edit.php?serie=<?php echo $row['ITEM'] ?>">Editar</a></td>
									<td><a href="form_enfriamiento_nove.php?serie=<?php echo $row['ITEM'] ?>">Novedad</a></td>
                                    <td><a href="form_motores.php?serie=<?php echo $row['ITEM'] ?>">Motores</a></td>
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