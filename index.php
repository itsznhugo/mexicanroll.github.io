<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página con Imagen de Fondo y Centro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <style>
        /* Estilo para el fondo de pantalla */
        body {
            background-image: url('img/Back0000.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Estilo para la imagen centrada */
        .centered-image {
            max-width: 100%;
            max-height: 80vh;
            width: auto;
            opacity: 0; /* La imagen comienza invisible */
            transition: opacity 1s; /* Efecto de transición de opacidad durante 1 segundo */
        }


    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <a href="inicio.php"><img src="img/LogoMR.png" alt="Imagen Centrada" class="centered-image"></a>
                
            </div><div class="spinner-border text-light"></div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var centeredImage = document.querySelector(".centered-image");
                centeredImage.style.opacity = 1; // Hace que la imagen sea visible
            }, 3000); // 3000 milisegundos = 3 segundos
        });
    </script>
</body>
</html>
