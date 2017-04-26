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
    label {
      font-size: 15px;
      margin-bottom: 12px;
    }
    #fm-cpu-rgst {
      margin-bottom: 100px;
    }
    #ventana2 {
      margin-top: 50px;
    }
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
    <center><h4 class="red"> Cedula no Exista <br><br> Por Favor Intente Denuevo</h4></center>
    <?php   }else { ?>
  <div id="ventana2" >
          <article class="centro">
            <a href="">
                <h4>DATOS DEL ESTUDIANTE</h4>
            </a>
            <form id="fm-cpu-rgst" action="" method="post"> 
             <div id="cols-center">
              <?php  
                foreach ((array)$cpu as $fila):
              ?>   
              <p class="crash">
        
                  <!-- <label>Nùmero de Oficio: </label>-->
                  <input class="nombres" name="nombres" value="<?php echo $fila['nombres'];?>" type="text" placeholder="Escriba Los Nombre" >
                  
                  <!-- <label>Lugar: </label>-->
                  <input class="apellidos" name="apellidos" type="text" value="<?php echo $fila['apellidos'];?>" placeholder="Escriba Los Apellidos" >

                  <!-- <label>Fecha: </label>-->
                  <input class="edad" name="edad" type="text" value="<?php echo $fila['edad'];?>" placeholder="Escriba La Edad" >

                  <!-- <label>Fecha: </label>-->
                  <input class="fecha" name="fecha" type="text" value="<?php echo $fila['fecha'];?>" placeholder="Fecha de Nacimiento" >
                  
              </p>

              <p class="crash">

                  <!-- <label>Asunto: </label>-->
                  <input class="direccion" name="direccion" type="text" value="<?php echo $fila['direccion'];?>" placeholder="Dirección" >
                  
                  <!-- <label>Dependencia: </label>-->
                  <input class="telefono" name="telefono" type="text" value="<?php echo $fila['telefono'];?>" placeholder="Telefono" >

                  <!-- <label>Referencia: </label>-->
                  <input class="matricula" name="matricula" type="text" value="<?php echo $fila['matricula'];?>" placeholder="Matricula" >

                  <select class="grado" name="grado">
                    <option><?php echo $fila['grado'];?></option>
                    <option>Primero</option>
                    <option>Segundo</option>
                    <option>Tercero</option>
                    <option>Cuarto</option>
                    <option>Quinto</option>
                    <option>Sexto</option>
                  </select>

              </p>

              <p class="crash">
  
                  <select class="seccion" name="seccion">
                    <option><?php echo $fila['seccion'];?></option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                  </select>

                  <select class="turno" name="turno">
                    <option><?php echo $fila['turno'];?></option>
                    <option>Mañana</option>
                    <option>Tarde</option>
                  </select>
              </p>
             
               <a href="">
                <center><h4>DATOS DEL REPESENTANTE</h4></center>
              </a>
              <p class="crash">
        
                  <!-- <label>Nùmero de Oficio: </label>-->
                  <input class="rnombres" name="rnombres" value="<?php echo $fila['rnombres'];?>" type="text" placeholder="Escriba Los Nombre" >
                  
                  <!-- <label>Lugar: </label>-->
                  <input class="rapellidos" name="rapellidos" type="text" value="<?php echo $fila['rapellidos'];?>" placeholder="Escriba Los Apellidos" >

                  <!-- <label>Fecha: </label>-->
                  <input class="redad" name="redad" type="text" value="<?php echo $fila['redad'];?>" placeholder="Escriba La Edad" >
                  
              </p>

              <p class="crash">

                  <!-- <label>Asunto: </label>-->
                  <input class="rdireccion" name="direccion" type="text" value="<?php echo $fila['direccion'];?>" placeholder="Dirección" >
                  
                  <!-- <label>Dependencia: </label>-->
                  <input class="rtelefono" name="rtelefono" type="text" value="<?php echo $fila['rtelefono'];?>" placeholder="Telefono" >

              </p>

              <p class="crash">

                  <input class="cir" name="cir" type="text"  value="<?php echo $fila['cedula'];?>" placeholder="Cedula del Representante" > 

                  <!-- <label>Fecha: </label>-->
                  <input class="rfecha" name="rfecha" type="text" value="<?php echo $fila['rfecha'];?>" placeholder="Fecha de Nacimiento" >                 
                 
              </p>
              <?php    
               endforeach;
              ?>  
             </div>
              <p class="crash" id="botton">
                  
                  <input type="submit" value="MODIFICAR" id="cancel" class="btn-sub-igs">
                  <a href="#" id="cancel" class="btn-sub-cnl">CANCELAR</a> 
              </p>   
            </form>
          </article>
    </div>
    <?php    
        }
    ?>  

    <script>
      $(document).ready(function() {  
        $('.btn-sub-igs').submit(function(e){ 
          e.preventDefault();
        });
        $('#fm-cpu-rgst').submit(function() { 

          var nombres= $('.nombres').val();
          var apellidos= $('.apellidos').val();
          var edad= $('.edad').val();
          var fecha= $('.fecha').val();
          var direccion= $('.direccion').val();
          var telefono= $('.telefono').val();
          var matricula= $('.matricula').val();
          var grado= $('.grado').val();
          var seccion= $('.seccion').val();
          var turno= $('.turno').val();
          var rnombres= $('.rnombres').val();
          var rapellidos= $('.rapellidos').val();
          var redad= $('.redad').val();
          var rfecha= $('.rfecha').val();
          var direccion= $('.direccion').val();
          var rtelefono= $('.rtelefono').val();
          var cir= $('.cir').val();
          /*alert("nombres:"+nombres+ " apellidos:"+apellidos+ " edad:"+edad+ " Proce:"+fecha+ " direccion:"+direccion+ " telefono:"+direccion+ " matricula:"+matricula+ " grado:"+grado+ " Cpu:"+cpu);*/
          $("#ventana2").fadeOut();
          $.ajax({
            type: 'POST',
            url: 'fuction/update/uploading.php',
            data: {nombres: nombres,apellidos: apellidos,edad: edad,fecha: fecha,direccion: direccion,
             telefono: telefono,matricula: matricula,grado: grado, seccion: seccion, turno: turno,
             rnombres: rnombres,rapellidos: rapellidos,redad: redad,rfecha: rfecha,rtelefono: rtelefono, cir: cir},
            beforeSend: function (resp) {
                        $("#result").hide().append("<div class='container'>"
                                   +"<div class='content'>"
                                   +"<div class='circle'></div>"
                                   +"<div class='circle1'></div>"
                                   +"<center>Modificando Data</center>"
                                   +"</div>"
                                   +"</div>").fadeIn(250);
                },
            success: function(resp){
               if (resp!="") {
                  setTimeout(function() { $("#result").hide().html(resp).fadeIn(1250); }, 1750);
               }
            }
         });
          return false;
        });
      });

      $(document).ready(function(){
        $('.btn-sub-cnl').on('click', function(){
          $("#resultado").fadeOut();
          $.ajax({
            type: 'POST',
            url: '../option.php',
            success: function(resp){
               if (resp!="") {
                  setTimeout(function() { $("#resultado").hide().html(resp).fadeIn(1250); }, 1750);
               }
            }
         });
        });
      });
    </script>


 
</body>
</html>