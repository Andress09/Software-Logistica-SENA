<?php 
include('conexion.php');
$sede=$_POST['sede'];
$queryAmbiente="select ITEM,NOM_AMBIENTE from ambiente where RL_COD_SEDE='$sede'";
$resultAmbiente=$conn->query($queryAmbiente);

$var="<p>Ambiente <select id='cbx_ambiente' name='cbx_ambiente'>
<option value='#'>Seleccionar...</option>";

while($ver=mysqli_fetch_row($resultAmbiente)){
    $var=$var.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
}
echo $var.'</select></p>';
?>