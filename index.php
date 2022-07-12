<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <style>

    body
    {
    background:#E3DAC9;
    color:black;
    }

    </style>
    </head>

    <body>
    <header>
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">  <!-- Inicio del div contenedor principal-->
                    <a class="navbar-brand" href="#">
                        <img src="img/hotel.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                        Hotel Zamaros</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Contenedor para generar efecto menu -->
                        <u1 class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Reservas</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Habitaciones</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Servicios</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Galeria</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Registro</a></li>
                        </u1>
                    </div> <!-- Cierre del div efecto menu -->
                </div> <!-- Cierre del div contenedor principal -->
        </nav>
    </header>
    <hr>
    <section>
       
    <!-- Slide de imagenes -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><!-- Contenedor principals de las imagenes -->
        <div class="carousel-inner"> <!-- Contenedor interno -->
            <div class="carousel-item active"> <!-- imagen 1 -->
                <img src="img/uno.png" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 2 -->
                <img src="img/dos.png" class="d-block w-100">
            </div>
            <div class="carousel-item"> <!-- imagen 3 -->
                <img src="img/tres.png" class="d-block w-100">
            </div>
           
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            
        </div>
    </div>

        <!-- Fin del slide -->


        <!-- Elemento para mostrar los cuadros de imagenes -->

        <div class="container p-5">
            <div class="row">

                <!-- Crear tres columnas -->
                <div class="col-lg-3"> <!-- Columan 1 -->
                    <div class="card" style="width: 18rem;">
                        <img src="img/H1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">SUIT</h5>
                          <p class="card-text">son espaciosas, de hasta 58 metros cuadrados (757 pies cuadrados). Cada suite puede acomodar hasta tres adultos, o incluso familias de dos adultos con dos niños, y puede tener vistas a la selva, el río, el mar o la playa. Dependiendo de la categoría</p>
                          <a href="#" class="btn btn-primary">Reservar</a>
                        </div>
                      </div>
                </div>
                
                <div class="col-lg-3"> <!-- Columan 2 -->
                    <div class="card" style="width: 18rem;">
                        <img src="img/H2.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">SUIT JUNIOR</h5>
                          <p class="card-text">Con 126 metros cuadrados (1,356 pies cuadrados) de espacio, las junior suites del Hotel Xcaret México son ideales para los huéspedes que buscan espacios más grandes, con áreas que lo hacen sentir como en casa, incluida una amplia terraza para relajarse mientras admira las vistas privilegiadas de la selva, el río o el mar. Las junior suites pueden incluir:</p>
                          <a href="#" class="btn btn-primary">Reservar</a>
                        </div>
                      </div>
                </div>
                
                <div class="col-lg-3"> <!-- Columan 3 -->
                    <div class="card" style="width: 18rem;">
                        <img src="img/H3.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">MASTER SUITES </h5>
                          <p class="card-text">son las habitaciones más equipadas y espaciosas del hotel, que abarcan hasta 230 metros cuadrados (2,475 pies cuadrados). Todos los alojamientos ofrecen impresionantes vistas frontales del océano y pueden acomodar hasta cinco personas. Estas exclusivas habitaciones </p>
                          <a href="#" class="btn btn-primary">Reservar</a>
                        </div>
                      </div>
                </div>

                <div class="col-lg-3"> <!-- Columan 4 -->
                    <div class="card" style="width: 18rem;">
                        <img src="img/H4.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Simple</h5>
                          <p class="card-text">Una habitacion comoda</p>
                          <a href="#" class="btn btn-primary">Reservar</a>
                        </div>
                      </div>
                </div>
                

            </div>
        </div>


    </section>


    <footer class="container-fluid bg-light text-center p-3">
        <p>&copy;Todos los derechos reservados 2022</p>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>