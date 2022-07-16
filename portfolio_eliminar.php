
<?php
    $id = $_GET['id'];
    $db = mysqli_connect("localhost", "root", "", "portfolio") or exit ("No se pudo conectar a la base de datos");
    $ssql = "DELETE FROM proyectos WHERE id = '$id'";
    mysqli_query($db,$ssql);
    mysqli_close($db);
    header("Location: index.php?ok");
?>
         


