{{-- 
===========================================
EXEMPLE COMPLET - Layout Laravel avec Navbar ACD
===========================================
--}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Modern navbar styles -->
    <link rel="stylesheet" href="{{ asset('navbar&footer/assets/css/modern-navbar.css') }}">
    
    <!-- Vos styles personnalisés -->
    @stack('styles')
</head>

<body>
    {{-- EXEMPLE 1: Navbar par défaut --}}
    @include('navbar&footer.components.navbar')

    {{-- EXEMPLE 2: Navbar personnalisée --}}
    {{--
    @include('navbar&footer.components.navbar', [
        'logoSrc' => asset('images/mon-logo.png'),
        'logoLink' => route('home'),
        'logoTitle' => 'Mon Site Web',
        
        // Menu personnalisé
        'menuHome' => 'Accueil',
        'menuAbout' => 'Notre entreprise',
        'menuIdentity' => 'Nos services',
        'menuNews' => 'Blog',
        
        // Items de menu personnalisés
        'aboutItems' => [
            ['label' => 'Notre équipe', 'url' => route('team')],
            ['label' => 'Notre histoire', 'url' => route('history')],
            ['label' => 'Nos valeurs', 'url' => route('values')]
        ],
        
        'identityItems' => [
            ['label' => 'Consulting', 'url' => route('consulting')],
            ['label' => 'Formation', 'url' => route('training')],
            ['label' => 'Support', 'url' => route('support')]
        ],
        
        'newsItems' => [
            ['label' => 'Articles', 'url' => route('blog')],
            ['label' => 'Événements', 'url' => route('events')],
            ['label' => 'Newsletter', 'url' => route('newsletter')]
        ],
        
        // Boutons d'action personnalisés
        'actionButtons' => [
            [
                'label' => 'Démo gratuite',
                'url' => route('demo'),
                'class' => 'btn-candidature'
            ],
            [
                'label' => 'Contact',
                'url' => route('contact'),
                'class' => 'btn-impact-feminin'
            ],
            [
                'label' => 'Documentation',
                'url' => 'https://docs.monsite.com',
                'target' => '_blank',
                'class' => 'btn-rencontre-2026'
            ]
        ],
        
        // Configuration de langue
        'showLanguageSelector' => true,
        'languages' => [
            [
                'name' => 'Français',
                'url' => route('lang.switch', 'fr'),
                'flag' => asset('images/flags/fr.png')
            ],
            [
                'name' => 'English',
                'url' => route('lang.switch', 'en'),
                'flag' => asset('images/flags/en.png')
            ]
        ]
    ])
    --}}

    {{-- Contenu principal --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer (à créer) --}}
    {{-- @include('navbar&footer.components.footer') --}}

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Vos scripts personnalisés -->
    @stack('scripts')
</body>
</html>
