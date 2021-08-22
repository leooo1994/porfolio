<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/iconosFontawesome/css/all.min.css">
<link rel="stylesheet" href="css/iconosFontawesome/css/fontawesome.css">
<link rel="stylesheet" href="css/estilo.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">

<body id="contacto">
    <header>

    <header>
        <div class="container">

            <?php
            $pg = "contacto";
            include_once("menu.php"); ?>

        </div>
    </header>
    </header>
    <main class="conteiner">
        <div class="row">
            <div class="col-12 py-5 px-5">
                <h1>Contacto</h1>

            </div>


        </div>

        <div class="row">
            <div class="col-12 col-sm-6 px-5 ">
                <p>Te invito a que te contactes enviando un mensaje o bien por whatsapp</p>

            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="email" id="txtCorreo" name="txtCorreo" placeholder="Correo"
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control shadow">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control shadow"></textarea>
                    </div>
                    <div class="me-auto text-right">
                        <button id="btnEnviar" name="btnEnviar" class="btn px-4">ENVIAR</button>
                    </div>
                </form>

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
        <a href="https://api.whatsapp.com/send?phone=54115090931" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap-5.0.2-dist/js/bootstrap.bundle.js.map"></script>
</body>

</html>