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

    <!-- Nouveau CSS -->
    <link rel="stylesheet" href="{{ asset('css/impact-feminin.css') }}">

</head>


<body>
    
    <section class="if-hero" style="background-color: #000000;">
        <div class="container">
            <h1 class="if-hero-title">
                <span class="line-wrapper"><span class="line">Célébrons</span></span>
                <span class="line-wrapper"><span class="line">l'Impact Féminin</span></span>
            </h1>
            <p class="if-hero-desc">
                Rejoignez-nous le <strong style="color: var(--if-red);">19 novembre</strong>, à l'Hôtel Ivoire, pour une soirée dédiée à la célébration de l'impact, de l'audace et de la vision exceptionnels des femmes entrepreneures, à l'occasion de la Journée Mondiale de l'Entrepreneuriat Féminin.
            </p>
        </div>
    </section>

    <section class="if-section">
        <div class="container text-center py-5">
            <h2 class="if-theme-title">Inscription & Appel à la Candidature</h2>
            <div class="acd-section-bar mx-auto"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="https://www.acdcorporateservices.com/appel-a-la-candidature/inscription" target="_blank" class="if-cta-card">
                        <img src="{{ asset('images/participant.png') }}" alt="" class="if-cta-bg">
                        <div class="if-cta-overlay"></div>
                        <div class="if-cta-content">
                            <div class="if-cta-icon"><i class="fas fa-users"></i></div>
                            <h3 class="if-cta-title">Participants</h3>
                            <p class="if-cta-subtitle">PARTICIPER À L'EVENEMENT</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://www.acdcorporateservices.com/appel-a-la-candidature/inscription" target="_blank" class="if-cta-card">
                        <img src="{{ asset('images/sponsor.png') }}" alt="" class="if-cta-bg">
                        <div class="if-cta-overlay"></div>
                        <div class="if-cta-content">
                            <div class="if-cta-icon"><i class="fas fa-layer-group"></i></div>
                            <h3 class="if-cta-title">Sponsors</h3>
                            <p class="if-cta-subtitle">ETRE SPONSOR OU PARTENAIRE</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://www.acdcorporateservices.com/appel-a-la-candidature/inscription" target="_blank" class="if-cta-card">
                        <img src="{{ asset('images/stand.png') }}" alt="" class="if-cta-bg">
                        <div class="if-cta-overlay"></div>
                        <div class="if-cta-content">
                            <div class="if-cta-icon"><i class="fas fa-store-alt"></i></div>
                            <h3 class="if-cta-title">Exposants</h3>
                            <p class="if-cta-subtitle">RÉSERVEZ UN STAND</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="if-section dark">
        <div class="container text-center py-5">
            <h2 class="if-theme-title">Thématiques Abordées</h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="if-theme-subtitle">L'Entrepreneuriat Féminin comme Levier de Transformation Sociale</h2>
                    <p class="if-theme-desc">Découvrez comment les femmes cheffes d'entreprise contribuent activement à la réduction des inégalités et à l'autonomisation des communautés.</p>
                </div>
                <div class="col-md-6">
                    <div class="if-theme-img-wrapper">
                        <img src="{{ asset('images/impact-feminin-bg.jpg') }}" alt="" class="if-theme-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="if-section dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <h2 class="if-theme-subtitle">Leadership Féminin : Audace, Éthique et Durabilité</h2>
                    <div class="acd-section-bar"></div>
                    <p class="if-theme-desc">Explorez les styles de leadership uniques que les femmes mettent en œuvre pour bâtir un monde plus équitable et résilient.</p>
                </div>
                <div class="col-md-6 order-md-1">
                    <div class="if-theme-img-wrapper">
                        <img src="{{ asset('images/impact-feminin-bg.jpg') }}" alt="" class="if-theme-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="if-section">
        <div class="container text-center py-5">
            <h2 class="if-theme-title">Programme Officiel</h2>
            <div class="acd-section-bar mx-auto"></div>
        </div>
        <div class="if-timeline">
            <div class="if-timeline-item left">
                <div class="if-timeline-content">
                    <div class="if-timeline-time">19h00 - 19h30</div>
                    <h3 class="if-timeline-title">Accueil & Installation</h3>
                    <p class="if-timeline-desc">Enregistrement et distribution des badges.</p>
                </div>
            </div>
            <div class="if-timeline-item right">
                <div class="if-timeline-content">
                    <div class="if-timeline-time">19h30 - 20h00</div>
                    <h3 class="if-timeline-title">Mot de bienvenue</h3>
                    <p class="if-timeline-desc">Ouverture officielle de la cérémonie.</p>
                </div>
            </div>
            <div class="if-timeline-item left">
                <div class="if-timeline-content">
                    <div class="if-timeline-time">20h00 - 20h30</div>
                    <h3 class="if-timeline-title">Panel</h3>
                    <p class="if-timeline-desc">"L'entrepreneuriat féminin au service de l'impact social".</p>
                    <button class="if-timeline-details-btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelDetails" aria-expanded="false" aria-controls="panelDetails">Voir plus</button>
                    <div class="collapse mt-2 if-timeline-details" id="panelDetails">
                        <ul class="mb-1">
                            <li>Témoignages inspirants de femmes qui transforment des vies grâce à leurs activités.</li>
                            <li><strong>Intervenantes :</strong> entrepreneures, représentantes d'ONG, incubateurs.</li>
                            <li><strong>Modératrice :</strong> journaliste ou coach expérimentée.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="if-timeline-item right">
                <div class="if-timeline-content">
                    <div class="if-timeline-time">20h30 - 21h00</div>
                    <h3 class="if-timeline-title">Atelier Interactif</h3>
                    <p class="if-timeline-desc">"Structurer son entreprise à impact".</p>
                    <button class="if-timeline-details-btn" type="button" data-bs-toggle="collapse" data-bs-target="#atelierDetails" aria-expanded="false" aria-controls="atelierDetails">Voir plus</button>
                    <div class="collapse mt-2 if-timeline-details" id="atelierDetails">
                        <ul class="mb-1">
                            <li>Session pratique sur les modèles économiques durables et les indicateurs d'impact.</li>
                            <li><strong>Animé par :</strong> un consultant ou expert en entrepreneuriat social.</li>
                            <li><strong>Support fourni :</strong> mini canevas d'impact.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="if-timeline-item left">
                <div class="if-timeline-content">
                    <div class="if-timeline-time">21h00 - 21h40</div>
                    <h3 class="if-timeline-title">Remise des Prix</h3>
                    <p class="if-timeline-desc">Cérémonie de remise des prix d'Impact Féminin.</p>
                    <button class="if-timeline-details-btn" type="button" data-bs-toggle="collapse" data-bs-target="#prixDetails" aria-expanded="false" aria-controls="prixDetails">Voir plus</button>
                    <div class="collapse mt-2 if-timeline-details" id="prixDetails">
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
            <div class="if-timeline-item right">
                <div class="if-timeline-content">
                    <div class="if-timeline-time">21h40 - 22h30</div>
                    <h3 class="if-timeline-title">Cocktail de Clôture</h3>
                    <p class="if-timeline-desc">Moment privilégié pour les échanges, le networking, les photos et plus encore.</p>
                    <button class="if-timeline-details-btn" type="button" data-bs-toggle="collapse" data-bs-target="#cocktailDetails" aria-expanded="false" aria-controls="cocktailDetails">Voir plus</button>
                    <div class="collapse mt-2 if-timeline-details" id="cocktailDetails">
                        <ul class="mb-1">
                            <li>Inclut également des interviews presse.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="if-section dark">
        <div class="container text-center py-5">
            <h2 class="if-theme-title">Panélistes & Intervenants</h2>
            <div class="acd-section-bar mx-auto"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="if-panelist-card">
                        <div class="if-panelist-img-wrapper">
                            <img src="{{ asset('images/avatar.png') }}" alt="" class="if-panelist-img">
                            <img src="{{ asset('images/cote.png') }}" alt="" class="if-panelist-flag">
                        </div>
                        <h4 class="if-panelist-name">Awa Koné</h4>
                        <p class="if-panelist-title">Fondatrice & CEO</p>
                        <p class="if-panelist-org">Impact Solutions</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="if-panelist-card">
                        <div class="if-panelist-img-wrapper">
                            <img src="{{ asset('images/avatar.png') }}" alt="" class="if-panelist-img">
                            <img src="{{ asset('images/sen.png') }}" alt="" class="if-panelist-flag">
                        </div>
                        <h4 class="if-panelist-name">Fatou Coulibaly</h4>
                        <p class="if-panelist-title">Directrice Générale</p>
                        <p class="if-panelist-org">Femmes Leaders CI</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="if-panelist-card">
                        <div class="if-panelist-img-wrapper">
                            <img src="{{ asset('images/avatar.png') }}" alt="" class="if-panelist-img">
                            <img src="{{ asset('images/nigeria.png') }}" alt="" class="if-panelist-flag">
                        </div>
                        <h4 class="if-panelist-name">Marie Touré</h4>
                        <p class="if-panelist-title">Experte Impact Social</p>
                        <p class="if-panelist-org">Consultante Indépendante</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="if-panelist-card">
                        <div class="if-panelist-img-wrapper">
                            <img src="{{ asset('images/avatar.png') }}" alt="" class="if-panelist-img">
                            <img src="{{ asset('images/gabon.png') }}" alt="" class="if-panelist-flag">
                        </div>
                        <h4 class="if-panelist-name">Aminata Diabaté</h4>
                        <p class="if-panelist-title">Présidente</p>
                        <p class="if-panelist-org">Association Femmes & Leadership</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="if-section">
        <div class="container text-center py-5">
            <h2 class="if-theme-title">Prix d'Impact Féminin</h2>
            <div class="acd-section-bar mx-auto"></div>
            <p class="if-theme-desc mx-auto" style="max-width: 800px;">Mettre en lumière l'audace, la résilience et la vision des femmes qui non seulement bâtissent l'économie, mais génèrent également un impact ESG significatif sur la communauté après la création de leur entreprise, dont la durée d'existence est comprise entre 3 et 10 ans et plus.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="if-prix-card">
                        <div class="if-prix-icon"><i class="fas fa-seedling"></i></div>
                        <h3 class="if-prix-title">Prix Éclosion Féminin</h3>
                        <div class="if-prix-meta">
                            <span class="if-prix-badge">3 à 5 ans</span>
                            <span class="if-prix-badge">2+ employés</span>
                        </div>
                        <p class="if-prix-desc">Ce prix met en lumière les femmes entrepreneures ayant lancé une entreprise jeune et prometteuse.</p>
                        <h4 class="if-prix-criteria-title">Critères valorisés</h4>
                        <ul class="if-prix-criteria">
                            <li>Une croissance régulière depuis la création</li>
                            <li>La première structuration réussie de l'équipe</li>
                            <li>L'établissement de partenariats ou de clients significatifs</li>
                            <li>La capacité à innover ou à se différencier sur le marché</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="if-prix-card">
                        <div class="if-prix-icon"><i class="fas fa-shield-alt"></i></div>
                        <h3 class="if-prix-title">Prix Résilience Féminin</h3>
                        <div class="if-prix-meta">
                            <span class="if-prix-badge">6 à 9 ans</span>
                            <span class="if-prix-badge">4+ employés</span>
                        </div>
                        <p class="if-prix-desc">Ce prix honore les femmes dirigeantes qui ont traversé les étapes critiques du développement et de la consolidation.</p>
                        <h4 class="if-prix-criteria-title">Critères valorisés</h4>
                        <ul class="if-prix-criteria">
                            <li>Une gestion financière et opérationnelle saine</li>
                            <li>Le développement de l'équipe et la structuration interne</li>
                            <li>La capacité à surmonter les crises ou à pivoter avec succès</li>
                            <li>Des impacts positifs mesurables sur le marché ou la communauté</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="if-prix-card">
                        <div class="if-prix-icon"><i class="fas fa-lightbulb"></i></div>
                        <h3 class="if-prix-title">Prix Visionnaire Féminin</h3>
                        <div class="if-prix-meta">
                            <span class="if-prix-badge">10 ans et +</span>
                            <span class="if-prix-badge">6+ employés</span>
                        </div>
                        <p class="if-prix-desc">Ce prix récompense les femmes entrepreneures qui ont bâti une entreprise pérenne, influente et résolument tournée vers l'avenir.</p>
                        <h4 class="if-prix-criteria-title">Critères valorisés</h4>
                        <ul class="if-prix-criteria">
                            <li>La pérennité de l’entreprise sur plus d’une décennie</li>
                            <li>Un leadership reconnu dans le secteur</li>
                            <li>La création d’emplois et une contribution significative à l’économie locale</li>
                            <li>L'engagement avéré dans l’innovation, le développement durable ou le mentorat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--
    <section class="if-section dark">
        <div class="container text-center py-5">
            <h2 class="if-theme-title">Sponsors & Partenaires</h2>
            <div class="acd-section-bar mx-auto"></div>
        </div>
        <div class="if-sponsors-wrapper">
            <div class="if-sponsors-track">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 1" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 2" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 3" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 4" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 5" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 6" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 7" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 8" class="if-sponsor-logo">
                <!-- Doublez les logos pour une boucle transparente -->
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 1" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 2" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 3" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 4" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 5" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 6" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 7" class="if-sponsor-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Sponsor 8" class="if-sponsor-logo">
            </div>
        </div>
    </section>
    --}}


    <!-- GSAP & ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script d'initialisation des animations -->
    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Animation de la section Héros
        gsap.to(".if-hero-title .line", {
            y: 0,
            stagger: 0.1,
            duration: 1,
            ease: "power3.out",
            delay: 0.2
        });

        gsap.from(".if-hero-desc", {
            opacity: 0,
            y: 20,
            duration: 1,
            ease: "power3.out",
            delay: 0.8
        });

        // Animations des sections Thématiques
        document.querySelectorAll(".if-section").forEach(section => {
            const title = section.querySelector(".if-theme-title");
            const desc = section.querySelector(".if-theme-desc");
            const img = section.querySelector(".if-theme-img-wrapper");

            if(title) {
                gsap.from(title, {
                    scrollTrigger: section,
                    opacity: 0,
                    y: 40,
                    duration: 1,
                    ease: "power3.out"
                });
            }

            if(desc) {
                gsap.from(desc, {
                    scrollTrigger: section,
                    opacity: 0,
                    y: 40,
                    duration: 1,
                    delay: 0.2,
                    ease: "power3.out"
                });
            }

            if(img) {
                gsap.from(img, {
                    scrollTrigger: section,
                    opacity: 0,
                    y: 40,
                    duration: 1.2,
                    delay: 0.4,
                    ease: "power3.out"
                });
            }
        });

        // Animation de la timeline verticale
        document.querySelectorAll(".if-timeline-item").forEach(item => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: "top 80%",
                },
                opacity: 0,
                y: 50,
                duration: 1,
                ease: "power3.out"
            });
        });

        // Animation des panélistes
        gsap.from(".if-panelist-card", {
            scrollTrigger: ".if-panelist-card",
            opacity: 0,
            y: 50,
            duration: 1,
            stagger: 0.2,
            ease: "power3.out"
        });

        // Animation des cartes de prix
        gsap.from(".if-prix-card", {
            scrollTrigger: ".if-prix-card",
            opacity: 0,
            y: 50,
            duration: 1,
            stagger: 0.2,
            ease: "power3.out"
        });

        // Animation des cartes d'appel à l'action
        gsap.from(".if-cta-card", {
            scrollTrigger: ".if-cta-card",
            opacity: 0,
            y: 50,
            duration: 1,
            stagger: 0.2,
            ease: "power3.out"
        });

    </script>

</body>

</html>