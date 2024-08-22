<!-- resources/views/newdestinos.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <!-- Optional additional CSS -->
    <link href="../resources/css/nabvar.css" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Designer';
            src: url('{{ url('/css/Designer.otf') }}') format('opentype');
        }   
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
.navbar {
    background-color: #262E55;
    height: 70px; /* Ajusta el tamaño de la navbar aquí */
    color: white;
}
.navbar2 {
    background-color: #552626;
    height: 10px; /* Ajusta el tamaño de la navbar aquí */
    color: white;
}
.content {
    padding: 20px;
}
.form-video-section {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center; /* Alineación por defecto */
    align-items: center;
    width: 90%; /* Ajusta el ancho según sea necesario */
    text-align: center;
    border-radius: 5px;
}

/* Media query para pantallas móviles */
@media (max-width: 768px) {
    
}

.form-container, .video-container {
    flex: 1;
    max-width: 600px;
    min-width: 400px;
    box-sizing: border-box;
    border-radius: 20px; /* Border radius aplicado */
    margin-bottom: 25px; /* Añade 20px de espacio debajo del formulario */
}
.form-container {
    background-color: #f8bbd0; /* Color rosa suave */
    padding: 20px;
    height: 355px; /* Altura fija para el form */
    margin-right: 20px; /* Margen para desplazar hacia la derecha */
}
.video-container {
    background-color: #e8e8e8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 355px; /* Altura fija para el iframe */
    margin-right: 20px; /* Margen para desplazar hacia la derecha */
}
iframe {
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 15px; /* Border radius aplicado */
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3); /* Sombra */

}
.who-we-are {
    background-color: #ffffff;
    padding: 20px;
    text-align: center;
}

.destinos {
    background-color: #ffffff;
    padding: 20px;
    text-align: center;
}
.footer {
    background-color: #607d8b;
    color: white;
    text-align: center;
    padding: 10px;
    /*position: fixed;*/
    bottom: 0;
    width: 100%;
}
.fade-in {
    animation: fadeIn 1s ease-in-out;
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
.switch-container {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    margin-left: 50px;
    margin-top: 50px;
    position: relative;
}

.switch {
    position: relative;
    display: inline-block;
    width: 250px;
    height: 40px;
    margin-left: 150px;
    margin-bottom: 55px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 34px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 34px;
    width: 100px;
    left: 4px;
    bottom: 3px;
    background-color: #861936;
    transition: .4s;
    border-radius: 20px;
    color: #ffffff;
}

input:checked + .slider {
    background-color: #E7EBFF;
}

input:checked + .slider:before {
    transform: translateX(143px);
}

.switch-label {
    position: absolute;
    top: 8px;
    font-weight: bold;
}

.label-left {
    left: 15px;
    color: #262E55;
    transition: color 0.4s;
}

.label-right {
    right: 15px;
    color: #262E55;
    transition: color 0.4s;
}

/* Cambiar el color del texto según la posición del slider */
input:not(:checked) ~ .label-left {
    color: #ffffff;
}

input:checked ~ .label-right {
    color: #ffffff;
}




.form-container {
    background-color: #E7EBFF;
    padding: 20px;
    border-radius: 20px;
    color: #000000;
    text-align: center;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3); /* Aumenta la sombra al pasar el mouse */

}

.form-control {
    opacity: 10;
    background-color: transparent;
    border: none; /* Sin borde */
    text-align: center
 }

select {
    background-color: transparent; /* Fondo transparente */
    border: none; /* Sin bordes */
    color: #000; /* Color del texto */
    text-align: center; /* Texto centrado */
    appearance: none; /* Quitar el estilo predeterminado del navegador */
    -webkit-appearance: none; /* Quitar el estilo predeterminado del navegador en WebKit */
    -moz-appearance: none; /* Quitar el estilo predeterminado del navegador en Firefox */
    padding: 10px 40px 10px 10px; /* Espaciado interior del select */
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%23861936" class="bi bi-caret-down-fill" viewBox="0 0 16 16"> <path d="M7.247 11.14l-4.796-5.481A.5.5 0 0 1 2.673 5h10.654a.5.5 0 0 1 .372.82l-4.796 5.48a.5.5 0 0 1-.756 0z"/> </svg>');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 16px 16px; /* Tamaño de la flecha */
}


.custom-form-group {
    margin-bottom: 30px;
    position: relative;
}

.custom-form-group::after {
    content: "";
    position: absolute;
    bottom: -15px;
    left: 0;
    right: 0;
    height: 1px;
    background-color: #fff;
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}

/* Estilo para el campo de selección de pasajeros */
.passenger-type {
    display: flex;
    align-items: center;
    justify-content: space-betweenc;
    padding: 5px 0;
}

.passenger-type-list {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 0;
}

.passenger-select-text {
    font-size: 1rem;
    color: #fff;
}

.passenger-select-text-sm {
    font-size: 0.8rem;
    color: #ccc;
}

.quantity {
    display: flex;
    align-items: center;
}

.quantity button {
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 1.2rem;
    cursor: pointer;
}

.quantity input {
    width: 50px;
    text-align: center;
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 1rem;
}

.quantity .icon-negative,
.quantity .icon-positive {
    font-size: 1.2rem;
}


/*PARA PASAJEROS*/
.custom-select {
    position: relative;;
    width: 100%;
}

.select-box {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: #E7EBFF;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}

.select-box i.arrow {
    border: solid #861936;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;
}

.select-box i.arrow.down {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    width: 115%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 5px;
    padding: 15px;
    margin-top: 5px;
}

.passenger-counter {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.passenger-type {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.counter {
    display: flex;
    align-items: center;
}

.counter button {
    background-color: #262E55;
    color: #fff;
    border: none;
    padding: 5px 10px;
    font-size: 1.2rem;
    cursor: pointer;
    border-radius: 5px;
}

.counter input {
    width: 50px;
    text-align: center;
    background-color: transparent;
    border: none;
    color: #262E55;
    font-size: 1rem;
}

.counter input[readonly] {
    background-color: #E7EBFF;
    border-radius: 5px;
}

.btn-submit {
    background-color: #7e1b35; /* Color de fondo similar al botón en la imagen */
    color: white; /* Color del texto */
    padding: 15px 40px; /* Espaciado interno del botón */
    border-radius: 25px; /* Bordes redondeados */
    border: none; /* Sin borde */
    cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Sombra suave */
}

.btn-submit:hover {
    background-color: #a42c44; /* Color de fondo al pasar el mouse */
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3); /* Aumenta la sombra al pasar el mouse */

}




/* IMAGEN DE LOGO CHIQUITA */
.fade-in {
    animation: fadeIn 1s ease-in-out;
}
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
.hidden {
    opacity: 0;
    transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    transform: translateY(-20px); /* Start off-screen */
}
.visible {
    opacity: 1;
    transition: opacity 0.5s ease-in, transform 0.5s ease-in;
    transform: translateY(0); /* Fully visible */
}
.transition-up {
    transform: translateY(-50px); /* Move up as you scroll */
}
.transition-down {
    transform: translateY(50px); /* Move down as you scroll */
}   

#seguns{
    height: 240px;
    background-color: #262E55;
    display: none;
}
/* Media query para pantallas móviles */
@media (max-width: 768px) {
    .form-video-section {
        margin-left: 30px;/* Alineación a la derecha en móviles */
    }
    .switch{
        margin-left: 15px;
    }
}
@media only screen and (max-width: 768px) {
    /* Ocultar todos los elementos dentro del #seguns excepto el label.switch */
    #seguns > .row > *:not(.switch) {
        display: none;
    }

    /* Asegurarte de que el label.switch permanezca visible */
    #seguns .switch {
        display: block;
    }
}



    </style>
</head>
<script>
    AOS.init({
      duration: 1000, // Duración de la animación en milisegundos
      once: true // Si quieres que la animación se ejecute solo una vez
    });
  </script>
  
<body >
    <nav class="navbar navbar-expand-lg navbar-dark fade-in fixed-top" aria-label="Ninth navbar example">
        <div class="container-xl d-flex align-items-center">
            <!-- Imagen en la parte superior izquierda -->
            <a class="navbar-brand" href="#">
                <img id="logoCH" src="<?= url('/images/jetflaLogo.png') ?>" class="img-fluid hidden" alt="LogoCH" style="height: 50px;">
            </a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>    
            
            <div class="collapse navbar-collapse" id="navbarsExample07XL">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pt-2">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
        <div id="seguns" class="container-fluid d-flex align-items-center fade-in">
            <div class="row w-100">
                <div class="col-4 d-flex justify-content-start align-items-center">
                    <span class="fw-bold text-white fs-5" style="margin-left: 150px; margin-top: 50px;">Encuentra tu próximo vuelo</span>
                </div>
                <div class="col-4 mt-5 d-flex justify-content-center align-items-center" style="margin-top: 80px;">
                    <a href="#">
                        <img id="logoXL" src="<?= url('/images/jetflaLogo.png') ?>" alt="LogoXL" class="img-fluid visible" style="max-height: 150px; margin-bottom: -100px;">
                    </a>
                </div>
                <div class="col-3 mb-4"></div>
                <label class="switch">
                    <input type="checkbox" id="tripTypeSwitch" checked>
                    <span class="slider"></span>
                    <span class="switch-label label-left">Sencillo</span>
                    <span class="switch-label label-right">Redondo</span>
                </label>
            </div>            
        </div>   
    

    <div class="content">
        <div class="container form-video-section" data-aos="fade-up">
            {{-- FORMULARIO --}}
            <div class="form-container fade-in">
                <form>
                    <div class="row">
                        <!-- Columna Izquierda -->
                        <div class="col-6">
                            <div class="form-group custom-form-group">
                                <label for="origen" class="form-label" style="opacity: 0.6;">Origen</label>
                                <select class="form-control" id="origen" name="origen" required>
                                    <option value="" disabled selected>Seleccionar</option>
                                    <option value="cdmx">Ciudad de México</option>
                                    <option value="gdl">Guadalajara</option>
                                    <option value="mty">Monterrey</option>
                                </select>
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="salida" class="form-label" style="opacity: 0.6;">Salida</label>
                                <input type="date" class="form-control" id="salida" name="salida" required>
                            </div>
                            <div class="form-group custom-form-group">
                                <label class="form-label" style="opacity: 0.6;">Pasajeros</label>
                                <div class="custom-select">
                                    <div class="select-box" onclick="toggleDropdown()">
                                        <span id="selected-passengers">Seleccionar</span>
                                        <i class="arrow down"></i>
                                    </div>
                                    <div id="dropdown-content" class="dropdown-content">
                                        <div class="passenger-counter">
                                            <div class="passenger-type">
                                                <span>Adulto</span>
                                                <div class="counter">
                                                    <button type="button" class="btn-decrement" onclick="updatePassengerCount('adult', -1)">-</button>
                                                    <input type="text" id="adult" value="0" readonly>
                                                    <button type="button" class="btn-increment" onclick="updatePassengerCount('adult', 1)">+</button>
                                                </div>
                                            </div>
                                            <div class="passenger-type">
                                                <span>Menor</span>
                                                <div class="counter">
                                                    <button type="button" class="btn-decrement" onclick="updatePassengerCount('child', -1)">-</button>
                                                    <input type="text" id="child" value="0" readonly>
                                                    <button type="button" class="btn-increment" onclick="updatePassengerCount('child', 1)">+</button>
                                                </div>
                                            </div>
                                            <div class="passenger-type">
                                                <span>Bebé</span>
                                                <div class="counter">
                                                    <button type="button" class="btn-decrement" onclick="updatePassengerCount('infant', -1)">-</button>
                                                    <input type="text" id="infant" value="0" readonly>
                                                    <button type="button" class="btn-increment" onclick="updatePassengerCount('infant', 1)">+</button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <button type="button" class="btn btn-primary mt-2" onclick="closeDropdown()">OK</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Columna Derecha -->
                        <div class="col-6">
                            <div class="form-group custom-form-group">
                                <label for="destino" class="form-label" style="opacity: 0.6;">Destino</label>
                                <select class="form-control" id="destino" name="destino" required>
                                    <option value="" disabled selected>Seleccionar</option>
                                    <option value="cdmx">Ciudad de México</option>
                                    <option value="gdl">Guadalajara</option>
                                    <option value="mty">Monterrey</option>
                                </select>
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="regreso" class="form-label" style="opacity: 0.6;">Regreso</label>
                                <input type="date" class="form-control" id="regreso" name="regreso" required>
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="clase" class="form-label" style="opacity: 0.6;">Código Promocional</label>
                                <input style="font-style: italic;" type="text" class="form-control" id="codigoPromo" name="codigoPromo" placeholder="JETFLA1202" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-submit">Buscar mi próximo vuelo</button>
                </form>
            </div>
            
            
            
            {{-- VIDEO --}}
            <div class="video-container fade-in">
                <iframe src="https://www.youtube.com/embed/aQqOElcMvhw?autoplay=1&mute=1&controls=0&rel=0&showinfo=0&modestbranding=1" 
                        title="JESSICA AUDIFFRED @ EDC VEGAS 2024" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        >
                </iframe>
            </div>
          <style>
            /*Styles para quienSOs*/

            .extra-content {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.5s ease-out;
            }

            .extra-content.show {
                max-height: 200px; /* Ajusta esta altura según el contenido */
            }
            .txtTitles{
                font-weight: bold;
                color: #262E55;
            }
          </style>
        </div><br>
        <div id="quienSos" class="who-we-are" onclick="toggleContent()" data-aos="fade-up">
            <h2 class="txtTitles">¿Quiénes Somos?</h2>
            <div id="extraContent" class="extra-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis 
                    parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, 
                    pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet 
                    nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum 
                    semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, 
                    eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra 
                    nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. 
                    Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget 
                    condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, 
                    blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec 
                    vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. 
                    Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales,
                    augue velit cursus nunc,

                </p>
            </div>
        </div>  
        
        <style>
  
        </style>
        <!--------------------------
        CAROUSEL NUEVOS DESTINOS
        --------------------------->
        <div class="destinos fade-in" >
             <!-- Incluyendo el carrusel 
            <h2 style="margin-bottom: -20px;" class="txtTitles" data-aos="fade-up">Nuevos destinos</h2>-->
            @include('layouts.newdestinos')

        </div>

        <!--------------------------
        FIN CAROUSEL NUEVOS DESTINOS
        --------------------------->

        <!--------------------------
        CARDS PROMOS
        --------------------------->
        <style>
            /*** STYLES PROMOS***/
            .promos {
                width: 100%;
                padding: 40px 0;
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                
            }

            .promo-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                max-width: 1200px;
                margin: 0 auto;
                gap: 20px;
            }

            .promo-card {
                width: 517px;
                height: 232px;
                background-size: cover;
                background-position: center;
                border-radius: 15px;
                overflow: hidden;
                position: relative;
                transition: transform 0.3s ease, opacity 0.3s ease;
            }

            .promo-card:hover {
                transform: scale(1.05);
                opacity: 0.9;
            }

            .promo-content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                text-align: center;
                text-shadow: 2px 2px 8px rgba(1000, 0, 0, 0.9); /* Añade una sombra al texto */
            }

            .promo-content .small-text {
                font-size: 14px;
            }

            .promo-content h3 {
                font-size: 24px;
                margin: 5px 0;
            }

            .price {
                position: absolute;
                bottom: 20px;
                right: 20px;
                color: white;
                opacity: 0;
                transition: opacity 0.3s ease;
                text-shadow: 4px 4px 16px rgba(1000, 10, 0, 0.9); /* Añade una sombra al texto */
            }

            .price .small-text {
                font-size: 12px;
                text-align: center;
            }

            .price h4 {
                font-size: 18px;
                margin: 5px 0;
            }

            .promo-card:hover .price {
                opacity: 1;
            }

            /* Fondo con esquina levantada */
            .promos:before {
                content: '';
                position: absolute;
                bottom: 0;
                right: 0;
                width: 100%;
                height:100%;
                background-color: #861936; /* Rojo oscuro */
                clip-path: polygon(0 85%, 100% 60%, 100% 0, 0% 0%); /* Ajusta los puntos para levantar la esquina */
                z-index: -1;
            }
        </style>
          <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
          <script>AOS.init();</script>          
        
        <div class="promos">
            <div class="promo-container"  data-aos="fade-up">
                <div class="promo-card" style="background-image: url('<?= url('/images/canada.jpg') ?>');" >
                    <div class="promo-content">
                        <p class="small-text">Viaja a</p>
                        <h3>CANADA</h3>
                    </div>
                    <div class="price">
                        <p class="small-text">Desde</p>
                        <h4>$199 USD</h4>
                    </div>
                </div>
                <div class="promo-card" style="background-image: url('<?= url('/images/cancun.jpg') ?>');">
                    <div class="promo-content">
                        <p class="small-text">Viaja a</p>
                        <h3>CANCÚN</h3>
                    </div>
                    <div class="price">
                        <p class="small-text">Desde</p>
                        <h4>$199 USD</h4>
                    </div>
                </div>
                <div class="promo-card" style="background-image: url('<?= url('/images/ny.jpg') ?>');">
                    <div class="promo-content">
                        <p class="small-text">Viaja a</p>
                        <h3>NUEVA YORK</h3>
                    </div>
                    <div class="price">
                        <p class="small-text">Desde</p>
                        <h4>$199 USD</h4>
                    </div>
                </div>
                <div class="promo-card" style="background-image: url('<?= url('/images/dubai.jpg') ?>');">
                    <div class="promo-content">
                        <p class="small-text">Viaja a</p>
                        <h3>DUBAI</h3>
                    </div>
                    <div class="price">
                        <p class="small-text">Desde</p>
                        <h4>$199 USD</h4>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------------
        FIN DE CARDS PROMOS
        --------------------------->

        <!--------------------------
        CARDS BENEFICIOS
--------------------------->

<style>
    /*** STYLES PARA CARDS BENEFICIOS ***/

    .cards-container {
        display: flex;
        justify-content: center; /* Centrar las cards en el contenedor */
        flex-wrap: wrap;
        gap: 15px; /* Espacio entre las cards */
        margin-top: 20px; /* Margen superior para separarlas del título */
    }

    .card {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 20px; /* Borde redondeado */
        padding: 20px;
        width: 190px; /* Ancho fijo de las cards */
        height: 200px; /* Alto fijo de las cards */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada */
        display: flex;
        flex-direction: column; /* Para alinear el contenido verticalmente */
        justify-content: space-between; /* Espacio entre el título y la descripción */
        transition: transform 0.3s ease; /* Transición para el efecto hover */
    }

    .card h3 {
        margin: 0; /* Eliminar márgenes para un mejor ajuste */
        font-size: 1.25rem;
    }

    .card p {
        font-size: 1rem;
        color: #6c757d;
        margin: 0; /* Eliminar márgenes para un mejor ajuste */
    }

    .card:hover {
        transform: translateY(-5px); /* Efecto de elevar la card al pasar el mouse */
    }

    @media (max-width: 600px) {
        .cards-container {
            flex-direction: column; /* Apilar verticalmente en pantallas pequeñas */
            align-items: center; /* Centrar las cards */
        }
    }
</style>

<div class="beneficios fade-in" data-aos="fade-up">
    <h2 style="margin-bottom: 40px;" class="txtTitles" data-aos="fade-up">Beneficios</h2>
    
    <div class="cards-container">
        <div class="card">
            <h3>Card 1</h3>
            <p>Descripción breve de la Card 1.</p>
        </div>
        <div class="card">
            <h3>Card 2</h3>
            <p>Descripción breve de la Card 2.</p>
        </div>
        <div class="card">
            <h3>Card 3</h3>
            <p>Descripción breve de la Card 3.</p>
        </div>
        <div class="card">
            <h3>Card 4</h3>
            <p>Descripción breve de la Card 4.</p>
        </div>
        <div class="card">
            <h3>Card 5</h3>
            <p>Descripción breve de la Card 5.</p>
        </div>
    </div>
</div>

<!--------------------------
        FIN DE CARDS BENEFICIOS
--------------------------->




        <div class="destinoss fade-in">
            <h2>Nuevos destinos</h2>
        </div>
        <div class="who-we-arae fade-in">
            <h2>Quiénes Somos</h2>
        </div>
        <div class="who-we-arae fade-in">
            <h2>Quiénes Somos</h2>
        </div>
        <div class="who-we-ara fade-in">
            <h2>Quiénes Somos</h2>
        </div>
    </div>
    
    <footer class="footer">
        © 2024 Todos los derechos reservados.
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- JS para Quien sos-->
    <script>
        function toggleContent() {
            const content = document.getElementById("extraContent");
            content.classList.toggle("show");
        }
    </script>
    <script>
        // Obtener la fecha de hoy
        let today = new Date();
        let dd = String(today.getDate()).padStart(2, '0');
        let mm = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0
        let yyyy = today.getFullYear();

        // Formatear la fecha de hoy en el formato adecuado para el input date
        let todayFormatted = yyyy + '-' + mm + '-' + dd;

        // Establecer la fecha de hoy en el campo de salida
        document.getElementById('salida').value = todayFormatted;

        // Calcular la fecha de regreso (3 días después)
        let returnDate = new Date();
        returnDate.setDate(today.getDate() + 3);
        let returnDd = String(returnDate.getDate()).padStart(2, '0');
        let returnMm = String(returnDate.getMonth() + 1).padStart(2, '0');
        let returnYyyy = returnDate.getFullYear();

        // Formatear la fecha de regreso en el formato adecuado para el input date
        let returnDateFormatted = returnYyyy + '-' + returnMm + '-' + returnDd;

        // Establecer la fecha de regreso en el campo correspondiente
        document.getElementById('regreso').value = returnDateFormatted;
        
    </script>

    <script>
        // Obtener referencias a los elementos
        const tripTypeSwitch = document.getElementById('tripTypeSwitch');
        const regresoInput = document.getElementById('regreso');

        // Función para manejar el cambio del switch
        tripTypeSwitch.addEventListener('change', function () {
            if (!this.checked) { // Si el switch está en "Sencillo"
                regresoInput.value = ''; // Vaciar el input
                regresoInput.disabled = true; // Deshabilitar el input
                regresoInput.removeAttribute('name'); // Quitar el atributo 'name' para que no se envíen datos
            } else { // Si el switch está en "Redondo"
                regresoInput.disabled = false; // Habilitar el input
                regresoInput.setAttribute('name', 'regreso'); // Restaurar el atributo 'name'
            }
        });

        // Deshabilitar el input al cargar la página si el switch está en "Sencillo"
        if (!tripTypeSwitch.checked) {
            regresoInput.disabled = true;
            regresoInput.removeAttribute('name');
        }

    </script>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown-content');
            dropdown.style.display = dropdown.style.display === 'none' || dropdown.style.display === '' ? 'block' : 'none';
        }


// Función para inicializar los valores por defecto
function initializePassengerCounts() {
    const adultInput = document.getElementById('adult');
    const childInput = document.getElementById('child');
    const infantInput = document.getElementById('infant');

    // Inicializamos el número de adultos en 1 si no está configurado
    if (parseInt(adultInput.value) === 0) {
        adultInput.value = 1;
    }

    // Aseguramos que los valores de niños y bebés estén inicializados
    if (parseInt(childInput.value) === NaN) {
        childInput.value = 0;
    }
    if (parseInt(infantInput.value) === NaN) {
        infantInput.value = 0;
    }

    updateSelectedPassengersText();
}

// Función para cerrar el dropdown y actualizar el texto de los pasajeros
function closeDropdown() {
    const dropdown = document.getElementById('dropdown-content');
    dropdown.style.display = 'none';
    updateSelectedPassengersText();
}

// Función para actualizar la cantidad de pasajeros
function updatePassengerCount(type, change) {
    const adultInput = document.getElementById('adult');
    const childInput = document.getElementById('child');
    const infantInput = document.getElementById('infant');

    let adultCount = parseInt(adultInput.value);
    let childCount = parseInt(childInput.value);
    let infantCount = parseInt(infantInput.value);

    if (type === 'adult') {
        adultCount = Math.max(1, adultCount + change);
        adultInput.value = adultCount;
    } else if (type === 'child') {
        childCount = Math.max(0, childCount + change);
        childInput.value = childCount;
        if (childCount > 0 && adultCount === 0) {
            adultCount = 1;
            adultInput.value = adultCount;
        }
    } else if (type === 'infant') {
        infantCount = Math.max(0, infantCount + change);
        infantInput.value = infantCount;
        if (infantCount > 0 && adultCount === 0) {
            adultCount = 1;
            adultInput.value = adultCount;
        }
    }

    updateSelectedPassengersText();
}

// Función para actualizar el texto de la selección de pasajeros
function updateSelectedPassengersText() {
    const adultCount = parseInt(document.getElementById('adult').value);
    const childCount = parseInt(document.getElementById('child').value);
    const infantCount = parseInt(document.getElementById('infant').value);

    let text = 'Seleccionar';

    if (adultCount > 0) {
        text = `${adultCount} Adulto${adultCount > 1 ? 's' : ''}`;
    }
    if (adultCount > 0 && childCount > 0) {
        text = `${adultCount} Adulto${adultCount > 1 ? 's' : ''}, ${childCount} Menor${childCount > 1 ? 'es' : ''}`;
    }
    if (adultCount > 0 && infantCount > 0) {
        text = `${adultCount} Adulto${adultCount > 1 ? 's' : ''}, ${infantCount} Bebé${infantCount > 1 ? 's' : ''}`;
    }
    if (adultCount > 0 && childCount > 0 && infantCount > 0) {
        text = `${adultCount} Adulto${adultCount > 1 ? 's' : ''}, ${childCount} Menor${childCount > 1 ? 'es' : ''}, ${infantCount} Bebé${infantCount > 1 ? 's' : ''}`;
    }

    document.getElementById('selected-passengers').innerText = text;
}

// Llamar a la función de inicialización cuando se cargue la página
window.onload = function() {
    initializePassengerCounts();
};



    </script>
    <script>
     window.addEventListener('scroll', function() {
            const logoXL = document.getElementById('logoXL');
            const logoCH = document.getElementById('logoCH');
            const quienSos = document.getElementById('quienSos');
            const scrollPosition = window.scrollY;
            const threshold = 100; // Adjust this value based on when you want the transition to occur

            if (scrollPosition > threshold) {
                // Scroll down
                logoXL.classList.remove('visible');
                logoXL.classList.add('hidden');
                logoCH.classList.remove('hidden');
                logoCH.classList.add('visible');
            } else {
                // Scroll up
                logoCH.classList.remove('visible');
                logoCH.classList.add('hidden');
                logoXL.classList.remove('hidden');
                logoXL.classList.add('visible');
            }
        });
    </script>
</body>
</html>
