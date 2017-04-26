<!DOCTYPE html>
<html lang="es">
<head>
	<style>
		#b-blue {
			background: rgba(0,183,229,0.99);
			border: solid 1px rgba(0,0,0,0.2);
			border-radius: 5px;
			color: white;
			left: calc(44% - 200px - 0.5em);
			margin: 125px auto;
			position: fixed;
			text-align: center;
			width: 600px;
			z-index: 9999;
		}
		p a {
			background: white;
			border-radius: 4px;
			border: solid 1px rgba(0,0,0,0.2);
			color: black;
			font-size: 12px;
			font-weight: bolder;
			padding: 5px 14px;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<div id="b-blue">
		<p>
			Existen Campos Vacios En El Formulario
		</p>
		<p>
			<a class="si" href="#">X</a>
		</p>
	</div>	
	<script>
		$(document).ready(function(){  
			$('#error').on('click','.si', function(){
				$('#b-blue').fadeOut('fast');
			});
		});
	</script>
</body>
</html>