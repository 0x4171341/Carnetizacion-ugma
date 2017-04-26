<?php
    include('conexion.php');
    include('Usuario.php');
        $nom=$_POST['usuario'];
        $psw=$_POST['password1'];
            $usuario=new Usuario();
            $usuario->validar($nom,$psw);
?>