<?php
    include('conexion.php');
    session_start();
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    
    $query="SELECT COUNT(*) as contar FROM ADMINISTRADOR WHERE NOM_ADMINISTRADOR='$usuario' AND PASSWORD_ADMIN='$password'";
    $consulta= mysqli_query($conn,$query);
    $array= mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['usernameadmi'] = $usuario;
        $_SESSION['password'] = $password;
        header('location:../Pagina/Mn_pc_adm.php');
    }else{
        echo '<script language="javascript">alert("Usuario o Contraseña invalidos, Por favor intentarlo verificar sus credenciales");</script>';
        header('location:../index.html');
    }
    ?>
