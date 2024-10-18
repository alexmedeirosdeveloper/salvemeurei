<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <title>Salve Meu Rei</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Salve Meu Rei" name="keywords">
        <meta content="Salve Meu Rei" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400|Quicksand:500,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Nav Start -->
        <div id="nav">
            <div class="container-fluid">
                <div id="logo" class="pull-left">
                    <a href="index.html"><img src="img/logo.png" alt="Logo" /></a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#header">Home</a></li>
                        <li><a href="#feature">Nosso Diferencial</a></li>
                        <li><a href="#process">Como Comprar</a></li>
                        <li><a href="#products">Produtos</a></li>
                        <li><a href="#testimonials">Depoimentos</a></li>
                        <li><a href="#faqs">FAQs</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Nav End -->
        
        @yield('content')
        



        <!-- Footer Start -->
        <div id="footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>&copy; Copyright <a href="">Salve Meu Rei</a>. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6">
                        <p>Feito Por <a href="https://www.linkedin.com/in/alex-medeiros-86b101a8/">Alex Medeiros</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alexmedeirosdeveloper/salvemeurei@main/lib/easing/easing.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alexmedeirosdeveloper/salvemeurei@main/lib/menuspy/menuspy.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alexmedeirosdeveloper/salvemeurei@main/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="https://cdn.jsdelivr.net/gh/alexmedeirosdeveloper/salvemeurei@main/js/main.js"></script>
    </body>

    </html>