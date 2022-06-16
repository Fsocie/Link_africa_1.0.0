@section('title')
{{ "Annuaire" }}
@endsection
@include('frontend.header')
@include('frontend.navbar')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
  body{
    background: white !important
  }
</style>
<div class="slider-wrap videoWrp" id="home">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/banner.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            @foreach ($slider as $sliders)
                <div class="carousel-item">
                    <img src="{{ asset('assets/images') }}/{{ $sliders->image }}" class="d-block w-100" alt="Slide 2">
                </div>
            @endforeach
        </div>
        
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="videohover hero-wrapper">
        <div class="container">
            <div class="sliderTxt video_hoverText">
                <h1 style="font-family:Myriad pro; font-size:20pt">Le premier Annuaire couvrant les 17 pays de
                    l'OHADA </h1>
                <p style="font-size:10pt">Trouvez les meilleurs services & produits aux meilleurs prix en
                    contactant directement les entreprises!
                </p>
                <div id="exTab1" class="container">
                    <ul class="nav nav-pills">
                        <li> <a href="#1a" class="active" data-toggle="tab">Annuaire</a> </li>
                        <li><a href="#2a" data-toggle="tab" style="background-color:#142c57">Annuaire
                                inversé</a> </li>
                    </ul>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="1a">
                            <div class="form-wrap">
                                <form action="{{ route('recherche') }}" method="GET">
                                    <div class="row">
                                        <div class="col-lg-6 economy">
                                            <div class="input-group origin">
                                                <input type="text" name=" Origin"
                                                    placeholder="Recherchez une entreprise, un professionnel ..."
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 economy">
                                            <div class="input-group">
                                                <select class="form-control" name="pays" id="pays">
                                                    <option data-value="Pays" data-display="Pays" class="option selected focus"></option>
                                                    @foreach ($pays as $pay)
                                                    <option data-value="{{ $pay->libelle }}" class="option">{{ $pay->libelle }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 economy">
                                            <div class="input-group">
                                                <select class="form-control" name="ville">
                                                    <option data-value="Ville" data-display="Ville" class="option selected focus"></option>
                                                    @foreach ($villes as $ville)
                                                    <option data-value="{{ $ville->libelle }}" class="option">{{ $ville->libelle }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 economy">
                                            <div class="input-group">
                                                <select class="form-control" name="secteur">
                                                    <option  data-value="Secteur d'activité" data-display="Secteur d'activité" class="option selected focus"></option>
                                                    @foreach ($categorie2s as $categorie2)
                                                    <option data-value="{{ $categorie2->libelle }}" class="option">{{
                                                        $categorie2->libelle
                                                        }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 economy">
                                            <div class="input-btn">
                                                <button class="sbutn" type="submit" id="id_btn"> <i
                                                        class="fa fa-search" aria-hidden="true"></i> Trouver
                                                </button>
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
                                                    placeholder="Entrez le numéro cherché ..."
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 economy">
                                            <div class="input-group">
                                                <select class="form-control" name="pays">
                                                    <option data-value="Pays" data-display="Pays" class="option selected focus"></option>
                                                    @foreach ($pays as $pay)
                                                    <option data-value="{{ $pay->libelle }}" class="option">{{ $pay->libelle }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 economy">
                                            <div class="input-group">
                                                <select class="form-control" name="ville">
                                                    <option data-value="Ville" data-display="Ville" class="option selected focus"></option>
                                                    @foreach ($villes as $ville)
                                                    <option data-value="{{ $ville->libelle }}" class="option">{{ $ville->libelle }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 economy">
                                            <div class="input-group origin">
                                                <select class="form-control" name="secteur">
                                                    <option data-value="Secteur d'activité" data-display="Secteur d'activité" class="option selected focus"></option>
                                                    @foreach ($categorie2s as $categorie2)
                                                    <option data-value="{{ $categorie2->libelle }}" class="option">{{
                                                        $categorie2->libelle
                                                        }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 economy">
                                            <div class="input-btn">
                                                <button class="sbutn" type="submit" id="id_btn"> <i
                                                        class="fa fa-search" aria-hidden="true"></i> Trouver
                                                </button>
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
<br />
<br />
<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{  asset('assets/images/1.jpg') }}" class="d-block w-100" alt="">
            </div>
            @foreach ($pubs as $pub)
            <div class="carousel-item">
                <img src="{{  asset('assets/images') }}/{{ $pub->image }}" class="d-block w-100" alt="">
            </div>
            @endforeach
        </div>
    </div>
</div>
<section class="popular_wrap wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
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
                                <a href="{{ route('subCat',['categorie_id'=>$categorie->id]) }}"
                                    class="stretched-link text-center text-11 ls:text-14 text-black hover:text-black no-underline hover:no-underline">
                                    <p>{{$categorie->libelle}}</p>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <br />
                <p><a href="{{ route('allCat') }}">Tous les secteurs d'activités </a></p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <h5 style="color:#003366">Pub</h5>
                </div>
                <div class="row">
                    <div class="col-md-9 mt_md">
                        <div class="popular_img position-relative"> <img alt=""
                                src="{{ asset('assets/images/commerce.jpg') }}">
                            <div class="popular_img_text"><a href="#">Commerce</a></div>
                        </div>
                        <div class="popular_img position-relative mt"> <img alt=""
                                src="{{ asset('assets/images/education.jpg') }}">
                            <div class="popular_img_text"><a href="#">Education</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{  asset('assets/images/1.jpg') }}" class="d-block w-100" alt="">
            </div>
            @foreach ($pubs as $pub)
            <div class="carousel-item">
                <img src="{{  asset('assets/images') }}/{{ $pub->image }} " class="d-block w-100" alt="">
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="container">
    <div class=" property_rent wow fadeInUp">
        <div class="container">
            <div class="title">
                <h1 style="color:#003366">ILS NOUS ONT REJOINT</h1>
            </div>
            <br />
                <div class="site-section bg-left-half mb-5">
                    <div class="container owl-2-style">
                        <div class="owl-carousel owl-2">
                            @foreach ($rejoins as $rejoin)
                                <div class="media-29101">
                                    @if ($rejoin->photo)
                                        <a href="{{ route('profil-entreprise',['entreprise_id'=>$rejoin->id]) }}"><img
                                            src="{{  asset('assets/images') }}/{{ $rejoin->photo }}" alt="Image" class="img-fluid" style="width: 300px; height: 300px;"></a>
                                        {{-- <h3><a href="{{ route('profil-entreprise',['entreprise_id'=>$rejoin->id]) }}">{{$rejoin->nom}}</a></h3> --}}
                                    @else
                                        <a href="{{ route('profil-entreprise',['entreprise_id'=>$rejoin->id]) }}"><img
                                            src="{{  asset('assets/images/EntrepriseImages/default.png') }}" alt="Image" class="img-fluid" style="width: 300px; height: 300px; "></a>
                                        {{-- <h3><a href="{{ route('profil-entreprise',['entreprise_id'=>$rejoin->id]) }}">{{$rejoin->nom}}</a></h3> --}}
                                    @endif
                                </div>
                            @endforeach
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
            @foreach ($minispots as $minispot)
            <div class="col-md-6">
                <div class="popular_img position-relative">
                    <video autoplay muted="" class="popular_img position-relative" poster="#" id="bgvid" loop>
                        <source src="{{ asset('assets/videos') }}/{{$minispot->video}}" type="video/mp4">
                    </video>
                    {{-- <div class="popular_img_text"><a href="#">Tout découvrir</a></div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="container">
    <div class="title">
        <br />
        <h3 style="color:#003366">LE REPORTAGE DE LA SEMAINE </h3>
    </div>
    @foreach ($reportagedelasemaine as $reportagedelasemaines)
    <div class="buy-wrap wow fadeInUp">
        <iframe width="90%" height="300px" src="{{ $reportagedelasemaines->libelle }}" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>

    </div>
    @endforeach
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
                    @if ($entrepriseHomes->photo)
                    <div class="propertyImg"><img alt="" src="{{  asset('assets/images') }}/{{ $entrepriseHomes->photo }}"></div>
                    @else
                    <div class="propertyImg"><img alt="" src="{{ asset('default.png') }}"></div>
                    @endif
                    <h3><a href="{{ route('profil-entreprise',['entreprise_id'=>$entrepriseHomes->id]) }}">{{
                            $entrepriseHomes->nom }}</a></h3>
                    <div class="propert_info">
                        {{ $entrepriseHomes->description_entreprise }}
                    </div>
                    <div class="rent_info">
                        <div class="apart"><a
                                href="{{ route('profil-entreprise',['entreprise_id'=>$entrepriseHomes->id]) }}">Découvrir</a>
                        </div>
                        <div class="sale" style="background-color:#003366"><a
                                href="tel:{{ $entrepriseHomes->telephone }}">Contacter</a> </div>
                    </div>
                </div>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{  asset('assets/images/1.jpg') }}" class="d-block w-100" alt="">
            </div>
            @foreach ($pubs as $pub)
            <div class="carousel-item">
                <img src="{{  asset('assets/images') }}/{{ $pub->image }}" class="d-block w-100" alt="">
            </div>
            @endforeach
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
                <div class="popular_img position-relative mt"> <img alt=""
                        src="{{ asset('assets/images/education.jpg') }}">
                    <div class="popular_img_text"><a href="#">Education</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="popular_img position-relative mt"> <img alt=""
                        src="{{ asset('assets/images/medecine.jpg') }}">
                    <div class="popular_img_text"><a href="#">Médecine</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="popular_img position-relative mt"> <img alt=""
                        src="{{ asset('assets/images/alimentation.jpg') }}">
                    <div class="popular_img_text"><a href="#">Alimentation</a></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="popular_img position-relative mt"> <img alt=""
                        src="{{ asset('assets/images/commerce.jpg') }}">
                    <div class="popular_img_text"><a href="#">Divers</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="containere" style="position:relative; top:-50px">
    <div class="title">
        <h3 style="">SITES TOURISTIQUES DU TOGO</h1>
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
                        @if ($entrepriseHomes->photo)
                        <div class="propertyImg"><img alt="" src="{{  asset('assets/images') }}/{{ $entrepriseHomes->photo }}"></div>
                        @else
                        <div class="propertyImg"><img alt="" src="{{ asset('default.png') }}"></div>
                        @endif
                        <h3><a href="{{ route('profil-entreprise',['entreprise_id'=>$entrepriseHomes->id]) }}">{{
                                $entrepriseHomes->nom }}</a></h3>
                        <div class="propert_info">
                            {{ $entrepriseHomes->description_entreprise }}
                        </div>
                        <div class="rent_info">
                            <div class="apart"><a
                                    href="{{ route('profil-entreprise',['entreprise_id'=>$entrepriseHomes->id]) }}">Découvrir</a>
                            </div>
                            <div class="sale" style="background-color:#003366"><a
                                    href="tel:{{ $entrepriseHomes->telephone }}">Contacter</a> </div>
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
</div>

<div class="container">
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
</div>
<script src="{{ asset('js/app.js') }}"></script>
@include('frontend.footer')