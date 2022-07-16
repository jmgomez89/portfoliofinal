<?php 

$nombre_usuario = $_POST['nombre_usuario'];
$clave = $_POST['clave'];

$db = mysqli_connect("localhost", "root", "", "portfolio") or exit ("No se pudo conectar a la base de datos");

$sql = "SELECT * FROM usuarios WHERE usuario = '$nombre_usuario'";
$sql2 = "SELECT * FROM usuarios WHERE clave = '$clave'";

$login = mysqli_query($db, $sql);

$ok = "";

if($login && mysqli_num_rows($login) == 1 ){
    $login2 = mysqli_query($db, $sql2);
    if($login2 && mysqli_num_rows($login2) == 1 ){
        $ok = 'ok';
    }else{
        $ok = 'error';
    }
}else{
    $ok = 'error';
};

mysqli_close($db);

if($ok == 'ok'){
    header("Location: index.php?ok");
}else{
    header("Location: index.php");
};


?>
