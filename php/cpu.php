<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	  <div id="ventana" >
          <article class="centro">
            <a href="">
                <h4>Ingrese Las Caracteriscas Del Equipo</h4>
            </a>
            <form id="fm-cpu-rgst" action="" method="post">	
             <div id="cols-center">
              <p class="crash">
        
                  <!-- <label>Nùmero de Oficio: </label>-->
                  <input class="nombres" name="nombres" type="text" placeholder="Escriba Los Nombre" >
                  
                  <!-- <label>Lugar: </label>-->
                  <input class="apellidos" name="apellidos" type="text" placeholder="Escriba Los Apellidos" >

                  <!-- <label>Fecha: </label>-->
                  <input class="edad" name="edad" type="text" placeholder="Escriba La Edad" >

                  <!-- <label>Fecha: </label>-->
                  <input class="fecha" name="fecha" type="text" placeholder="Fecha de Nacimiento" >
                  
              </p>

              <p class="crash">

                  <!-- <label>Asunto: </label>-->
                  <input class="direccion" name="direccion" type="text" placeholder="Dirección" >
                  
                  <!-- <label>Dependencia: </label>-->
                  <input class="telefono" name="telefono" type="text" placeholder="Telefono" >

                  <!-- <label>Referencia: </label>-->
                  <input class="matricula" name="matricula" type="text" placeholder="Matricula" >

                  <select class="grado" name="grado">
                    <option>Seleccione El Grado</option>
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
                    <option>Seleccione La Seccion</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                  </select>

                  <select class="turno" name="turno">
                    <option>Seleccione El Turno</option>
                    <option>Mañana</option>
                    <option>Tarde</option>
                  </select>

                    <!-- <label>Referencia: </label>-->
                  <input class="cir" name="cir" type="text" placeholder="Cedula del Representante" >                  
                 
      
              </p>
			       </div>
              <p class="crash" id="botton">
                  
                  <input type="submit" value="PROCESAR" id="cancel" class="btn-sub-igs">
                  <a href="#" id="cancel" class="btn-sub-cnl">CANCELAR</a> 
              </p>   
            </form>
          </article>
    </div>

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
          var cir= $('.cir').val();
          /*alert("nombres:"+nombres+ " apellidos:"+apellidos+ " edad:"+edad+ " Proce:"+fecha+ " direccion:"+direccion+ " telefono:"+direccion+ " matricula:"+matricula+ " grado:"+grado+ " Cpu:"+cpu);*/
          $("#ventana").fadeOut();
          $.ajax({
            type: 'POST',
            url: 'fuction/insert/cpu.php',
            data: {nombres: nombres,apellidos: apellidos,edad: edad,fecha: fecha,direccion: direccion, telefono: telefono,matricula: matricula,grado: grado, seccion: seccion, turno: turno, cir: cir},
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