
<footer class="modern-footer-acd">
    <!-- Triangle décoratif -->
    <div class="footer-triangle"></div>
    
    <div class="container">
        <div class="footer-content">
            <div class="row g-4">
                <!-- Section Contact -->
                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-title">Contactez-nous</h6>
                    <ul class="contact-list">
                        <li>
                            <i class="fa fa-map-marker-alt"></i>
                            <span>ANGRE - Soleil 3 - Villa 105<br>Abidjan - Côte d'Ivoire</span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i>
                            <span>+971 50 680 56 67<br>+225 05 96 79 08 02</span>
                        </li>
                        <li>
                            <a href="mailto:prix@acdcorporateservices.com" class="footer-link">
                                <i class="fa fa-envelope"></i>
                                <span>prix@acdcorporateservices.com</span>
                            </a>
                        </li>
                        <li class="address-separator">
                            <i class="fa fa-map-marker-alt"></i>
                            <span>Barcelone - CL FLORIDABLANCA NUM.98<br>P.EN PTA.2 - Espagne</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Section Navigation -->
                <div class="col-lg-4 col-md-6">
                    <h6 class="footer-title">Navigation</h6>
                    <ul class="footer-menu">
                        <li><a href="{{ route('rencontre-2026') }}" class="footer-link">Accueil</a></li>
                        <li><a href="#programme" class="footer-link">Programme 2026</a></li>
                        <li><a href="#objectifs" class="footer-link">Objectifs</a></li>
                        <li><a href="#reservation" class="footer-link">Tarifs</a></li>
                        <li><a href="#galerie" class="footer-link">Galerie</a></li>
                        <li><a href="https://acdcorporateservices.com/" target="_blank" class="footer-link">ACD Corporate Services</a></li>
                    </ul>
                </div>
                
                <!-- Section Réseaux Sociaux -->
                <div class="col-lg-4 col-md-12">
                    <h6 class="footer-title">Suivez-nous</h6>
                    <ul class="social-links">
                        <li>
                            <a href="https://web.facebook.com/ACDCORPORATESERVICES/" class="footer-link" target="_blank" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                                <span>Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/acd_corporate" class="footer-link" target="_blank" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                                <span>Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/acd_corporateservices/" class="footer-link" target="_blank" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                                <span>Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/76147121/" class="footer-link" target="_blank" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                                <span>LinkedIn</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@acdcorporateservices6635" class="footer-link" target="_blank" aria-label="YouTube">
                                <i class="fab fa-youtube"></i>
                                <span>YouTube</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Section Copyright -->
        <div class="footer-bottom">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <img src="{{ asset('images-pro/logo.png') }}" alt="Rencontre 2026 Logo" class="footer-logo-img me-3">
                </div>
                <div class="copyright-text">
                    <p>
                        Copyright © {{ date('Y') }} 
                        <a href="https://acdcorporateservices.com/" class="footer-link" target="_blank">ACD CORPORATE SERVICES</a> 
                        | Tous droits réservés.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
