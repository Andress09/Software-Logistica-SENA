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
    $ambiente=$_GET['ambiente'];
    $sql="SELECT ITEM,NOM_AMBIENTE,RL_COD_SEDE,NOM_SEDE FROM SEDE INNER JOIN AMBIENTE ON NUM_SEDE=RL_COD_SEDE WHERE ITEM='".$ambiente."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
 <link rel="stylesheet" href="../css/estilo_edit.css">
 <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
 <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:120px;">
    </header>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
    <div>
    <h2>Editar Ambiente</h2>
        <form action=""  style=" ;margin-left:35%;border: solid; border-color:green ;width: 370px;height: 340px;margin-top: 20px;border: 2px black solid;" method="POST"  autocomplete="OFF">
       </BR></BR>
           <p>Número Ambiente:&nbsp;<input type="text"style="opacity:40%;" name="txtnuma" value="<?php echo $fila['ITEM'] ?>"></p> 
           <p>Nombre Ambiente: <input type="text" style="opacity:40%;"name="txtamb" value="<?php echo $fila['NOM_AMBIENTE'] ?>"></p> <br> <br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="form_ambiente.php" class="btn1">Retroceder</a>
        </form>
        <?php } ?>
    </div>
    <?php
    $ambiente=$_GET['txtnuma'];
    $nom_amb=$_GET['txtamb'];
    $nom_sede=$_GET['txtcodamb'];
            if($ambiente!=null){
                $sql2="UPDATE AMBIENTE SET  NOM_AMBIENTE='$nom_amb' WHERE ITEM='$ambiente'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){              
                    echo '<script language="javascript">alert("El ambiente se edito con exito");</script>'; 
                    header('location:form_ambiente.php');                  
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
?>