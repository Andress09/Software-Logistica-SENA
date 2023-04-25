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
    <title>Ambiente</title>
</head>
<body>
    <form action="">
        <h2>Formulario ambientes</h2> <br><br>
        <a href="Mn_pc_cue.php">Retroceder</a>
        <div>
            <table>
                <tr>
                <?php
                include('../Controlador/conexion.php');
                $sql="SELECT ITEM,NOM_AMBIENTE,NOM_SEDE FROM AMBIENTE INNER JOIN SEDE ON NUM_SEDE=RL_COD_SEDE ORDER BY ITEM ASC";
                $resultado=mysqli_query($conn,$sql);
            ?>
            <div>
                <table>
                    <thead>
                        <tr>
                        <th>Codigo Ambiente</th>
                        <th>Nombre Ambiente</th>
                        <th>Nombre Sede</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($row=mysqli_fetch_assoc($resultado)){
                    ?>
                        <tr>
                            <td><?php echo $row['ITEM'] ?></td>
                            <td><?php echo $row['NOM_AMBIENTE'] ?></td>
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