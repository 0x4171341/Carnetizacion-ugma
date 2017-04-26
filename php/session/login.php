<?php
 class Seleccionar
 {
    public $nick;
    public $password;
    public $mensaje;

    public function login()
    {
        $model = new Stock;
        $conexion = $model->conec();
        $sql = 'SELECT * FROM sesion WHERE ';
        $sql .= 'nick=:nick AND password=:password';
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':nick', $this->nick, PDO::PARAM_STR);
        $consulta->bindParam(':password', $this->password, PDO::PARAM_STR);
        $consulta->execute();
        $total = $consulta->rowCount();
        if($total == 0)
        {
            $this->mensaje = '<div id="error"><center> Error al Iniciar Sesión.</center></div>';
        }
        else
        {
            $fila = $consulta->fetch();
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['nick'] = $fila['nick'];
            $_SESSION['privilegio'] = $fila['privilegio'];
            header('location:php/board.php');
        }
    }
 }
?>
