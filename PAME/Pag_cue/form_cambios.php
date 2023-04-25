<?php
    session_start();
    $usuario= $_SESSION['username_cue'];
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
    <title>Cambiar usuario al préstamo</title>
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;"><br><br>
      
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:50px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <form action="">
        <h2>Formulario cambio de usuario al préstamo</h2> <br><br>
        <a href="Mn_pc_cue.php">Regresar</a>
        <div>
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM PRESTAMOS INNER JOIN CUENTADANTE ON ID_USU=ID_CUE ORDER BY COD_REG ASC";
                $resultado=mysqli_query($conn,$sql);
            ?>
            <div>
                <table>
                    <thead>
                        <tr>
                        <th>Codigo préstamo</th>
                        <th>Id de Usuario</th>
                        <th>Nombre Usuario</th>
                        <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row=mysqli_fetch_assoc($resultado)){
                    ?>
                        <tr>
                            <td><?php echo $row['COD_REG'] ?></td>
                            <td><?php echo $row['ID_USU'] ?></td>
                            <td><?php echo $row['NOMBRE_CUE'] ?></td>
                            <td>
                            <a href="form_cambiar_usua.php?ambiente=<?php echo $row['COD_REG'] ?>">cambiar de usuario</a>
                                
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