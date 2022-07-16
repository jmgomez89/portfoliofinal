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
    <link rel="stylesheet" href="estilos/login.css">
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
                    <form action="portfolio_db.php" class="box" enctype="multipart/form-data" method="POST">
                    <h1>Cargar Proyecto</h1>
                        <input type="text" name="nombre" placeholder="Nombre">
                        <input type="text" name="repositorio" placeholder="Repositorio">
                        <input type="text" name="link" placeholder="Link">
                        <input type="file" name="imagen">
                        <textarea name="descripcion" id="descripcion" cols="50" rows="5"></textarea>
                        <input type="submit">
                        <input type="reset">
                        <a href="index.php?ok" class="linkOk">Página principal</a>
                    </form>
                </div>
            </div>
        </div>
</div>


</body>
</html>

