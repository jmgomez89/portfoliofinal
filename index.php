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
    
    <!-- Sidebar con mi imagen -->
    <div class="sidebar">
        <img src="img/main-img.jpg" alt="imagen principal">
    </div>

    <!-- Sidebar oculto-->
    <nav class="hidden_sidebar color-black animate-right xxlarge"
    id="mySidebar">
        <a href="javascript:void(0)" onclick="closeNav()" class="button color-black xxxlarge display-topright" style="padding:0 12px;">
            <i class="fa fa-remove"></i>
        </a>
        
        <?php 
        if(isset($_GET['ok'])){
            $show = 'block';
        }else{
            $show = 'none';
        };
        ?>

        <div class="bar-block center">
            <a href="#" class="bar-item button text-grey hover-black" onclick="closeNav()">Home</a>
            <a href="#sobremi" class="bar-item button text-grey hover-black" onclick="closeNav()">Sobre Mi</a>
            <a href="#portfolio" class="bar-item button text-grey hover-black"  onclick="closeNav()">Portfolio</a>
            <a href="portfolio.php" class="bar-item button text-grey hover-black" style="display:<?= $show?> ;" onclick="closeNav()">Cargar Proyecto</a>
            <a href="#contacto" class="bar-item button text-grey hover-black" onclick="closeNav()">Contacto</a>
            <a href="login.php" class="bar-item button text-grey hover-black" onclick="closeNav()">Login</a>
            <a href="index.php" class="bar-item button text-grey hover-black" style="display:<?= $show?> ;" onclick="closeNav()">Logout</a>
            <a href="https://www.facebook.com/juanmanuel.gomez.52056/" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
            <a href="https://www.instagram.com/juannmg22/" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram w3-hover-opacity"></i></a>
            <a href="https://www.linkedin.com/in/jmgomez89/" target="_blank" rel="noopener noreferrer"> <i class="fa fa-linkedin w3-hover-opacity"></i></a>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="padding-large">

        <!-- Ícono para desplegar el sidebar -->
        <span class="button top color-white xxlarge text-grey hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

        <!-- Header -->
        <header class="container center" style="padding:128px 16px" id="home">
        <h1 class="jumbo"><b>Juan Manuel Gómez</b></h1>
        <p>Full Stack Developer Jr</p>
        <button class="button color-light-grey margin-top">
            <a href="cv/cv.pdf" style="text-decoration: none;" target="_blank"><i class="fa fa-download"></i> Descargar CV</a>
        </button>
        </header>
        <!-- Fin Header -->

        <!-- Sobre mi Section -->
        <div class="content justify text-grey padding-32" id="sobremi">
            <h2>Sobre Mi</h2>
            <hr class="opacity">
            <p>
                Soy un técnico en Seguridad e Higiene, con más de 12 años de experiencia en empresa del sector financiero, en la búsqueda de reorientar mi carrera profesional hacia el sector de sistemas, con el deseo de obtener mi primer empleo IT.
            </p>
            <p>
                Me considero una persona responsable, con el ánimo y las ganas de continuar aprendiendo y, también, de aportar toda mi experiencia adquirida a lo largo de mi camino profesional.
            </p>
            <p
            >Considero que el cambio es un signo de capacidad de superación y, por eso, creo que siempre sería capaz de aportar valor en la empresa en la que me encuentre.
            </p><br>

            <h3 class="w3-padding-16">Conocimientos</h3>
            <hr class="opacity">
            <div class="skills">
                <div>
                    <p class="w3-wide">CSS3 <i class="fa-brands fa-css3-alt"></i></p>
                    <p class="w3-wide">HTML <i class="fa-brands fa-html5"></i></p>
                    <p class="w3-wide">JS <i class="fa-brands fa-js"></i></p>
                </div>
                <div>
                    <p class="w3-wide">PHP <i class="fa-brands fa-php"></i></p>
                    <p class="w3-wide">Node JS <i class="fa-brands fa-node"></i></p>
                    <p class="w3-wide">MySQL <i class="fa-solid fa-database"></i></p>
                </div>
                <div>
                    <p class="w3-wide">Mongo DB <i class="fa-solid fa-server"></i></p>
                    <p class="w3-wide">Bootstrap <i class="fa-brands fa-bootstrap"></i></i></p>
                    <p class="w3-wide">Sass <i class="fa-brands fa-sass"></i></p>
                </div>
                <div>
                     <p class="w3-wide">GitHub <i class="fa-brands fa-github"></i></p>
                </div>
            </div>

            <h3 class="w3-padding-16">Certificaciones</h3>
            <hr class="opacity">
            <div class="certificate_container">
                <div class="certificate">
                    <h6>Full Stack Engineer</h6>
                    <a href="img/bootcamp.jpg"><img src="img/bootcamp.jpg" alt="certificado"></a>
                </div>
                <div class="certificate">
                    <h6>Scrum</h6>
                    <a href="img/scrum.jpg"><img src="img/scrum.jpg" alt="certificado"></a>
                </div>
                <div class="certificate">
                    <h6>PHP y MySQL Inicial</h6>
                    <a href="img/utn1.jpg"><img src="img/utn1.jpg" alt="certificado"></a>
                </div>
            </div>

        </div>
        <!-- Fin Sobre mi -->
        <!-- Inicio Portfolio -->
        <div class="padding-32 content justify text-grey" id="portfolio">
            <h3 class="w3-padding-16">Mi Portfolio</h3>
            <hr class="opacity">
            <br>
            <div class="container portfolio_cards_container">

            <?php 
                $db = mysqli_connect("127.0.0.1:3306", "u921038692_juanmgomez", "Cachas2020", "u921038692_portfolio") or exit ("No se pudo conectar a la base de datos");
                $result = mysqli_query($db, "SELECT * from proyectos");
        
                while ($row = mysqli_fetch_array($result)) {
                    echo '<div class="card portfolio_card">
                            <img src="data:image/jpeg;base64,'.base64_encode($row["imagen"]) .'" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">'.$row["nombre_proyecto"].'</h5>
                                <p class="card-text">'.$row["descripcion"].'</p>
                                <a style="display: block ;" href="'.$row["repositorio"].'" class="btn btn-primary">Ir al repositorio</a>
                                <br>
                                <a style="display: block ;" href="'.$row["link"].'" class="btn btn-primary">Ir al proyecto</a>
                                <br>
                                <a style="display:'.$show.' ;" href="portfolio_modificar.php?id='.$row["id"].'" class="btn btn-success"><i class="fa-solid fa-pencil"></i> Modificar</a>
                                <br>
                                <a style="display:'.$show.' ;" href="portfolio_eliminar.php?id='.$row["id"].'" class="btn btn-danger"><i class="fa-solid fa-circle-minus"></i> Eliminar</a>
                            </div>
                         </div>';
                }
                
                mysqli_free_result($result)


            ?>

            </div>
        </div><br>
        <!-- Fin Portfolio -->
        <!-- Inicio Contacto -->
        <div class="padding-32 content justify text-grey" id="contacto">
            <h3 class="w3-padding-16">Contacto</h3>
            <hr class="opacity">
            <p><i class="fa fa-envelope fa-fw xxlarge w3-margin-right"> </i> Email: jmgomezn8@gmail.com</p>
            
            <?php 
            $estadoForm = "block";
            
            if(isset($_GET['e'])){
                $estadoForm = "none";
                include('mensajeOk.html');
            }

            ?>

            
            <form method="POST" action="contacto.php" style="display:<?= $estadoForm ?> ;">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="mail" class="form-control" id="exampleFormControlInput1">
                </div>
    
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentarios</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="comentarios" rows="3"></textarea>
                </div>

                <input type="submit">
            </form>

            
        </div>
        <hr class="opacity">
    </div>
    

    <script src="JS/sidebar.js"></script>

</body>
</html>