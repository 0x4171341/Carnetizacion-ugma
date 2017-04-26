<?php 
	require_once("../../clases/conexion/conexion.class.php");
	require_once("../class_crud.php");
    $modelo = new Crud();  
    $modelo->delete_user();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<style>
		#b-blu {
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

<body>
	<div id="b-blu">
		<p>
			Datos Eliminados Correctamente 
		    ¿Desea Eliminar Otro Registro?
		</p>
		<p>
			<a class="si" href="#">Si</a>&nbsp;&nbsp;&nbsp;<a class="no" href="board.php">No</a>
		</p>
	</div>	
	<script>
		$(document).ready(function(){  
			$('.si').on('click', function(){
				$('#b-blu').fadeOut('fast');
				 $.ajax({
		              url:   'fuction/delete/update.php',
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