<!DOCTYPE html5>
<html>

<head>
	<script src="jquery-3.3.1.js"></script>
        <script scr="jquery-validation.js"></script>

	<title>Examen Karen Monserrat Padilla Rojas</title>

	<script>
        $("#formulario").validate();
        </script>

	<link href="css/registro.css"
	      rel="stylesheet" />
</head>

<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script
	
	<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FUNAM.MX.Oficial%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>	
		
	<h2>Formulario registro</h2>
	
	<h2>"Registro de Usuarios"</h2>
	
	<form>
		<label>Nombre:</label><input type="text" nombre="nombre" required> <br>
		<label>Apellido Paterno:</label><input type="text" ap_paterno="Apellido Paterno" required> <br />
		<label>Apellido Materno:</label><input type="text" ap_materno="Apellido Materno"> <br />
		<label>Direcci&oacuten:</label><input type="text" direccion="Direcci&oacuten" required> <br />
		<label>Tel&eacutefono:</label><input type="text" telefono="tel&eacutefono" required> <br />
		<label>Correo:</label> <input type="text" correo="correo" required> <br />
	</form> <br />
		
	<h3><a href="consulta.php">Consulta los usuarios registrados</a></h3> <br />
			
</body>

<footer>
	<a href="creditos.php">Créditos</a> <br />
	<a href="contacto.php">Contáctanos</a> <br />
	<div class="fb-like" data-href="https://www.facebook.com/UNAM.MX.Oficial/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</footer>
</html>
