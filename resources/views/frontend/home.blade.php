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

    <!-- autocompletion-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Fin autocompletion-->
    
<div class="slider-wrap videoWrp" id="home">
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
                        <li><a href="#2a" data-toggle="tab" style="background-color:#007bff">Annuaire
                                inversé</a> </li>
                    </ul>
                    <div class="clearfix tab-content">
                        <div class="tab-pane active" id="1a">
                            <div class="form-wrap">
                                <form action="{{ route('recherche') }}" method="GET">
                                    <div class="row">
                                        <div class="col-lg-6 economy">
                                            <div class="input-group origin">
                                                <input type="text" name=" Origin" id="origine"
                                                    placeholder="Recherchez une entreprise, un professionnel ..."
                                                    class="typeahead form-control">
                                            </div>
                                            <div id="product_list" style=""></div>
                                        </div>
                                            <script type="text/javascript">
                                                var path = "{{ route('autocomplete') }}";
                                                $( "#origine" ).autocomplete({
                                                    source: function( request, response ) {
                                                        $.ajax({
                                                        url: path,
                                                        type: 'GET',
                                                        dataType: "json",
                                                        data: {
                                                            origine: request.term
                                                        },
                                                        success: function( data ) {
                                                            response( data );
                                                        }
                                                        });
                                                    },
                                                    select: function (event, ui) {
                                                        $('#origine').val(ui.item.label);
                                                        console.log(ui.item); 
                                                        return false;
                                                    }
                                                    });
                                            </script>
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
                                                <button class="sbutn" type="submit" id="id_btn" style="background-color: #007bff; color: white"> <i
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
    
    <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active float-left w-full">
                <img src="" class="block w-full" />
            </div>
            @foreach ($pubs as $pub)
            <div class="carousel-item float-left w-full">
                <img src="{{  asset('assets/images') }}/{{ $pub->image }}" class="block w-full" />
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
                        
                        <div class="grid grid-custom gap-2 justify-items-stretch sm:grid-cols-3 md:grid-cols-3">
                            @foreach ($categories as $categorie)
                            <div class="px-10 py-10 text-center bg-[#1da1f2] shadow-md rounded-2xl">
                                <a href="{{ route('subCat',['categorie_id'=>$categorie->id]) }}">
                                    <p class="mt-3 text-white font-medium">{{$categorie->libelle}}</p>
                                </a>
                            </div>
                            @endforeach
                        </div>
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


<div class="title">
    <h1 style="color:#003366">ILS NOUS ONT REJOINT</h1>
</div>
<div class="container">
    <div class=" property_rent wow fadeInUp">
        <div class="container">
            <style>
                @media (max-width: 767px) {
                    .carousel-inner.pro .carousel-item.pro>div {
                        display: none
                    }

                    .carousel-inner.pro .carousel-item.pro>div:first-child {
                        display: block
                    }
                }

                .carousel-inner.pro .carousel-item.active.pro,
                .carousel-inner.pro .carousel-item-next,
                .carousel-inner.pro .carousel-item-prev {
                    display: flex
                }

                @media (min-width: 768px) {

                    .carousel-inner.pro .carousel-item-end.active,
                    .carousel-inner.pro .carousel-item-next {
                        transform: translateX(25%)
                    }

                    .carousel-inner.pro .carousel-item-start.active,
                    .carousel-inner.pro .carousel-item-prev {
                        transform: translateX(-25%)
                    }
                }

                .carousel-inner.pro .carousel-item-end,
                .carousel-inner.pro .carousel-item-start {
                    transform: translateX(0)
                }
            </style>
            <div class="container text-center my-3">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide pro" data-bs-ride="carousel">
                        <br />
                        <div class="carousel-inner pro" role="listbox">
                            <div class="carousel-item active pro">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img"> <img src="{{  asset('default.png') }}" class="img-fluid"
                                                style="width: 300px; height: 200px;"> </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($rejoins as $rejoin)
                            <div class="carousel-item pro">
                                <div class="col-md-3">
                                    <div class="card">
                                        @if ($rejoin->photo)
                                        <div class="card-img"> <img
                                                src="https://admin.showroomafrica.com/assets/{{ $rejoin->photo }}"
                                                class="img-fluid" style="width: 300px; height: 200px;"> </div>
                                        @else
                                        <div class="card-img"> <img src="{{  asset('default.png') }}" class="img-fluid"
                                                style="width: 300px; height: 200px;"> </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel"
                            role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon"
                                aria-hidden="true"></span> </a> <a class="carousel-control-next bg-transparent w-aut"
                            href="#recipeCarousel" role="button" data-bs-slide="next"> <span
                                class="carousel-control-next-icon" aria-hidden="true"></span> </a>
                    </div>
                </div>
            </div>

            <script>
                let items = document.querySelectorAll('.carousel.pro .carousel-item.pro')

                items.forEach((el) => {
                    const minPerSlide = 4
                    let next = el.nextElementSibling
                    for (var i = 1; i < minPerSlide; i++) {
                        if (!next) {
                            // wrap carousel by using first child
                            next = items[0]
                        }
                        let cloneChild = next.cloneNode(true)
                        el.appendChild(cloneChild.children[0])
                        next = next.nextElementSibling
                    }
                })
            </script>
        </div>
        <br />
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
                    <br />
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


<div class="property-wrap wow fadeInUp">
    <div class="container">
        <div class="title">
            <br />
            <h3 style="color:#003366">LES ENTREPRISES A L'HONNEUR CE MOIS </h3>
        </div>
        <ul class="row">
            @foreach ($entrepriseHonneur as $entrepriseHonneurs)
            <li class="col-lg-4">
                <div class="property_box wow fadeInUp">
                    @if ($entrepriseHonneurs->photo)
                    <div class="propertyImg"><img alt="" src="{{  asset('assets/images') }}/{{ $entrepriseHonneurs->photo }}"
                        style="width: 300px; height: 300px;"></div>
                    @else
                    <div class="propertyImg"><img alt="" src="{{ asset('default.png') }}"
                        style="width: 300px; height: 300px;"></div>
                    @endif
                    <div class="rent_info">
                        <div class="apart"><a
                                href="{{ route('profil-entreprise',['entreprise_id'=>$entrepriseHonneurs->id]) }}">Découvrir</a>
                        </div>
                        <div class="sale" style="background-color:#003366"><a
                                href="tel:{{ $entrepriseHonneurs->telephone }}">Contacter</a> </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

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


<div class="container">
    <div class="property-wrap property_rent wow fadeInUp">
        <div class="container">
            <div class="title">
                <h1>ELUES <span>Meilleurs services clients</span></h1>
            </div>
            <ul class="row">
                @foreach ($entrepriseElu as $entrepriseElus)
                <li class="col-lg-4">
                    <div class="property_box wow fadeInUp" style="border-radius: 1em">
                        @if ($entrepriseElus->photo)
                        <div class="propertyImg"><img alt="" src="{{  asset('assets/images') }}/{{ $entrepriseElus->photo }}"
                            style="width: 300px; height: 300px; border-radius: 1em" ></div>
                        @else
                        <div class="propertyImg"><img alt="" src="{{ asset('default.png') }}"
                            style="width: 300px; height: 300px;"></div>
                        @endif
                        
                        <div class="rent_info">
                            <div class="apart"><a
                                    href="{{ route('profil-entreprise',['entreprise_id'=>$entrepriseElus->id]) }}">Découvrir</a>
                            </div>
                            <div class="sale" style="background-color:#003366"><a
                                    href="tel:{{ $entrepriseElus->telephone }}">Contacter</a> </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<br />

<div class="container">
    <!-- component -->
        <h1 class="text-lg font-semibold tracking-wider">Le mois dernier</h1>
        <div class="flex flex-row justify-between w-full h-auto py-4 bg-gray-100 divide-x divide-gray-400 rounded-lg divide-solid">
            
            <div class="relative flex flex-col flex-1 gap-2 px-4">
                <label class="text-base font-semibold tracking-wider text-gray-800">Visiteur Total</label>
                <label class="text-4xl font-bold text-green-800">14K</label>
                <div class="absolute bottom-0 p-2 text-xs font-semibold text-gray-100 bg-red-400 rounded-md right-4">
                    - 5%
                </div>
            </div>
            <div class="relative flex flex-col flex-1 gap-2 px-4">
                <label class="text-base font-semibold tracking-wider text-gray-800">Clic total</label>
                <label class="text-4xl font-bold text-green-800">6K</label>
                <div class="absolute bottom-0 p-2 text-xs font-semibold text-gray-100 bg-green-400 rounded-md right-4">
                    + 10%
                </div>
            </div>
            <div class="relative flex flex-col flex-1 gap-2 px-4">
                <label class="text-base font-semibold tracking-wider text-gray-800">Entreprise</label>
                <label class="text-4xl font-bold text-green-800">$1.2M</label>
                <div class="absolute bottom-0 p-2 text-xs font-semibold text-gray-100 bg-green-400 rounded-md right-4">
                    + 5%
                </div>
            </div>
    </div>

</div>

<div class="container">
    <section class="our_team_wrap wow fadeInUp">
        <div class="container">
            <h1>Magazines</h1>
            <span></span>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team_wrp">
                        <div class="team_member wow fadeInUp">
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