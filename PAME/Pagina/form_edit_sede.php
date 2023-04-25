<?php
    session_start();
    $usuario= $_SESSION['usernameadmi'];
    if(!isset($usuario)){
        header('location:../index.html');
    }else{
    }
?>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $sede=$_GET['sede'];
    $sql="SELECT * FROM SEDE WHERE NUM_SEDE='".$sede."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <div>
    <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:20px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:90px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
       <h2>Editar Sede</h2>
        <form action=""   style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;" autocomplete="OFF">
           <p>Codigo Sede:&nbsp;&nbsp; <input type="text" name="txtnum" style="opacity:40%;"readonly value="<?php echo $fila['NUM_SEDE'] ?>"></p> 
           <p>Nombre Sede: <input type="text" name="txtsede" style="opacity:40%;"value="<?php echo $fila['NOM_SEDE'] ?>"></p><br> <br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="form_sede.php" class="btn1">Retroceder</a>
           <br><br>
        </form>
        <?php } ?>
    </div>   
    <?php
    $sede=$_GET['txtnum'];
    $nom_sede=$_GET['txtsede'];
            if($sede!=null){
                $sql2="UPDATE SEDE SET NOM_SEDE='$nom_sede' WHERE NUM_SEDE='$sede'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){                  
                    echo '<script language="javascript">alert("Sede editada con exito");</script>';
                    header('location:form_sede.php');                 
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
?>