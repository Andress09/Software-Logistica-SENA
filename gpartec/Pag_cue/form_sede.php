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
    <title>Document</title>
</head>
<body>
    <form action="">
        <h2>Vista sedes</h2><br><br>
        <a href="Mn_pc_cue.php">Retroceder</a>
        <div>
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
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=mysqli_fetch_assoc($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $row['NUM_SEDE'] ?></td>
                                <td><?php echo $row['NOM_SEDE'] ?></td>
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