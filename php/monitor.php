<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="ventana" class="modalbox rotate">
          <article class="centro">
            <a href="">
                <h4>Ingrese Las Caracteriscas Del Equipo</h4>
            </a>
            <form id="fm-cpu-rgst" action="" method="post">	
             <div id="cols-center">
              <p class="crash">
        
                  <!-- <label>Nùmero de Oficio: </label>-->
                  <input class="cir" name="cir" type="text" placeholder="Cedula del Representante" >

                  <!-- <label>Asunto: </label>-->
                  <input class="nombres" name="nombres" type="text" placeholder="Escriba los Nombres" >

                   <!-- <label>Lugar: </label>-->
                  <input class="apellidos" name="apellidos" type="text" placeholder="Escriba los Apellidos" >


              </p>

              <p class="crash">
                  
                  <!-- <label>Nùmero de Oficio: </label>-->
                  <input class="direccion" name="direccion" type="text" placeholder="Dirección" >

                  <!-- <label>Asunto: </label>-->
                  <input class="telefono" name="telefono" type="text" placeholder="Telefono" >

                   <!-- <label>Lugar: </label>-->
                  <input class="fecha" name="fecha" type="text" placeholder="Fecha de Nacimiento" >


              </p>
              <p class="crash">

                   <!-- <label>Fecha: </label>-->
                  <input class="edad" name="edad" type="text" placeholder="Edad" >

              </p>
			 </div>
              <p class="crash" id="botton">
                  <input class="" type="submit" class="btn-sub-igs" value="PROCESAR">
                  <a href="#" id="cancel" class="btn-sub-cnl">CANCELAR</a> 
              </p>   
            </form>
          </article>
    </div>
    <script src="../js/script.js"></script>
    <script>
      $(document).ready(function() {  
        $('.btn-sub-igs').submit(function(e){ 
          e.preventDefault();
        });
        $('#fm-cpu-rgst').submit(function() { 
          var cir= $('.cir').val();
          var nombres= $('.nombres').val();
          var apellidos= $('.apellidos').val();
          var direccion= $('.direccion').val();
          var telefono= $('.telefono').val();
          var fecha= $('.fecha').val();
          var edad= $('.edad').val();

          /*alert("nombres:"+nombres+ " apellidos:"+apellidos+ " direccion:"+direccion+ " Proce:"+procesador+ " Ram:"+ram+ " Hdd:"+ram+ " SO:"+so+ " fecha:"+fecha+ " Cpu:"+cpu);*/
          $("#ventana").fadeOut();
          $.ajax({
            type: 'POST',
            url: 'fuction/insert/monitor.php',
            data: {cir: cir,nombres: nombres,apellidos: apellidos,direccion: direccion,telefono: telefono,fecha: fecha, edad: edad},
            beforeSend: function (resp) {
                        $("#result").hide().append("<div class='container'>"
                                   +"<div class='content'>"
                                   +"<div class='circle'></div>"
                                   +"<div class='circle1'></div>"
                                   +"<center>Insertando Data</center>"
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