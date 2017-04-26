<?php
$acceso= $_COOKIE['acceso'];
$tipo= $_COOKIE['tipo'];
$id=$_COOKIE['usuario'];
if($acceso !='1')
{
    $msg="No iniciaste sesion";
    header("location:acceso.php?msg=$msg");
    exit;
}
session_start();
if($_SESSION['acceso']=="" or $_SESSION['usuario']=="")
{
    $msg="No iniciaste sesion";
    header("location:acceso.php?msg=$msg");
    exit;
}
?>