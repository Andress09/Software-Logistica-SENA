<?php 
include('conexion.php');
$motor=$_POST['motor'];
$queryMotores="select ITEM,NOM_MOTOR from motores where RL_CODE_MOTOR='$motor'";
$resultMotor=$conn->query($queryMotores);

$var="<p>Motores: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <select id='cbx_motores' name='cbx_motores'>
<option value='#'>Seleccionar...</option>";

while($ver=mysqli_fetch_row($resultMotor)){
    $var=$var.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
}
echo $var.'</select></p>';
?>