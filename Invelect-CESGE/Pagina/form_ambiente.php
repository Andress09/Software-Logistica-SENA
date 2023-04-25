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
    <title>Ambiente</title>
</head>
<body>
    <form action="">
	<h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Bienvenido: <?php echo $usuario ?></h2>
        <h2>Formulario ambientes</h2> <br><br>
        <a href="form_add_ambiente.php">Agregar</a> <br><br>
        <a href="Mn_ppal_adm.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT ITEM,NOM_AMBIENTE,NUM_PISO,NOM_SEDE FROM AMBIENTE INNER JOIN SEDE ON NUM_SEDE=RL_COD_SEDE ORDER BY ITEM ASC";
                $resultado=mysqli_query($conn,$sql);
            ?>
            <div style="background-color: cornsilk;">
                <table>
                    <thead>
                        <tr>
                        <th>Codigo Ambiente</th>
                        <th>Nombre Ambiente</th>
                        <th>Piso</th>
						<th>Nombre Sede</th>
                        <th>Editar</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row=mysqli_fetch_assoc($resultado)){
                    ?>
                        <tr>
                            <td><?php echo $row['ITEM'] ?></td>
                            <td><?php echo $row['NOM_AMBIENTE'] ?></td>
							<td><?php echo $row['NUM_PISO'] ?></td>
                            <td><?php echo $row['NOM_SEDE'] ?></td>
                            <td>
                            <a href="form_edit_ambiente.php?ambiente=<?php echo $row['ITEM'] ?>">Editar</a>
                                
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