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
    $id=$_GET['id'];
    $sql="SELECT ID_CUE,NOMBRE_CUE,PASSWORD_CUE,CORREO,SEDE_CUE,NOM_SEDE FROM OPERADOR INNER JOIN SEDE ON NUM_SEDE=SEDE_CUE WHERE ID_CUE='".$id."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?> <link rel="stylesheet" href="../css/estilo_edit.css">
<link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
<title>Editar cuentadante</title>
<header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:60px;">
    </header>
    <div> 
    <h2>Editar Sede</h2>
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
   
           <p>Identificación:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtid" style="opacity:40%;" readonly value="<?php echo $fila['ID_CUE'] ?>"></p> 
           <p>Nombre Operador: <input type="text" name="txtnom" style="opacity:40%;"value="<?php echo $fila['NOMBRE_CUE'] ?>"></p>
           <p>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtpw" style="opacity:40%;"value="<?php echo $fila['PASSWORD_CUE'] ?>"></p>
           <p>Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcorreo"style="opacity:40%;" value="<?php echo $fila['CORREO'] ?>"></p>
           <p>Sede actual:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="opacity:40%;"readonly name="txtsede" value="<?php echo $fila['NOM_SEDE'] ?>"></p>
           <p>Nueva Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_sede" id="cbx_sede"style="opacity:40%;">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT NUM_SEDE,NOM_SEDE FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select> <br> <br><br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="../Pagina/form_cuentadante.php" class="btn1">Retroceder</a> 
           <br><br>
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $pw=$_GET['txtpw'];
    $correo=$_GET['txtcorreo'];
    $nom_sede=$_GET['cbx_sede'];
            if($id!=null){
                $sql2="UPDATE OPERADOR SET NOMBRE_CUE='$nom', PASSWORD_CUE='$pw', CORREO='$correo', SEDE_CUE='$nom_sede'  WHERE ID_CUE='$id'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){                    
                    header('location:form_cuentadante.php');
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
            
?>