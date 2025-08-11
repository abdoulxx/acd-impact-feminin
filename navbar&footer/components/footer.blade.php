{{-- 
===========================================
FOOTER COMPONENT - ACD Corporate Services
===========================================
Structure exacte du footer du site principal
Mise à jour avec la structure actuelle en production
===========================================
--}}

<footer class="background-image82">
    <div class="row nopadding">
        
        <div id="triangle-down-center"></div>
        <p class="clearfix margin-bottom8"></p>
        
        <div class="container">
            
            <div class="col-md-7 col-sm-6 col-xs-12 marbo-resp4">
                <h6 class="white caps font-weight7 margin-bottom3">{{ __("footer.menu3.titre") }}</h6>
                <ul class="none valign3 left white opacity3">
                    <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; ANGRE - Soleil 3 - Villa 105 - Abidjan - CI</li>
                    <li><i class="fa fa-phone"></i>&nbsp; +97 15 06 80 56 67 / +225 05 96 79 08 02</li>
                    <li><a href="mailto:prix@acdcorporateservices.com" class="graylink7"><i class="fa fa-envelope"></i>&nbsp; prix@acdcorporateservices.com</a></li>
                    <hr>
                     <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Barcelone - CL FLORIDABLANCA NUM.98 P.EN PTA.2 - ESPAGNE</li>
                    <hr>
                </ul>
            </div><!-- end col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12 marbo-resp4">
                <h6 class="white caps font-weight7 margin-bottom3">{{ __("footer.menu1.titre") }}</h6>
                <ul class="none valign3 left">
                    <li><a href="{{ route('about.index') }}" class="graylink7">{{ __("footer.menu1.titre") }}</a></li>
                    <li><a href="{{ route("mission") }}" class="graylink7">{{ __("footer.menu1.lien1") }}</a></li>
                    <li><a href="{{ route("contact.index") }}" class="graylink7">{{ __("footer.menu1.lien2") }}</a></li>
                    <li><a href="{{ route("laureat.index") }}" class="graylink7">{{ __("footer.menu1.lien3") }}</a></li>
                    <li><a href="{{ route("magazine") }}" class="graylink7">{{ __("footer.menu1.lien4") }}</a></li>
                    <li><a href="{{ route("event") }}" class="graylink7">{{ __("footer.menu1.lien5") }}</a></li>
                </ul>
            </div><!-- end col -->
            
            <div class="col-md-2 col-sm-6 col-xs-12 marbo-resp4">
                <h6 class="white caps font-weight7 margin-bottom3">{{ __("footer.menu2.titre") }}</h6>
                <ul class="none valign3 left">
                    <li><a href="https://web.facebook.com/ACDCORPORATESERVICES/" class="graylink7" target="_blank"><i class="fa fa-facebook iconsize14 margin-right1"></i> Facebook</a></li>
                    <li><a href="https://twitter.com/acd_corporate" class="graylink7" target="_blank"><i class="fa fa-twitter iconsize14 margin-right1"></i> Twitter</a></li>
                    <li><a href=" https://www.instagram.com/acd_corporateservices/" class="graylink7" target="_blank"><i class="fa fa-instagram iconsize14 margin-right1"></i> Instagram</a></li>
                    <li><a href="https://www.linkedin.com/company/76147121/" class="graylink7" target="_blank"><i class="fa fa-linkedin iconsize14 margin-right1"></i> Linkedin</a></li>
                    <li><a href="https://www.youtube.com/@acdcorporateservices6635" class="graylink7" target="_blank"><i class="fa fa-youtube iconsize14 margin-right1"></i> Youtube</a></li>
                </ul>
            </div><!-- end col -->
            
           
            
            <p class="clearfix margin-bottom6"></p>
            
            <div class="padding-top3 border-top-opacity2">
                <img src="{{ asset("assets/images/logo-icon-light.png") }}" alt="" class="left opacity4" /><p class="sfont white opacity2 right">Copyright © {{ date('Y') }} <a href="" class="graylink7">ACD CORPORATE SERVICES</a> | {{ __("footer.copyright.titre") }}.</p>
            </div>
            
            <p class="clearfix margin-bottom3"></p>
            
        </div>
        
    </div>
</footer><!-- end footer -->


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->
