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
        <title>Mostrar  elementos</title>
         <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    </head>
    <body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 4%;padding-top:50px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:70px;">
    </header>
        <form action="">
            <h2>Elementos pendientes por devolución</h2> <br><br>
            <a href="form_prestamos.php">Regresar</a>
            <div>
                <table>
                    <tr>
                    <?php
                    include('../Controlador/conexion.php');
                    $sql="SELECT * FROM prestamos INNER JOIN cuentadante ON ID_USU=ID_CUE INNER JOIN elemento ON  ELEM_=COD_ELEM OR ELEM_1=COD_ELEM OR ELEM_2=COD_ELEM OR ELEM_2=COD_ELEM OR ELEM_3=COD_ELEM OR ELEM_4=COD_ELEM OR ELEM_5=COD_ELEM OR ELEM_6=COD_ELEM OR ELEM_7=COD_ELEM OR ELEM_8=COD_ELEM OR ELEM_9=COD_ELEM ORDER BY COD_REG ASC";
                    $resultado=mysqli_query($conn,$sql);
                ?>
                <div>
                    <table>
                        <thead>
                            <tr>
                            <th>Código préstamo</th>
                            <th>ID Usuario</th>
                            <th>Nombre usuario</th>
                            <th>Elemento</th>
                            <th>Estado</th>
                            <th>Fecha del préstamo</th>
                            <th>Hora del préstamo</th>
							<th>Chat</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=mysqli_fetch_assoc($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $row['COD_REG'] ?></td>
                                <td><?php echo $row['ID_USU'] ?></td>
                                <td><?php echo $row['NOMBRE_CUE'] ?></td>
                                <td><?php echo $row['CONCAT'] ?></td>
                                <td><?php echo $row['ESTADO'] ?></td>
                                <td><?php echo $row['FECHA_ENTRE'] ?></td>
                                <td><?php echo $row['HORA_ENTRE'] ?></td>							
								<td><a href="<?php echo $row['WHATSAPP']?>">Chat</a></td>
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