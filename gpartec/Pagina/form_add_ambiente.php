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
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar Ambiente</title>
</head>
<body>
    <div>
    <h2>Agregar Ambiente</h2>
        <form action=""   style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
      
           <p>Nombre Ambiente: <input type="text" name="txtamb"></p>
           <p>Sede: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT NUM_SEDE,NOM_SEDE FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select></p> <br><br>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> <br><br>
            <a href="form_ambiente.php" class="btn1">Retroceder</a>
            <br><br>
        </form>
    </div>
    <?php
    error_reporting(0);
    include('../Controlador/conexion.php');

    $cod1=$_GET['txtcod1'];
    $amb=$_GET['txtamb'];
    $cod2=$_GET['cbx_sede'];
      if($cod2!=null){
        $sql="INSERT INTO AMBIENTE ( NOM_AMBIENTE, RL_COD_SEDE) VALUES ('$amb','$cod2')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("Ambiente agregado con exito!");</script>';
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de ambiente no sea existente");</script>';

        }
      }
?>
</body>
</html>