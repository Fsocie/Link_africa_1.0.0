<div class="topbar-wrap" style="background-color:#142c57">
    <div class="container">
      {{-- <div class="row" style="background-color:#142c57">
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
      </div> --}}
    </div>
  </div>

  <!--Topbar End-->

  <!--Header Start-->
  <div class="header-wrap wow fadeInUp" style="background-color:#142c57">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 navbar navbar-expand-lg navbar-light">
          <div class="header_logo"><a href="{{ route('home') }}"><img alt="" src="{{ asset('assets/images/logo.png') }}" style="width: ; height: "></a></div>
          
          {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
              class="navbar-toggler-icon"></span> </button> --}}
        </div>
        <div class="col-lg-9">
          <nav class="navbar navbar-expand-lg navbar-light"> 
            <a href="#modal-countries" data-toggle="modal"
              class="text-white hover:text-white focus:text-white dropdown-open:bg-white dropdown-open:text-link text-12 px-6 py-8 flex items-center h-full hover:bg-brand-darkBlue no-underline hover:no-underline focus:no-underline cursor-pointer">
              <div>
                  <img class="w-30px h-auto mr-3"
                      src="{{ asset('assets/images/64/tg.png') }}" alt="" togo="">
                  <span>Togo</span>
                  <b class="caret"></b>
              </div>
          </a>
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
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Nous Contacter</a></li>
                
              <li class="nav-item">
                <button data-toggle="dropdown" class=" border-0 appearance-none py-0 px-5 bg-transparent text-white group dropdown-open:bg-white dropdown-open:text-link flex items-center justify-center text-36" aria-expanded="false">
                    <i class="fas fa-users"></i>
                </button>
                  <div
                    class="dropdown-menu p-0 m-0 border border-solid border-t-0 border-gray-500 rounded-t-none rounded-b-lg overflow-hidden bg-white shadow-dropdown min-w-300px left-auto -right-1px ">
                    <div class="p-12 w-411px">
                      <h4>Se connecter</h4>
                      <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                          <a href="#">Mot de passe oublié</a>
                        </div>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                      </form>
                    </div>
                    <div class="p-12 bg-gray-200">
                        <div class="flex flex-col text-center">
                            <strong class="mb-2">Nouveau sur Showroomafrica ?</strong>
                            <a class="text-link underline hover:no-underline focus:underline" href="#">S'inscrire
                                gratuitement</a>
                        </div>
                    </div>
                </div>
              </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
