
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
    <title>Información de usuario</title>
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:50px;">
    </header>
<body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br>
<h2>Formulario usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2> <br>
<form action="">
        <h2>Formulario usuario</h2> <br><br>
        <a href="form_query.php">Retroceder</a>
        <div>
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM CUENTADANTE INNER JOIN COOR ON COORD=ID_COORD ORDER BY ID_CUE ASC";
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
                        <th>Chat</th>
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
                            <td><?php echo $row['NOMBRE_COORD'] ?></td>							
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
<br><br>
</html>