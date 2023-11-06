<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto - Mexican Roll</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
     
      /* Estilo para el fondo de pantalla */
      body {
        background-image: url('img/Back000.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed; /* Mantiene la imagen de fondo fija mientras se desplaza */
      }
    </style>
</head>
<body>
    <div class="container"><br> <br>    <br>    <br>    
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-12">
                <div class="card" style="background-color: rgba(197, 90, 17, 0.5); color: white;">
                    <div class="card-body">
                        <h2 class="card-title text-center">Contacto - Mexican Roll</h2>
                        <form action="mailto:mensajes@mexicanroll.com" method="post" enctype="text/plain">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo electrónico:</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="form-group">
                                <label for="mensaje">Envíanos tu Mensaje:</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                            </div><br>  <br>    
                            <button type="submit" class="btn btn-light btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar enlaces a los archivos JavaScript de Bootstrap (opcional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
