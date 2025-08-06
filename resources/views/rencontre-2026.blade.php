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
</head>

<body>

    {{-- Section 1 : En-tête / Présentation --}}
    <section class="section-gradient py-5" data-aos="fade-down" data-aos-duration="900"
        data-aos-easing="ease-out-cubic">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="display-3 fw-bold mb-4 text-start hero-title">
                        Rencontre Professionnelle <span class="color-main">2026</span>
                    </h1>
                    <p class="lead text-start mb-3">
                        Participez à une série exclusive de rencontres internationales réunissant
                        <span class="fw-bold color-main">investisseurs</span>,
                        <span class="fw-bold color-main">chefs d’entreprises</span>,
                        <span class="fw-bold color-main">porteurs de projets</span>,
                        institutions publiques et partenaires étrangers<br>
                        autour d’<span class="fw-bold color-main">opportunités stratégiques multisectorielles</span>.
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- Section 2 : Programme annuel par destinations --}}
    <section class="py-5" data-aos="fade-up" data-aos-duration="900" data-aos-easing="ease-out-cubic">
        <div class="container">
            <div class="mb-4">
                <h2 class="fw-bold text-start mb-2 section-title">Programme annuel</h2>
                <hr class="section-divider">
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
                {{-- Février – Dubaï --}}
                <div class="col d-flex justify-content-center">
                    <div class="card destination-card text-center shadow-sm border-0 py-5 px-4 w-100" data-aos="fade-right"
                        data-aos-delay="100" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="text-uppercase fw-bold mb-2 card-month">Février</div>
                        <div class="mb-3">
                            <img src="{{ asset('images-pro/uae.png') }}" alt="Drapeau EAU" class="card-country-flag">
                        </div>
                        <div class="fw-bold mt-2 card-country-name">Dubaï</div>
                    </div>
                </div>
                {{-- Mars – Espagne --}}
                <div class="col d-flex justify-content-center">
                    <div class="card destination-card text-center shadow-sm border-0 py-5 px-4 w-100" data-aos="fade-right"
                        data-aos-delay="250" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="text-uppercase fw-bold mb-2 card-month">Mars</div>
                        <div class="mb-3">
                            <img src="{{ asset('images-pro/espagne.png') }}" alt="Drapeau Espagne"
                                class="card-country-flag">
                        </div>
                        <div class="fw-bold mt-2 card-country-name">Espagne</div>
                    </div>
                </div>
                {{-- Mai – Chine --}}
                <div class="col d-flex justify-content-center">
                    <div class="card destination-card text-center shadow-sm border-0 py-5 px-4 w-100" data-aos="fade-right"
                        data-aos-delay="400" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="text-uppercase fw-bold mb-2 card-month">Mai</div>
                        <div class="mb-3">
                            <img src="{{ asset('images-pro/chine.png') }}" alt="Drapeau Chine" class="card-country-flag">
                        </div>
                        <div class="fw-bold mt-2 card-country-name">Chine</div>
                    </div>
                </div>
                {{-- Juillet – Singapour --}}
                <div class="col d-flex justify-content-center">
                    <div class="card destination-card text-center shadow-sm border-0 py-5 px-4 w-100" data-aos="fade-right"
                        data-aos-delay="550" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="text-uppercase fw-bold mb-2 card-month">Juillet</div>
                        <div class="mb-3">
                            <img src="{{ asset('images-pro/singapour.png') }}" alt="Drapeau Singapour"
                                class="card-country-flag">
                        </div>
                        <div class="fw-bold mt-2 card-country-name">Singapour</div>
                    </div>
                </div>
                {{-- Septembre – Canada --}}
                <div class="col d-flex justify-content-center">
                    <div class="card destination-card text-center shadow-sm border-0 py-5 px-4 w-100" data-aos="fade-right"
                        data-aos-delay="700" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="text-uppercase fw-bold mb-2 card-month">Septembre</div>
                        <div class="mb-3">
                            <img src="{{ asset('images-pro/canada.png') }}" alt="Drapeau Canada"
                                class="card-country-flag">
                        </div>
                        <div class="fw-bold mt-2 card-country-name">Canada</div>
                    </div>
                </div>
                {{-- Décembre – Inde --}}
                <div class="col d-flex justify-content-center">
                    <div class="card destination-card text-center shadow-sm border-0 py-5 px-4 w-100" data-aos="fade-right"
                        data-aos-delay="850" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="text-uppercase fw-bold mb-2 card-month">Décembre</div>
                        <div class="mb-3">
                            <img src="{{ asset('images-pro/inde.png') }}" alt="Drapeau Inde" class="card-country-flag">
                        </div>
                        <div class="fw-bold mt-2 card-country-name">Inde</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 3 : Objectifs de l’événement --}}
    <section class="py-5 section-gradient" data-aos="fade-up" data-aos-duration="900" data-aos-easing="ease-out-cubic">
        <div class="container">
            <div class="mb-4">
                <h2 class="fw-bold text-start mb-2 section-title">Objectifs de l’événement</h2>
                <hr class="section-divider">
            </div>
            <div class="row g-4">
                <!-- Carte 1 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="card objectif-card flex-fill text-start h-100" data-aos="fade-right"
                        data-aos-delay="100" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="card-body">
                            <div class="mb-3"><i class="bi bi-globe2 fs-1 card-icon"></i></div>
                            <h5 class="fw-bold text-uppercase mb-2 card-title">Ouverture de marché</h5>
                            <p class="mb-0 card-text">Accès à de nouveaux marchés et implantation
                                d’entreprises africaines à l’étranger.</p>
                        </div>
                    </div>
                </div>
                <!-- Carte 2 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="card objectif-card flex-fill text-start h-100" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="card-body">
                            <div class="mb-3"><i class="bi bi-people fs-1 card-icon"></i></div>
                            <h5 class="fw-bold text-uppercase mb-2 card-title">Créer des synergies</h5>
                            <p class="mb-0 card-text">Établir des liens solides entre investisseurs et
                                entreprises africaines prometteuses.</p>
                        </div>
                    </div>
                </div>
                <!-- Carte 3 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="card objectif-card flex-fill text-start h-100" data-aos="fade-left" data-aos-delay="300"
                        data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="card-body">
                            <div class="mb-3"><i class="bi bi-arrow-repeat fs-1 card-icon"></i></div>
                            <h5 class="fw-bold text-uppercase mb-2 card-title">Transfert de savoir</h5>
                            <p class="mb-0 card-text">Encourager le transfert de compétences, technologies et
                                capitaux vers l’Afrique.</p>
                        </div>
                    </div>
                </div>
                <!-- Carte 4 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="card objectif-card flex-fill text-start h-100" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="card-body">
                            <div class="mb-3"><i class="bi bi-currency-exchange fs-1 card-icon"></i></div>
                            <h5 class="fw-bold text-uppercase mb-2 card-title">Financements transfrontaliers</h5>
                            <p class="mb-0 card-text">Explorer les financements au-delà des frontières pour
                                soutenir la croissance.</p>
                        </div>
                    </div>
                </div>
                <!-- Carte 5 -->
                <div class="col-12 col-sm-6 col-lg-4 d-flex">
                    <div class="card objectif-card flex-fill text-start h-100" data-aos="fade-up" data-aos-delay="500"
                        data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <div class="card-body">
                            <div class="mb-3"><i class="bi bi-chat-dots fs-1 card-icon"></i></div>
                            <h5 class="fw-bold text-uppercase mb-2 card-title">Plateforme d’échange</h5>
                            <p class="mb-0 card-text">Offrir un espace pour les échanges et co-investissements
                                avec la diaspora.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 4 : Informations tarifaires (Nouveau Design) --}}
    <section class="py-5" id="reservation" data-aos="fade-up" data-aos-duration="900" data-aos-easing="ease-out-cubic">
        <div class="container">
            <div class="mb-4">
                <h2 class="fw-bold text-start mb-2 section-title">Informations tarifaires</h2>
                <hr class="section-divider">
            </div>
            <div class="tarif-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="900"
                data-aos-easing="ease-out-cubic">
                <div class="row align-items-center">
                    <div class="col-lg-6 tarif-details">
                        <h3 class="pack-title">PACK VOYAGE</h3>
                        <div class="pack-price">2 550 000 <span class="pack-currency">FCFA</span></div>
                        <p class="reservation-fee mt-3 mb-4">Réservation et frais de visa : <strong>450 000 FCFA</strong></p>
                        <a href="https://www.acdcorporateservices.com/appel-a-la-candidature/inscription" target="_blank"
                            class="btn btn-reserver fw-bold">Réserver maintenant</a>
                    </div>
                    <div class="col-lg-6 tarif-includes mt-4 mt-lg-0">
                        <h4 class="includes-title mb-3">Ce qui est inclus :</h4>
                        <ul class="includes-list">
                            <li><i class="bi bi-airplane-fill"></i>Billet d’avion</li>
                            <li><i class="bi bi-building-fill"></i>Hôtel</li>
                            <li><i class="bi bi-ticket-fill"></i>Frais d’inscription</li>
                            <li><i class="bi bi-chat-dots-fill"></i>Dîner d’affaires</li>
                            <li><i class="bi bi-cup-hot-fill"></i>Petit déjeuner</li>
                        </ul>
                        <div class="alert alert-warning mt-4 nb-alert">
                            <strong>NB :</strong> Places limitées pour chaque destination.<br>
                            Date limite de réservation : <strong>décembre 2025</strong>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Contact --}}
    <section class="py-5 bg-light" id="contact" data-aos="fade-up" data-aos-duration="900"
        data-aos-easing="ease-out-cubic">
        <div class="container">
            <div class="mb-4">
                <h2 class="fw-bold text-start mb-2 section-title">Contact</h2>
                <hr class="section-divider contact-divider">
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="mb-2 contact-info">
                        <i class="bi bi-telephone-fill me-2 color-main"></i>
                        <span class="fw-bold">225 07 10 83 43 45</span><br>
                        <i class="bi bi-telephone-fill me-2 color-main"></i>
                        <span class="fw-bold">225 05 96 79 08 02</span>
                    </div>
                    <div class="mb-2 contact-info">
                        <i class="bi bi-envelope-fill me-2 color-main"></i>
                        <span class="fw-bold">acdcorporateservices@gmail.com</span>
                    </div>
                    <div class="mb-2 contact-info">
                        <i class="bi bi-globe me-2 color-main"></i>
                        <a href="https://www.acdcorporateservices.com" target="_blank"
                            class="contact-link">www.acdcorporateservices.com</a>
                    </div>
                    <div class="mb-2 contact-info">
                        <i class="bi bi-geo-alt-fill me-2 color-main"></i>
                        <span class="fw-bold">Siège : Abidjan, Cocody Angré, Cité Soleil 3, Villa 105</span>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 text-center text-lg-end">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo ACD Corporate Services"
                        class="logo-contact img-fluid">
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>AOS.init({ once: true });</script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>

</html>