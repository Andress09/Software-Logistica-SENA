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
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <title>Información del coordinador</title>
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding-top:40px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:50px;">
    </header>
<br><br>
<body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <form action="">
        <h2>Formulario coordinacion</h2> <br><br>
        &nbsp; <a href="form_add_coord.php">Agregar</a> <br><br>
        <a href="form_query.php">Retroceder</a>
        <div>
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM COOR ORDER BY ID_COORD ASC";
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
                        <th>Sede</th>
                        <th>Editar</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row=mysqli_fetch_assoc($resultado)){
                    ?>
                        <tr>
                            <td><?php echo $row['ID_COORD'] ?></td>
                            <td><?php echo $row['NOMBRE_COORD'] ?></td>
                            <td><?php echo $row['CONTACTO'] ?></td>
                            <td><?php echo $row['E_MAIL'] ?></td>
                            <td><?php echo $row['SEDE'] ?></td>
                            <td>
                            <a href="form_edit_coord.php?id=<?php echo $row['ID_COORD'] ?>">Editar</a>
                                
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