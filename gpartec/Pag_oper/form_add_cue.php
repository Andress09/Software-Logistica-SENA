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
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar cuentadante</title>
</head>
<body>
    <div>
        <form action=""   autocomplete="OFF">
        <h2>Agregar Cuentadante</h2>
           <p>Identificacion:<input type="text" name="txtid"></p> 
           <p>Nombre Cuentadante: <input type="text" name="txtnom"></p>
           <p>Password:<input type="password" name="txtpw"></p>
           <p>Correo:<input type="email" name="txtcorreo"></p>
           <p>Sede: <select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT NUM_SEDE,NOM_SEDE FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select></p>
             <br> <br>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> <br><br>
            <a href="form_cuentadante.php" class="btn1">Retroceder</a>

        </form>
    </div>
    <?php
    error_reporting(0);
    include('../Controlador/conexion.php');

    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $pw=$_GET['txtpw'];
    $correo=$_GET['txtcorreo'];
    $sede=$_GET['cbx_sede'];
    if($id!=null){
        $sql="INSERT INTO CUENTADANTE (ID_CUE, NOMBRE_CUE, PASSWORD_CUE,CORREO, SEDE_CUE) VALUES ('$id','$nom','$pw','$correo','$sede')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("Cuentadante agregado con exito");</script>';
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de cuentadante no sea existente");</script>';
        }
    }

?>
</body>
</html>