<?php 

$nombre_proyecto = $_POST['nombre_proyecto'];
$repositorio = $_POST['repositorio'];
$link = $_POST['link'];
$descripcion = addslashes($_POST['descripcion']);
$imagen = $_FILES['imagen']["tmp_name"];
$imgContenido = addslashes(file_get_contents($imagen));

$db = mysqli_connect("127.0.0.1:3306", "u921038692_juanmgomez", "Cachas2020", "u921038692_portfolio") or exit ("No se pudo conectar a la base de datos");

mysqli_query($db, "INSERT INTO proyectos VALUES(DEFAULT, '$nombre_proyecto', '$repositorio', '$link', '$descripcion', '$imgContenido')");

mysqli_close($db);

header("Location: index.php?ok");

?>
