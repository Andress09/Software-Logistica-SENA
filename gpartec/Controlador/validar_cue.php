<?php
    include('conexion.php');
    session_start();
    $usuario_cue=$_POST['usuario_cue'];
    $password_cue=$_POST['password_cue'];
    
    $query="SELECT COUNT(*) as contar FROM CUENTADANTE WHERE CORREO='$usuario_cue' AND PASSWORD_CUE='$password_cue'";
    $consulta= mysqli_query($conn,$query);
    $array= mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['username_cue'] = $usuario_cue;
        $_SESSION['password_cue'] = $password_cue;
        header('location:../Pag_cue/Mn_pc_cue.php');
    }else{
        echo '<script language="javascript">alert("Usuario o Contraseña invalidos, Por favor intentarlo verificar sus credenciales");</script>';
        header('location:../index.html');
    }
    ?>