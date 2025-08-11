{{-- 
===========================================
EXEMPLE LAYOUT COMPLET - ACD Corporate Services
===========================================
Layout complet avec navbar moderne et footer original
Version 2.0.0 - Structure mise à jour
===========================================
--}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACD Corporate Services - @yield('title')</title>
    
    <!-- Bootstrap 5 CSS (requis pour navbar) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS existant de votre projet (requis pour footer) -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- CSS de la navbar moderne -->
    <link rel="stylesheet" href="{{ asset('navbar&footer/assets/css/modern-navbar.css') }}">
    
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="site-wrapper">
        
        {{-- NAVBAR MODERNE --}}
        @include('navbar&footer.components.navbar', [
            'showActionButtons' => true,
            'actionButtons' => [
                [
                    'label' => 'Candidature',
                    'url' => '/candidature',
                    'type' => 'primary'
                ],
                [
                    'label' => 'Impact Féminin',
                    'url' => '/impact-feminin',
                    'type' => 'primary'
                ],
                [
                    'label' => 'Rencontre 2026',
                    'url' => '/rencontre-2026',
                    'type' => 'primary'
                ]
            ],
            'showLanguageSelector' => true
        ])
        
        {{-- CONTENU PRINCIPAL --}}
        <div class="clearfix"></div>
        
        <main>
            @yield('content')
        </main>
        
        {{-- FOOTER ORIGINAL ACD --}}
        @include('navbar&footer.components.footer')
        
    </div>
    
    <!-- jQuery -->
    <script src="{{ asset('assets/js/universal/jquery.js') }}"></script>
    
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Modern Footer JS (pour le scroll to top) -->
    <script src="{{ asset('navbar&footer/assets/js/modern-footer.js') }}"></script>
    
    <!-- JavaScript navbar moderne -->
    <script>
        $(document).ready(function() {
            // Smooth scrolling
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if(target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                }
            });

            // Active page highlighting
            var currentPath = window.location.pathname;
            $('.navbar-nav .nav-link').each(function() {
                var linkPath = $(this).attr('href');
                if (linkPath === currentPath) {
                    $(this).addClass('active text-danger');
                }
            });

            // Navbar scroll effect
            $(window).scroll(function() {
                if ($(window).scrollTop() > 50) {
                    $('.modern-navbar-acd').addClass('scrolled');
                } else {
                    $('.modern-navbar-acd').removeClass('scrolled');
                }
            });
        });
    </script>
    
</body>
</html>
