<?php 
include('conexion.php');
$tab=$_POST['tab'];
$queryCto="select Item_detab, Num_cto from dist_tab where RL_CODE_TAB ='$tab'";
$resultCto=$conn->query($queryCto);

$var="<p>Circuito&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id='cbx_cto' name='cbx_cto'>
<option value='#'>Seleccionar...</option>";

while($ver=mysqli_fetch_row($resultCto)){
    $var=$var.'<option value='.$ver[1].'>'.utf8_encode($ver[1]).'</option>';
}
echo $var.'</select></p>';
?>