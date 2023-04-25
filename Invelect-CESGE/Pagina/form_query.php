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
        <h2>Formulario Consulta</h2> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                    include('../Controlador/conexion.php');
                    $sql="SELECT * FROM SEDE";
                    $resultado=mysqli_query($conn,$sql);
                ?>
                <div>
                    <table>
                        <thead>
                            <tr>
                            <th>Nombre Sede</th>
                            <th>LED</th>
                            <th>Halógena</th>
                            <th>Fluorescente</th>
                            <th>Ahorrador</th>
                            <th>Panel LED</th>
                            <th>NOVEDADES</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=mysqli_fetch_assoc($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $row['NOM_SEDE'] ?></td>
								<td><a href="form_query_sede_led.php?sede=<?php echo $row['NUM_SEDE'] ?>">Consultar</a></td>   
								<td><a href="form_query_sede_halo.php?sede=<?php echo $row['NUM_SEDE'] ?>">Consultar</a></td>   
								<td><a href="form_query_sede_fluor.php?sede=<?php echo $row['NUM_SEDE'] ?>">Consultar</a></td>   
								<td><a href="form_query_sede_ahorra.php?sede=<?php echo $row['NUM_SEDE'] ?>">Consultar</a></td>   
								<td><a href="form_query_sede_pled.php?sede=<?php echo $row['NUM_SEDE'] ?>">Consultar</a></td>   
								<td><a href="form_query_nove.php?sede=<?php echo $row['NUM_SEDE'] ?>">Consultar</a></td>   
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