<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Equipos</title>
</head>
<body>
    <form action="#">
        <h2>Vista Equipo</h2> <br><br>
        <a href="Mn_pc_user.php">Retroceder</a> <br>
        <input type="text" name="buscar" id="buscar" Placeholder="Ingrese para buscar"> 
            <input type="submit" name="name" value="Buscar"> &nbsp;&nbsp;
            <input type="submit" name="todo" value="Ver todo" formaction="form_todo.php">
        <div>
            <table>
                <tr>
                <?php
                error_reporting(0);
                include('../Controlador/conexion.php');
                $buscar=$_GET['buscar'];
                $sql="SELECT NUM_SERIE,MODELO,CARACTERISTICAS,MARCA,NUM_PLACA_SENA,TIPO_EQUIPO,NOMBRE_CUE,NOM_AMBIENTE,NOM_SEDE FROM CUENTADANTE INNER JOIN EQUIPO ON ID_CUE=RL_ID_CUE INNER JOIN AMBIENTE ON ITEM=RL_COD_AMB INNER JOIN SEDE ON NUM_SEDE=RL_COD_SEDE WHERE NUM_SERIE='$buscar' || NUM_PLACA_SENA='$buscar' || NOMBRE_CUE='$buscar'";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                            <tr>
                                <th>Tiaracterísticas</th>                        
                                <th>Placa Sena</th>                          
                                <th>Tipo Equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Número de Serie</th>                         
                                <th>Cuentadante</th>
                                <th>Ambientes</th>
                                <th>Sede</th>
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