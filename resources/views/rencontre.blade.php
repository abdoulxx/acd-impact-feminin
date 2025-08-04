<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rencontre 2025 - Impact Féminin</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=roboto:400,500,700&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Rencontre CSS personnalisé -->
    <link rel="stylesheet" href="{{ asset('css/rencontre.css') }}">

</head>
<body>

    <!-- En-tête de la page -->
    <header class="hero-section">
        <div class="container">
            <h1 class="display-1 fw-bold mb-3 hero-title">Célébrons l'Impact<br>Féminin</h1>
            <p class="lead mb-3">Rejoignez-nous le <strong class="hero-highlight">19 novembre</strong>, à l'Hôtel Ivoire, pour une soirée dédiée à la célébration de l'impact, de l'audace et de la vision exceptionnels des femmes entrepreneures, à l'occasion de la Journée Mondiale de l'Entrepreneuriat Féminin.</p>
        </div>
    </header>

    <!-- Section Inscription / Appel à la Candidature -->
    <section id="inscription" class="py-5 section-bg-gradient">
        <div class="container">
            <h2 class="section-title text-center w-100 mb-5">Inscription & Appel à la Candidature</h2>
            <div class="row justify-content-center g-4">
                <!-- Card Participants -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <a href="https://www.acdcorporateservices.com/appel-a-la-candidature" target="_blank" class="inscription-card-link w-100">
                        <div class="inscription-card position-relative d-flex flex-column justify-content-end p-4 card-bg-participant">
                            <div class="inscription-card-overlay"></div>
                            <div class="inscription-card-content position-relative">
                                <div class="mb-2"><i class="fas fa-users fa-lg inscription-card-icon"></i></div>
                                <h2 class="inscription-card-title">Participants</h2>
                                <div class="inscription-card-subtitle">PARTICIPER À L'EVENEMENT</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card Sponsors -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <a href="https://www.acdcorporateservices.com/appel-a-la-candidature" target="_blank" class="inscription-card-link w-100">
                        <div class="inscription-card position-relative d-flex flex-column justify-content-end p-4 card-bg-sponsor">
                            <div class="inscription-card-overlay"></div>
                            <div class="inscription-card-content position-relative">
                                <div class="mb-2"><i class="fas fa-layer-group fa-lg inscription-card-icon"></i></div>
                                <h2 class="inscription-card-title">Sponsors</h2>
                                <div class="inscription-card-subtitle">ETRE SPONSOR OU PARTENAIRE</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Card Exposants -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <a href="https://www.acdcorporateservices.com/appel-a-la-candidature" target="_blank" class="inscription-card-link w-100">
                        <div class="inscription-card position-relative d-flex flex-column justify-content-end p-4 card-bg-stand">
                            <div class="inscription-card-overlay"></div>
                            <div class="inscription-card-content position-relative">
                                <div class="mb-2"><i class="fas fa-store-alt fa-lg inscription-card-icon"></i></div>
                                <h2 class="inscription-card-title">Exposants</h2>
                                <div class="inscription-card-subtitle">RÉSERVEZ UN STAND (6M2, 9M2 ,18M2 OU SELON VOS BESOINS)</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Thématiques -->
    <section id="thematiques" class="py-5 section-bg-gradient">
        <div class="container">
            <h2 class="section-title text-center w-100">Thématiques Abordées</h2>
            <div class="row justify-content-center g-4 align-items-stretch">
                <div class="col-md-6 col-lg-5 d-flex align-items-stretch">
                    <div class="thematiques-card animated-card shadow-sm w-100 text-center p-4">
                        <div class="thematiques-icon mb-3 mx-auto"><i class="fas fa-hands-helping fa-2x"></i></div>
                        <h4 class="fw-bold mb-2">L'Entrepreneuriat Féminin comme Levier de Transformation Sociale</h4>
                        <p class="mb-0">Découvrez comment les femmes cheffes d'entreprise contribuent activement à la réduction des inégalités et à l'autonomisation des communautés.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 d-flex align-items-stretch">
                    <div class="thematiques-card animated-card shadow-sm w-100 text-center p-4">
                        <div class="thematiques-icon mb-3 mx-auto"><i class="fas fa-chart-line fa-2x"></i></div>
                        <h4 class="fw-bold mb-2">Leadership Féminin : Audace, Éthique et Durabilité</h4>
                        <p class="mb-0">Explorez les styles de leadership uniques que les femmes mettent en œuvre pour bâtir un monde plus équitable et résilient.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Programme Officiel -->
    <section id="programme" class="section-bg-gradient py-5">
        <div class="container">
            <h2 class="section-title text-center w-100">Programme Officiel</h2>
            <div class="timeline-central">
                <div class="timeline-event left">
                    <div class="timeline-dot"><i class="fas fa-door-open"></i></div>
                    <div class="timeline-content-box">
                        <h5>Accueil & Installation</h5>
                        <p class="text-muted">19h00 - 19h30</p>
                        <p>Enregistrement et distribution des badges.</p>
                    </div>
                </div>
                <div class="timeline-event right">
                    <div class="timeline-dot"><i class="fas fa-microphone"></i></div>
                    <div class="timeline-content-box">
                        <h5>Mot de bienvenue</h5>
                        <p class="text-muted">19h30 - 20h00</p>
                        <p>Ouverture officielle de la cérémonie.</p>
                    </div>
                </div>
                <div class="timeline-event left">
                    <div class="timeline-dot"><i class="fas fa-users"></i></div>
                    <div class="timeline-content-box">
                        <h5>Panel</h5>
                        <p class="text-muted">20h00 - 20h30</p>
                        <p>"L'entrepreneuriat féminin au service de l'impact social".</p>
                        <button class="btn btn-link p-0 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#panelDetails" aria-expanded="false" aria-controls="panelDetails">Voir plus</button>
                        <div class="collapse mt-2" id="panelDetails">
                            <ul class="mb-1">
                                <li>Témoignages inspirants de femmes qui transforment des vies grâce à leurs activités.</li>
                                <li><strong>Intervenantes :</strong> entrepreneures, représentantes d'ONG, incubateurs.</li>
                                <li><strong>Modératrice :</strong> journaliste ou coach expérimentée.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="timeline-event right">
                    <div class="timeline-dot"><i class="fas fa-chalkboard-teacher"></i></div>
                    <div class="timeline-content-box">
                        <h5>Atelier Interactif</h5>
                        <p class="text-muted">20h30 - 21h00</p>
                        <p>"Structurer son entreprise à impact".</p>
                        <button class="btn btn-link p-0 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#atelierDetails" aria-expanded="false" aria-controls="atelierDetails">Voir plus</button>
                        <div class="collapse mt-2" id="atelierDetails">
                            <ul class="mb-1">
                                <li>Session pratique sur les modèles économiques durables et les indicateurs d'impact.</li>
                                <li><strong>Animé par :</strong> un consultant ou expert en entrepreneuriat social.</li>
                                <li><strong>Support fourni :</strong> mini canevas d'impact.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="timeline-event left">
                    <div class="timeline-dot"><i class="fas fa-award"></i></div>
                    <div class="timeline-content-box">
                        <h5>Remise des Prix</h5>
                        <p class="text-muted">21h00 - 21h40</p>
                        <p>Cérémonie de remise des prix d'Impact Féminin.</p>
                        <button class="btn btn-link p-0 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#prixDetails" aria-expanded="false" aria-controls="prixDetails">Voir plus</button>
                        <div class="collapse mt-2" id="prixDetails">
                            <ul class="mb-1">
                                <li>Présentation des 3 catégories de prix :</li>
                                <li>Prix Éclosion Féminin (entreprises de 3 à 5 ans)</li>
                                <li>Prix Résilience Féminin (entreprises de 6 à 9 ans)</li>
                                <li>Prix Visionnaire Féminin (entreprises de 10 ans et plus)</li>
                                <li>Remise officielle des trophées et certificats.</li>
                                <li>Séance photo de groupe et remerciements.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="timeline-event right">
                    <div class="timeline-dot"><i class="fas fa-glass-cheers"></i></div>
                    <div class="timeline-content-box">
                        <h5>Cocktail de Clôture</h5>
                        <p class="text-muted">21h40 - 22h30</p>
                        <p>Moment privilégié pour les échanges, le networking, les photos et plus encore.</p>
                        <button class="btn btn-link p-0 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#cocktailDetails" aria-expanded="false" aria-controls="cocktailDetails">
                            Voir plus
                        </button>
                        <div class="collapse mt-2" id="cocktailDetails">
                            <ul class="mb-1">
                                <li>Inclut également des interviews presse.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Panélistes & Intervenants -->
    <section id="panelistes" class="panelistes-section py-5">
        <div class="panelistes-overlay"></div>
        <div class="container panelistes-container">
            <h2 class="section-title text-center w-100 panelistes-title">Panélistes & Intervenants</h2>
            <div class="panelistes-zigzag d-flex flex-wrap justify-content-center align-items-end">
                <!-- Paneliste 1 -->
                <div class="paneliste-zigzag-item" style="--zigzag-row:1;">
                    <div class="paneliste-circle mb-3">
                        <img src="/images/logo.png" alt="Awa Koné">
                    </div>
                    <div class="paneliste-nom">Awa Koné</div>
                    <div class="paneliste-fonction">Fondatrice & CEO</div>
                    <div class="paneliste-org">Impact Solutions</div>
                </div>
                <!-- Paneliste 2 -->
                <div class="paneliste-zigzag-item" style="--zigzag-row:2;">
                    <div class="paneliste-circle mb-3">
                        <img src="/images/logo.png" alt="Fatou Coulibaly">
                    </div>
                    <div class="paneliste-nom">Fatou Coulibaly</div>
                    <div class="paneliste-fonction">Directrice Générale</div>
                    <div class="paneliste-org">Femmes Leaders CI</div>
                </div>
                <!-- Paneliste 3 -->
                <div class="paneliste-zigzag-item" style="--zigzag-row:1;">
                    <div class="paneliste-circle mb-3">
                        <img src="/images/logo.png" alt="Marie Touré">
                    </div>
                    <div class="paneliste-nom">Marie Touré</div>
                    <div class="paneliste-fonction">Experte Impact Social</div>
                    <div class="paneliste-org">Consultante Indépendante</div>
                </div>
                <!-- Paneliste 4 -->
                <div class="paneliste-zigzag-item" style="--zigzag-row:2;">
                    <div class="paneliste-circle mb-3">
                        <img src="/images/logo.png" alt="Aminata Diabaté">
                    </div>
                    <div class="paneliste-nom">Aminata Diabaté</div>
                    <div class="paneliste-fonction">Présidente</div>
                    <div class="paneliste-org">Association Femmes & Leadership</div>
                </div>
                <!-- Paneliste 5 -->
                <div class="paneliste-zigzag-item" style="--zigzag-row:1;">
                    <div class="paneliste-circle mb-3">
                        <img src="/images/logo.png" alt="Clarisse Kouamé">
                    </div>
                    <div class="paneliste-nom">Clarisse Kouamé</div>
                    <div class="paneliste-fonction">Fondatrice & Directrice Générale</div>
                    <div class="paneliste-org">Innov'Elle Afrique</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Catégories de Prix -->
    <section id="prix" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center w-100">Prix d’Impact Féminin</h2>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="prix-intro-card animated-card text-center mx-auto mb-4 p-4">
                        <p class="lead mb-2">Mettre en lumière l'audace, la résilience et la vision des femmes qui non seulement bâtissent l'économie, mais génèrent également un impact ESG significatif sur la communauté après la création de leur entreprise, dont la durée d'existence est comprise entre 3 et 10 ans et plus.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="prix-card animated-card shadow-sm w-100">
                        <div class="prix-card-header bg-white text-center py-3">
                            <div class="prix-icon mb-2"><i class="fas fa-seedling fa-2x text-primary"></i></div>
                            <h4 class="fw-bold text-primary mb-1">Prix Éclosion Féminin</h4>
                            <div class="prix-meta mb-2">
                                <span class="badge bg-primary text-white me-2">3 à 5 ans</span>
                                <span class="badge bg-primary text-white">2+ employés</span>
                            </div>
                        </div>
                        <div class="prix-card-body px-4 pb-4">
                            <p class="mb-2">Ce prix met en lumière les femmes entrepreneures ayant lancé une entreprise jeune et prometteuse. Il célèbre leur audace et leur créativité dans la mise en place d'un modèle économique viable et en pleine croissance.</p>
                            <h6 class="fw-bold text-primary mt-3 mb-2 prix-critere-title">Critères valorisés</h6>
                            <ul class="prix-criteres">
                                <li>Une croissance régulière depuis la création</li>
                                <li>La première structuration réussie de l'équipe</li>
                                <li>L'établissement de partenariats ou de clients significatifs</li>
                                <li>La capacité à innover ou à se différencier sur le marché</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="prix-card animated-card shadow-sm w-100">
                        <div class="prix-card-header bg-white text-center py-3">
                            <div class="prix-icon mb-2"><i class="fas fa-shield-alt fa-2x text-primary"></i></div>
                            <h4 class="fw-bold text-primary mb-1">Prix Résilience Féminin</h4>
                            <div class="prix-meta mb-2">
                                <span class="badge bg-primary text-white me-2">6 à 9 ans</span>
                                <span class="badge bg-primary text-white">4+ employés</span>
                            </div>
                        </div>
                        <div class="prix-card-body px-4 pb-4">
                            <p class="mb-2">Ce prix honore les femmes dirigeantes qui ont traversé les étapes critiques du développement et de la consolidation. Il célèbre leur persévérance, leur stabilité et leur adaptabilité dans la construction d'une base solide pour une croissance durable.</p>
                            <h6 class="fw-bold text-primary mt-3 mb-2 prix-critere-title">Critères valorisés</h6>
                            <ul class="prix-criteres">
                                <li>Une gestion financière et opérationnelle saine</li>
                                <li>Le développement de l'équipe et la structuration interne</li>
                                <li>La capacité à surmonter les crises ou à pivoter avec succès</li>
                                <li>Des impacts positifs mesurables sur le marché ou la communauté</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="prix-card animated-card shadow-sm w-100">
                        <div class="prix-card-header bg-white text-center py-3">
                            <div class="prix-icon mb-2"><i class="fas fa-lightbulb fa-2x text-primary"></i></div>
                            <h4 class="fw-bold text-primary mb-1">Prix Visionnaire Féminin</h4>
                            <div class="prix-meta mb-2">
                                <span class="badge bg-primary text-white me-2">10 ans et +</span>
                                <span class="badge bg-primary text-white">6+ employés</span>
                            </div>
                        </div>
                        <div class="prix-card-body px-4 pb-4">
                            <p class="mb-2">Ce prix récompense les femmes entrepreneures qui ont bâti une entreprise pérenne, influente et résolument tournée vers l'avenir. Il souligne la vision stratégique, l'impact sociétal et l'héritage entrepreneurial des dirigeantes les plus expérimentées.</p>
                            <h6 class="fw-bold text-primary mt-3 mb-2 prix-critere-title">Critères valorisés</h6>
                            <ul class="prix-criteres">
                                <li>La pérennité de l’entreprise sur plus d’une décennie</li>
                                <li>Un leadership reconnu dans le secteur</li>
                                <li>La création d’emplois et une contribution significative à l’économie locale</li>
                                <li>L'engagement avéré dans l’innovation, le développement durable ou le mentorat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Sponsors & Partenaires -->
    <section id="sponsors" class="py-5 bg-white">
        <div class="container">
            <h2 class="section-title text-center w-100">Sponsors & Partenaires</h2>
            <div id="sponsorsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center align-items-center g-4">
                            <div class="col-6 col-md-3 col-lg-3 text-center">
                                <img src="/images/logo.png" alt="Sponsor 1" class="img-fluid mb-3 sponsor-logo">
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 text-center">
                                <img src="/images/logo.png" alt="Sponsor 2" class="img-fluid mb-3 sponsor-logo">
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 text-center">
                                <img src="/images/logo.png" alt="Sponsor 3" class="img-fluid mb-3 sponsor-logo">
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 text-center">
                                <img src="/images/logo.png" alt="Sponsor 4" class="img-fluid mb-3 sponsor-logo">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center g-4">
                            <div class="col-6 col-md-3 col-lg-3 text-center">
                                <img src="/images/logo.png" alt="Sponsor 5" class="img-fluid mb-3 sponsor-logo">
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 text-center">
                                <img src="/images/logo.png" alt="Sponsor 6" class="img-fluid mb-3 sponsor-logo">
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 text-center">
                                <img src="/images/logo.png" alt="Sponsor 7" class="img-fluid mb-3 sponsor-logo">
                            </div>
                            <div class="col-6 col-md-3 col-lg-3 text-center">
                                <img src="/images/logo.png" alt="Sponsor 8" class="img-fluid mb-3 sponsor-logo">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#sponsorsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sponsorsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Section Lieu & Détails Pratiques -->
    <section id="lieu" class="py-5 section-bg-gradient">
        <div class="container">
            <h2 class="section-title text-center w-100">Lieu & Détails Pratiques</h2>
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-lg-5 mb-4">
                    <div class="lieu-card animated-card shadow-sm p-4 h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="lieu-icon me-3"><i class="fas fa-calendar-alt fa-2x"></i></div>
                            <div>
                                <h5 class="fw-bold mb-1">Date</h5>
                                <p class="mb-0">19 novembre 2025</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="lieu-icon me-3"><i class="fas fa-clock fa-2x"></i></div>
                            <div>
                                <h5 class="fw-bold mb-1">Heure</h5>
                                <p class="mb-0">19h00 - 22h30</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="lieu-icon me-3"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                            <div>
                                <h5 class="fw-bold mb-1">Lieu</h5>
                                <p class="mb-0">Hôtel Ivoire, Abidjan, Côte d'Ivoire</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="lieu-map-card animated-card shadow-sm h-100">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4089.0024338092603!2d-4.005914842021428!3d5.325470499358739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xfc1eb9708e3e29b%3A0x97c418e48e2e320c!2sBd%20Hassan%20II%2C%20Abidjan!3m2!1d5.3263945!2d-4.0044106!5e0!3m2!1sfr!2sci!4v1754241750019!5m2!1sfr!2sci" class="map-iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>