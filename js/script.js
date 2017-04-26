$(document).ready(function() {  
      $(".ins-cp").on('click',function () {
         $("#wrap-tab").fadeOut();  
          $.ajax({
                url:   '../option.php',
                type:  'post',
                beforeSend: function (response) {
                        $("#resultado").hide().html("<div class='container'>"
                                   +"<div class='content'>"
                                   +"<div class='circle'></div>"
                                   +"<div class='circle1'></div>"
                                   +"<center>Cargando Data</center>"
                                   +"</div>"
                                   +"</div>").fadeIn(250);
                },
                success:  function (response) {
                      setTimeout(function() { $("#resultado").hide().html(response).fadeIn(250); }, 1250);
                        /*
               success:  function (response) {
                            function show(){$("#resultado").html(response);};
                            window.setTimeout( show, 3000 );

                            //// Espera que el sitio este 100% load

                         $(window).load(function(){ function show_popup(){ $("#message").slideUp(); };
                          window.setTimeout( show_popup, 5000 ); // 5 seconds }); 
                        */
                }
        });
    });

     $(".bus-cp").on('click',function () {
         $("#wrap-tab").fadeOut();  
          $.ajax({
                url:   'fuction/search/search.php',
                type:  'post',
                beforeSend: function (response) {
                        $("#resultado").hide().html("<div class='container'>"
                                   +"<div class='content'>"
                                   +"<div class='circle'></div>"
                                   +"<div class='circle1'></div>"
                                   +"<center>Cargando Data</center>"
                                   +"</div>"
                                   +"</div>").fadeIn(250);
                },
                success:  function (response) {
                      setTimeout(function() { $("#resultado").hide().html(response).fadeIn(250); }, 1250);
                        /*
               success:  function (response) {
                            function show(){$("#resultado").html(response);};
                            window.setTimeout( show, 3000 );

                            //// Espera que el sitio este 100% load

                         $(window).load(function(){ function show_popup(){ $("#message").slideUp(); };
                          window.setTimeout( show_popup, 5000 ); // 5 seconds }); 
                        */
                }
        });
    });

 $(".mod-cp").on('click',function () {
         $("#wrap-tab").fadeOut();  
          $.ajax({
                url:   'fuction/update/search_up.php',
                type:  'post',
                beforeSend: function (response) {
                        $("#resultado").hide().html("<div class='container'>"
                                   +"<div class='content'>"
                                   +"<div class='circle'></div>"
                                   +"<div class='circle1'></div>"
                                   +"<center>Cargando Data</center>"
                                   +"</div>"
                                   +"</div>").fadeIn(250);
                },
                success:  function (response) {
                      setTimeout(function() { $("#resultado").hide().html(response).fadeIn(250); }, 1250);
                        /*
               success:  function (response) {
                            function show(){$("#resultado").html(response);};
                            window.setTimeout( show, 3000 );

                            //// Espera que el sitio este 100% load

                         $(window).load(function(){ function show_popup(){ $("#message").slideUp(); };
                          window.setTimeout( show_popup, 5000 ); // 5 seconds }); 
                        */
                }
        });
    });

 $(".eli-cp").on('click',function () {
         $("#wrap-tab").fadeOut();  
          $.ajax({
                url:   'fuction/delete/delete_up.php',
                type:  'post',
                beforeSend: function (response) {
                        $("#resultado").hide().html("<div class='container'>"
                                   +"<div class='content'>"
                                   +"<div class='circle'></div>"
                                   +"<div class='circle1'></div>"
                                   +"<center>Cargando Data</center>"
                                   +"</div>"
                                   +"</div>").fadeIn(250);
                },
                success:  function (response) {
                      setTimeout(function() { $("#resultado").hide().html(response).fadeIn(250); }, 1250);
                        /*
               success:  function (response) {
                            function show(){$("#resultado").html(response);};
                            window.setTimeout( show, 3000 );

                            //// Espera que el sitio este 100% load

                         $(window).load(function(){ function show_popup(){ $("#message").slideUp(); };
                          window.setTimeout( show_popup, 5000 ); // 5 seconds }); 
                        */
                }
        });
    });
  
    $(".desktop").on('click',function () {
       $("#resultado").fadeOut();  
        $.ajax({
              url:   'cpu.php',
              type:  'post',
              success:  function (response) {
                    $("#resultado").hide().html(response).fadeIn(1250);
              }
      });
  });

  $(".monitor").on('click',function () {
       $("#resultado").fadeOut();  
        $.ajax({
              url:   'monitor.php',
              type:  'post',
              success:  function (response) {
                    $("#resultado").hide().html(response).fadeIn(1250);
              }
      });
  });

    
});
































/*
  http://www.xvideos.com/video8535369/sexy_redhead_milf_kelly_divine_rides_a_massive_cock_10
  http://www.xvideos.com/profiles/ashli-orion#_tabVideos
  http://www.xvideos.com/profiles/kelly-divine#_tabVideos
http://www.xvideos.com/profiles/jamie-rae#_tabVideos
http://www.xvideos.com/profiles/julia-ann#_tabVideos
http://www.xvideos.com/profiles/allie-haze
http://www.xvideos.com/profiles/taissia-shanti
http://www.xvideos.com/c/4/ass-14
http://www.xvideos.com/profiles/bree-olson#_tabVideos
http://www.xvideos.com/profiles/franceska-jaimes#_tabVideos -> Importante
http://www.xvideos.com/profiles/chanel-preston#_tabVideos
http://www.xvideos.com/profiles/brooke-lee-adams#_tabVideos
http://www.xvideos.com/profiles/mike-adriano-1#_tabVideos
http://www.xvideos.com/profiles/remy-lacroix#_tabVideos -> Impoortant
http://www.xvideos.com/profiles/amy-brooke#_tabVideos
http://www.xvideos.com/profiles/vanessa-lane#_tabVideos
http://www.xvideos.com/profiles/monica-mayhem#_tabVideos




- Muy Buenas a todos hoy vengo con una duda, ya que tengo problemas para estructurar una BD la verdad quisiera saber cual es la forma mas eficiente de tener la siguiente BD, debo hacer para mi clase de informatica un pequeño sistema el cual almacene en una BD datos de los siguientes equipos: Desktop, laptop, monitores, teclados, raton, impresoras y switch.

- La verdad estoy confundido porque de los equipos quiero almacenar los siguientes datos: Marca, Modelo, Serial, Novedad, Procesador, Ram, Hdd, So, Pulgadas, Puerto.


*/