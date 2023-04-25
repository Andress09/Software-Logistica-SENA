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
    $sql="SELECT * FROM PRESTAMOS";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?> 


    <div> 
   
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <link rel="shortcut icon" href="../Imgs/logo.png" type="image/x-icon">
    <body  class="fondoInde" style=" background-image: url('../Imgs/fondo1.jpeg');  background-position: center center;
    background-attachment: fixed;  background-size: cover;"><br><br>
    <h2>Agregar elementos</h2>
        <form action="" style="border:2px black solid;margin-top: 3%;margin-left: 30%;margin-right: 30%;"  autocomplete="OFF">
       
           <p>Código del préstamo:<input type="text" name="txtid" readonly value="<?php echo $fila['NUM_PREST'] ?>"></p> 
           <p>Nombre Usuario: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txtnom" value="<?php echo $fila['ID_USU'] ?>"></p>
           <p>Novedad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtnove" readonly value="<?php echo $fila['NOVEDAD'] ?>"></p>
		   </select></p>
		   <p>Buscar Elemento:&nbsp; <select name="cbx_elem" id="cbx_elem">
           <option value="<?php echo $fila['NUM_PREST'] ?>">"<?php echo $fila['NUM_PREST'] ?>"</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento1: <select name="cbx_elem1" id="cbx_elem1">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento2: <select name="cbx_elem2" id="cbx_elem2">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento3: <select name="cbx_elem3" id="cbx_elem3">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento4: <select name="cbx_elem4" id="cbx_elem4">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento5: <select name="cbx_elem5" id="cbx_elem5">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento6: <select name="cbx_elem6" id="cbx_elem6">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento7: <select name="cbx_elem7" id="cbx_elem7">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento8: <select name="cbx_elem8" id="cbx_elem8">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Buscar Elemento9: <select name="cbx_elem9" id="cbx_elem9">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_ELEM , CONCAT FROM ELEMENTO";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_ELEM'];?>"><?php echo $row['CONCAT'];?></option>                  
            <?php } ?>
           </select></p>
		   <p>Observaciones:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txtobs" value="<?php echo $fila['OBS'] ?>"></p>
		   <br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="../Pagina/form_prestar.php" class="btn1">Retroceder</a>
           <br><br> 
        </form>
        <?php } ?>
    </div>
    
    <?php
    $id=$_GET['txtid'];
    $nom=$_GET['txtnom'];
    $nove=$_GET['txtnove'];
    $elem=$_GET['cbx_elem'];
    $elem1=$_GET['cbx_elem1'];
    $elem2=$_GET['cbx_elem2'];
    $elem3=$_GET['cbx_elem3'];
    $elem4=$_GET['cbx_elem4'];
    $elem5=$_GET['cbx_elem5'];
    $elem6=$_GET['cbx_elem6'];
    $elem7=$_GET['cbx_elem7'];
    $elem8=$_GET['cbx_elem8'];
    $elem9=$_GET['cbx_elem9'];
    $obs=$_GET['txtobs'];
            if($id!=null){
        $sql="INSERT INTO PRESTAMOS ( ID_USU, FECHA_ENTRE, HORA_ENTRE, NOVEDAD, ELEM_, ELEM_1, ELEM_2, ELEM_3, ELEM_4, ELEM_5, ELEM_6, ELEM_7, ELEM_8, ELEM_9, OBS) VALUES ('$nom',CURDATE(), CURTIME(),'$nove','$elem','$elem1','$elem2','$elem3','$elem4','$elem5','$elem6','$elem7','$elem8', '$elem9','$obs')";
        $resultado=mysqli_query($conn,$sql);
        if($resultado){
            echo '<script language="javascript">alert("Préstamo guardado con éxito");</script>';
			header('location:form_prestar.php');
        }else{
            echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo de Préstamo no sea existente");</script>';

        }
      }            
?>