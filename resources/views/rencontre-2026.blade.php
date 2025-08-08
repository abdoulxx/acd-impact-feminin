{{-- Vue principale de la page Rencontre 2026 --}}
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rencontre Professionnelle 2026</title>
    <link href="https://fonts.bunny.net/css?family=roboto:400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/rencontre-2026.css') }}" rel="stylesheet">
    <!-- AOS Animation CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- GLightbox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
</head>

<body>

    <!-- Section d'intro immersive -->
    <section class="acd-hero-section d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <h1 class="acd-hero-title mb-4">
                <span class="animate-mask">
                    <span class="animate-slide-up" data-aos="fade-up" data-aos-duration="800">Rencontre Professionnelle</span>
                </span>
                <br>
                <span class="animate-mask">
                    <span class="animate-slide-up acd-red" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">2026</span>
                </span>
            </h1>
            <p class="acd-hero-desc mx-auto mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                Participez à une série exclusive de rencontres internationales réunissant <span class="acd-red">investisseurs</span>, <span class="acd-red">chefs d’entreprises</span>, <span class="acd-red">porteurs de projets</span>, institutions publiques et partenaires étrangers autour d’<span class="acd-red">opportunités stratégiques multisectorielles</span>.
            </p>
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                <a href="#" class="btn btn-reserver acd-btn-hero" data-bs-toggle="modal" data-bs-target="#inscriptionModal">Découvrir le pack</a>
            </div>
        </div>
    </section>


    <!-- Section Programme annuel  -->
    <section id="programme" class="acd-section py-5 bg-white" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="acd-section-header mb-5 text-center">
                <h2 class="acd-section-title">Programme annuel</h2>
                <div class="acd-section-bar mx-auto"></div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Février – Dubaï -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Dubaï">
                        <div class="acd-dest-month">Février</div>
                        <img src="{{ asset('images-pro/uae.png') }}" alt="Drapeau EAU" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">Dubaï</div>
                    </div>
                </div>
                <!-- Mars – Espagne -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="250" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Espagne">
                        <div class="acd-dest-month">Mars</div>
                        <img src="{{ asset('images-pro/espagne.png') }}" alt="Drapeau Espagne" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">Espagne</div>
                    </div>
                </div>
                <!-- Mai – Chine -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="400" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Chine">
                        <div class="acd-dest-month">Mai</div>
                        <img src="{{ asset('images-pro/chine.png') }}" alt="Drapeau Chine" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">Chine</div>
                    </div>
                </div>
                <!-- Juillet – Singapour -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="550" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Singapour">
                        <div class="acd-dest-month">Juillet</div>
                        <img src="{{ asset('images-pro/singapour.png') }}" alt="Drapeau Singapour" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">Singapour</div>
                    </div>
                </div>
                <!-- Septembre – Canada -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="700" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Canada">
                        <div class="acd-dest-month">Septembre</div>
                        <img src="{{ asset('images-pro/canada.png') }}" alt="Drapeau Canada" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">Canada</div>
                    </div>
                </div>
                <!-- Décembre – Inde -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-dest-card flex-fill text-center" data-aos="zoom-in" data-aos-delay="850" data-bs-toggle="modal" data-bs-target="#inscriptionModal" data-destination="Inde">
                        <div class="acd-dest-month">Décembre</div>
                        <img src="{{ asset('images-pro/inde.png') }}" alt="Drapeau Inde" class="acd-dest-flag my-3">
                        <div class="acd-dest-country">Inde</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Objectifs -->
    <section id="objectifs" class="acd-section acd-section-dark py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="acd-section-header mb-5 text-center">
                <h2 class="acd-section-title">Objectifs de l’événement</h2>
                <div class="acd-section-bar mx-auto"></div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Carte 1 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-people-fill"></i></div>
                        <div class="acd-obj-title mb-2">Rencontres des investisseurs internationaux</div>
                        <div class="acd-obj-desc">Faciliter des rendez-vous ciblés entre porteurs de projets et investisseurs de premier plan.</div>
                    </div>
                </div>
                <!-- Carte 2 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-briefcase-fill"></i></div>
                        <div class="acd-obj-title mb-2">Trouver des partenaires commerciaux</div>
                        <div class="acd-obj-desc">Identifier et connecter les entreprises avec des partenaires stratégiques pour accélérer leur croissance.</div>
                    </div>
                </div>
                <!-- Carte 3 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-currency-exchange"></i></div>
                        <div class="acd-obj-title mb-2">Financements transfrontalier</div>
                        <div class="acd-obj-desc">Explorer les financements au-delà des frontières pour soutenir la croissance des entreprises.</div>
                    </div>
                </div>
                <!-- Carte 4 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="400">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-puzzle-fill"></i></div>
                        <div class="acd-obj-title mb-2">Créer des synergies</div>
                        <div class="acd-obj-desc">Établir des liens solides et durables entre les acteurs économiques internationaux et africains.</div>
                    </div>
                </div>
                <!-- Carte 5 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="500">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-globe2"></i></div>
                        <div class="acd-obj-title mb-2">Ouverture de marchés</div>
                        <div class="acd-obj-desc">Accompagner l'implantation et l'expansion des entreprises africaines à l'international.</div>
                    </div>
                </div>
                <!-- Carte 6 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="600">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-chat-dots-fill"></i></div>
                        <div class="acd-obj-title mb-2">Plateforme d’échanges</div>
                        <div class="acd-obj-desc">Offrir un espace privilégié pour les échanges et les opportunités de co-investissement.</div>
                    </div>
                </div>
                <!-- Carte 7 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="700">
                        <div class="acd-obj-icon mb-3"><i class="bi bi-book-fill"></i></div>
                        <div class="acd-obj-title mb-2">Transfert de savoir-faire</div>
                        <div class="acd-obj-desc">Encourager le partage de compétences, de technologies et de bonnes pratiques.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tarifs  -->
    <section id="reservation" class="acd-section bg-white py-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="acd-section-header mb-5 text-center">
                <h2 class="acd-section-title">Informations tarifaires</h2>
                <div class="acd-section-bar mx-auto"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="acd-tarif-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="row align-items-center">
                            <div class="col-lg-6 tarif-details">
                                <h3 class="pack-title">PACK VOYAGE</h3>
                                <div class="pack-price">2 550 000 <span class="pack-currency">FCFA</span></div>
                                <p class="reservation-fee mt-3 mb-4">Réservation et frais de visa : <strong>450 000 FCFA</strong></p>
                                <a href="#" class="btn btn-reserver fw-bold" data-bs-toggle="modal" data-bs-target="#inscriptionModal">Réserver maintenant</a>
                            </div>
                            <div class="col-lg-6 tarif-includes mt-4 mt-lg-0">
                                <h4 class="includes-title mb-3">Inclus dans le package :</h4>
                                <ul class="includes-list mb-4">
                                    <li><i class="bi bi-airplane-fill"></i> Billet aller-retour</li>
                                    <li><i class="bi bi-building-fill"></i> Hôtel</li>
                                    <li><i class="bi bi-people-fill"></i> Rencontre Investisseurs</li>
                                    <li><i class="bi bi-briefcase-fill"></i> Networking et B2B</li>
                                    <li><i class="bi bi-patch-check-fill"></i> Certificat de participation</li>
                                    <li><i class="bi bi-trophy-fill"></i> Prix d’excellence international</li>
                                    <li><i class="bi bi-mic-fill"></i> Pitch devant investisseurs</li>
                                    <li><i class="bi bi-book-fill"></i> Formation sur des Thématiques</li>
                                    <li><i class="bi bi-cup-hot-fill"></i> Petits Déjeuners</li>
                                    <li><i class="bi bi-cup-fill"></i> Dîner</li>
                                    <li><i class="bi bi-chat-dots-fill"></i> Dîner d’affaire</li>
                                    <li><i class="bi bi-geo-alt-fill"></i> Un pays de votre choix</li>
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
                <h2 class="acd-section-title">Nos Éditions en Images</h2>
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
                <a href="https://bibliotheque.acdcorporateservices.com/phototheque.php" target="_blank" class="btn acd-btn-outline">Voir plus d'images</a>
            </div>
        </div>
    </section>

    <!-- Modal d'inscription -->
    <div class="modal fade" id="inscriptionModal" tabindex="-1" aria-labelledby="inscriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inscriptionModalLabel">Formulaire d'inscription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

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
                            <label for="nom_prenom" class="form-label">Nom & Prénom</label>
                            <input type="text" class="form-control @error('nom_prenom') is-invalid @enderror" id="nom_prenom" name="nom_prenom" value="{{ old('nom_prenom') }}" required>
                            @error('nom_prenom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="entreprise" class="form-label">Entreprise</label>
                            <input type="text" class="form-control" id="entreprise" name="entreprise" value="{{ old('entreprise') }}">
                        </div>
                        <div class="mb-3">
                            <label for="fonction" class="form-label">Fonction</label>
                            <input type="text" class="form-control" id="fonction" name="fonction" value="{{ old('fonction') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Choix de pays</label>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sélectionner les destinations
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Dubaï" id="dest-dubai">Dubaï</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Espagne" id="dest-espagne">Espagne</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Chine" id="dest-chine">Chine</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Singapour" id="dest-singapour">Singapour</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Canada" id="dest-canada">Canada</a></li>
                                    <li><a class="dropdown-item" href="#"><input class="form-check-input me-2" name="destinations[]" type="checkbox" value="Inde" id="dest-inde">Inde</a></li>
                                </ul>
                            </div>
                             @error('destinations')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                             @error('telephone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="whatsapp" class="form-label">WhatsApp</label>
                            <input type="tel" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                             @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span class="btn-text">Envoyer</span>
                        </button>
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
                    <h5 class="modal-title mb-3" id="successModalLabel">Inscription réussie !</h5>
                    <p>Votre demande d'inscription a bien été prise en compte. Nous vous contacterons bientôt pour finaliser les détails.</p>
                    <button type="button" class="btn btn-outline-secondary mt-3" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!-- GLightbox JS -->
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        AOS.init({ once: true });
        const lightbox = GLightbox({
            selector: '.glightbox'
        });

        const form = document.querySelector('#inscriptionModal form');
        if (form) {
            form.addEventListener('submit', function() {
                const button = form.querySelector('button[type="submit"]');
                button.classList.add('loading');
                button.disabled = true;
            });
        }

        @if(session('show_success_modal'))
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        @endif

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
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>

</html>