<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Mi Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta
      name="description"
      content="Mexican Roll Sushi Restaurante Familiar"
    />
    <meta
      name="keywords"
      content="Mexican Roll Sushi, sushi, Restaurante, Río Grande, Zacatecas"
    />
    <meta name="author" content="Hugo A. Letechipía Chávez" />
    <style>
      /* Estilo para el fondo de pantalla */
      body {
        background-image: url('img/Back000.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed; /* Mantiene la imagen de fondo fija mientras se desplaza */
      }

      /* Estilo para el contenedor fijo en la parte inferior */
      .bottom-container {
        background-color: rgba(197, 90, 17, 0.5); /* Fondo con color y transparencia */
        color: white;
        text-align: center;
        padding: 5px;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
      }

       /* Estilo para los iconos enlaces visitados */
        a:visited i {
            color: white;
        }

        i.bi-telephone {
          color: white;
        }

        i.bi-whatsapp {
          color: white;
        }
        i.bi-geo-alt {
          color: white;
        }
        i.bi-list {
          color: white;
        }
        i.bi-instagram {
          color: white;
        }
        i.bi-person-circle {
          color: white;
        }
        i.bi-house {
          color: white;
        }


    

        /* Estilo personalizado para eliminar el borde azul en el enfoque */
        .btn2:focus {
            outline: none !important;
            box-shadow: none !important;
        }
    </style>
  </head>
  <body>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Menú provisional
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Entradas</a></li>
        <li><a class="dropdown-item" href="#">Empanizados</a></li>
        <li><a class="dropdown-item" href="#">Del Mar</a></li>
        <li><a class="dropdown-item" href="#">Especialidades</a></li>
      </ul>
    </div>

    <div class="container ">
      <br><br>
      <div class="row">
        <div class="col-sm-12 col-md-4">
          
        </div>
        <div class="col-sm-12 col-md-4 d-grid" >
          <a href="entradas.php" class="btn btn2 btn-primary btn-block p-3 my-3" style="background-color: rgba(197, 90, 17, 0.5);" >Entradas</a>
          <br><br>
          <a href="#" class="btn btn2 btn-primary btn-block p-3 my-3" style="background-color: rgba(197, 90, 17, 0.5);">Empanizados</a>
          <br><br>
          <a href="#" class="btn btn2 btn-primary btn-block p-3 my-3" style="background-color: rgba(197, 90, 17, 0.5);">Del Mar</a>
          <br><br>
          <a href="#" class="btn btn2 btn-primary btn-block p-3 my-3" style="background-color: rgba(197, 90, 17, 0.5);">Especialidades</a>
          <br><br><br>
          
        </div>
        <div class="col-sm-12 col-md-4">
          
        </div>


      </div>
      <div class="row text-center">
          <div class="col"> </div>
           <div class="col"> <img src="img/LogoMR.png" alt="Imagen Centrada" style="width: 100%;"></div>
           <div class="col"></div> 
       
      </div>  
    </div>


    <div class="bottom-container">
      <p style=" font-size: 30px">
        <a href="index.php"><i class="bi bi-house"></i></a>
        <a href="#"><i class="bi bi-list"></i></a>&nbsp;&nbsp;<a href="tel:4981133835"><i class="bi bi-telephone"></i></a>&nbsp;&nbsp;<a href="https://api.whatsapp.com/send?phone=524981133835"><i class="bi bi-whatsapp"></i></a>&nbsp;&nbsp;<a href="https://www.google.com/maps/place/23.832100848590702, -103.03428568984366" target="_blank"><i class="bi bi-geo-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/mexican_roll/"><i class="bi bi-instagram"></i></a>&nbsp;&nbsp;<a href=" https://www.facebook.com/MexicanRollSushi"><i class="bi bi-facebook"></i></a>&nbsp;&nbsp;<a href="contacto.php"><i class="bi bi-person-circle"></i></a></p>

    </div>






    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
