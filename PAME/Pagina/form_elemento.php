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
    <title>Tabla elementos</title>
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 4%;padding-top:50px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:100px;">
    </header>
<body class="fondoIndex" style=" background-image: url('../Imgs/fondo1.jpeg');background-repeat: no-repeat;background-position: center center;
    background-attachment: fixed;background-size: cover;">
   
    <form action="" >
        <br>
        
        <h2>&nbsp;&nbsp;PAME SOFT</h2>
        <h2>&nbsp;&nbsp; Formulario Elementos</h2> <br><br>
        &nbsp;&nbsp;<a href="form_add_elem.php">Agregar</a> <br><br>
        <a href="form_query.php">Retroceder</a>
       
        <div>
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT * FROM ELEMENTO ";
                $resultado=mysqli_query($conn,$sql);
            ?>
            <div>
                <table>
                    <thead>
                        <tr>
                        <th>Codigo Elemento</th>
                        <th>Nombre Elemento</th>
                        <th>Características</th>
                        <th>Placa</th>
                        <th>Sede</th>
                        <th>Ubicación</th>
                        <th>Cuentadante</th>
                        <th>Editar</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row=mysqli_fetch_assoc($resultado)){
                    ?>
                        <tr>
                            <td><?php echo $row['COD_ELEM'] ?></td>
                            <td><?php echo $row['NOM_ELEM'] ?></td>
                            <td><?php echo $row['CAR_ELEM'] ?></td>
                            <td><?php echo $row['NUM_PLACA'] ?></td>
                            <td><?php echo $row['SEDE_ELEM'] ?></td>
                            <td><?php echo $row['UBIC_ELEM'] ?></td>
                            <td><?php echo $row['CUE'] ?></td>
                            <td>
                            <a href="form_edit_elem.php?id=<?php echo $row['COD_ELEM'] ?>">Editar</a>
                                
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