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
    $sql="SELECT * FROM Tableros WHERE NUM_TAB='".$numtab."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>
        <h2>Editar Tablero eléctrico</h2>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""  style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
       <br>
         <p>Numero de tablero:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtitem" readonly value="<?php echo $fila['NUM_TAB'] ?>"></p>
         <p>Nombre del tablero:&nbsp;&nbsp;&nbsp; <input type="text" name="txtnombre" readonly value="<?php echo $fila['Nom_tab'] ?>"></p>
         <p>Cantidad circuitos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtcancir" readonly value="<?php echo $fila['Cant_ctos'] ?>"></p>
		 <p>Calibre Entrada:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcalin" value="<?php echo $fila['CALIB_CONDUC'] ?>"></p>
		 <p>Numero lineas entrada:<input type="text" name="txtnumline" value="<?php echo $fila['NUM_LINE'] ?>"></p>
         <p>Espacios disponibles:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcandisp" value="<?php echo $fila['Cant_disp'] ?>"></p> 
         <p>Sede: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtsede" readonly value="<?php echo $fila['Sede'] ?>"></p>
         <p>Ubicacion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtubic" readonly value="<?php echo $fila['Ubicacion'] ?>"></p>
         <p>Alimentado de:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtcalimex" value="<?php echo $fila['ALIMENT_POR'] ?>"></p>
         <br>
         <input type="submit" value="Actualizar" class="btn1"> <br><br>
         <a href="form_tabler.php" class="btn1">Retroceder</a>
           <br><br>
        </form>
        <?php } ?>
    </div> 
    <?php
    $serie=$_GET['txtitem'];
    $name=$_GET['txtnombre'];
    $cancir=$_GET['txtcancir'];
    $calin=$_GET['txtcalin'];
    $candisp=$_GET['txtcandisp'];
    $placa=$_GET['txtsede'];
    $tipo=$_GET['txtubic'];
    $aliment=$_GET['txtcalimex'];
    $numeline=$_GET['txtnumline'];
            if($serie!=null){
                $sql2="UPDATE Tableros SET Nom_tab='$name', Cant_ctos='$cancir', NUM_LINE='$calin', Cant_disp='$candisp', Sede='$placa', Ubicacion='$tipo', ALIMENT_POR='$aliment', NUM_LINE='$numeline' WHERE NUM_TAB='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Tablero editado con exito");</script>';
                    header('location:form_tabler.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>