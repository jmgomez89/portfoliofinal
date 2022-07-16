<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="estilos/estilos.css">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/7f40cbe45f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form action="login_db.php" method="POST" class="box">
                    <h1>Login</h1>
                        <input type="text" name="nombre_usuario" placeholder="Usuario">
                        <input type="password" name="clave" placeholder="Contraseña">
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
</div>
<div class="crud_container" style="background-image: url(img/php.jpg);">
    
    <div class="crud_form_container">
            <form class="crud_form" action="portfolio_db.php" enctype="multipart/form-data" method="POST">
        
                <div class="mb-2">
                <label for="nombre_proyecto" class="crud-label">Nombre</label>
                <input type="text" class="form-control" name="nombre_proyecto" id="nombre_proyecto">
                </div>
                <div class="mb-2">
                <label for="repositorio" class="crud-label">Repositorio</label>
                <input type="text" class="form-control" name="repositorio" id="repositorio">
                </div>
                <div class="mb-2">
                <label for="link" class="crud-label">Link</label>
                <input type="text" class="form-control" name="link" id="link">
                </div>
                <div class="mb-2">
                <label for="imagen" class="crud-label">Imagen</label>
                <input class="form-control" type="file" name="imagen" id="imagen">
                </div>
                <div class="mb-2">
                <label for="descripcion" class="crud-label">Descripción</label>
                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>
                <input type="submit">
                <input type="reset">
            </form>
            
    </div>
    <br>
    <br>
    <a href="index.php?ok" class="linkOk">Página principal</a>

</div>

</body>
</html>

