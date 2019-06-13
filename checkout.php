<html>
<body>
<?php

//Conexion a base de datos
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = "restaurant";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);  

	$Categoria=($_POST['category']);
	$result = mysqli_query($conn, "SELECT * WHERE '$Categoria' LIKE %'$Busqueda'%");
	echo json_encode($result); exit();
?>
</body>
</html>
