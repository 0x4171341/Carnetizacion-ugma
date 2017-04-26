<?php 
	require_once("../../clases/conexion/conexion.class.php");
	require_once("../class_crud.php");
    $modelo = new Crud();  
    $modelo->insert_board();
?>
<!DOCTYPE html>
<head>
	<style>
		#b-blue {
			background: rgba(0,183,229,0.8);
			border: solid 1px rgba(0,0,0,0.2);
			border-radius: 5px;
			color: white;
			margin: 50px auto;
			text-align: center;
			width: 600px;
		}
		p a {
			background: white;
			border-radius: 4px;
			border: solid 1px rgba(0,0,0,0.2);
			color: black;
			font-size: 12px;
			padding: 5px 14px;
			text-decoration: none;
		}
	</style>
</head>
<html>
<body>
	<div id="b-blue">
		<p>
			Datos Insertados Correctamente 
		    ¿Desea Ingresar Otro Registro?
		</p>
		<p>
			<a class="si" href="#">Si</a>&nbsp;&nbsp;&nbsp;<a class="no" href="#">No</a>
		</p>
	</div>	
	<script>
		$(document).ready(function(){  
			$('.si').on('click', function(){
				$('#b-blue').fadeOut('fast');
				 $.ajax({
		              url:   'teclado.php',
		              type:  'post',
		              success:  function (response) {
		                    $("#resultado").hide().html(response).fadeIn(2500);
		              }
		      });
			});
		});
	</script>
</body>
</html>