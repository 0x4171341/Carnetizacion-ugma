<?php
require('encode.php');
class Sesion {
    private $msg;
    public function validarDatos($usuario,$pass){
        if($usuario=="" or $pass=="")
        {
            $msg="Favor de introducir usuario y password";
            echo"<div class='alert alert-danger' role='alert'>";
            echo"<br><strong>$msg</strong>";
            echo"</div>";
        }
        else{
            $sql = "SELECT * FROM users WHERE usuario='$usuario'and pass ='$pass'";
            $consulta=mysql_query($sql)or die("Error $sql");
            $cuantos=mysql_num_rows($consulta);
            if($cuantos==0)
            {
                $msg="El usuario o password no son validos";
                echo"<div class='alert alert-danger' role='alert'>";
                echo"<br><strong>$msg</strong>";
                echo"</div>";
            }
            else{
                $idu=mysql_result($consulta,0,'id');
                $activo=mysql_result($consulta,0,'estatus');
                $nivel=mysql_result($consulta,0,'nivel');
                if ($activo!='1')
                {
                 $msg="El usuario no esta activo, consulta a su administrador";
                 echo"<div class='alert alert-danger' role='alert'>";
                 echo"<br><strong>$msg</strong>";
                 echo"</div>";
                }
                else{
                switch($nivel){
                    case 2 :
                        $encode = new Encode ();
                        $id=$encode->encode_this("idu=$idu");
                        print"<meta http-equiv='refresh' content='0;url=index.php?$id'>";
                        break;
                    case 1 :
                        $encode = new Encode ();
                        $id=$encode->encode_this("idu=$idu");
                        print"<meta http-equiv='refresh' content='0;url=index.php?$id'>";
                        break;
                    case 3 :
                        $msg="Los alumnos no pueden entrar al sistema";
                        echo"<div class='alert alert-danger' role='alert'>";
                        echo"<br><strong>$msg</strong>";
                        echo"</div>";
                        break;
                }
                }
            }
        }
    }
}
?>