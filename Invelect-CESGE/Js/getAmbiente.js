//<script type="text/javascript">
    $(Document).ready(function(){
        recargarcbx();

        $('#cbx_sede').change(function(){
            recargarcbx();
        });
    })
//</script>
//<script type="text/javascript">
    function recargarcbx(){
        $.ajax({
            type:"POST",
            url:"../Controlador/GetAmbiente.php",
            data:"sede=" +$('#cbx_sede').val(),
            success:function(r){
                $('#cbx_ambiente').html(r);
            }
        });
    }
//</script>