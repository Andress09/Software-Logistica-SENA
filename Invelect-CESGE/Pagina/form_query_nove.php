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
        <a href="form_query.php">Retroceder</a>
        <div style="background-color: cornsilk;">
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM novelamp ORDER BY FECHACT ASC";;
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>ITEM</th>
                                <th>Fecha</th>
                                <th>Numero luminaria</th>
								<th>Actividad Realizada</th>
                                <th>Estado</th>                               
                                <th>Observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['RL_CODE_LAMP'] ?></td>
                                    <td><?php echo $row['FECHACT'] ?></td>
                                    <td><?php echo $row['NUME_LAMP'] ?></td>
                                    <td><?php echo $row['ACT_REALI'] ?></td>
                                    <td><?php echo $row['STATE'] ?></td>                                   
                                    <td><?php echo $row['OBSERV'] ?></td>
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