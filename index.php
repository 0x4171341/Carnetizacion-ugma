<?php
    require_once 'php/clases/conexion/conexion.class.php';
    require_once 'php/session/login.php';
    #require_once 'php/session/encode.php';
    
    $mensaje = null;
    if(isset($_POST['session']))
    {
        $model = new Seleccionar;
        $model->nick = htmlspecialchars($_POST['nick']);
        $model->password = htmlspecialchars($_POST['password']);
        $model->login();
        $mensaje = $model->mensaje;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Carnetizacion Ugma</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <header>
    <img ALIGN=center src="Logo.gif" border="0px" width="150px" height="160px">
    <p ALIGN=center>
      UNIVERSIDAD NORTORIENTAL GRAN MARISCAL DE AYACUCHO <br> EL TIGRE
    </p>
  </div>

    </div>
    <HR align="CENTER" size="5" width="500" color="yellow" noshade>
    <HR align="CENTER" size="5" width="500" color="blue" noshade>
    </header>
    </head>
<body>
 <div id="login-form">
    <?php echo $mensaje;?>
      <h3>Iniciar Sesión</h3>
        <fieldset>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

                <input type="text" name="nick" placeholder="Usuario" required />

                <input type="password" name="password" placeholder="Password" required /> </br>
              <br>
                <input type="hidden" name="session">
              </br>
                <input type="button" align=center value="Iniciar sesion" onClick=" window.location.href='iniciar.php' ">

             </br>
            <table >
              <input type="button" align=center value="Registro Profesor" onClick=" window.location.href='registro_P.php' ">
              <input type="button" value="Registro Alumno" onClick=" window.location.href='registro_A.php' ">
            </table>
      </form>
        </fieldset>
 </div>
</body>
<tr>

</tr>
<img src="pie.jpg" align background="center" position: absolute; width="2480" height="90"/>
<p>
        All Rights Reserved &copy; | Overcode 2015</td>
      </p>
    </td>
</footer>
</html>
