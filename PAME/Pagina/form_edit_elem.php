<?php

include('../Controlador/conexion.php'); 
    session_start();
    $usuario= $_SESSION['usernameadmi'];
    if(!isset($usuario)){
        header('location:../index.html');
    }else{
    }
?>

<?php
    error_reporting(0);
      $id=$_GET['id'];
    $sql="SELECT * FROM ELEMENTO WHERE COD_ELEM='".$id."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
  <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <div> 
    <link rel="stylesheet" href="../css/estilo_edit.css">
  <header>
        <img src="../Imgs/logo.png" class="imglogo" style="float: left; margin-left: 2%;padding:30px;">
        <img src="../Imgs/empleo.png" class="imgempleo" style="float: rigth; margin-left: 70%;padding-top:135px;">
    </header>
    <body class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;">
    <h2>Editar Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <form action="" style="border:2px black solid;margin-top: 5%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
       
           <p>Código del elemento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="opacity:40%;"name="txtid" readonly value="<?php echo $fila['COD_ELEM'] ?>"></p> 
           <p>Nombre elemento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"style="opacity:40%;" name="txtnom" value="<?php echo $fila['NOM_ELEM'] ?>"></p>
           <p>Características:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"style="opacity:40%;" name="txtcaract" value="<?php echo $fila['CAR_ELEM'] ?>"></p>
           <p>Numero de placa:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="opacity:40%;"name="txtnumplaca" value="<?php echo $fila['NUM_PLACA'] ?>"></p>		   
           <p>Cuentadante actual:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="opacity:40%;"name="txtcaract" onlyread value="<?php echo $fila['CUE'] ?>"></p>
           <p>Nuevo cuentadante:<select style="opacity:40%;"name="cbx_cue" id="cbx_cue">
           <option value="<?php echo $fila['CUE'] ?>">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT ID_CUE,NOMBRE_CUE FROM CUENTADANTE";
            $resultado=$conn->query($sql);
            while($row = $resultado->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_CUE'];?>"><?php echo $row['NOMBRE_CUE'];?></option>                  
            <?php } ?>
           </select></p> 
		   </select></p><br><br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="../Pagina/form_elemento.php" class="btn1">Retroceder</a> 
           <br><br>
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $caract=$_GET['txtcaract'];
    $placa=$_GET['txtnumplaca'];
    $cue=$_GET['cbx_cue'];
            if($id!=null){
                $sql2="UPDATE ELEMENTO SET NOM_ELEM='$nom', CAR_ELEM='$caract', NUM_PLACA='$placa', CUE='$cue'  WHERE COD_ELEM='$id'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){                    
                    header('location:form_elemento.php');
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
            
?>