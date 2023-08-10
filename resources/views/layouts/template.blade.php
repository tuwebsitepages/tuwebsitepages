<!DOCTYPE html>
<html lang="en" translate="no">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="cache-control" content="no-store">

    <title>TuWebsite</title>
    <link rel="icon" type="image/x-icon" href="assets/img/tuwebsite.png" />

    <!-- Bootstrap icons-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>




    <!-- Google fonts-->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/templatemo-topic-listing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />


</head>

<div class="loader"></div>
<div class="loading-overlay"></div>

<body id="page-top" class="content">

    <a href="https://api.whatsapp.com/send?phone=541158416500" target="_blank" rel="noopener noreferrer" class="whatsapp-button">
        <i class="bi bi-whatsapp"></i>
    </a>
    <a href="#" class="scroll-to-top-button">
        <i class="bi bi-caret-up-fill"></i>
    </a>


    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="/"><img class="imgIcon" src="assets/img/tuwebsite.png" alt=""></a>

            <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" aria-label="Main Menu">
                <svg width="40" height="40" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3 click-scroll" href="#features">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3 click-scroll" href="#section_1">¿Como funciona?</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3 click-scroll" href="#section_2">FAQs</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3 click-scroll" href="#section_3">Precios</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Comenzar</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Dale un click a tu marca ahora</h1>
                        <p class="lead fw-normal text-muted mb-5">Te diseñamos una Landing Page moderna, atractiva y optimizada para dispositivos móviles.</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup" style="position: relative;">
                        <img src="assets/img/Captura(1).png" alt="" style="width: 100%; height: 100%;">
                        <div style="position: absolute; top: 0; left: 0;">
                            <div class="device" data-orientation="portrait" data-color="black">
                                <div>
                                    <img src="assets/img/code.png" alt="" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <aside class="text-center ">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">¿Tenes una idea en mente? </div>
                    <!-- <img src="assets/img/tuwebsiteBanner.png" alt="..." style="height: 5rem" /> -->
                    <br>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#feedbackModal" target="_blank">Contanos</a>
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->


    <section id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-question icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Preguntas Frecuentes</h3>
                                    <p class="text-muted mb-0">Simplifica consultas de clientes con respuestas claras y concisas. Mejora la experiencia del usuario y aligera la atención al cliente.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-card-text icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Formularios</h3>
                                    <p class="text-muted mb-0">Un formulario de contacto agiliza interacciones con usuarios, fomenta oportunidades de negocio y refuerza confianza en tu marca. Mejora la atención al cliente y maximiza beneficios.</p>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-images icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Carrusel de Imágenes</h3>
                                    <p class="text-muted mb-0">Resalta tu web con un carrusel de imágenes llamativas. Navegación intuitiva para mostrar variedad en un espacio limitado, capturando la atención y destacando lo que tienes para ofrecer.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Testimonios</h3>
                                    <p class="text-muted mb-0">Testimonios de clientes satisfechos aportan credibilidad. Comparte experiencias reales para persuadir y fortalecer tu marca con opiniones positivas sobre tus productos o servicios.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div>
                            <divdata-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="device">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <img class="deviceIMG" src="assets/img/phone.gif" style="width: 100%; height: 100%" alt="">

                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- Basic features section-->
    <section class="bg-white">

        <!-- partial:index.partial.html -->
        <div class="cards">
            <div data-index="0" data-aos="fade-up">
                <div class="card__inner">
                    <div class="card__image-container">
                        <img class="card__image" src="assets/img/1.jpg" alt="" />
                    </div>
                    <div class="card__content">
                        <h1 class="card__title">Diseño</h1>
                        <p class="card__description">
                            Creamos páginas web cautivadoras con un diseño elegante y navegación intuitiva, brindando experiencias envolventes en todos los dispositivos para conectar tu marca con los clientes.
                        </p>
                    </div>
                </div>
            </div>
            <div data-index="0" data-aos="fade-up">
                <div class="card__inner">
                    <div class="card__image-container">
                        <img class="card__image" src="assets/img/2.jpg" alt="" />
                    </div>
                    <div class="card__content">
                        <h1 class="card__title">Responsivo</h1>
                        <p class="card__description">
                            Creamos sitios web responsivos y versátiles que se ajustan sin esfuerzo a diversos dispositivos, asegurando una experiencia uniforme y atractiva, sin importar desde dónde interactúe tu público.
                        </p>
                    </div>
                </div>
            </div>
            <div data-index="0" data-aos="fade-up">
                <div class="card__inner">
                    <div class="card__image-container">
                        <img class="card__image" src="assets/img/3.jpg" alt="" />
                    </div>
                    <div class="card__content">
                        <h1 class="card__title">Hosting</h1>
                        <p class="card__description">
                            Ofrecemos un año de hosting gratuito, alojando tu sitio en servidores confiables para garantizar velocidad y disponibilidad. Manejamos la gestión técnica mientras te concentras en ampliar tu negocio.
                        </p>
                    </div>
                </div>
            </div>

            <div data-index="0" data-aos="fade-up">
                <div class="card__inner">
                    <div class="card__image-container">
                        <img class="card__image" src="assets/img/4.jpg" alt="" />
                    </div>
                    <div class="card__content">
                        <h1 class="card__title">Desarrollo</h1>
                        <p class="card__description">
                            Programamos con enfoque en las últimas tecnologías, asegurando un código limpio y eficiente. Tu proyecto se beneficia de soluciones avanzadas y mantenibles para un rendimiento excepcional
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- como funciona -->
    <section id="section_1" class="timeline-section section-padding">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">¿Como funciona?</h1>
                </div>

                <div class="col-lg-10 col-12 mx-auto">
                    <div class="timeline-container">
                        <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                            <div class="list-progress">
                                <div class="inner"></div>
                            </div>

                            <li>
                                <h4 class="text-white mb-3">Escucha y Planificación Personalizada</h4>

                                <p class="text-white">Comenzamos con una escucha atenta a las ideas y necesidades del cliente. Ofrecemos planes de diseño que se ajustan a sus distintas necesidades y juntos planificamos la estrategia para el proyecto.</p>

                                <div class="icon-holder">
                                    <i class="bi-search"></i>
                                </div>
                            </li>

                            <li>
                                <h4 class="text-white mb-3">Desarrollo Profesional y Colaborativo</h4>

                                <p class="text-white">Nuestro equipo altamente capacitado trabaja en estrecha colaboración con el cliente para crear un sitio web único y funcional. Mantenemos una comunicación constante, compartimos avances y ajustamos el proyecto según sus requerimientos.</p>

                                <div class="icon-holder">
                                    <i class="bi-bookmark"></i>
                                </div>
                            </li>

                            <li>
                                <h4 class="text-white mb-3">Entrega del Producto</h4>

                                <p class="text-white">Una vez que el sitio web ha sido desarrollado y perfeccionado según los requisitos del cliente, llega el emocionante momento de la entrega. Entregamos el producto final y nos aseguramos de que todo funcione sin problemas. </p>

                                <div class="icon-holder">
                                    <i class="bi-book"></i>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <p class="text-white">
                        ¿Alguna duda?
                        <button class="btn custom-btn custom-border-btn ms-3" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                            <span class="d-flex align-items-center hide-mobile">
                                <i class="iconMesage bi-chat-text-fill me-2"></i>
                                <span class="small ">Hablemos!</span>
                            </span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- Portafolio -->

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <br>
            <br><br><br>

            <h2 class="display-4 text-center lh-1 mb-4">Explora Diseños</h2>
            <br>

            <div class="row justify-content-center">

                @yield('content')

            </div>
        </div>
    </section>


    <!-- questions -->

    <section id="section_2" class="faq-section section-padding" data-aos="fade-up">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <h2 class="mb-4">Preguntas frecuentes</h2>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-5 col-12">
                    <img src="assets/img/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                </div>

                <div class="col-lg-6 col-12 m-auto">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Qué es una landing page y por qué la necesito?
                                </button>
                            </h2>

                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Una landing page es una página web diseñada específicamente para convertir visitantes en clientes potenciales o clientes reales. Es una herramienta poderosa para promocionar un producto, servicio o evento, ya que se enfoca en una oferta única y concreta, aumentando las posibilidades de conversión. Si deseas generar más leads o aumentar las ventas, una landing page es imprescindible en tu estrategia de marketing digital.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Cuánto tiempo lleva desarrollar una landing page?
                                </button>
                            </h2>

                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    El tiempo de desarrollo de una landing page puede variar según su complejidad y los servicios que elijas. Por lo general, una landing page básica puede estar lista en unos pocos días, mientras que una con más funcionalidades podría llevar algunas semanas. Nuestro equipo se compromete a entregar resultados de alta calidad en el menor tiempo posible, sin comprometer la excelencia en el diseño y desarrollo.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Qué diferencia hay entre los planes que ofrecen?
                                </button>
                            </h2>

                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Ofrecemos tres planes distintos para satisfacer diversas necesidades. El plan básico incluye funcionalidades esenciales para presentar tu oferta de manera atractiva. El plan medio agrega características adicionales que pueden mejorar la interacción y aumentar la conversión. Finalmente, el plan avanzado ofrece servicios más completos, como integraciones personalizadas y páginas adicionales. Puedes elegir el plan que mejor se adapte a tus objetivos y presupuesto.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    ¿Puedo personalizar el diseño de mi landing page?
                                </button>
                            </h2>

                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ¡Claro! Entendemos que cada cliente es único, por lo que ofrecemos la opción de personalizar el diseño de tu landing page. Trabajaremos en estrecha colaboración contigo para asegurarnos de que el diseño refleje la identidad de tu marca y se alinee con tus objetivos comerciales.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        ¿Qué tan efectiva es una landing page en la generación de leads o ventas? </button>
                                </h2>

                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Las landing pages son altamente efectivas en la generación de leads y en el aumento de las conversiones. Al estar diseñadas específicamente para una oferta o campaña, captan la atención del visitante y lo motivan a actuar rápidamente. Con un mensaje persuasivo y un llamado a la acción claro, las landing pages tienen un impacto significativo en el crecimiento de tu negocio.
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            ¿Recibiré soporte técnico después de la entrega de la landing page? </button>
                                    </h2>

                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Sí, nuestro compromiso con los clientes no termina con la entrega del proyecto. Ofrecemos soporte técnico continuo para resolver cualquier consulta o problema que puedas tener en el futuro. Queremos asegurarnos de que tu landing page funcione sin problemas y obtengas los resultados deseados.
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                ¿Cómo puedo contactarlos para comenzar con mi proyecto? </button>
                                        </h2>

                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Nos encantaría trabajar contigo en tu proyecto. Puedes ponerte en contacto con nosotros a través de nuestro formulario de contacto en el sitio web, por correo electrónico o por teléfono. Estamos listos para escuchar tus ideas y ayudarte a llevarlas a la realidad.
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEight">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                    ¿Qué sucede con el dominio de mi sitio web?
                                                </button>
                                            </h2>

                                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    En nuestro servicio de desarrollo web, el registro y propiedad del dominio son responsabilidad del cliente. Entendemos que el dominio es algo personal y esencial para su identidad en línea. Por lo tanto, recomendamos que nuestros clientes adquieran y mantengan la propiedad de su dominio para tener el control total sobre él.

                                                    No te preocupes si no tienes experiencia en la configuración del dominio, nuestro equipo estará encantado de guiarte en el proceso. Podemos proporcionarte instrucciones detalladas para registrar tu dominio con un proveedor de tu elección. Además, te asistiremos en la configuración de los registros DNS y cualquier otra configuración necesaria para que tu dominio apunte correctamente a tu nuevo sitio web. </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingNine">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                        ¿Qué incluye el servicio de diseño y desarrollo de mi sitio web?
                                                    </button>
                                                </h2>

                                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        Nuestro servicio incluye el diseño y desarrollo personalizado de tu página web, así como la adquisición del hosting y el mantenimiento por un año completo. Durante este período, nos encargaremos de asegurar que tu sitio funcione de manera óptima y esté siempre actualizado. Al finalizar el año, tendrás la opción de renovar el contrato para continuar disfrutando de nuestros servicios de hosting y mantenimiento. </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
    </section>
    <!-- Precios -->
    <section id="section_3" class="py-5 " data-aos="fade-up">
        <div class="comparison">
            <br><br><br>
            <!-- Portfolio Section Heading-->
            <h2 class="display-4 text-center lh-1 mb-4">Elige tu plan de diseño.</h2>
            <table>
                <thead>
                    <tr>
                        <th class="tl tl2"></th>
                        <th class="product" style="background:#63c379; border-top-left-radius: 5px; border-left:0px;">Standar</th>
                        <th class="product" style="background:#63c379;">Pro</th>
                        <th class="product" style="border-top-right-radius: 5px; border-right:0px; background:#63c379;">Gold</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th class="price-info">
                            <div class="price-now"><span>$39990</span>

                            </div>
                        </th>
                        <th class="price-info">
                            <div class="price-now"><span>$47990</span>

                            </div>
                        </th>
                        <th class="price-info">
                            <div class="price-now"><span>$55000</span>

                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> </td>
                        <td colspan="3">Integración de mapas</td>
                    </tr>
                    <tr>
                        <td>Integración de mapas</td>
                        <td><i class="fa fa-check"></i>
                        </td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="3">Formulario de contacto</td>
                    </tr>
                    <tr class="compare-row">
                        <td>Formulario de contacto</td>
                        <td><i class="fa fa-check"></i>
                        </td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td colspan="3">Integración con redes sociales</td>
                    </tr>
                    <tr>
                        <td>Integración con redes sociales</td>
                        <td><i class="fa fa-check"></i>
                        </td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td colspan="3">Secciones para destacar características</td>
                    </tr>
                    <tr class="compare-row">
                        <td>Secciones para destacar características</td>
                        <td><i class="fa fa-check"></i>
                        </td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td colspan="4">Optimización para dispositivos móviles</td>
                    </tr>
                    <tr>
                        <td>Optimización para dispositivos móviles</td>
                        <td><i class="fa fa-check"></i>
                        </td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td colspan="3">Seccion de preguntas y respuestas</td>
                    </tr>
                    <tr class="compare-row">
                        <td>Seccion de preguntas y respuestas</td>
                        <td><span>–</span></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td colspan="3">Implementación de WhatsApp</td>
                    </tr>
                    <tr>
                        <td>Implementación de WhatsApp</td>
                        <td><span>–</span></td>
                        <td><i class="fa fa-check"></i>
                        </td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td colspan="3">Uso de imágenes o videos</td>
                    </tr>
                    <tr class="compare-row">
                        <td>Uso de imágenes o videos</td>
                        <td><span>–</span></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td colspan="4">Incorporación de testimonios o <br> reseñas de clientes satisfechos</td>
                    </tr>
                    <tr>
                        <td>Incorporación de testimonios o <br> reseñas de clientes satisfechos</td>
                        <td><span>–</span></td>
                        <td><span>–</span></td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td colspan="3">Carrusel de imagenes</td>
                    </tr>
                    <tr class="compare-row">
                        <td>Carrusel de imagenes</td>
                        <td><span>–</span></td>
                        <td><span>–</span>
                        </td>
                        <td><i class="fa fa-check"></i>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td colspan="3">Paginas</td>
                    </tr>
                    <tr>
                        <td>Paginas</td>
                        <td>1</td>
                        <td>3</i>
                        </td>
                        <td>4</i>
                        </td>
                    </tr>

                    <tr>
                        <td> </td>
                        <td colspan="3">Host y Dominio</td>
                    </tr>
                    <tr>
                        <td>Host y Dominio</td>
                        <td colspan="3">El Hosting y Dominio tendran un año de vigencia</td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 price-buy" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                                <span class="d-flex align-items-center hide-mobile">
                                    <i class="iconMesage bi-chat-text-fill me-2"></i>
                                    <span class="small ">Cotizar</span>
                                </span>
                            </button></td>
                        <td>
                            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 price-buy" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                                <span class="d-flex align-items-center hide-mobile">
                                    <i class="iconMesage bi-chat-text-fill me-2"></i>
                                    <span class="small ">Cotizar</span>
                                </span>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 price-buy" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                                <span class="d-flex align-items-center hide-mobile">
                                    <i class="iconMesage bi-chat-text-fill me-2"></i>
                                    <span class="small ">Cotizar</span>
                                </span>
                            </button>
                        </td>

                        <style>
                            /* Estilo para eliminar el borde azul al hacer clic en el botón */
                            button.btn:focus,
                            button.btn:active {
                                outline: none !important;
                                box-shadow: none !important;
                            }
                        </style>

                    </tr>

                </tbody>

            </table>

        </div>
    </section>


    <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <h2 class="text-white display-1 lh-1 mb-4">
                    Diseño web:
                    <br />
                    Creando para vos
                </h2>
                <a class="btn btn-outline-light py-3 px-4 rounded-pill" data-bs-toggle="modal" data-bs-target="#feedbackModal" target="_blank">Comenzar ahora</a>
            </div>
        </div>
    </section>

    <!-- Footer-->

    <footer class="site-footer section-padding">
        <div class="container">
            <div class="row">

                <p class="acta text-gray text-center">Una vez finalizado el desarrollo, tendrás la posibilidad de actualizar / modificar tu sitio web por tus propios medios y la cantidad de veces que sea necesario.
                    El valor expresado no incluye actualizaciones luego de finalizado el desarrollo. Quedan excluidos: Diarios digitales, foros, sitios de subastas y búsquedas o reservas online.</p>

                <div class="col-lg-3 col-12 mb-4 pb-2">
                    <a class=" navbar-brand mb-2" href="/">
                        <i class="bi-back"></i>
                        <span>Tu WebSite</span>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-3">
                    <h6 class="site-footer-title mb-3">Fuentes</h6>

                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#features" class="site-footer-link">Sobre Nosotros</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_1" class="site-footer-link">¿Como funciona?</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_2" class="site-footer-link">FAQs</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="#section_3" class="site-footer-link">Precios</a>
                        </li>
                        <li class="site-footer-link-item">
                            <a href="/terminos" class="site-footer-link">Terminos y condiciones</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Contacto</h6>



                    <p class="text-gray d-flex">
                        <a href="mailto:tuwebsitepages@gmail.com" class="site-footer-link" style="color: inherit; text-decoration: none;">
                            tuwebsitepages@gmail.com
                        </a>

                    </p>
                    <p class="text-gray d-flex">

                        <a href="https://www.instagram.com/tuwebsitepage/" target="_blank" class="site-footer-link" style="color: inherit; text-decoration: none;">
                            <i class="bi bi-instagram"></i> @tuwebsitepage

                        </a>

                    </p>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                    <div class="dropdown">
                        <a class="navbar-brand fw-bold" href="#page-top"><img class="imgIcon" src="assets/img/tuwebsite.png" alt=""></a>
                    </div>

                    <p class="copyright-text mt-lg-5 mt-4">Tu Website 2023. Todos los derechos reservados.
                    </p>

                </div>

            </div>
        </div>
    </footer>
    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Contactanos</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" method="POST">

                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nombre completo</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es requerido.</div>
                        </div>
                        @error('name')
                        <script>
                            swal({
                                title: "Hubo un error!",
                                text: "Complete todos los campos por favor.",
                                icon: "error",
                            });
                        </script>
                        @enderror
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Correo electronico</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">El correo el obligatorio.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es valido.</div>
                        </div>
                        @error('email')
                        <script>
                            swal({
                                title: "Hubo un error!",
                                text: "Complete todos los campos por favor.",
                                icon: "error",
                            });
                        </script>
                        @enderror
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" name="phone" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Número telefonico</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">El numero es obligatorio.</div>
                        </div>
                        @error('phone')
                        <script>
                            swal({
                                title: "Hubo un error!",
                                text: "Complete todos los campos por favor.",
                                icon: "error",
                            });
                        </script>
                        @enderror
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" name="message" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Mensaje</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es obligatorio.</div>
                        </div>
                        @error('message')
                        <script>
                            swal({
                                title: "Hubo un error!",
                                text: "Complete todos los campos por favor.",
                                icon: "error",
                            });
                        </script>
                        @enderror


                        <div class="d-grid"><button id="submitButton" class="btn btn-primary rounded-pill btn-lg" data-toggle="modal" type="submit">Enviar</button></div>

                    </form>
                    @if(session('info'))


                    <script>
                        swal({
                            title: "Gracias por tu consulta!",
                            text: "{{session('info')}}",
                            icon: "success",
                        });
                    </script>


                    @endif
                </div>

            </div>
        </div>

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script src="js/js/jquery.min.js"></script>

    <script src="js/js/jquery.sticky.js"></script>
    <script src="js/js/custom.js"></script>
    <!-- <script src="js/js/click-scroll.js"></script> -->

    <!-- <script src="js/js/bootstrap.bundle.min.js"></script> -->


    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
</body>


</html>