<?php 
 session_start();

    require_once("../../clases/conexion/conexion.class.php");
    require_once("../class_crud.php");
    $modelo = new Crud();  
        $ce = $_POST['cedula'];
        $modelo->get_search($ce);
        $cpu = $modelo->rows;

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Sigeco</title>
  <meta charset="UTF-8" />
  <style type="text/css">
      .red {
        color: white;
        font-size: 16px;
        font-family: "Blokk", Arial, sans-serif;
        margin-top: 10px;
        margin-bottom: -15px;
        width: 300px;
        border-radius: 2px;
        text-align: center;
        padding: 40px;
      }
  </style>
</head>
<body>
 <?php  
    if ($cpu==false) {
  ?><br><br><br><br>
    <center><h4 class="red">No existe un vinculo entre Padre he Hijo Con la Cedula Usada o es posible que la Cedula no Exista <br><br> Por Favor Intente Denuevo</h4></center>
  <?php 
    }else {
            
  ?>   
<div id="modal2" class="modalmasc">
        <center> <h4 class="red">DATOS DEL ALUMNO</h4> </center>
        <div id="left">
          <div id="wrap-tab">
           <table>
              <thead>
                  <tr>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Edad</th>
                      <th>Grado</th>
                      <th>Seccion</th>
                  </tr>
              </thead>
              <tbody>
                  <?php  
                   foreach ($cpu as $fila):
                  ?>   
                      <tr>
                          <td><?php echo $fila['nombres'];?></td>
                          <td><?php echo $fila['apellidos'];?></td>
                          <td><?php echo $fila['edad'];?></td>
                          <td><?php echo $fila['grado'];?></td>
                          <td><?php echo $fila['seccion'];?></td>
                      </tr>
                  <?php    
                   endforeach;
                  ?>   
              </tbody>
           </table>
          </div>
        </div>
              <center><h4 class="red">DATOS DEL REPRESENTANTE</h4></center>
              <div id="left">
        <div id="wrap-tab">
         <table>
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Fecha</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                 foreach ($cpu as $fila):
                ?>   
                    <tr>
                        <td><?php echo $fila['rnombres'];?></td>
                        <td><?php echo $fila['rapellidos'];?></td>
                        <td><?php echo $fila['redad'];?></td>
                        <td><?php echo $fila['rfecha'];?></td>
                        <td><?php echo $fila['direccion'];?></td>
                    </tr>
                <?php    
                 endforeach;
                ?>   
            </tbody>
         </table>
        </div>
</div>   
<?php } ?>
</body>
</html>