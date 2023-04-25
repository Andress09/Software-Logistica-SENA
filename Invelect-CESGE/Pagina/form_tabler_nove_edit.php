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
    $numtab=$_GET['serie'];
    $sql="SELECT * FROM DIST_TAB WHERE Item_detab='".$numtab."' ";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Editar Tablero eléctrico</h2>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"    autocomplete="OFF">
       <br>
         <p>Numero tablero:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtitem" readonly value="<?php echo $fila['RL_CODE_TAB'] ?>"></p>
         <p>Numero circuto:&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtncto" readonly value="<?php echo $fila['Num_cto'] ?>"></p>
         <p>Distribución:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtdist" value="<?php echo $fila['Distri'] ?>"></p>
         <p>Cantidad luminarias:<input type="text" name="txtcanlum" value="<?php echo $fila['Cant_lumin'] ?>"></p> 
         <p>Cantidad Tomas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtcantom" value="<?php echo $fila['Cant_tomas'] ?>"></p>
         <p>Calibre salida:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcalsal" value="<?php echo $fila['CAL_SAL'] ?>"></p>
         <br><br>
         <input type="submit" value="Actualizar" class="btn1"> <br><br>
         <a href="form_tabler.php" class="btn1">Retroceder</a>
           <br><br>
        </form>
        <?php } ?>
    </div> 
    <?php
    $serie=$_GET['txtitem'];
    $modelo=$_GET['txtncto'];
    $distribu=$_GET['txtdist'];
    $lumina=$_GET['txtcanlum'];
    $tomas=$_GET['txtcantom'];
    $calsal=$_GET['txtcalsal'];
            if($serie!=null){
                $sql2="UPDATE Dist_tab SET Distri='$distribu', Cant_lumin='$lumina', Cant_tomas='$tomas', CAL_SAL='$calsal'  WHERE Item_detab='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Tablero editado con exito");</script>';
                    header('location:form_tabler.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>