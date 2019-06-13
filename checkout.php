<html>
<body>
<?php

//Conexion a base de datos - CAMBIAR CREDENCIALES DE LOGUEO
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = "restaurant";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);  

	$Busqueda=($_POST['search_value']);
	$Categoria=($_POST['search_category']);
	$result = mysqli_query($conn, "SELECT * WHERE '$Categoria' LIKE %'$Busqueda'%");
	echo json_encode($result); exit();
?>
</body>
</html>
