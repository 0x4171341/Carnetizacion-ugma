<?php
$user=$_GET['idu'];
if ($user =='')
{
    $msg="No iniciaste secion";
    header("location:acceso.php?msg=$msg");
    exit;
}
setCookie(usuario,$user);
setCookie(acceso,1);
setCookie(tipo,'Administrador');
SESSION_start();
$_SESSION['usuario']=$user;
$_SESSION['acceso']=1;
header ("location:men.php");
exit;
?>