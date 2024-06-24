<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Members</title>
    <!-- Include Bootstrap CSS -->
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-abc123..." crossorigin="anonymous" />

    <style>
        body {
            font-family: 'AvenirNextLTPro', sans-serif;
            margin: 0;
            padding: 0;
        }
        .upper-section {
            background-color: rgb(240, 240, 240);
            min-height: 50vh;
        }
        .lower-section {
            background-color: #21254b;
            min-height: 50vh;
            color: white;
        }
        .navbar {
            background-color: white !important;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .profile-img-container {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .profile-img {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
        }
        .secion{
            width: 25% !important;
            text-align: center;
        }
        .secion>p{
            color: grey;
        }
        .seccion{
            width: 60% !important;
            text-align: center;
        }
        .formDatos{
            border: 1px solid black; /* Borde sólido de 2px de ancho y color naranja */
            border-radius: 5%;
            padding: 20px; /* Espacio interno para contenido */
            margin-bottom: 5px;
                background: white;
        }
        .inputDate{
            text-align: left;
            font-size: 12px;
        }
        .adcordion{
            margin-bottom: 10px !important;
            border-radius: 5%;
        }
        /* Estilo personalizado para el checkbox */
        .form-check-input:checked {
            background-color: #b62028 !important; /* Cambia el color del fondo del check a rojo */
            border-color: #b62028 !important; /* Cambia el color del borde del check a rojo */
        }

        /* Estilo personalizado para el tick mark (check mark) */
        .form-check-input:checked::before {
            content: ''; /* Asegúrate de que el tick mark esté presente */
            display: block;
            width: 12px;
            height: 12px;
            background-color: white; /* Cambia el color del tick mark a blanco */
            border-radius: 50%; /* Forma redondeada para el tick mark */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .accordion{
            --bs-accordion-active-color: none !important;
            --bs-accordion-active-color: none !important;
            --bs-accordion-active-bg: none !important;
            --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='%23b62028' stroke-linecap='round' stroke-linejoin='round'%3e%3cpath d='M2 5L8 11L14 5'/%3e%3c/svg%3e") !important;
            --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='none' stroke='%23052c65' stroke-linecap='round' stroke-linejoin='round'%3e%3cpath d='M2 5L8 11L14 5'/%3e%3c/svg%3e") !important;
        }
        button>i{
            color: #b62028 !important;
        }
        div>i{
            color: #b62028 !important;
        }
        .footer {
            background-color: #21254b;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container position-relative">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/50" alt="Logo" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Botón Sign In a la derecha -->
                    <li class="nav-item">
                        <button class="btn" style="border-radius: 20px; background-color: #b62028; color: white; padding: 10px 20px;">
                            EDIT QUOTE
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Imagen de perfil centrada -->
    <div class="profile-img-container">
        <img src="https://via.placeholder.com/100" alt="Profile" class="profile-img rounded-circle" width="100" height="100">
    </div>
    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" style="width: 25%; background: #b62028 !important;">25%</div>
    </div>
    <!-- Upper Section -->
    <div class="upper-section pt-5 pb-5">
        <div class="container secion">
            <h6>Let's add members to your plan.</h6>
            <p>Who are you buying health insurance for to day?</p>
            <form class="formDatos">
                <div class="mb-2 text-start" style="color: #b62028;">
                    <input class="form-check-input" id="checkboxNoLabel2" checked type="checkbox" >
                     ME
                </div>
                <div class="mb-3 inputDate">
                    <label for="dob">Date of Birth:</label>
                    <input type="text" style="border: solid, 2px;" class="form-control" id="dob" placeholder="MM/DD/YYYY">
                </div>
                
                <p class="inputDate">Gender</p>
                <div class="btn-group" role="group" style="width: 48%;" aria-label="Basic radio toggle button group">
                    <input type="checkbox" class="btn-check" id="btn-check-4" autocomplete="off">
                    <label style="color: gray;" class="btn" for="btn-check-4">Female</label>
                </div>
                <div class="btn-group" role="group" style="width: 48%;" aria-label="Basic radio toggle button group">
                    <input type="checkbox" class="btn-check" id="btn-check-5" checked autocomplete="off">
                    <label style="color: gray;" class="btn" for="btn-check-5">Male</label>
                </div>
                <div class="mt-2 text-start" style="color: gray;">
                    <input class="form-check-input" checked id="checkboxNoLabel" type="checkbox" value="Tabacco User" aria-label="Tabacco User">
                     Tabacco User
                </div>
            </form>
            
            <div class="mb-3">
                <div class="form-check" style="padding: 0 !important;">
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background-color: white !important; border: none; border: none !important; color:grey"><i class="fas fa-user-plus"></i></span>
                        <input type="text" class="form-control" style="border: none !important; color:grey" aria-label="ADD SPOUSE" value="ADD SPOUSE">
                    </div>
                </div>
                <div class="form-check" style="padding: 0 !important;">
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background-color: white !important; border: none !important; color:grey"><i class="fas fa-user-plus"></i></span>
                        <input type="text" class="form-control" style="border: none !important; color:grey" aria-label="ADD DEPENDENT" value="ADD DEPENDENT">
                    </div>
                </div>
                <div class="form-check" style="padding: 0 !important;">
                    <button type="button" class="btn" style="background: #b62028; width: 100%; !important; color:white;">CONTINUE</button>
                </div>
                <div class="form-check" style="padding: 0 !important;">
                    <button type="button" class="btn" style="background: none; width: 100%; !important; color:grey;">Go Back</button>
                </div>
            </div>
            
            
            
        </div>
    </div>
    
    <div class="profile-img-container" style="background-color: rgb(240, 240, 240);">
        <i class="fa fa-question-circle"  style="margin: 5px; margin-bottom:0px; margin-top:0px; corlor: #b62028"></i>
    </div>
    <!-- Lower Section -->
    <div class="lower-section pt-4">
        <div class="container seccion">
            <h5>Frequently Asked Questions</h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item adcordion">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="fa fa-info-circle"  style="margin: 5px; margin-bottom:0px; margin-top:0px; corlor: #b62028"></i>
                        Accordion Item #1
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
                <div class="accordion-item adcordion">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="fa fa-info-circle"  style="margin: 5px; margin-bottom:0px; margin-top:0px; corlor: #b62028"></i>
                        Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item adcordion">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <i class="fa fa-info-circle"  style="margin: 5px; margin-bottom:0px; margin-top:0px; corlor: #b62028"></i>
                        Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
            </div>
        </div>
    </div>

      <!-- Footer -->
    <footer class="footer">
        Quoting powered by Quotit Corporation a trusted thrid-party serivces provider.
    </footer>

    <!-- Include Bootstrap JS and any custom JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script>
        // Obtener referencias a los checkboxes
        const checkbox1 = document.getElementById('btn-check-4');
        const checkbox2 = document.getElementById('btn-check-5');

        // Escuchar el evento de cambio en el primer checkbox
        checkbox1.addEventListener('change', function() {
            if (this.checked) {
                checkbox2.checked = false; // Desmarcar el otro checkbox si se marca éste
            }
        });

        // Escuchar el evento de cambio en el segundo checkbox
        checkbox2.addEventListener('change', function() {
            if (this.checked) {
                checkbox1.checked = false; // Desmarcar el otro checkbox si se marca éste
            }
        });
    </script>
</body>
</html>
