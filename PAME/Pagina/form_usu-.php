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
    <title>Información de usuario</title>
</head>
<body>
    <form action="">
        <h2>Formulario usuario</h2> <br><br>
        <a href="form_add_usu.php">Agregar</a> <br><br>
        <a href="form_prestamos.php">Retroceder</a>
        <div>
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM CUENTADANTE ORDER BY ID_CUE ASC";
                $resultado=mysqli_query($conn,$sql);
            ?>
            <div>
                <table>
                    <thead>
                        <tr>
                        <th>Identificación</th>
                        <th>Nombre usuario</th>
                        <th>Contacto</th>
                        <th>Email</th>
                        <th>Coordinador</th>
                        <th>Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row=mysqli_fetch_assoc($resultado)){
                    ?>
                        <tr>
                            <td><?php echo $row['ID_CUE'] ?></td>
                            <td><?php echo $row['NOMBRE_CUE'] ?></td>
                            <td><?php echo $row['CONTAC_CUE'] ?></td>
                            <td><?php echo $row['CORREO'] ?></td>
                            <td><?php echo $row['COORD'] ?></td>
                            <td>
                            <a href="form_edit_usu.php?id=<?php echo $row['ID_CUE'] ?>">Editar</a>
                                
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
<br><br>
</html>