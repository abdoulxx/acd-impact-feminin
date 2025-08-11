
@extends('layouts.app')

@section('title', __('page.hero_title_1') . ' ' . __('page.hero_title_2'))

@push('styles')
<link href="{{ asset('css/rencontre-2026.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!-- Section d'intro immersive -->
    <section class="acd-hero-section d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <h1 class="acd-hero-title mb-4">
                <span class="animate-mask">
                    <span class="animate-slide-up" data-aos="fade-up" data-aos-duration="800">{{ __('page.hero_title_1') }}</span>
                </span>
                <br>
                <span class="animate-mask">
                    <span class="animate-slide-up acd-red" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">{{ __('page.hero_title_2') }}</span>
                </span>
            </h1>
            <p class="acd-hero-desc mx-auto mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                {!! __('page.hero_description') !!}
            </p>
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                <a href="#" class="btn btn-reserver acd-btn-hero" data-bs-toggle="modal" data-bs-target="#inscriptionModal">{{ __('page.hero_register_btn') }}</a>
            </div>
        </div>
    </section>


    <!-- Section Programme annuel  -->
    <section id="programme" class="acd-section py-5 bg-white" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="acd-section-header mb-5 text-center">
                <h2 class="acd-section-title">{{ __('page.program_title') }}</h2>
                <div class="acd-section-bar mx-auto"></div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Février – Dubaï -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Dubaï">
                        <div class="acd-dest-month">{{ __('page.program_months.february') }}</div>
                        <img src="{{ asset('images-pro/uae.png') }}" alt="Drapeau EAU" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">{{ __('page.program_countries.dubai') }}</div>
                    </div>
                </div>
                <!-- Mars – Espagne -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="250" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Espagne">
                        <div class="acd-dest-month">{{ __('page.program_months.march') }}</div>
                        <img src="{{ asset('images-pro/espagne.png') }}" alt="Drapeau Espagne" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">{{ __('page.program_countries.spain') }}</div>
                    </div>
                </div>
                <!-- Mai – Chine -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="400" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Chine">
                        <div class="acd-dest-month">{{ __('page.program_months.may') }}</div>
                        <img src="{{ asset('images-pro/chine.png') }}" alt="Drapeau Chine" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">{{ __('page.program_countries.china') }}</div>
                    </div>
                </div>
                <!-- Juillet – Singapour -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="550" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Singapour">
                        <div class="acd-dest-month">{{ __('page.program_months.july') }}</div>
                        <img src="{{ asset('images-pro/singapour.png') }}" alt="Drapeau Singapour" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">{{ __('page.program_countries.singapore') }}</div>
                    </div>
                </div>
                <!-- Septembre – Canada -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="700" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Canada">
                        <div class="acd-dest-month">{{ __('page.program_months.september') }}</div>
                        <img src="{{ asset('images-pro/canada.png') }}" alt="Drapeau Canada" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">{{ __('page.program_countries.canada') }}</div>
                    </div>
                </div>
                <!-- Décembre – Inde -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="850" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Inde">
                        <div class="acd-dest-month">{{ __('page.program_months.december') }}</div>
                        <img src="{{ asset('images-pro/inde.png') }}" alt="Drapeau Inde" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">{{ __('page.program_countries.india') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Objectifs -->
    <section id="objectifs" class="acd-section acd-section-dark py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="acd-section-header mb-5 text-center">
                <h2 class="acd-section-title">{{ __('page.objectives_title') }}</h2>
                <div class="acd-section-bar mx-auto"></div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Carte 1 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-people-fill"></i></div>
                        <div class="acd-obj-title mb-2">{{ __('page.objectives.0.title') }}</div>
                        <div class="acd-obj-desc">{{ __('page.objectives.0.description') }}</div>
                    </div>
                </div>
                <!-- Carte 2 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-briefcase-fill"></i></div>
                        <div class="acd-obj-title mb-2">{{ __('page.objectives.1.title') }}</div>
                        <div class="acd-obj-desc">{{ __('page.objectives.1.description') }}</div>
                    </div>
                </div>
                <!-- Carte 3 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-currency-exchange"></i></div>
                        <div class="acd-obj-title mb-2">{{ __('page.objectives.2.title') }}</div>
                        <div class="acd-obj-desc">{{ __('page.objectives.2.description') }}</div>
                    </div>
                </div>
                <!-- Carte 4 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-puzzle-fill"></i></div>
                        <div class="acd-obj-title mb-2">{{ __('page.objectives.3.title') }}</div>
                        <div class="acd-obj-desc">{{ __('page.objectives.3.description') }}</div>
                    </div>
                </div>
                <!-- Carte 5 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="500">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-globe2"></i></div>
                        <div class="acd-obj-title mb-2">{{ __('page.objectives.4.title') }}</div>
                        <div class="acd-obj-desc">{{ __('page.objectives.4.description') }}</div>
                    </div>
                </div>
                <!-- Carte 6 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="600">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-chat-dots-fill"></i></div>
                        <div class="acd-obj-title mb-2">{{ __('page.objectives.5.title') }}</div>
                        <div class="acd-obj-desc">{{ __('page.objectives.5.description') }}</div>
                    </div>
                </div>
                <!-- Carte 7 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="700">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-book-fill"></i></div>
                        <div class="acd-obj-title mb-2">{{ __('page.objectives.6.title') }}</div>
                        <div class="acd-obj-desc">{{ __('page.objectives.6.description') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tarifs  -->
    <section id="reservation" class="acd-section bg-white py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="acd-section-header mb-5 text-center">
                <h2 class="acd-section-title">{{ __('page.pricing_title') }}</h2>
                <div class="acd-section-bar mx-auto"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="acd-tarif-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="row align-items-center">
                            <div class="col-lg-6 tarif-details">
                                <h3 class="pack-title">{{ __('page.pricing_pack_title') }}</h3>
                                <div class="pack-price">{{ __('page.pricing_price') }} <span class="pack-currency">{{ __('page.pricing_currency') }}</span></div>
                                <p class="reservation-fee mt-3 mb-4">{!! __('page.pricing_reservation_fee', ['amount' => __('page.pricing_reservation_amount')]) !!}</p>
                                <a href="#" class="btn btn-reserver fw-bold" data-bs-toggle="modal" data-bs-target="#inscriptionModal">{{ __('page.pricing_reserve_btn') }}</a>
                            </div>
                            <div class="col-lg-6 tarif-includes mt-4 mt-lg-0">
                                <h4 class="includes-title mb-3">{{ __('page.pricing_includes_title') }}</h4>
                                                                <ul class="includes-list mb-4">
                                    @foreach(__('page.pricing_includes') as $index => $include)
                                        <li>
                                            @switch($index)
                                                @case(0)
                                                    <i class="bi bi-airplane-fill"></i>
                                                    @break
                                                @case(1)
                                                    <i class="bi bi-building-fill"></i>
                                                    @break
                                                @case(2)
                                                    <i class="bi bi-people-fill"></i>
                                                    @break
                                                @case(3)
                                                    <i class="bi bi-briefcase-fill"></i>
                                                    @break
                                                @case(4)
                                                    <i class="bi bi-patch-check-fill"></i>
                                                    @break
                                                @case(5)
                                                    <i class="bi bi-trophy-fill"></i>
                                                    @break
                                                @case(6)
                                                    <i class="bi bi-mic-fill"></i>
                                                    @break
                                                @case(7)
                                                    <i class="bi bi-book-fill"></i>
                                                    @break
                                                @case(8)
                                                    <i class="bi bi-cup-hot-fill"></i>
                                                    @break
                                                @case(9)
                                                    <i class="bi bi-cup-fill"></i>
                                                    @break
                                                @case(10)
                                                    <i class="bi bi-chat-dots-fill"></i>
                                                    @break
                                                @case(11)
                                                    <i class="bi bi-geo-alt-fill"></i>
                                                    @break
                                                @default
                                                    <i class="bi bi-check-circle-fill"></i>
                                            @endswitch
                                            {{ $include }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Galerie -->
    <section id="galerie" class="acd-section acd-section-dark py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="acd-section-header mb-5 text-center">
                <h2 class="acd-section-title">{{ __('page.gallery_title') }}</h2>
                <div class="acd-section-bar mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image1.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('galerie/image1.png') }}" class="acd-gallery-img" alt="Galerie Image 1">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image2.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('galerie/image2.png') }}" class="acd-gallery-img" alt="Galerie Image 2">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image3.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('galerie/image3.png') }}" class="acd-gallery-img" alt="Galerie Image 3">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image4.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="400">
                            <img src="{{ asset('galerie/image4.png') }}" class="acd-gallery-img" alt="Galerie Image 4">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image5.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="500">
                            <img src="{{ asset('galerie/image5.png') }}" class="acd-gallery-img" alt="Galerie Image 5">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image6.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="600">
                            <img src="{{ asset('galerie/image6.png') }}" class="acd-gallery-img" alt="Galerie Image 6">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image7.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="700">
                            <img src="{{ asset('galerie/image7.png') }}" class="acd-gallery-img" alt="Galerie Image 7">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image8.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="800">
                            <img src="{{ asset('galerie/image8.png') }}" class="acd-gallery-img" alt="Galerie Image 8">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image9.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="900">
                            <img src="{{ asset('galerie/image9.png') }}" class="acd-gallery-img" alt="Galerie Image 9">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image10.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="1000">
                            <img src="{{ asset('galerie/image10.png') }}" class="acd-gallery-img" alt="Galerie Image 10">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image11.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="1100">
                            <img src="{{ asset('galerie/image11.png') }}" class="acd-gallery-img" alt="Galerie Image 11">
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{ asset('galerie/image12.png') }}" class="glightbox" data-gallery="gallery1">
                        <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="1200">
                            <img src="{{ asset('galerie/image12.png') }}" class="acd-gallery-img" alt="Galerie Image 12">
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="https://bibliotheque.acdcorporateservices.com/phototheque.php" target="_blank" class="btn acd-btn-outline">{{ __('page.gallery_see_more') }}</a>
            </div>
        </div>
    </section>

    <!-- Modal d'inscription -->
    <div class="modal fade" id="inscriptionModal" tabindex="-1" aria-labelledby="inscriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inscriptionModalLabel">{{ __('page.modal_title') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-loader-overlay">
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>{{ __('page.modal_sending') }}</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('inscription.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nom_prenom" class="form-label">{{ __('page.modal_form_labels.name') }}</label>
                            <input type="text" class="form-control @error('nom_prenom') is-invalid @enderror" id="nom_prenom" name="nom_prenom" value="{{ old('nom_prenom') }}" required>
                            @error('nom_prenom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="entreprise" class="form-label">{{ __('page.modal_form_labels.company') }}</label>
                            <input type="text" class="form-control" id="entreprise" name="entreprise" value="{{ old('entreprise') }}">
                        </div>
                        <div class="mb-3">
                            <label for="fonction" class="form-label">{{ __('page.modal_form_labels.position') }}</label>
                            <input type="text" class="form-control" id="fonction" name="fonction" value="{{ old('fonction') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('page.modal_form_labels.countries') }}</label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ __('page.modal_countries_select') }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Dubaï" id="dest-dubai">{{ __('page.program_countries.dubai') }}</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Espagne" id="dest-espagne">{{ __('page.program_countries.spain') }}</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Chine" id="dest-chine">{{ __('page.program_countries.china') }}</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Singapour" id="dest-singapour">{{ __('page.program_countries.singapore') }}</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Canada" id="dest-canada">{{ __('page.program_countries.canada') }}</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Inde" id="dest-inde">{{ __('page.program_countries.india') }}</a></li>
                                </ul>
                            </div>
                             @error('destinations')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">{{ __('page.modal_form_labels.phone') }}</label>
                            <input type="tel" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                             @error('telephone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp" class="form-label">{{ __('page.modal_form_labels.whatsapp') }}</label>
                            <input type="tel" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('page.modal_form_labels.email') }}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                             @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">{{ __('page.modal_send_btn') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de succès -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
                <div class="modal-body">
                    <div class="mb-3">
                        <i class="bi bi-check-circle-fill text-success" style="font-size: 4rem;"></i>
                    </div>
                    <h5 class="modal-title mb-3" id="successModalLabel">{{ __('page.success_title') }}</h5>
                    <p>{{ __('page.success_message') }}</p>
                    <button type="button" class="btn btn-outline-secondary mt-3" data-bs-dismiss="modal">{{ __('page.success_close') }}</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        AOS.init({ once: true });

        const lightbox = GLightbox({
            selector: '.glightbox'
        });

        const inscriptionModal = document.getElementById('inscriptionModal');
        inscriptionModal.addEventListener('show.bs.modal', function (event) {
            // Bouton qui a déclenché la modale
            const button = event.relatedTarget;
            // Extraire l'info de l'attribut data-destination
            const destination = button.getAttribute('data-destination');

            // Réinitialiser toutes les cases à cocher
            const checkboxes = inscriptionModal.querySelectorAll('.form-check-input');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });

            // Si une destination a été passée, cocher la case correspondante
            if (destination) {
                const checkbox = inscriptionModal.querySelector(`[value="${destination}"]`);
                if (checkbox) {
                    checkbox.checked = true;
                }
            }
        });

        const form = document.querySelector('#inscriptionModal form');
        if (form) {
            form.addEventListener('submit', function() {
                const loader = inscriptionModal.querySelector('.form-loader-overlay');
                const progressBar = loader.querySelector('.progress-bar');
                
                loader.style.display = 'flex';
                progressBar.style.width = '0%';

                setTimeout(() => {
                    progressBar.style.width = '100%';
                }, 100);
            });
        }

        @if(session('show_success_modal'))
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        @endif
    </script>
@endpush