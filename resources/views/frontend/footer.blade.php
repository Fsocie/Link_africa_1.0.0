<footer class="footer bg-style wow fadeInUp">
    <div class="container">
      <div class="footer-upper">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="footer-widget about-widget"> <a href="{{ route('home') }}"> <img alt="" src="{{ asset('assets/images/logo.png') }}"> </a>
              <p></p>
              <div class="readmore"><a href="{{ route('contact') }}">Contacter </a></div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3">
            <div class="footer-widget quick-links">
              <h3 class="title">Liens rapides</h3>
              <ul>
                <li><a href="{{ route('home') }}"> Accueil</a> </li>
                <li><a href="#."> Professionnels</a> </li>
                <li><a href="#."> Entreprises</a> </li>
                <li><a href="#."> Services</a> </li>
                <li><a href="{{ route('contact') }}"> Contact </a> </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="footer-widget contact">
              <h3 class="title">Professionnels</h3>
              <ul class="property_sec">
                <li>
                  <div class="rec_proprty">
                    <div class="propertyImg"><img alt="" src="{{ asset('assets/images/property_small01.jpg') }}"></div>
                    <div class="property_info">
                      <h4><a href="#">Agence Accra</a></h4>
                      <p> </p>
                      <div class="priceWrp"> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="rec_proprty">
                    <div class="propertyImg"><img alt="" src="{{ asset('assets/images/property_small02.jpg') }}"></div>
                    <div class="property_info">
                      <h4><a href="#">Agence Lomé</a></h4>
                      <p> </p>
                      <div class="priceWrp"></div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="footer-widget contact">
              <h3 class="title">Contacts</h3>
              <ul class="footer-adress">
                <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>Afrique , Ghana , Accra</span> </li>
                <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a
                      href="mailto:exemple@exemple.com"> info@pagesjaunesafrique.com </a></span> </li>
                <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:7704282433"> +233
                      0000000000</a></span> </li>
              </ul>
              <div class="social-icons footer_icon">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

  <!-- Owl Carousel -->
  <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>

  <!-- wow js -->
  <script src="{{ asset('assets/js/animate.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
  <script>
    new WOW().init();
  </script>

  <!-- general script file -->
  <script src="{{ asset('assets/js/wow.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="{{ asset('assets/script.js') }}"></script>

  {{-- <script src="{{ asset('assets2/js/jquery-3.2.1.min.js') }}"></script> --}}
  <script src="{{ asset('assets2/js/popper.js') }}"></script>
  <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets2/js/stellar.js') }}"></script>
  <script src="{{ asset('assets2/vendors/lightbox/simpleLightbox.min.js') }}"></script>
  <script src="{{ asset('assets2/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('assets2/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets2/vendors/isotope/isotope-min.js') }}"></script>
  <script src="{{ asset('assets2/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets2/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('assets2/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets2/vendors/counter-up/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('assets2/js/mail-script.js') }}"></script>
        <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="{{ asset('assets2/js/gmaps.min.js') }}"></script>
  <script src="{{ asset('assets2/js/theme.js') }}"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js'></script><script src="./script.js"></script>

  @yield('javascripts')

  </body>
</html>
