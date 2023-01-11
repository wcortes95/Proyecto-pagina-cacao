<!DOCTYPE html>
<html>
<head>
	<title>Servicio Análisis de Suelos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Datos Usuario</h1>
	<form method="post">
		<h2>Por favor ingrese la información soliictada</h2>
    	<input type="text" name="nombre" placeholder="Nombre completo">
    	<input type="text" name="departamento" placeholder="Departamento">
    	<input type="text" name="municipio" placeholder="Municipio">
    	<input type="text" name="vereda" placeholder="Vereda">
    	<input type="text" name="finca" placeholder="Finca">
    	<input type="text" name="a_total" placeholder="Área total">
    	<input type="text" name="a_cacao" placeholder="Área cacao">
    	<input type="text" name="a_productiva" placeholder="Área productiva">
    	<input type="clones" name="clones" placeholder="Clones">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>