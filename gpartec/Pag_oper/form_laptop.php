<?php
   session_start();
   $usuario= $_SESSION['username_oper'];
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
    <title>Laptops</title>
</head>
<body>
    <form action="">
        <h2>Formulario laptops</h2> <br><br>
        <a href="form_add_equipo.php">Agregar</a> <br><br>
        <a href="Mn_pc_oper.php">Retroceder</a>
        <div>
            <table>
                <tr>
                    <?php
                        include('../Controlador/conexion.php');

                        $sql="SELECT NUM_SERIE,MODELO,CARACTERISTICAS,MARCA,NUM_PLACA_SENA,TIPO_EQUIPO,NOMBRE_CUE,NOM_AMBIENTE,NOM_SEDE FROM CUENTADANTE INNER JOIN EQUIPO ON ID_CUE=RL_ID_CUE INNER JOIN AMBIENTE ON ITEM=RL_COD_AMB INNER JOIN SEDE ON NUM_SEDE=RL_COD_SEDE WHERE TIPO_EQUIPO='LAPTOP'";
                        $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                    <table>
                            <thead>
                                <tr>
                                <th>Tipo Equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Número de Serie</th>                               
                                <th>Características</th>                               
                                <th>Placa Sena</th>                               
                                <th>Cuentadante</th>
                                <th>Ambientes</th>
                                <th>Sede</th>
                                <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['TIPO_EQUIPO'] ?></td>
                                    <td><?php echo $row['MARCA'] ?></td>
                                    <td><?php echo $row['MODELO'] ?></td>
                                    <td><?php echo $row['NUM_SERIE'] ?></td>                                   
                                    <td><?php echo $row['CARACTERISTICAS'] ?></td>
                                    <td><?php echo $row['NUM_PLACA_SENA'] ?></td>                                   
                                    <td><?php echo $row['NOMBRE_CUE'] ?></td>
                                    <td><?php echo $row['NOM_AMBIENTE'] ?></td>
                                    <td><?php echo $row['NOM_SEDE'] ?></td>
                                    <td>
                                    <a href="form_edit_equipo.php?serie=<?php echo $row['NUM_SERIE'] ?>">Editar</a>                                       
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