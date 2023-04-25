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
    <title>Registro</title>
</head>
<body>
    <form action="">
        <h2>Formulario registros</h2> <br><br>
        <a href="form_add_registro.php">Agregar</a> <br><br>
        <a href="Mn_pc_oper.php">Retroceder</a>
        <div>
            <table>
                <tr>
                <?php
                    include('../Controlador/conexion.php');
            $sql="SELECT COD_REGISTRO, FECHA_REGISTRO,NOM_EQUIPO,RG_CUENTADANTE,RL_NUM_SERIE_REG,RL_COD_SEDE_REG,RL_COD_AMB_REG,FECH_SALIDA,FECH_RETORNO,OPERADOR,OBS FROM registro_equipos INNER JOIN equipo ON RL_NUM_SERIE_REG=NUM_SERIE INNER JOIN sede ON RL_COD_SEDE_REG=NUM_SEDE INNER JOIN ambiente ON RL_COD_AMB_REG=ITEM INNER JOIN operador ON OPERADOR=ID_OPE INNER JOIN cuentadante ON RG_CUENTADANTE=ID_CUE";
                    $resultado=mysqli_query($conn,$sql);
                ?>
                <div>
                    <table>
<thead>
                            <tr>
                            <th>Codigo Registro</th>
                            <th>Fecha Registro</th>
                            <th>Nombre equipo</th>
                            <th>Cuentadante</th>
                            <th>Serie</th>
                            <th>Sede</th>
                            <th>Ambiente</th>
                            <th>Fecha Salida</th>
                            <th>Fecha retorno</th>
                            <th>Operador</th>
                            <th>Observaciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=mysqli_fetch_assoc($resultado)){
                        ?>
                            <tr>
                                <td><?php echo $row['COD_REGISTRO'] ?></td>
                                <td><?php echo $row['FECHA_REGISTRO'] ?></td>
                                <td><?php echo $row['NOM_EQUIPO'] ?></td> 
                                <td><?php echo $row['RG_CUENTADANTE'] ?></td> 
                                <td><?php echo $row['RL_NUM_SERIE_REG'] ?></td> 
                                <td><?php echo $row['RL_COD_SEDE_REG'] ?></td>
                                <td><?php echo $row['RL_COD_AMB_REG'] ?></td>
                                <td><?php echo $row['FECH_SALIDA'] ?></td>  
                                <td><?php echo $row['FECH_RETORNO'] ?></td>  
                                <td><?php echo $row['OPERADOR'] ?></td>  
                                <td><?php echo $row['OBS'] ?></td>                        
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