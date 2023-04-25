<?php
 session_start();
 $usuario= $_SESSION['username_oper'];
 if(!isset($usuario)){
     header('location:../index.html');
 }else{
 }
?>
<?php
error_reporting(0);
    include('../Controlador/conexion.php');
    $serie=$_GET['serie'];
    $sql="SELECT NUM_SERIE,MODELO,CARACTERISTICAS,MARCA,NUM_PLACA_SENA,TIPO_EQUIPO,RL_ID_CUE,RL_COD_AMB,NOM_AMBIENTE,NOMBRE_CUE,NOM_SEDE FROM EQUIPO INNER JOIN AMBIENTE ON ITEM=RL_COD_AMB INNER JOIN SEDE ON NUM_SEDE=RL_COD_SEDE INNER JOIN CUENTADANTE ON ID_CUE=RL_ID_CUE  WHERE NUM_SERIE='".$serie."'";
    $resultado=mysqli_query($conn,$sql);
        while ($fila=mysqli_fetch_assoc($resultado)){
?>
    <div>
    <link rel="stylesheet" href="../css/estilo_edit.css">
        <form action=""   autocomplete="OFF">
        <h2>Editar Equipos de computo</h2>
         <p>Tipo Equipo:<input type="text" name="txttipo" readonly value="<?php echo $fila['TIPO_EQUIPO'] ?>"></p>
         <p>Marca: <input type="text" name="txtmarca" value="<?php echo $fila['MARCA'] ?>"></p>
         <p>Modelo: <input type="text" name="txtmodelo" value="<?php echo $fila['MODELO'] ?>"></p>
         <p>Numero de serie:<input type="text" name="txtserie" readonly value="<?php echo $fila['NUM_SERIE'] ?>"></p> 
           <p>Caracteristicas:<input type="text" name="txtcaract" value="<?php echo $fila['CARACTERISTICAS'] ?>"></p>
           <p>Numero placa Sena:<input type="text" readonly name="txtplaca" value="<?php echo $fila['NUM_PLACA_SENA'] ?>"></p>
           <p>Cuentadante actual:<input type="text" name="txtcue" readonly value="<?php echo $fila['RL_ID_CUE'] ?> - <?php echo $fila['NOMBRE_CUE'] ?> "></p>
           <p>Nuevo cuentadante: <select name="cbx_cue" id="cbx_cue">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT ID_CUE,NOMBRE_CUE FROM CUENTADANTE";
            $resultado=$conn->query($sql);
            while($row = $resultado->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['ID_CUE'];?>"><?php echo $row['NOMBRE_CUE'];?></option>                  
            <?php } ?>
           </select></p>
           <p>Ambiente actual:<input type="text" readonly name="txtamb" value="<?php echo $fila['RL_COD_AMB'] ?> - <?php echo $fila['NOM_AMBIENTE'] ?> - <?php echo $fila['NOM_SEDE'] ?>"></p>
           <br><br>
           <input type="submit" value="Actualizar" class="btn1"> <br><br>
           <a href="Mn_pc_oper.php" class="btn1">Retroceder</a>
           
        </form>
        <?php } ?>
    </div> 
    <?php
    $serie=$_GET['txtserie'];
    $modelo=$_GET['txtmodelo'];
    $caracteristicas=$_GET['txtcaract'];
    $marca=$_GET['txtmarca'];
    $placa=$_GET['txtplaca'];
    $tipo=$_GET['txttipo'];
    $cue=$_GET['cbx_cue'];
    $amb=$_GET['cbx_sede'];
            if($serie!=null){
                $sql2="UPDATE equipo SET MODELO='$modelo', CARACTERISTICAS='$caracteristicas', MARCA='$marca', NUM_PLACA_SENA='$placa', TIPO_EQUIPO='$tipo', RL_ID_CUE='$cue'  WHERE NUM_SERIE='$serie'";
                $resultado=mysqli_query($conn,$sql2);
                if($resultado){       
                    echo '<script language="javascript">alert("Equipo editado con exito");</script>';
                    header('location:form_desktop.php');  
                }else{
                    echo "Error" .mysqli_error($conn);
                }
            }
?>