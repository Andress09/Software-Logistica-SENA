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
    <title>Sedes</title>
</head>
<body>
    <form action="">
        <h2>Formulario Sedes</h2> <br><br>
        <a href="form_add_sede.php">Agregar</a> <br><br>
        <a href="Mn_pc_adm.php">Retroceder</a>
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
                            <th>Codigo Sede</th>
                            <th>Nombre Sede</th>
                            <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=mysqli_fetch_assoc($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $row['NUM_SEDE'] ?></td>
                                <td><?php echo $row['NOM_SEDE'] ?></td>
                                <td>
                                <a href="form_edit_sede.php?sede=<?php echo $row['NUM_SEDE'] ?>">Editar</a>       
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