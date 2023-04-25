<?php
    session_start();
    $usuario= $_SESSION['username_cue'];
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
    <title>Nuevo Registro</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" 
    crossorigin="anonymous"></script>
</head>
<body>
    <?php
    date_default_timezone_set('America/Bogota');
    $fecha=date('Y-m-d');
    ?>
    <div>
        <form action="">
            <h2>Movimiento de equipos <?php echo $usuario ?></h2>
            <p>Fecha Registro: <input type="date" name="txtfecha" value="<?= $fecha ?>"></p>
            <p>Sede: <select name="cbx_sede" id="cbx_sede">
           <option value="#">Seleccionar...</option>
           <?php
            include('../Controlador/conexion.php');
            $sql="SELECT COD_SEDE,NOM_SEDE FROM SEDE";
            $resultadosede=$conn->query($sql);
            while($row = $resultadosede->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['COD_SEDE'];?>"><?php echo $row['NOM_SEDE'];?></option>                  
            <?php } ?>
           </select></p>
            <p id="cbx_ambiente">
            <p>Serie de equipo:<input type="text" name="txtserie" ></p>
           <input type="submit" value="Registrar">     
        </form>
    </div>


<script type="text/javascript" src="../Js/GetAmbiente.js"></script>

<?php
    error_reporting(0);
    include('../Controlador/conexion.php');
    $fecha=$_GET['txtfecha'];
    $sede=$_GET['cbx_sede'];
    $amb=$_GET['cbx_ambiente'];
    $serie=$_GET['txtserie'];

    $sql="INSERT INTO REGISTRO_EQUIPOS (COD_REGISTRO,FECHA_REGISTRO, ENCARGADO_REGISTRO,RL_COD_SEDE_REG, RL_COD_AMB_REG, RL_NUM_SERIE_REG) VALUES ('','$fecha','$usuario','$sede','$amb','$serie')";
    $resultado=mysqli_query($conn,$sql);
    if($resultado){
        $sqlup="UPDATE equipo SET RL_COD_AMB='$amb' WHERE NUM_SERIE='$serie'";
        $r=mysqli_query($conn,$sqlup);
        if($r){
           header('location:form_registro.php');
        }else{
            echo "error" .mysqli_error($r);;
        }
    }else{
        echo "Error" .mysqli_error($resultado);
    }
?>

</body>
</html>