<!DOCTYPE html>

<html>
<head>
    <meta charset ="UTF-8">
    <script src = "js/jquery-3.3.1.js"></script>
    <script src = "js/peticion_ajax.js"></script>
</head>

<?php
include_once("conexion.php");
	
<body>
    $psql=psql_query("SELECT * FROM usuarios",$con);

	echo "</p>Usuarios</p> \n";
	while($row = mysql_fetch_array($sql)){
		echo "<p>".$row['usuario']." - ".$row['ap_paterno']." - ".$row['ap_materno']."</p> \n";
	}
	
?>
	
</body>
    
<footer>
    <a href="index.php">Inicio</a><br />
    <a href="creditos.php">Créditos</a> <br />
	<a href="contacto.php">Contáctanos</a> <br />
</footer>

</html>
