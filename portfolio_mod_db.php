<?php 

$id = $_POST['id'];
$nombre_proyecto = $_POST['nombre_proyecto'];
$repositorio = $_POST['repositorio'];
$link = $_POST['link'];
$descripcion = $_POST['descripcion'];
$imagen = $_FILES['imagen']["tmp_name"];
$imgContenido = addslashes(file_get_contents($imagen));

$db = mysqli_connect("localhost", "root", "", "portfolio") or exit ("No se pudo conectar a la base de datos");
$ssql = "UPDATE proyectos SET nombre_proyecto='$nombre_proyecto', repositorio='$repositorio', link='$link', descripcion='$descripcion', imagen='$imgContenido' WHERE id = '$id'";
mysqli_query($db,$ssql);
mysqli_close($db);
header("Location: index.php?ok");

?>
