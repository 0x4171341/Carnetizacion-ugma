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
		.cedula {
			background: white;
			border-radius: 4px;
			border: solid 1px rgba(0,0,0,0.2);
			color: black;
			font-size: 12px;
			padding: 5px 14px;
			text-decoration: none;
			width: 308px;
			text-align: center;
		}
	</style>
</head>

<body>
	<div id="b-blu">
		<p>
			<input name="cedula" type="text" class="cedula" placeholder="Ingrese la Cedula del Representante o Alumno a Buscar" required>
		</p>
		<p>
			<input class="boton" type="submit" value="Buscar">
		</p>
	</div>	
	<script>
		$(document).ready(function(){  
			$('.boton').on('click', function(){
				var cedula= $('.cedula').val();
				$('#b-blu').fadeOut('fast');
				 $.ajax({
		              url:   'fuction/search/encuentra.php',
		              type:  'post',
		              data: {cedula: cedula},
		              success:  function (response) {
		                    $("#resultado").hide().html(response).fadeIn(2500);
		              }
		      });
			});
		});
	</script>
</body>
</html>