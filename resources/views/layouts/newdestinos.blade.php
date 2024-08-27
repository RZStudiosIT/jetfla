<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../resources/css/carousel.css" rel="stylesheet">
    
    <style>
        @font-face {
            font-family: 'Designer';
            src: url('{{ url('/css/Designer.otf') }}') format('opentype');
        }
    </style>
</head>
  
<body>
    <!--------------------------
    CAROUSEL NUEVOS DESTINOS
    --------------------------->
    <div class="destinos fade-in w-100">
        <div id="carouselExample" class="carousel slide w-100" data-bs-ride="carousel" data-aos="fade-up">
            <div class="carousel-inner w-100">
                <div class="carousel-item active" data-interval="1000">
                    <img src="{{ asset('img/img1.jpg') }}" class="d-block w-100" alt="Imagen 1">
                    <div class="carousel-caption">
                        <h5>Destino 1</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn">¡RESERVA YA!</a>
                    </div>
                </div>
                <div class="carousel-item" data-interval="1000">
                    <img src="{{ asset('img/img2.jpg') }}" class="d-block w-100" alt="Imagen 2">
                    <div class="carousel-caption">
                        <h5>Destino 2</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn">¡RESERVA YA!</a>
                    </div>
                </div>
                <div class="carousel-item" data-interval="1000">
                    <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100" alt="Imagen 3">
                    <div class="carousel-caption">
                        <h5>Destino 3</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href="#" class="btn">¡RESERVA YA!</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!--------------------------
    FIN CAROUSEL NUEVOS DESTINOS
    --------------------------->
    
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>AOS.init();</script>   
    <script>
        AOS.init({
        duration: 1000, // Duración de la animación en milisegundos
        once: true // Si quieres que la animación se ejecute solo una vez
        });
    </script>
</body>
</html>
