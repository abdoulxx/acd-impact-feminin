{{-- 
===========================================
NAVBAR COMPONENT - ACD Corporate Services
===========================================
Composant navbar réutilisable avec Bootstrap 5
Responsive avec menu burger mobile
3 boutons d'action configurables
===========================================
--}}

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top modern-navbar-acd">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="{{ $logoLink ?? '/' }}" title="{{ $logoTitle ?? 'ACD Corporate Services' }}">
      <img src="{{ $logoSrc ?? asset('assets/images/logo/1.png') }}" alt="{{ $logoAlt ?? 'ACD Logo' }}" class="navbar-logo">
    </a>

    <!-- Mobile toggle button -->
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Main menu items closer to center -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-uppercase fw-bold text-dark {{ Request::is('/') ? 'active text-danger' : '' }}" href="/">
            {{ $menuHome ?? __("menu.accueil") }}
          </a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-uppercase fw-bold text-secondary" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $menuAbout ?? __("menu.presentation.menu1") }}
          </a>
          <ul class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown1">
            @if(isset($aboutItems))
              @foreach($aboutItems as $item)
                <li><a class="dropdown-item" href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
              @endforeach
            @else
              <li><a class="dropdown-item" href="{{ route("about.index") }}">{{ __("menu.presentation.about") }}</a></li>
              <li><a class="dropdown-item" href="{{ route("mot") }}">{{ __("menu.presentation.mot") }}</a></li>
              <li><a class="dropdown-item" href="{{ route("team") }}">{{ __("menu.presentation.equipe") }}</a></li>
              <li><a class="dropdown-item" href="{{ route("laureat.index") }}">{{ __("menu.presentation.reference") }}</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-uppercase fw-bold text-secondary" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $menuIdentity ?? __("menu.identite.menu2") }}
          </a>
          <ul class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown2">
            @if(isset($identityItems))
              @foreach($identityItems as $item)
                <li><a class="dropdown-item" href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
              @endforeach
            @else
              <li><a class="dropdown-item" href="{{ route("mission") }}">{{ __("menu.identite.mission") }}</a></li>
              <li><a class="dropdown-item" href="{{ route("solution") }}">{{ __("menu.identite.solution") }}</a></li>
              <li><a class="dropdown-item" href="{{ route("magazine") }}">{{ __("menu.identite.magazine") }}</a></li>
            @endif
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-uppercase fw-bold text-secondary" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $menuNews ?? __("menu.actualite.menu3") }}
          </a>
          <ul class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown3">
            @if(isset($newsItems))
              @foreach($newsItems as $item)
                <li><a class="dropdown-item" href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
              @endforeach
            @else
              <li><a class="dropdown-item" href="{{ route("historique.index") }}">{{ __("menu.actualite.historique") }}</a></li>
              <li><a class="dropdown-item" href="{{ route("reportage") }}">{{ __("menu.actualite.reportage") }}</a></li>
              <li><a class="dropdown-item" href="{{ route("event") }}">{{ __("menu.actualite.event") }}</a></li>
            @endif
          </ul>
        </li>
      </ul>

      <!-- Right side items - very close to menu -->
      <ul class="navbar-nav align-items-center ms-1">
        <!-- Language selector dropdown (optionnel) -->
        @if($showLanguageSelector ?? true)
        <li class="nav-item dropdown me-2">
          <a class="nav-link dropdown-toggle d-flex align-items-center language-selector" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @if(function_exists('app') && method_exists(app(), 'getLocale'))
              <img src="{{ asset('assets/images/flags/' . app()->getLocale() . '-flag.png') }}" alt="{{ app()->getLocale() }}" style="width: 20px; margin-right: 8px;">
              <span class="text-capitalize fw-semibold">{{ app()->getLocale() === 'fr' ? 'Français' : (app()->getLocale() === 'en' ? 'English' : 'Español') }}</span>
            @else
              <span class="text-capitalize fw-semibold">{{ $defaultLanguage ?? 'Français' }}</span>
            @endif
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="languageDropdown">
            @if(isset($languages))
              @foreach($languages as $lang)
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{ $lang['url'] }}">
                    <img src="{{ $lang['flag'] }}" alt="{{ $lang['name'] }}" style="width: 20px; margin-right: 8px;">
                    {{ $lang['name'] }}
                  </a>
                </li>
              @endforeach
            @endif
          </ul>
        </li>
        @endif

        <!-- Boutons d'action configurables -->
        @if(isset($actionButtons))
          @foreach($actionButtons as $button)
            <li class="nav-item">
              <a href="{{ $button['url'] }}" 
                 @if($button['target'] ?? false) target="{{ $button['target'] }}" @endif
                 class="btn {{ $button['class'] ?? 'btn-candidature' }} text-white text-uppercase fw-bold px-4 py-2 rounded-pill">
                {{ $button['label'] }}
              </a>
            </li>
          @endforeach
        @else
          <!-- Boutons par défaut -->
          <li class="nav-item">
            <a href="{{ route("excellence.index") }}" class="btn btn-candidature text-white text-uppercase fw-bold px-4 py-2 rounded-pill">
              {{ __("menu.register") }}
            </a>
          </li>
          
          <li class="nav-item">
            <a href="https://app.acdcorporateservices.com/" target="_blank" class="btn btn-impact-feminin text-white text-uppercase fw-bold px-4 py-2 rounded-pill">
              Impact Féminin
            </a>
          </li>
          
          <li class="nav-item">
            <a href="https://plaquette.acdcorporateservices.com/" target="_blank" class="btn btn-rencontre-2026 text-white text-uppercase fw-bold px-4 py-2 rounded-pill">
              Rencontre 2026
            </a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
