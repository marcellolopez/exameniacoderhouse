<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Futuro de la IA en la Vida Cotidiana</title>
    <!-- Bootstrap CSS -->
    <link 
        rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    >
    <!-- Font Awesome para iconos (opcional) -->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    >
    <!-- Custom CSS -->
    <style>
        /* Media query para pantallas pequeñas */
        @media (max-width: 768px) {
            .section {
                position: relative;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: #FFFFFF; /* Texto predeterminado en blanco */
                overflow: hidden;
            }

            /* Fondo de las secciones */
            #about {
                background-image: url('img/about.jpg');
            }

            #services {
                background-image: url('img/services.jpg');
            }

            #future {
                background-image: url('img/future.jpg');
            }

            /* Superposición oscura */
            .section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: 1;
            }

            /* Títulos en verde */
            .section h2 {
                position: relative;
                z-index: 2;
                color: #00FF7F; /* Verde neon para los títulos */
            }

            /* Párrafos en blanco */
            .section p {
                position: relative;
                z-index: 2;
                color: #FFFFFF; /* Texto en blanco */
            }

            /* Ocultar imagen de la columna en dispositivos móviles */
            .col-md-6 img {
                display: none;
            }
        }



        body {
            background-color: #1C1C1C;
            color: #FFFFFF;
            scroll-behavior: smooth; /* Fallback para navegadores que soportan CSS smooth scrolling */
        }

        /* Navbar personalizado */
        .navbar {
            background-color: rgba(0, 0, 0, 0.8) !important;
        }

        .navbar-nav .nav-link {
            color: #FFFFFF !important;
            font-size: 18px;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #00FF7F !important;
        }

        /* Sección de Inicio con imagen de fondo */
        .section-home {
            height: 100vh;
            background: url('/img/home.jpg') no-repeat center center/cover;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .section-home .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .section-home .content {
            position: relative;
            z-index: 1;
        }

        .section-home h1 {
            font-size: 48px;
            color: #1E90FF;
        }

        .section-home p {
            font-size: 24px;
            color: #A9A9A9;
        }

        /* Otras secciones */
        .section {
            padding: 100px 20px;
            text-align: center;
        }

        .section h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #00FF7F;
        }

        .section p {
            font-size: 18px;
            color: #A9A9A9;
        }

        /* Ajuste de padding para evitar que el navbar fijo cubra el contenido */
        .section-home,
        .section {
            padding-top: 70px;
        }

        /* Cursor pointer para enlaces */
        .navbar-nav .nav-link {
            cursor: pointer;
        }

        img {
            max-height: 400px; /* O ajusta según sea necesario */
            width: auto;
        }

        #contact {
            background-image: url('img/contact.jpg');
            background-size: cover;
            background-position: center;
            color: #FFFFFF; /* Asegura que el texto sea blanco */
        }


    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#">IA Cotidiana</a>
    <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div 
        class="collapse navbar-collapse justify-content-end" 
        id="navbarNav"
    >
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#home">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">Sobre la IA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#services">Aplicaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#future">El Futuro de la IA</a> <!-- Nuevo enlace -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contacto</a>
            </li>
        </ul>
    </div>
</nav>

    <!-- Sección de Inicio -->
    <section id="home" class="section-home">
        <div class="overlay"></div>
        <div class="content">
            <h1>El Futuro de la IA en la Vida Cotidiana</h1>
            <p>Descubre cómo la inteligencia artificial transformará nuestro día a día.</p>
            
            <!-- Botón para abrir el modal del video -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal" style="margin-top: 20px;">
                Ver Video
            </button>
        </div>
    </section>

    <!-- Modal para reproducir el video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">Futuro de la IA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video controls style="width: 100%;">
                        <source src="/iafuture.mp4" type="video/mp4">
                        Tu navegador no soporta la reproducción de este video.
                    </video>
                </div>
            </div>
        </div>
    </div>


    <!-- Sección Sobre la IA -->
    <section id="about" class="section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Columna de texto -->
                <div class="col-md-6">
                    <h2>Sobre la Inteligencia Artificial</h2>
                    <p>
                        La inteligencia artificial (IA) es una rama de la informática que busca crear sistemas capaces de realizar tareas que normalmente requieren de la inteligencia humana. Estas tareas incluyen el reconocimiento de voz, la toma de decisiones, el procesamiento del lenguaje natural, y la visión por computadora.
                    </p>
                    <p>
                        La IA está revolucionando múltiples industrias como la salud, el transporte y el entretenimiento, mejorando la eficiencia de los procesos y creando nuevas oportunidades. Hoy en día, la IA está cada vez más presente en nuestra vida cotidiana, desde los asistentes virtuales hasta los vehículos autónomos.
                    </p>
                </div>

                <!-- Columna para imagen -->
                <div class="col-md-6 text-center">
                    <img src="img/about.jpg" alt="Inteligencia Artificial" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Aplicaciones de la IA -->
    <section id="services" class="section py-5 bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <!-- Columna para imagen -->
                <div class="col-md-6 text-center">
                    <img src="img/services.jpg" alt="Aplicaciones de IA" class="img-fluid" style="max-height: 400px;">
                </div>

                <!-- Columna de texto -->
                <div class="col-md-6">
                    <h2>Aplicaciones de la Inteligencia Artificial</h2>
                    <p>
                        La inteligencia artificial tiene una amplia gama de aplicaciones en diversos sectores. Uno de los sectores más beneficiados por la IA es la medicina, donde se utiliza para el diagnóstico de enfermedades, la optimización de tratamientos, y el análisis de grandes cantidades de datos médicos.
                    </p>
                    <p>
                        En el sector del transporte, la IA está impulsando el desarrollo de vehículos autónomos y sistemas inteligentes de gestión del tráfico, mejorando la seguridad y reduciendo los tiempos de viaje. Además, la IA está transformando la industria del entretenimiento, desde la creación de contenidos personalizados hasta los videojuegos con personajes controlados por inteligencia artificial.
                    </p>
                    <p>
                        La educación también se está beneficiando de la IA, con la creación de plataformas de aprendizaje adaptativo que personalizan la experiencia educativa para cada estudiante, basándose en su rendimiento y necesidades específicas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección El Futuro de la IA -->
    <section id="future" class="section py-5" style="background-color: #2C2C2C;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Columna de texto -->
                <div class="col-md-6">
                    <h2 style="color: #FFFFFF;">El Futuro de la Inteligencia Artificial</h2>
                    <p style="color: #A9A9A9;">
                        El futuro de la inteligencia artificial es emocionante y lleno de posibilidades. En los próximos años, la IA no solo será capaz de realizar tareas específicas, sino que avanzará hacia una IA general, capaz de razonar, aprender y adaptarse de manera similar a los humanos. 
                    </p>
                    <p style="color: #A9A9A9;">
                        Uno de los mayores desafíos será garantizar que la IA se desarrolle de manera ética y responsable. Las decisiones que tomemos hoy sobre su uso tendrán un profundo impacto en cómo la IA dará forma a nuestra sociedad, desde el mundo laboral hasta los derechos humanos.
                    </p>
                    <p style="color: #A9A9A9;">
                        A medida que la IA siga integrándose en nuestras vidas, veremos avances increíbles en campos como la medicina, el transporte, la educación y mucho más. Además, con el desarrollo de tecnologías complementarias como la computación cuántica, la inteligencia artificial tendrá el poder de resolver problemas que hoy parecen imposibles.
                    </p>
                    <p style="color: #A9A9A9;">
                        Estamos en la cúspide de una nueva era tecnológica, donde la IA desempeñará un papel fundamental en cómo los humanos exploran y comprenden el universo.
                    </p>
                </div>

                <!-- Columna para imagen -->
                <div class="col-md-6 text-center">
                    <img src="img/future.jpg" alt="Futuro de la IA" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contact" class="section py-5 bg-dark">
        <div class="container">
            <div class="row">
                <!-- Columna de contacto -->
                <div class="col-md-12 text-center">
                    <h2 style="color: #FFFFFF;">Contacto</h2>
                    <p style="color: #A9A9A9;">
                        Mi nombre es <strong>Marcello López C.</strong>, soy analista programador. Si deseas contactarme, puedes hacerlo a través del siguiente correo electrónico:
                    </p>
                    <p style="color: #1E90FF;">
                        <i class="fas fa-envelope"></i> <a href="mailto:mlc74163322@gmail.com" style="color: #1E90FF; text-decoration: none;">mlc74163322@gmail.com</a>
                    </p>
                    <p style="color: #A9A9A9;">
                        Estoy disponible para proyectos relacionados con desarrollo de software, inteligencia artificial y análisis de sistemas.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- jQuery Completo, no la versión "slim" -->
    <script 
        src="https://code.jquery.com/jquery-3.6.0.min.js" 
        crossorigin="anonymous"
    ></script>
    <!-- Popper.js sin integrity -->
    <script 
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
        crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS sin integrity -->
    <script 
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
        crossorigin="anonymous"
    ></script>

    <!-- jQuery para smooth scrolling -->
    <script>
        $(document).ready(function(){
            // Añadir smooth scrolling para todos los enlaces del navbar
            $('a.nav-link').on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 70 // Ajusta el offset según la altura del navbar
                    }, 800, function(){
                        // Opcional: Agregar el hash a la URL
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>

</body>
</html>
