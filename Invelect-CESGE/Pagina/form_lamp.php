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
    <title>Lamparas</title>
</head>
<body>
    <form action="">
		<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Formulario Lámparas</h2> <br><br>
        <a href="form_lamp_add.php">Agregar</a> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM lamps ORDER BY ITEM ASC";;
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Sede</th>
								<th>Ambiente</th>
                                <th>Forma de fijar</th>                               
                                <th>Tipo de tubo</th>                               
                                <th>Tipo de socket</th>                               
                                <th>Tecnología</th>
                                <th>Cant Tubos</th>
								<th>Marca</th>
                                <th>Voltaje</th>
                                <th>Watts</th>
								<th>Amperaje</th>
								<th>Largo</th>
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
                                    <td><?php echo $row['NOM_LAMP'] ?></td>
                                    <td><?php echo $row['Sede'] ?></td>
                                    <td><?php echo $row['UBICACION'] ?></td>
                                    <td><?php echo $row['Tip_lamp'] ?></td>                                   
                                    <td><?php echo $row['Tip_tubo'] ?></td>
                                    <td><?php echo $row['Tip_sock'] ?></td>                                   
                                    <td><?php echo $row['Tecno'] ?></td>
                                    <td><?php echo $row['Cant_tubos'] ?></td>
                                    <td><?php echo $row['Marca'] ?></td>
									<td><?php echo $row['Volt'] ?></td>
									<td><?php echo $row['Watts'] ?></td>
									<td><?php echo $row['Amp'] ?></td>
									<td><?php echo $row['Largo'] ?></td>
									<td><?php echo $row['Tablero'] ?></td>
									<td><?php echo $row['Cto'] ?></td>
                                    <td><a href="form_lamp_edit.php?serie=<?php echo $row['ITEM'] ?>">Editar</a></td>
									<td><a href="form_lamp_nove.php?serie=<?php echo $row['ITEM'] ?>">Novedad</a></td>
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