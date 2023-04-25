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
    <title> Operador</title>
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:50px;">
    </header>
<body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
<h2>Formulario Operador</h2> <br><br>
    <form action="">
       
   
    &nbsp; <a href="form_add_cue.php">Agregar</a><br><br>
        <a href="form_admin.php">Retroceder</a>
        <div>
            <table>
                <tr>
                <?php
                        include('../Controlador/conexion.php');
                        $sql="SELECT ID_CUE,NOMBRE_CUE,PASSWORD_CUE,CORREO,NOM_SEDE FROM OPERADOR INNER JOIN SEDE ON NUM_SEDE=SEDE_CUE";
                        $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                <th>Identificación </th>
                                <th>Nombre Cuentadante</th>
                                <th>Password</th>
                                <th>Correo</th>
                                <th>Sede Cuentadante</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['ID_CUE'] ?></td>
                                    <td><?php echo $row['NOMBRE_CUE'] ?></td>
                                    <td><?php echo $row['PASSWORD_CUE'] ?></td>
                                    <td><?php echo $row['CORREO'] ?></td>
                                    <td><?php echo $row['NOM_SEDE'] ?></td>
                                    <td>
                                    <a href="form_edit_cuentadante.php?id=<?php echo $row['ID_CUE'] ?>">Editar</a>
                                        
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