<?php


require_once 'database/db.php';

// Verificar si se recibió el ID en la URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Consultar la publicación según el ID
    $sql = "SELECT titulo, contenido, imagenes, fecha_creacion FROM noticias WHERE id = $id";

    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
        // Mostrar la publicación
        $row = $result->fetch_assoc();

        $titulo = htmlspecialchars($row['titulo']);
        $contenido = nl2br(htmlspecialchars($row['contenido']));
        $imagen = htmlspecialchars($row['imagenes']);
        $fecha = htmlspecialchars(date("d-m-Y", strtotime($row['fecha_creacion'])));
    } else {
        echo "<h1>Publicación no encontrada</h1>";
        exit;
    }
} else {
    echo "<h1>ID de publicación inválido</h1>";
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <!-- <link href="img/icons.png" rel="icon"> -->
    <link href="img/icons.png" rel="icon">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive Stylesheet -->
     <link rel="stylesheet" href="css/button.css">    


     <style>
        .container-xxl {
            width: 100%;
            padding: 3rem 1rem;
        }
        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .text-center {
            text-align: center;
        }
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        .mb-5 {
            margin-bottom: 3rem;
        }
        .mb-4 {
            margin-bottom: 1.5rem;
        }
        .display-6 {
            font-size: 2.5rem;
            font-weight: 300;
            line-height: 1.2;
        }
        .position-relative {
            position: relative;
        }
        .img-fluid {
            max-width: 100%;
            height: auto;
            margin: 0 auto;
            display: block;
            max-height: 500px; /* Limitar altura máxima */
            object-fit: contain;
        }
        .rounded {
            border-radius: 0.25rem;
        }
        .mt-2 {
            margin-top: 0.5rem;
        }
        .mt-5 {
            margin-top: 3rem;
        }
        .fw-bold {
            font-weight: 700;
        }
        .text-primary {
            color: #0d6efd;
        }
        p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }
    </style>
</head>



<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->




    <!-- Brand & Contact Start -->
    <div class="container-fluid py-2 px-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center top-bar">
            <div class="col-lg-9 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
              
                 <img src="img/logo.png" alt="Logo"> 
                </a>
            </div>
            <div class="col-lg-3 col-md-4 d-none d-lg-block">
                <div class="row">
                    <div class="col-8 ">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle btn-interactive btn-cursor"
                        >
                                <!-- <i class="far fa-clock text-primary"></i> -->
                                <a href="https://www.facebook.com/umesantoac" target="_blank">
                                        <i class="bi bi-facebook text-primary">
                                        
                                    </i>
                                </a>
                            </div>
                  
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle btn-interactive btn-cursor"
                         >  
                         <a href="https://www.instagram.com/unidadmedicaespiritusanto/"
                          target="_blank">
                             <i class="bi bi-instagram text-primary">

                             </i>
                         </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="flex-shrink-0 btn-lg-square border rounded-circle btn-interactive btn-cursor"
                            
                            >
                            <a href="https://www.tiktok.com/@espiritusanto3111?is_from_webapp=1&sender_device=pc"
                            target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                            width="16" 
                            height="16" 
                            fill="currentColor" 
                            class="bi bi-tiktok text-primary" viewBox="0 0 16 16"
                            
                            >
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                              </svg>
                        </a>
                                    
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0">
                <a href="index.php" class="nav-item nav-link ">Inicio</a>
                                <!-- <a href="about.html" class="nav-item nav-link">Nosotros </a> -->
                    <a href="index.php#servicios" class="nav-item nav-link active">Servicios</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quienes Somos</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                        <a href="about.html#historia" class="dropdown-item">Historia</a>
                        <a href="about.html#mision" class="dropdown-item">Misión</a>
                        <a href="about.html#vision" class="dropdown-item">Visión</a>
                        <a href="about.html#politicas" class="dropdown-item">Politicas de Calidad</a>

                
                    </div>
                </div>

                <!-- <a href="project.html" class="nav-item nav-link">Sedes</a> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sedes</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                      
                        <a href="ubicacion.html" class="dropdown-item">Novita</a>
                        <a href="ubicacion.html#sanjose" class="dropdown-item">Medio San Juan</a>
                        <a href="ubicacion.html#sanjose" class="dropdown-item">San Jose del Palmar</a>
                        
                
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Red de Servicios</a>
                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                        <a href="https://servicios.adres.gov.co/BDUA/Consulta-Afiliados-BDUA" class="dropdown-item" target="_blank">Consulta Adress</a>
                        <a href="https://www.minsalud.gov.co/Portada/index.html" class="dropdown-item" target="_blank">Ministerio de Salud</a>
                        <a href="https://www.supersalud.gov.co/es-co/Paginas/Home.aspx" target="_blank" class="dropdown-item">Super salud</a>
                        <a href="https://saludtotal.com.co/" target="_blank" class="dropdown-item"></a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link "
                >Contacto</a>
            </div>
            <a href="contact.php" class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block   btn-cursor" >Contactanos</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Navbar End -->
    <!-- Navbar End -->


  <!-- Service Start -->
  <div id="marco-legal" class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5">
        <h1 class="text-center"><?php echo $titulo; ?></h1>
        </div>

        <div class="position-relative mb-4 text-center">
        <?php if (!empty($imagen)) { ?>
            <div class="text-center mb-4">
                <img src="dev-backend/scripts/img-files/<?php echo $imagen; ?>" class="img-fluid rounded" alt="Imagen de la publicación">
            </div>
        <?php } ?>            
        </div>
        <div class="mt-2 text-center">
            <span class="fw-bold">

                <p class="text-center"><?php echo $fecha; ?></p>
            </span>
        </div>
        <div class="mt-5">
            <p class="text-center">
            <p><?php echo $contenido; ?></p>
    
            </p>
        </div>
    </div>
</div>



    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-8">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Unidad Medica Espiritu Santo</h5>
                    <p class="mb-2"><i class="fa  me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video2" viewBox="0 0 16 16">
                            <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            <path d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM1 3a1 1 0 0 1 1-1h2v2H1zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3zm-4-2h3v2H2a1 1 0 0 1-1-1zm3-1H1V8h3zm0-3H1V5h3z"/>
                          </svg>
                    </i>
                        
                        NIT:818001360-9</p>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-2"></i>
                        Novita 
                        <p>
                            <p class="mb-2">
                                <i class="fa fa-map-marker-alt me-2"></i>
                                Medio San Juan
                                <p>
                                    <p class="mb-2">
                                        <i class="fa fa-map-marker-alt me-2"></i>
                                        San Jose del Palmar
                                        <p>
                                            
                                            <p class="mb-2">
                                                <i class="fa fa-map-marker-alt me-2"></i>
                                                San Jose 
                                                <p>         
                                                    
                                                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" 
                        href="https://www.facebook.com/umesantoac"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1"
                         href="https://www.instagram.com/unidadmedicaespiritusanto/"><i class="fab fa-instagram"></i></a>
                         <a class="btn btn-square btn-outline-secondary rounded-circle me-1"
                         href="https://www.tiktok.com/@espiritusanto3111"><i class="fab fa-Tiktok">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="16" 
                                height="16" 
                                fill="currentColor" 
                                class="bi bi-tiktok btn-outline-secondary" viewBox="0 0 16 16"
                                
                                >
                                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                                  </svg>
                         </i>
                        </a>
                         
                    
                    </div>
                    <br>
                </div>
                <br>
    
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Líneas de Atención</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fa fa-map-marker-alt me-2 "></i>
                            <span class="text-secondary">Dirección:</span>
                            Medio San Juan - Chocó
                        </li>
                        <li class="mb-2">
                            <i class="fa fa-phone-alt me-2 "></i>
                            <a href="tel:+3108954673" class="text-secondary">(+57)  321 243 6278</a>
                        </li>
                        <li>
                            
                            <i class="fa fa-envelope py-2"></i>
                            <a href="mailto:unidadmedicaespiritu@hotmail.com" class="text-secondary">unidadmedicaespiritu</a>
                        </li>
                     
                        <p class="py-2">
                            <a href="ubicacion.html" class="text-secondary" class="">
                            <i class="fa fa-map-marker-alt me-3"></i>
                            Sitios de Contactos
                        </a>
                        </p>  
                    </ul>
                </div>
                
                
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Normatividad</h5>
                        <p class="mb-2">
                            <a href="marco-legal.html" class="text-secondary"> 
                            <i class="bi bi-file-earmark-text-fill me-2"></i>
                            Marco Legal</a>
                        </p>
                        <p class="mb-2">
                            <a href="politicas.html" class="text-secondary"> 
                            <i class="bi bi-file-earmark-text-fill me-2"></i>
                            Políticas</a>
                        </p>
                        <p class="mb-2">
                            <a href="portafolio.html" class="text-secondary" class="">
                            <i class="bi bi-file-earmark-text-fill me-2"></i>
                            Portafolio y Servicios
                        </a>
                        </p>

                        </p>

                          
                </div>



                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Afíliate a la IPS Espíritu Santo</h5>
                    <div class="row g-2">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="img/logo u.png" alt="Image">
                        </div>
                        
                    </div>
                </div>
          
            </div>
        </div>
        <div class="container-fluid copyright">
        </div>
    </div>
    <!-- Footer End -->





    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>