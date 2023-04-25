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
    <title>Agenda</title>
</head>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:20px;"><br><br>
        <h2>Agregar Préstamo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:30px;">
    </header>
<body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>

    <div>
        <form action="" style="border:2px black solid;margin-top: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
      <br>
		   <p>Buscar Ambiente:&nbsp;&nbsp;<select name="cbx_elem" id="cbx_elem" style="opacity:40%;">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');			
				$sql3="TRUNCATE TABLE PRESTEMPAMB";
				$resultado2=mysqli_query($conn,$sql3);
            $sql="SELECT * FROM AMBIENTE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['URL_CALENDAR'];?>"><?php echo $row['NOM_AMBIENTE'];?></option>                  
            <?php } ?>
           </select></p>
		   <br><br>
            <input type="submit" name="btnnew" id="btnnew" Value="Validar" class="btn1"> <br><br>
            <a href="form_prestamos.php" class="btn1">Retroceder</a>
            <br><br>
        </form>
    </div>
    <?php
        error_reporting(0);
        include('../Controlador/conexion.php');
        $usu=$_GET['cbx_elem'];
     
        if($usu!=null){
            $sql="INSERT INTO prestempamb (URL) VALUES ('$usu')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
                echo 'insert';   
                echo '<script type="text/javascript"> window.location = " form_query_amb_agenda.php" </script>';
                die();
               
            }else{
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de sede no sea existente");</script>';
            }
        } 

?>
</body>
</html>