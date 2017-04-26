<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="prueba" content="">
    <meta name="prueba" content="">
    <link rel="icon" href="../favicon.ico">


</head>
</html>
<?php
require('encode.php');
if($_GET)
{
$encode = new Encode ();
$encode->decode_get($_SERVER["REQUEST_URI"]);
$idu=$_GET['idu'];
}
else{
    print"<meta http-equiv='refresh' content='0; url=login.php?'>";
}
require('bd.php');
if($_GET)
{
    $encode = new Encode ();
    $encode->decode_get($_SERVER["REQUEST_URI"]);
    $idu=$_GET['idu'];
    if($idu!='')
    {
        setCookie('id',$idu);
        setCookie('acceso',1);
        session_start();
        $_SESSION['id']=$idu;
        $_SESSION['acceso']=1;
        print"<meta http-equiv='refresh' content='0; url=inicio.php'>";
    }
}
?>
<html lang="es">
<body>