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
    <title>Registro</title>
</head>
<body>
    <form action=""   autocomplete="OFF">
        <h2>Formulario registro</h2><br><br>
        <a href="form_add_registro.php">Agregar</a> <br> <br> <br> 
        <a href="Mn_pc_cue.php">Retroceder</a>
        <div>
            <table>
                <tr>
                <?php
                    include('../Controlador/conexion.php');
                    $sql="SELECT COD_REGISTRO,FECHA_REGISTRO,ENCARGADO_REGISTRO,RL_COD_SEDE_REG,NUM_PLACA_SENA,RL_COD_AMB_REG,RL_NUM_SERIE_REG,TIPO_EQUIPO FROM registro_equipos INNER JOIN equipo ON NUM_SERIE=RL_NUM_SERIE_REG ORDER BY COD_REGISTRO DESC ";
                    $resultado=mysqli_query($conn,$sql);
                ?>
                <div>
                    <table>
                        <thead>
                            <tr>
                            <th>Codigo Registro</th>
                            <th>Fecha Registro</th>
                            <th>Encargado Registro</th>
                            <th>Equipo</th>
                            <th>Serie de equipo</th>
                            <th>Placa</th>
                            <th>Sede</th>
                            <th>Ambiente</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=mysqli_fetch_assoc($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $row['COD_REGISTRO'] ?></td>
                                <td><?php echo $row['FECHA_REGISTRO'] ?></td>
                                <td><?php echo $row['ENCARGADO_REGISTRO'] ?></td>
                                <td><?php echo $row['TIPO_EQUIPO'] ?></td>
                                <td><?php echo $row['RL_NUM_SERIE_REG'] ?></td>  
                                <td><?php echo $row['NUM_PLACA_SENA'] ?></td>  
                                <td><?php echo $row['RL_COD_SEDE_REG'] ?></td>
                                <td><?php echo $row['RL_COD_AMB_REG'] ?></td>                           
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