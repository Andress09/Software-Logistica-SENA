//<script type="text/javascript">
$(Document).ready(function(){
    recargarcbx();

    $('#cbx_motor').change(function(){
        recargarcbx();
    });
})
//</script>
//<script type="text/javascript">
function recargarcbx(){
    $.ajax({
        type:"POST",
        url:"../Controlador/GetMotor.php",
        data:"motor=" +$('#cbx_motor').val(),
        success:function(r){
            $('#cbx_motores').html(r);
        }
    });
}
//</script>