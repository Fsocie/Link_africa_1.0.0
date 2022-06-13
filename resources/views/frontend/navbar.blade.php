<div class="topbar-wrap" style="background-color:#142c57">
    <div class="container">
      <div class="row" style="background-color:#142c57">
        <div class="col-lg-6 col-md-4">
          <ul class="social_media style_none">
            <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-8">
          <div class="top_right">
            <div class="topbar_phone"><a href="tel:{{ $parametres->telephone1 }}"><i class="fas fa-phone-alt" aria-hidden="true"></i> {{ $parametres->telephone1 }}
              </a></div>
            <div class="topbar_login" style="background-color:orange">




              <div class="dropdown">
                <button class="dropbtn">Compte</button>
                <div class="dropdown-content">
                  <a href="#">Connexion</a>
                  <a href="#">Inscription </a>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Topbar End-->

  <!--Header Start-->
  <div class="header-wrap wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 navbar navbar-expand-lg navbar-light">
          <div class="header_logo"><a href="{{ route('home') }}"><img alt="" src="{{ asset('assets/images/logo.png') }}"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
              class="navbar-toggler-icon"></span> </button>
        </div>
        <div class="col-lg-9">
          <nav class="navbar navbar-expand-lg navbar-light"> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle"
                    aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="#."> Entreprise <span class="caret"><i
                        class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    @foreach ($sousCategorieNavs as $sousCategorieNav)
                      <li><a href="{{ route('entreprise',['sousCategorie_id'=>$sousCategorieNav->id]) }}">{{ $sousCategorieNav->libelle }}</a></li>
                    @endforeach
                    <li><a href="{{ route('allSubCat') }}">Tous les sous-catégories</a></li>
                  </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('professionnel') }}"> Professionnels</a></li>
                
                <li class="nav-item"><a class="nav-link" href="#."> Opportunités <span class="caret"><i
                        class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="{{ route('affaire') }}">Affaire</a></li>
                    {{-- <li><a href="{{ route('emploi') }}">Emploi </a></li> --}}

                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#"> Services<span class="caret"><i
                        class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="#">Comptabilité</a></li>
                    <li><a href="#"> Audit</a></li>
                    <li><a href="#">Sites webs</a></li>
                    <li><a href="#">Call center</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}"> Contacts</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
