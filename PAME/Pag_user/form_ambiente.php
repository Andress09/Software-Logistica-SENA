<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Ambientes</title>
</head>
<body>
    <form action="">
        <h2>Vista Ambientes</h2> <br><br>
        <a href="Mn_pc_user.php">Retroceder</a> <br><br>
        <center>
            <input type="submit" name="name" value="Ver historico" style="margin-left: 55px;;"> &nbsp;&nbsp;
            </center>
        <div>
            <table>
                <tr>
                <?php
                error_reporting(0);
                include('../Controlador/conexion.php');
                $buscar=$_GET['buscar'];
                $sql="SELECT COD_REG,FECHA_ENTRE,HORA_ENTRE,ESTADO,CONCAT FROM  historico INNER JOIN cuentadante ON ID_USU=ID_CUE";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                            <tr>
                                <th>Cod registro</th> 
                                <th>Nombre Usuario</th> 
                                <th>Fecha entrada</th> 
                                <th>Hora entrada</th>                        
                                <th>Estado</th>  
                            </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                            <tr>
                                    <td><?php echo $row['COD_REG'] ?></td>
                                    <td><?php echo $row['CONCAT'] ?></td>
                                    <td><?php echo $row['FECHA_ENTRE'] ?></td>
                                    <td><?php echo $row['HORA_ENTRE'] ?></td>
                                    <td><?php echo $row['ESTADO'] ?></td>
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