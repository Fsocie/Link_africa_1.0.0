@section('title')
    {{ "Annuaire" }}
@endsection
@include('frontend.header')
@include('frontend.navbar')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <div class="video">
    <div class="slider-wrap videoWrp" id="home">
      <div class="hero-image" style="background-image: url({{ asset('assets/images/banner2.jpg') }})">
        <video autoplay muted="" poster="#" id="bgvid" loop>
          <source src="{{ asset('assets/videos/construction-background.mp4') }}" type="video/mp4">
        </video>
      </div>
      <div class="videohover hero-wrapper" >
        <div class="container">
          <div class="sliderTxt video_hoverText">
            <h1 style="font-family:Myriad pro; font-size:22pt">Le premier Annuaire couvrant les 17 pays de l'OHADA </h1>
            <p>Trouvez les meilleurs services & produits aux meilleurs prix en contactant directement les entreprises!
            </p>
            <div id="exTab1" class="container">
              <ul class="nav nav-pills">
                <li> <a href="#1a" class="active" data-toggle="tab">Annuaire</a> </li>
                <li><a href="#2a" data-toggle="tab" style="background-color:#142c57">Annuaire inversé</a> </li>
              </ul>
              <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                  <div class="form-wrap">
                    <form action="{{ route('recherche') }}" method="GET">
                      <div class="row">
                        <div class="col-lg-6 economy">
                          <div class="input-group origin">
                            <input type="text" name=" Origin"
                              placeholder="Recherchez une entreprise, un professionnel ..." class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6 economy">
                          <div class="input-group">
                            {{-- <div class="nice-select form-control wide select_option" tabindex="0" ><button id="test" class="current" > Pays </button>
                              <ul class="list" style="width:100%;overflow-y: scroll; height:200px;">
                                @foreach ($pays as $pay)
                                  <li value="{{ $pay->libelle }}">{{ $pay->libelle }}</li>
                                @endforeach
                              </ul>
                            </div> --}}
                            <select class="form-control" data-live-search="true"  name="pays" id="pays">
                              <option selected>Choisir pays ...</option>
                              @foreach ($pays as $pay)
                                <option value="{{ $pay->libelle }}">{{ $pay->libelle }}</option>
                              @endforeach
                            </select>
                            <script>
                              var select_box = document.querySelector('#pays');
                              dselect(select_box, {
                                search: true
                              });
                            </script>
                          </div>
                        </div>
                        <div class="col-lg-5 economy">
                          <div class="input-group">
                            {{-- <div class="nice-select form-control wide select_option" tabindex="0" ><div
                                class="current" id="test2">Ville</div>
                              <ul class="list" style="width:100%;overflow-y: scroll; height:200px;">
                                @foreach ($villes as $ville)
                                  <li data-value="Bedrooms" class="option">{{ $ville->libelle }}</li>
                                @endforeach
                              </ul>
                            </div> --}}
                            <select class="form-control" data-live-search="true"  name="ville">
                              <option selected>Choisir ville ...</option>
                              @foreach ($villes as $ville)
                                <option value="{{ $ville->libelle }}">{{ $ville->libelle }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-5 economy">
                          <div class="input-group">
                            {{-- <div class="nice-select form-control wide select_option" tabindex="0" ><div
                                class="current" id="test3">secteur d'activité</div>
                              <ul class="list" style="width:100%;overflow-y: scroll; height:200px;">
                                @foreach ($categorie2s as $categorie2)
                                  <li data-value="Property Type"  class="option">{{ $categorie2->libelle }}</li>
                                @endforeach
                              </ul>
                            </div> --}}
                            <select class="form-control" data-live-search="true"  name="secteur">
                              <option selected>Choisir secteur d'activité ...</option>
                              @foreach ($categorie2s as $categorie2)
                                <option value="{{ $categorie2->libelle }}">{{ $categorie2->libelle }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-2 economy">
                          <div class="input-btn">
                            <button class="sbutn" type="submit" id="id_btn"> <i class="fa fa-search" aria-hidden="true"></i> Trouver </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="tab-pane" id="2a">
                  <div class="form-wrap">
                    <form action="{{ route('recherche') }}" method="GET">
                      <div class="row">
                        <div class="col-lg-6 economy">
                          <div class="input-group origin">
                            <input type="text" name=" Origin"
                              placeholder="Entrez le numéro cherché ..." class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-6 economy">
                          <div class="input-group">
                            {{-- <div class="nice-select form-control wide select_option" tabindex="0" ><div id="test" class="current" > Pays </div>
                              <ul class="list" style="width:100%;overflow-y: scroll; height:200px;">
                                @foreach ($pays as $pay)
                                  <li value="{{ ketchup mustard }}">{{ $pay->libelle }}</li>
                                @endforeach
                              </ul>
                            </div> --}}
                            <select class="form-control" data-live-search="true"  name="pays">
                              <option selected>Choisir pays ...</option>
                              @foreach ($pays as $pay)
                                <option value="{{ $pay->libelle }}">{{ $pay->libelle }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-5 economy">
                          <div class="input-group">
                            {{-- <div class="nice-select form-control wide select_option" tabindex="0" ><div
                                class="current" id="test2">Ville</div>
                              <ul class="list" style="width:100%;overflow-y: scroll; height:200px;">
                                @foreach ($villes as $ville)
                                  <li data-value="Bedrooms" class="option">{{ $ville->libelle }}</li>
                                @endforeach
                              </ul>
                            </div> --}}
                            <select class="form-control" data-live-search="true"  name="ville">
                              <option selected>Choisir ville ...</option>
                              @foreach ($villes as $ville)
                                <option value="{{  $ville->libelle }}">{{ $ville->libelle }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-5 economy">
                          <div class="input-group origin">
                            {{-- <div class="nice-select form-control wide select_option" tabindex="0" ><div
                                class="current" id="test3">secteur d'activité</div>
                              <ul class="list" style="width:100%;overflow-y: scroll; height:200px;">
                                @foreach ($categorie2s as $categorie2)
                                  <li data-value="Property Type"  class="option">{{ $categorie2->libelle }}</li>
                                @endforeach
                              </ul>
                            </div> --}}
                            <select class="form-control" data-live-search="true"  name="secteur">
                              <option selected>Choisir secteur d'activité ...</option>
                              @foreach ($categorie2s as $categorie2)
                                <option value="{{ $categorie2->libelle }}">{{ $categorie2->libelle }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-2 economy">
                          <div class="input-btn">
                            <button class="sbutn" type="submit" id="id_btn"> <i class="fa fa-search" aria-hidden="true"></i> Trouver </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
  <section class="popular_wrap wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-md-6" >
          <div class="row">
            <h5 style="color:#003366">SECTEURS D'ACTIVITES</h5>
          </div>
                    
          <div class="container"> 
            <div class="row">
              @foreach ($categories as $categorie)
                <div class="grid-cell-category flex w-1/2 mm:w-1/3 t:w-1/4 ls:w-1/3 p-1 ls:p-4 relative">
                  <div
                    class="bg-brand-yellow hover:bg-brand-yellowDark flex flex-col items-center justify-center w-full rounded-lg p-6 ls:p-8">
                      <i class="text-46 ls:text-55 text-black mb-3 ls:mb-4 tnp tnp-communication"></i>
                      <a href="{{ route('subCat',['categorie_id'=>$categorie->id]) }}" class="stretched-link text-center text-11 ls:text-14 text-black hover:text-black no-underline hover:no-underline">
                        <p>{{$categorie->libelle}}</p>
                      </a>
                  </div>
                </div>
              @endforeach
            </div>
        </div>
          <br />
          <p><a href="{{ route('allCat') }}">Tous les secteurs d'activités  </a></p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <h5 style="color:#003366">Pub</h5>
          </div>
          <br />
          <div class="row">
            <div class="col-md-9 mt_md">
              <div class="popular_img position-relative"> <img alt="" src="{{ asset('assets/images/commerce.jpg') }}">
                <div class="popular_img_text"><a href="#">Commerce</a></div>
              </div>
              <div class="popular_img position-relative mt"> <img alt="" src="{{ asset('assets/images/education.jpg') }}">
                <div class="popular_img_text"><a href="#">Education</a></div>
              </div>
            </div>
          </div>
          
        </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container" style="height: 200px">
    <div class="buy-wrap wow fadeInUp" style="height: 200px">
      <div class="container" >
        <div class="title">
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class=" property_rent wow fadeInUp">
      <div class="container">
        <div class="title">
          <h1 style="color:#003366">ILS NOUS ONT REJOINT</h1>
        </div>
        
        <div class="container">
          <div class="carousel-gallery">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                @foreach ($rejoins as $rejoin)
                <div class="swiper-slide">
                  <a href="#" data-fancybox="gallery">
                    <div class="image"
                      style="background-image: url({{ asset('assets/images/sanlam.jpg') }}); border: solid 2px; border-color:blue; border-radius:3px">
                      <div class="overlay">
                        <em class="mdi mdi-magnify-plus"></em>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>

  <div class="title">
    <h1 style="color:#003366">MINI-SPOT</h1>
  </div>

  <section class="popular_wrap wow fadeInUp">
    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <div class="popular_img position-relative">
            <video autoplay muted="" class="popular_img position-relative" poster="#" id="bgvid" loop>
              <source src="{{ asset('assets/videos/spotmoov.mp4') }}" type="video/mp4">
            </video>
            <div class="popular_img_text"><a href="#">Tout découvrir</a></div>
          </div>
        </div>
        <div class="col-md-6 mt_md">
          <div class="popular_img position-relative">
            <video autoplay muted="" "	poster=" #" id="bgvid" loop>
              <source src="{{ asset('assets/videos/spotmoov.mp4') }}" type="video/mp4">
            </video>

            <div class="popular_img_text"><a href="#">Voir</a></div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <div class="container">
    <div class="title">
      <br />
      <h3 style="color:#003366">LE REPORTAGE DE LA SEMAINE </h3>
    </div>

    <div class="buy-wrap wow fadeInUp">
      <iframe width="90%" height="300px" src="https://www.youtube.com/embed/zAKQQpbsK1w" title="YouTube video player"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
  
    </div>
  </div>
    
  @if ($entrepriseHonneur->count() > 0)
    <div class="property-wrap wow fadeInUp">
      <div class="container">
        <div class="title">
          <br />
          <h3 style="color:#003366">LES ENTREPRISES A L'HONNEUR CE MOIS </h3>
        </div>
        <ul class="row">
          @foreach ($entrepriseHome as $entrepriseHomes)
            @if ($entrepriseHomes->honneur == 1)
              <li class="col-lg-4">
                <div class="property_box wow fadeInUp">
                  <div class="propertyImg"><img alt="" src="{{ asset('assets/images/sanlam.jpg') }}"></div>
                  <h3><a href="#">{{ $entrepriseHomes->nom }}</a></h3>            
                  <div class="propert_info">
                    {{ $entrepriseHomes->description }}
                  </div>
                  <div class="rent_info">
                    <div class="apart"><a href="{{ route('profil-entreprise',['entreprise_id'=>$entrepriseHomes->id]) }}">Découvrir</a> </div>
                    <div class="sale" style="background-color:#003366"><a href="tel:{{ $entrepriseHomes->telephone }}">Contacter</a> </div>
                  </div>
                </div>
              </li>
            @endif
          @endforeach
        </ul>
      </div>
    </div>
  @endif

  <div class="container" style="height: 200px">
    <div class="buy-wrap wow fadeInUp" style="height: 200px">
      <div class="container">
        <div class="title">
        </div>
      </div>
    </div>
  </div>
  
  <section class="popular_wrap wow fadeInUp">
    <div class="container">
      <h1>publireportage</h1>
      <span></span>
      <div class="row">
        <div class="col-md-8">
          <div class="popular_img position-relative"> <img alt="" src="{{ asset('assets/images/moov.jpg') }}">
            <div class="popular_img_text"><a href="#">Téléphonie</a></div>
          </div>
        </div>
        <div class="col-md-4 mt_md">
          <div class="popular_img position-relative"> <img alt="" src="{{ asset('assets/images/commerce.jpg') }}">
            <div class="popular_img_text"><a href="#">Commerce</a></div>
          </div>
          <div class="popular_img position-relative mt"> <img alt="" src="{{ asset('assets/images/education.jpg') }}">
            <div class="popular_img_text"><a href="#">Education</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="popular_img position-relative mt"> <img alt="" src="{{ asset('assets/images/medecine.jpg') }}">
            <div class="popular_img_text"><a href="#">Médecine</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="popular_img position-relative mt"> <img alt="" src="{{ asset('assets/images/alimentation.jpg') }}">
            <div class="popular_img_text"><a href="#">Alimentation</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="popular_img position-relative mt"> <img alt="" src="{{ asset('assets/images/commerce.jpg') }}">
            <div class="popular_img_text"><a href="#">Divers</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="containere" style="position:relative; top:-50px">
    <div class="title">
      <h3 style="color:white">TOUR DE GARDE</h1>
    </div>

    <div class="carousele">
      <div class="carousel__face"><span>This is something</span></div>
      <div class="carousel__face"><span>Very special</span></div>
      <div class="carousel__face"><span>Special is the key</span></div>
      <div class="carousel__face"><span>For you</span></div>
      <div class="carousel__face"><span>Just give it</span></div>
      <div class="carousel__face"><span>A try</span></div>
      <div class="carousel__face"><span>And see</span></div>
      <div class="carousel__face"><span>How IT Works</span></div>
      <div class="carousel__face"><span>Woow</span></div>
    </div>
  </div>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

  @if ($entrepriseElus->count() > 0)
    <div class="container">
      <div class="property-wrap property_rent wow fadeInUp">
        <div class="container">
          <div class="title">
            <h1>ELUES <span>Meilleurs services clients</span></h1>
          </div>
          <ul class="row">
            @foreach ($entrepriseHome as $entrepriseHomes)
              @if ($entrepriseHomes->elus == 1)
                <li class="col-lg-4">
                  <div class="property_box wow fadeInUp">
                    <div class="propertyImg"><img alt="" src="{{ asset('assets/images/sanlam.jpg') }}"></div>
                    <h3><a href="#">{{ $entrepriseHomes->nom }}</a></h3>            
                    <div class="propert_info">
                      {{ $entrepriseHomes->description }}
                    </div>
                    <div class="rent_info">
                      <div class="apart"><a href="{{ route('profil-entreprise',['entreprise_id'=>$entrepriseHomes->id]) }}">Découvrir</a> </div>
                      <div class="sale" style="background-color:#003366"><a href="tel:{{ $entrepriseHomes->telephone }}">Contacter</a> </div>
                    </div>
                  </div>
                </li>
              @endif
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  @endif

  <br />

  <div class="container">
    <section class="perfect_home_wrap wow fadeInUp">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="perfect_text">
              <h1>Les meilleurs hôtels du pays </h1>
              <span></span>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="readmore"><a href="#">Visiter</a></div>
          </div>
        </div>
      </div>
    </section>

  <section class="our_team_wrap wow fadeInUp">
    <div class="container">
      <h1>Magazines</h1>
      <span></span>
      <div class="row">
        <div class="col-lg-4">
          <div class="team_wrp">
            <div class="team_member  wow fadeInUp">
              <div class="team_img"><img alt="" src="{{ asset('assets/images/mag1.jpg') }}"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>Découvrir</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team_wrp">
            <div class="team_member wow fadeInUp">
              <div class="team_img"><img alt="" src="{{ asset('assets/images/mag2.jpg') }}"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>Découvrir</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team_wrp">
            <div class="team_member wow fadeInUp">
              <div class="team_img"><img alt="" src="{{ asset('assets/images/mag3.jpg') }}"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>Découvrir</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="{{ asset('js/app.js') }}"></script>
@include('frontend.footer')
