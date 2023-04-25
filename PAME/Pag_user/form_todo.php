<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/estilo_tablas.css">
    <title>Equipos</title>
</head>
<body>
    <form action="form_ambiente.php">
        <h2>Vista Equipo</h2> <br><br>
        <a href="Mn_pc_user.php">Retroceder</a> <br>
        <input type="text" name="buscar" id="buscar" Placeholder="Ingrese para buscar"> 
            <input type="submit" name="name" value="Buscar"> &nbsp;&nbsp;
        <div>
            <table>
                <tr>
                <?php
                error_reporting(0);
                include('../Controlador/conexion.php');
                $buscar=$_GET['buscar'];
                $sql="SELECT NOM_AMBIENTE,RL_CODE_SEDE,NUM_PISO,URL_CALENDAR FROM ambiente ";
                $resultado=mysqli_query($conn,$sql);
                    ?>
                    <div>
                        <table>
                            <thead>
                            <tr>
                                <th>Nombre Ambiente</th>                        
                                <th>Sede</th>                          
                                <th>piso</th>
                                <th>Agenda</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while ($row=mysqli_fetch_assoc($resultado)){
                            ?>
                                <tr>
                                    <td><?php echo $row['ITEM'] ?></td>
                                    <td><?php echo $row['NOM_AMBIENTE'] ?></td>
                                    <td><?php echo $row['RL_CODE_SEDE'] ?></td>
                                    <td><?php echo $row['NUM_PISO'] ?></td>
                                    <td><?php echo $row['URL_CALENDAR'] ?></td> 
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