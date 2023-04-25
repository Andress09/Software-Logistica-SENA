//<script type="text/javascript">
    $(Document).ready(function(){
        recargarcbx();

        $('#cbx_tablero').change(function(){
            recargarcbx();
        });
    })
//</script>
//<script type="text/javascript">
    function recargarcbx(){
        $.ajax({
            type:"POST",
            url:"../Controlador/GetTablero.php",
            data:"tab=" +$('#cbx_tablero').val(),
            success:function(r){
                $('#cbx_cto').html(r);
            }
        });
    }
//</script>