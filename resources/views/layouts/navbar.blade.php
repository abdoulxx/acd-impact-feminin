
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top modern-navbar-acd">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="{{ $logoLink ?? '/' }}" title="{{ $logoTitle ?? 'Rencontre 2026' }}">
      <img src="{{ $logoSrc ?? asset('images-pro/logo.png') }}" alt="{{ $logoAlt ?? 'Rencontre 2026' }}" class="navbar-logo">
    </a>

    <!-- Mobile toggle button -->
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Main menu items -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-uppercase fw-bold text-dark {{ Request::is('/') || Request::is('rencontre-2026') ? 'active text-danger' : '' }}" href="{{ route('rencontre-2026') }}">
            {{ __('navbar.home') }}
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-uppercase fw-bold text-secondary" href="#programme">
            {{ __('navbar.program') }}
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase fw-bold text-secondary" href="#objectifs">
            {{ __('navbar.objectives') }}
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase fw-bold text-secondary" href="#reservation">
            {{ __('navbar.pricing') }}
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase fw-bold text-secondary" href="#galerie">
            {{ __('navbar.gallery') }}
          </a>
        </li>
      </ul>

      <!-- Right side items -->
      <ul class="navbar-nav align-items-center ms-1">
        <!-- Sélecteur de langue -->
        <li class="nav-item dropdown me-3">
          <a class="nav-link dropdown-toggle d-flex align-items-center text-dark" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-globe me-2"></i>
            <span class="d-none d-sm-inline">
              @switch(app()->getLocale())
                @case('en')
                  English
                  @break
                @case('es')
                  Español
                  @break
                @default
                  Français
              @endswitch
            </span>
            <span class="d-inline d-sm-none">
              @switch(app()->getLocale())
                @case('en')
                  EN
                  @break
                @case('es')
                  ES
                  @break
                @default
                  FR
              @endswitch
            </span>
            <small class="text-muted ms-1">({{ app()->getLocale() }})</small>
          </a>
          <ul class="dropdown-menu dropdown-menu-end language-dropdown" aria-labelledby="languageDropdown">
            <li>
              <a class="dropdown-item d-flex align-items-center {{ app()->getLocale() == 'fr' ? 'active' : '' }}" href="{{ route('language.switch', 'fr') }}">
                <span class="flag-emoji me-2">🇫🇷</span>
                <span>Français</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center {{ app()->getLocale() == 'en' ? 'active' : '' }}" href="{{ route('language.switch', 'en') }}">
                <span class="flag-emoji me-2">🇺🇸</span>
                <span>English</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center {{ app()->getLocale() == 'es' ? 'active' : '' }}" href="{{ route('language.switch', 'es') }}">
                <span class="flag-emoji me-2">🇪🇸</span>
                <span>Español</span>
              </a>
            </li>
          </ul>
        </li>
        
        <!-- Bouton principal d'inscription -->
        <li class="nav-item">
          <a href="#" class="btn btn-rencontre-2026 text-white text-uppercase fw-bold px-4 py-2 rounded-pill" data-bs-toggle="modal" data-bs-target="#inscriptionModal">
            {{ __('navbar.register') }}
          </a>
        </li>
        
        <!-- Lien vers le site principal ACD -->
        <li class="nav-item">
          <a href="https://acdcorporateservices.com/" target="_blank" class="btn btn-candidature text-white text-uppercase fw-bold px-4 py-2 rounded-pill">
            ACD Corporate
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
