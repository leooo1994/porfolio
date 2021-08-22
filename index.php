<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/iconosFontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/iconosFontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
</head>

<body id="inicio">
    
    <header>
    <header>
        <div class="container">

            <?php
            $pg = "Index";
            include_once("menu.php"); ?>

        </div>
    </header>

        <main class="container">
            <div class="row">
                <div class="col-12 mt-4 text-center div-cohete">
                    <a href="proyectos.php"><img src="images/Imagenes/cohete.svg" class="cohete"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                    <div class="input-home">
                        <p class="p-1">Bienvenid@ a mi sitio de desarollo web y marketing</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="proyectos.html" class="btn shadow">Conoce mis proyectos</a>
                </div>
            </div>
        </main>
        <footer class="container">
            <div class="row mt-5 pb-3">
                <div class="col-12 col-sm-3 text-center text-sm-start">
                    <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
                    Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
                </div>
                <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
                    <a href="mailto:Leooo.1994@gmail.com">Leooo.1994@gmail.com</a>
                </div>
            </div>
        </footer>
    
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=541156090931" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    

</body>
</html>