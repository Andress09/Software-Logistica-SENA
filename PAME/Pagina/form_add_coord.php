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
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <title>Agregar coordinador</title>
        </head>
        <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:120px;">
    </header>
    <h2>Agregar coordinador&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
           <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
            background-attachment: fixed;  background-size: cover;"><br>
           <form action="" style="border:2px black solid;margin-top: 3%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
           <h4>Agregar coordinador</h4>
           <br>
           <p>Identificacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtid" style="opacity:40%;" placeholder="Digite la identificacion "></p> 
           <p>Nombre completo: <input type="text" name="txtnom" style="opacity:40%;" placeholder="Digite nombre completo "></p>
           <p>Contacto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcont" style="opacity:40%;" placeholder="Digite numero de contacto "></p>
           <p>Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="txtcorreo" style="opacity:40%;" placeholder="Digite un correo"></p>
           <p>Sede: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_sede" id="cbx_sede" style="opacity:40%;" placeholder="Seleccione una sede ">>
           <option value="#">Seleccionar una sede...</option>
         
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select></p>
             <br> <br>
            <input type="submit" name="btnnew" id="btnnew" Value="Agregar" class="btn1"> <br><br>
            <a href="form_admin.php" class="btn1">Retroceder</a>
           <br><br>
        </form>
       
    <?php
    error_reporting(0);
    include('../Controlador/conexion.php');

    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $cont=$_GET['txtcont'];
    $correo=$_GET['txtcorreo'];
    $sede=$_GET['cbx_sede'];
    if($id!=null){
        $sql="INSERT INTO COOR (ID_COORD , NOMBRE_COORD, CONTACTO, E_MAIL, SEDE) VALUES ('$id','$nom','$cont','$correo','$sede')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("coordinador agregado con exito");</script>';
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el código del coordinador no sea existente");</script>';
        }
    }

?>
</body>
</html>