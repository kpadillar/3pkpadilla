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
	<h2>Formulario registro</h2>
	
	<h2>"Registro de Usuarios"</h2>
	
	<form>
		<label>Nombre:</label><input type="text" nombre="nombre" required> <br>
		<label>Apellido Paterno:</label><input type="text" ap_paterno="Apellido Paterno" required> <br />
		<label>Apellido Materno:</label><input type="text" ap_materno="Apellido Materno"> <br />
		<label>Direcci&oacuten:</label><input type="text" direccion="Direcci&oacuten" required> <br />
		<label>Tel&eacutefono:</label><input type="text" telefono="tel&eacutefono" required> <br />
		<label>Correo:</label> <input type="text" correo="correo" required> <br />
		
</body>

</html>
