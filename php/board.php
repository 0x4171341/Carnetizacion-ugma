<?php 
    session_start();

    require_once("clases/conexion/conexion.class.php");
    require_once("fuction/class_crud.php");

    $modelo = new Crud();  
        $modelo->read();
        $cpu = $modelo->rows;
        $total = count($cpu);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Control de Equipos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/board.css">
    <link rel="stylesheet" type="text/css" href="../css/rolling.css">
</head>
<body>
 <header>
    <nav>
        <ul>
            <div id="col-fl-lf">
                <li><small>Sistema de Gestion Escolar</small></li>
            </div>
        <?php 
            if ($_SESSION['privilegio'] == 0) {
        ?>
            <li><a href="board.php">Inicio</a></li>
            <li><a class="ins-cp">Registrar</a></li>
            <li><a class="bus-cp">Buscar</a></li>
            <li><a class="mod-cp">Modificar</a></li>
            <li><a class="eli-cp">Eliminar</a></li>
            <li><a class="exp-cp">Exportar (PDF)</a></li>
            <li><a href="session/cerrar.php">Salir</a></li>
        <?php 
        }else {
         ?>
            <li><a href="board.php">Inicio</a></li>
            <li><a class="bus-cp">Buscar</a></li>
            <li><a href="#">Exportar (PDF)</a></li>
            <li><a href="session/cerrar.php">Salir</a></li>
         <?php
        }
        ?>
            <div id="col-fl-rg">
                <li><small><?php echo "Bienvenido: ".$_SESSION['nick']; ?></small></li>
            </div>
        </ul>
    </nav>
 </header>
    <section id="wrap">
    <div id="resultado"></div>
    <div id="result"></div>
    <div id="resulta"></div>
    <div id="error"></div>
<div id="left">
    <div id="wrap-tab">
      <img src="../img/desktop_computer.png" width="70px" id="img">
      <h5>EXISTENCIA TOTAL DE ALUMNOS: <?php echo $total ?></h5>
     <table>
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Grado</th>
                <th>Sección</th>
                <th>Matricula</th>
                <th>CI Representante</th>
            </tr>
        </thead>
        <tbody>
            <?php  
             foreach ((array)$cpu as $fila):
                ?>   
                <tr>
                    <td><?php echo $fila['nombres'];?></td>
                    <td><?php echo $fila['apellidos'];?></td>
                    <td><?php echo $fila['edad'];?></td>
                    <td><?php echo $fila['grado'];?></td>
                    <td><?php echo $fila['seccion'];?></td>
                    <td><?php echo $fila['matricula'];?></td>
                    <td><?php echo $fila['cir'];?></td>
                </tr>
            <?php    
             endforeach;
                ?>   
        </tbody>
     </table>
    </div>
</div>


 </section>
 <script src="../js/jquery-2.1.1.min.js"></script>
 <script src="../js/script.js"></script>
</body>
</html>





<!--<!DOCTYPE html>
<html lang="es">
<head>
    <title>Control de Equipos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
     <nav>
         <ul>
           <center>
             <li><a href="board.html">Proyectos</a>
                <ul>
                    <li><a href="php/sismica.php">Sede Sismica</a></li>
                    <li><a href="">Huyapari</a></li>
                    <li><a href="">Zuata</a></li>
                    <li><a href="">Rio Claro</a></li>
                </ul>
             </li>
           </center>
         </ul>
     </nav>
</body>
</html>
-->