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
    <link href="{{ asset('headers.css') }}" rel="stylesheet">
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
            height: 80px; /* Ajusta el tamaño de la navbar aquí */
            color: white;
        }
        .navbar2 {
            background-color: #262E55;
            height: 216px; /* Ajusta el tamaño de la navbar aquí */
            color: white;
        }
        .content {
            padding: 20px;
        }
        .form-video-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: flex-end; /* Ajusta el alineamiento hacia la derecha */
        }
        .form-container, .video-container {
            flex: 1;
            max-width: 600px;
            min-width: 300px;
            box-sizing: border-box;
            border-radius: 15px; /* Border radius aplicado */
        }
        .form-container {
            background-color: #f8bbd0; /* Color rosa suave */
            padding: 20px;
            margin-right: 20px; /* Margen para desplazar hacia la derecha */
        }
        .video-container {
            background-color: #e8e8e8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 315px; /* Altura fija para el iframe */
            margin-right: 20px; /* Margen para desplazar hacia la derecha */
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 15px; /* Border radius aplicado */
        }
        .who-we-are {
            background-color: #c8e6c9;
            padding: 20px;
            text-align: center;
        }

        .destinos {
            background-color: #c8e6c9;
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
            margin-top: 10px;
            position: relative;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 250px;
            height: 40px;
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
            background-color: rgb(146, 21, 21);
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
            background-color: #262E55;
            padding: 20px;
            border-radius: 10px;
            color: #fff;
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
            justify-content: space-between;
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
    position: relative;
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
}

.select-box i.arrow {
    border: solid #262E55;
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
    width: 100%;
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

    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark fade-in fixed-top" aria-label="Ninth navbar example">
        <div class="container-xl d-flex align-items-center">
            <!-- Imagen en la parte superior izquierda -->
            <a class="navbar-brand" href="#">
                <img src="<?= url('/images/jetflaLogo.png') ?>" alt="Logo" style="height: 50px;">
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
    
    <div class="container-fluid d-flex align-items-center fade-in" style="height: 300px; background-color: #262E55;">
        <div class="row w-100">
            <div class="col-4 d-flex justify-content-start align-items-center">
                <span class="fw-bold text-white fs-5" style="margin-left: 150px; margin-top: 50px;">Encuentra tu próximo vuelo</span>
            </div>
            <div class="col-4 d-flex justify-content-center align-items-center">
                <a href="#">
                    <img src="<?= url('/images/jetflaLogo.png') ?>" alt="Logo" class="img-fluid" style="max-height: 150px;">
                </a>
            </div>
            <div class="col-3"></div>
            <label class="switch" style="margin-left: 150px;">
                <input type="checkbox" checked>
                <span class="slider"></span>
                <span class="switch-label label-left">Sencillo</span>
                <span class="switch-label label-right">Redondo</span>
            </label>
        </div>            
    </div>
    
    

    <div class="content">
        <div class="container form-video-section">
            {{-- FORMULARIO --}}
            <div class="form-container fade-in">
                <h2 class="text-center">Formulario</h2>
                <form>
                    <div class="row">
                        <!-- Columna Izquierda -->
                        <div class="col-6">
                            <div class="form-group custom-form-group">
                                <label for="origen" class="form-label">Origen:</label>
                                <input type="text" class="form-control" id="origen" name="origen">
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="salida" class="form-label">Salida:</label>
                                <input type="date" class="form-control" id="salida" name="salida">
                            </div>
                            <div class="form-group custom-form-group">
                                <label class="form-label">Pasajeros:</label>
                                <div class="custom-select">
                                    <div class="select-box" onclick="toggleDropdown()">
                                        <span id="selected-passengers">0 Adultos, 0 Menores, 0 Bebés</span>
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
                                        <button type="button" class="btn btn-primary mt-2" onclick="closeDropdown()">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <!-- Columna Derecha -->
                        <div class="col-6">
                            <div class="form-group custom-form-group">
                                <label for="destino" class="form-label">Destino:</label>
                                <input type="text" class="form-control" id="destino" name="destino">
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="regreso" class="form-label">Regreso:</label>
                                <input type="date" class="form-control" id="regreso" name="regreso">
                            </div>
                            <div class="form-group custom-form-group">
                                <label for="clase" class="form-label">Clase:</label>
                                <select class="form-control" id="clase" name="clase">
                                    <option>Economy</option>
                                    <option>Business</option>
                                    <option>First Class</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                </form>
            </div>
            
            
            
            {{-- VIDEO --}}
            <div class="video-container fade-in">
                <iframe src="https://www.youtube.com/embed/aQqOElcMvhw" title="JESSICA AUDIFFRED @ EDC VEGAS 2024" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div><br>
        <div class="who-we-are fade-in">
            <h2>Quiénes Somos</h2>
        </div>
        <div class="destinos fade-in">
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
    <script>
        function toggleDropdown() {
    const dropdown = document.getElementById('dropdown-content');
    dropdown.style.display = dropdown.style.display === 'none' || dropdown.style.display === '' ? 'block' : 'none';
}

function closeDropdown() {
    const dropdown = document.getElementById('dropdown-content');
    dropdown.style.display = 'none';
    updateSelectedPassengersText();
}

function updatePassengerCount(type, change) {
    const adultInput = document.getElementById('adult');
    const childInput = document.getElementById('child');
    const infantInput = document.getElementById('infant');

    let adultCount = parseInt(adultInput.value);
    let childCount = parseInt(childInput.value);
    let infantCount = parseInt(infantInput.value);

    if (type === 'adult') {
        adultCount += change;
        if (adultCount < 0) adultCount = 0;
    } else if (type === 'child') {
        childCount += change;
        if (childCount < 0) childCount = 0;
        if (childCount > 0 && adultCount === 0) adultCount = 1;
    } else if (type === 'infant') {
        infantCount += change;
        if (infantCount < 0) infantCount = 0;
        if (infantCount > 0 && adultCount === 0) adultCount = 1;
    }

    adultInput.value = adultCount;
    childInput.value = childCount;
    infantInput.value = infantCount;
}

function updateSelectedPassengersText() {
    const adultCount = document.getElementById('adult').value;
    const childCount = document.getElementById('child').value;
    const infantCount = document.getElementById('infant').value;

    document.getElementById('selected-passengers').innerText = `${adultCount} Adultos, ${childCount} Menores, ${infantCount} Bebés`;
}

    </script>
</body>
</html>
