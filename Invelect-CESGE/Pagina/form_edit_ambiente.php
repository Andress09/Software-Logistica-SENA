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
    $sql="SELECT ITEM,NOM_AMBIENTE,RL_COD_SEDE,NUM_PISO,NOM_SEDE FROM SEDE INNER JOIN AMBIENTE ON NUM_SEDE=RL_COD_SEDE WHERE ITEM='".$ambiente."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
 <link rel="stylesheet" href="../css/estilo_edit.css">
    <div>
    <h2>Editar Ambiente</h2>
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
     <br>
           <p>Número Ambiente: <input type="text" name="txtnuma" value="<?php echo $fila['ITEM'] ?>"></p> 
           <p>Nombre Ambiente: <input type="text" name="txtamb" value="<?php echo $fila['NOM_AMBIENTE'] ?>"></p>
			<p>Piso:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtpiso" value="<?php echo $fila['NUM_PISO'] ?>"></p>		   
           <p>Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtcodamb" value="<?php echo $fila['RL_COD_SEDE'] ?>"></p> <br> <br>
			</select>
		   <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="form_ambiente.php" class="btn1">Retroceder</a>
           <br><br>
        </form>
        <?php } ?>
    </div>
    <?php
    $ambiente=$_GET['txtnuma'];
    $nom_amb=$_GET['txtamb'];
	$nro_piso=$_GET['txtpiso'];
    $nom_sede=$_GET['txtcodamb'];
            if($ambiente!=null){
                $sql2="UPDATE AMBIENTE SET  NOM_AMBIENTE='$nom_amb', RL_COD_SEDE='$nom_sede', NUM_PISO=$nro_piso WHERE ITEM='$ambiente'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){              
                    echo '<script language="javascript">alert("El ambiente se edito con exito");</script>'; 
                    header('location:form_ambiente.php');                  
                }else{
                    echo '<script language="javascript">alert("Alerta!!! \n Error al editar");</script>';
                }
            }
?>