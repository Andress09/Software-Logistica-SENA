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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_edit.css">
    <title>Agregar UMAS</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <div>
    <h2>Centro de Servicios y Gestión Empresarial - Regional Antioquia.</h2>
		<h2>INVELECT-CESGE</h2>		
        <h2>Agregar UMAS nueva</h2></p>
        <form action="" style="border:2px black solid;margin: 3%;margin-left: 30%;margin-right: 30%;"   autocomplete="OFF">
      <br>
        Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_nombre" id="txt_nombre"><br>
        Referencia: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ref" id="txt_ref"><br>
        Serial:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_ser" id="txt_ser"><br>
        Ref_correas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_correas" id="txt_correas"><br>
        Brekects:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_brek" id="txt_brek"><br>
        Sede:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT * FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['NUM_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option><?php } ?>
           </select>
           <p id="cbx_ambiente" name="cbx_ambiente"></p>
           Voltios:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_vol" id="txt_vol"><br>
           HP:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="txt_hp" id="txt_hp"><br>
          <label for="cbx_com">Componentes:</label>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="cbx_com" >
                <option value="#">Seleccionar...</option>
                <option value="Variador">Variador</option>
                <option value="Contador">Contador</option>				
                <option value="Termostato">Termostato</option>				
            			</select>
            Observaciones:&nbsp;&nbsp;<input type="text" name="txt_obs" id="txt_obs"><br>
                        <br><br>
           <input type="submit" value="Registrar" class="btn1"><br><br>
           <a href="../Pagina/form_umas.php" class="btn1">Retroceder</a>
           <script type="text/javascript" src="../Js/GetAmbiente.js"></script>  
         <br><br>
        </form>
    </div>
    <?php
    include('../Controlador/conexion.php');
    error_reporting(0);

    $nombre=$_GET['txt_nombre'];
    $ref=$_GET['txt_ref'];
    $ser=$_GET['txt_ser'];
    $correa=$_GET['txt_correas'];
    $brek=$_GET['txt_brek'];
    $sede=$_GET['cbx_sede'];
    $ambiente=$_GET['cbx_ambiente'];
    $vol=$_GET['txt_vol'];
    $hp=$_GET['txt_hp'];
    $com=$_GET['cbx_com'];
    $obs=$_GET['txt_obs'];
        if($nombre!=null){
            $sql="INSERT INTO umas(NOMBRE,REFERENCIA,SER,REF_CORREAS,BRECKETS,SEDE,UBICACION,VOLTIOS,HP,COMPONENTES,OBSERVACIONES) VALUES ('$nombre','$ref','$ser','$correa','$brek','$sede','$ambiente','$vol','$hp','$com','$obs')";
            $resultado=mysqli_query($conn,$sql);
            if($resultado){
             
                echo '<script language="javascript">alert("Registro Exitoso");</script>';

                header('location:form_umas.php');  
            }else{
               
                echo '<script language="javascript">alert("Alerta!!! \n Error al guardar, por favor \n verificar que el codigo del toma no sea existente");</script>';
            }
        }

             
?>
</body>
</html>