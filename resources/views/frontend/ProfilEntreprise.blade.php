@section('title')
{{ "Profile d'entreprise" }}
@endsection
@include('frontend.header')
@include('frontend.navbar')

<link rel="stylesheet" href="{{ asset('assets5/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
    /* .navbar-nav{
    width: 100%;
} */


    @media(min-width:568px) {
        .end {
            margin-left: auto;
        }
    }

    @media(max-width:768px) {
        #post {
            width: 100%;
        }
    }
    @media (max-width: 767px){
        .comment {
            width: 100% !important;
        }
        .comment0 {
            margin-top: -20px !important;
            width: 100% !important;
        }
        .comment1 {
            width: 100% !important;
        }
        .comment2 {
            width: 100% !important;
        }
        .comment3 {
            width: 100% !important;
        }
    }

    @media screen and (max-width: 990px){
        .comment {
            width: 100% !important;
        }
        .comment0 {
            margin-top: -20px !important;
            width: 100% !important;
        }
        .comment1 {
            width: 100% !important;
        }
        .comment2 {
            width: 100% !important;
        }
        .comment3 {
            width: 100% !important;
        }
    }

    @media screen and (max-width: 480px){
        .comment {
            width: 100% !important;
        }
        .comment0 {
            margin-top: -20px !important;
            width: 100% !important;
        }
        .comment1 {
            width: 100% !important;
        }
        .comment2 {
            width: 100% !important;
        }
        .comment3 {
            width: 100% !important;
        }
    }

    #clicked {
        padding-top: 1px;
        padding-bottom: 1px;
        text-align: center;
        width: 100%;
        background-color: #ecb21f;
        border-color: #a88734 #9c7e31 #846a29;
        color: black;
        border-width: 1px;
        border-style: solid;
        border-radius: 1em;
    }

    #profile {
        background-color: unset;

    }

    #post {
        margin: 10px;
        padding: 6px;
        padding-top: 2px;
        padding-bottom: 2px;
        text-align: center;
        background-color: orange;
        border-color: #a88734 #9c7e31 #846a29;
        color: black;
        border-width: 1px;
        border-style: solid;
        border-radius: 13px;
        width: 50%;
    }

    body {
        background: white;
    }

    /* #nav-items li a,#profile{
    text-decoration: none;
    color: rgb(224, 219, 219);
    background-color: black;
} */


    .comment {
        margin-left: 25px;
    }
    .comment0 {
        margin-left: 25px;
    }
    .comment1 {
        margin-left: 25px;
    }
    .comment2 {
        margin-left: 25px;
    }
    .comment3 {
        margin-left: 25px;
    }

    .darker {
        border: 1px solid #ecb21f;
        background-color: black;
        float: right;
        border-radius: 1em;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px;
    }

    .comment0 {
        border: 1px solid #073465;
        border-radius: 1em;
        width: 1200px;
        height: 250px;
        border-color: #073465
    }

    .comment {
        border: 1px solid #EEF2F6;
        background-color: white;
        float: left;
        border-radius: 1em;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px;
        width: 650px;
        height: 200px auto;
        border-width: 1px 1px 1px 12px;
        border-color: #073465
    }

    .comment1 {
        border: 1px solid #073465;
        background-color: white;
        border-radius: 1em;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px;
        width: 1200px;
        height: 250px auto;
        border-width: 1px 1px 1px 12px;
        border-color: #073465
    }

    .comment h4,
    .comment span,
    .darker h4,
    .darker span,
    .comment p {
        display: inline;
    }


    .comment p,
    .darker p,
    .darker span {
        color: rgb(0, 0, 10);
        ;
    }

    .comment i,
    .comment span,
    a {
        color: #073465
    }

    h1,
    h4 {
        color: black;
        font-weight: bold;
    }

    label,
    p {
        color: rgb(212, 208, 208);
    }

    #align-form {
        margin-top: 20px;
    }

    .form-group p a {
        color: white;
    }

    #checkbx {
        background-color: black;
    }

    #darker img {
        margin-right: 15px;
        position: static;
    }

    .form-group input,
    .form-group textarea {
        background-color: black;
        border: 1px solid #073465;
        border-radius: 12px;
    }

    form {
        border: 1px solid #073465;
        background-color: #073465;
        border-radius: 1em;
        padding: 20px;
    }
</style>
<!-- Main Body -->
<section class="popular_wrap wow fadeInUp">
    <div class="container " style="margin-top: -30px;">
        <div class="row ">
            <div class="comment0">
                <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark relative" data-bs-ride="carousel">
                    <!-- Inner -->
                    <div class="carousel-inner relative w-full overflow-hidden">
                        <!-- Single item -->
                        <div class="carousel-item active relative float-left w-full">
                            <img src="{{ asset('assets/images/22.jpg') }}" class="block w-full"
                                alt="Motorbike Smoke" style="height: 250px; width: 100%;"/>
                            <div class="carousel-caption hidden md:block absolute text-center">
                                <h5 class="text-xl"></h5>
                                <p></p>
                            </div>
                        </div>
                        <!-- Single item -->
                        <div class="carousel-item relative float-left w-full">
                            <img src="{{ asset('assets/images/23.jpg') }}" class="block w-full"
                                alt="Mountaintop" style="height: 250px; width: 100%;"/>
                            <div class="carousel-caption hidden md:block absolute text-center">
                                <h5 class="text-xl"></h5>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="comment1">
                @foreach ($Profil_entreprises as $Profil_entreprise)
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:white !important;">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#coordonnee"
                                        style="color: #073465 !important; font-weight: bold;"><i
                                            class="fa fa-phone mr-4 no-underline hover:no-underline text-gray-600"
                                            style="color: #073465 !important; font-weight: bold;"></i>Coordonnés</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#service"
                                        style="color: #073465 !important; font-weight: bold;"><i
                                            class="fa fa-shopping-cart mr-4 no-underline hover:no-underline text-gray-600"
                                            style="color: #073465 !important; font-weight: bold;"></i>Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#horaire"
                                        style="color: #073465 !important; font-weight: bold;"><i
                                            class="fa fa-clock-o mr-4 no-underline hover:no-underline text-gray-600"
                                            style="color: #073465 !important; font-weight: bold;"></i>Horaires</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#avis"
                                        style="color: #073465 !important; font-weight: bold;"><i
                                            class="fa fa-star mr-4 no-underline hover:no-underline text-gray-600"
                                            style="color: #073465 !important; font-weight: bold;"></i>Avis</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                @if ($Profil_entreprise->est_souscrit == 1)
                @if ($Profil_entreprise->photo)
                <img src="{{  asset('assets/images') }}/{{ $Profil_entreprise->photo }} }}" alt=""
                    class="rounded-circle" width="80" height="80">
                @else
                <img src="{{  asset('default.png') }}" alt="" class="rounded-circle" width="80" height="80">
                @endif
                @else
                <img src="{{ asset('default.png') }}" alt="" class="rounded-circle" width="80" height="80">
                @endif
                <h4> {{ $Profil_entreprise->nom }}</h4>
                <span style="color: #073465">{{ $Profil_entreprise->libelle }}</span>
                <samp style="margin-left: 87%; font-size: 22px; font-weight: bold">{{ $Profil_entreprise->vue }} Vue
                    (s)</samp>
                @endforeach
                <div class="detail-info" style="margin-left: 83%; margin-top: 1px !important">
                    <style>
                        .color-gray {
                            color: #e6e6e6 !important;
                        }
                    </style>

                    @php
                    $moyene = 0;
                    if ($avis3->count()) {
                    $nombre = $avis3->count();
                    }else {
                    $nombre = $avis3->count()+1;
                    }
                    $moyene = ($moyene + $avis) / $nombre;
                    @endphp
                    <div class="product-rating">
                        @for ($i = 1; $i<= 5; $i++) @if ($i <=$moyene) <i class="fa fa-star" aria-hidden="true"></i>
                            @else
                            <i class="fa fa-star color-gray" aria-hidden="true"></i>
                            @endif
                            @endfor
                            <a href="#" class="count-review" >(0 @php
                                if ($avis3->count()) {
                                echo $nombre;
                                } else {
                                echo $nombre - 1;
                                }
                                @endphp note (s))</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row">
            <div class="col-sm-6 col-md-7 col-12 pb-4 ">
                <div class="row" id="coordonnee">
                    @foreach ($Profil_entreprises as $Profil_entreprise)
                    <div class="comment mt-4 text-justify float-left property_wrap wow fadeInUp">
                        <h4> Coordonnées </h4>
                        <br>
                        <div class="row">
                            @if ($Profil_entreprise->telephone)
                            <div class="col-md-4"><span><i class="fas fa-map-marker-alt"></i></span>
                                <p>{{ $Profil_entreprise->adresse }}</p>
                            </div>
                            <div class="col-md-4"><a href="tel:{{ $Profil_entreprise->telephone }}"><span><i
                                            class="fas fa-phone"></i></span>
                                    <p>{{ $Profil_entreprise->telephone }}</p>
                                </a></div>
                            @endif

                            @if ($Profil_entreprise->telephone2)
                            <div class="col-md-4"><a href="tel:{{ $Profil_entreprise->telephone2 }}"><span><i
                                            class="fas fa-phone"></i></span>
                                    <p>{{ $Profil_entreprise->telephone2 }}</p>
                                </a></div>
                            
                            @endif

                            

                            @if ($Profil_entreprise->telephone3)
                            <div class="col-md-4"><a href="tel:{{ $Profil_entreprise->telephone3 }}"><span><i
                                            class="fas fa-phone"></i></span>
                                    <p>{{ $Profil_entreprise->telephone3 }}</p>
                                </a></div>
                            @endif

                            @if ($Profil_entreprise->telephone4)
                            <div class="col-md-4"><a href="tel:{{ $Profil_entreprise->telephone4 }}"><span><i
                                            class="fas fa-phone"></i></span>
                                    <p>{{ $Profil_entreprise->telephone4 }}</p>
                                </a></div>
                            @endif

                        </div>
                        <div class="row">
                            @if ($Profil_entreprise->description_entreprise)
                            <div class="col-md-12">
                                <p>{{ $Profil_entreprise->description_entreprise }}</p>
                            </div>
                            @endif
                        </div>
                        <div class="row">
                            @if ($Profil_entreprise->itineraire)
                            <div class="col-md-4"><span><i class="fas fa-map-marked-alt"></i></span> <a
                                    href="{{ $Profil_entreprise->itineraire }}">Itineraire</a></div>
                            @endif
                            @if ($Profil_entreprise->siteweb)
                            <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a
                                    href="{{ $Profil_entreprise->siteweb }}">Site Web</a></div>
                            @endif
                            @if ($Profil_entreprise->siteweb)
                            <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a
                                    href="{{ $Profil_entreprise->siteweb }}">Site Web</a></div>
                            @endif
                        </div>
                        <br>
                    </div>
                    @endforeach
                </div>
                @foreach ($est_souscrits as $est_souscrit)
                    @if ($est_souscrit->est_souscrit == 1)
                    <div class="row" id="geo">
                        <div class="comment mt-4 text-justify float-left property_wrap wow fadeInUp">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.701238777434!2d1.1834649!3d6.2074975!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13525f005439bec7!2sShowroom%20Africa!5e0!3m2!1sfr!2stg!4v1671102033967!5m2!1sfr!2stg" width="560" height="300" style="border:0; width: 600px auto; height: 200px auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="row" id="service">    
                        <div class="comment mt-4 text-justify float-left property_wrap wow fadeInUp">
                            <h4> Service </h4>
                            <br />
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
                                        <div class="carousel-inner pro" role="listbox">
                                            <div class="carousel-item active pro">
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="card-img"> <img src="{{  asset('assets/images/EntrepriseImages/default.png') }}"
                                                            class="img-fluid" style="width: 200px; height: 150px;"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach ($service_images as $service_image)
                                                <div class="carousel-item pro">
                                                    <div class="col-md-3">
                                                        <div class="card">
                                                            @if ($service_image->service_image)
                                                                <div class="card-img"> <img src="https://admin.showroomafrica.com/assets/{{ $service_image->service_image }}"
                                                                class="img-fluid" style="width: 200px; height: 150px;"> </div>
                                                            @else
                                                                <div class="card-img"> <img src="{{  asset('assets/images/EntrepriseImages/default.png') }}"
                                                                    class="img-fluid" style="width: 200px; height: 150px;"> </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div> <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                                            data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> </a> <a
                                            class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                                            data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> </a>
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
                            <br />
                        </div>
                    </div>
                    @endif
                    @if ($est_souscrit->est_souscrit == 1)
                    <div class="row">
                        <div class="comment mt-4 text-justify float-left property_wrap wow fadeInUp">
                            <br>
                            @foreach ($services as $service)
                            @if ($service->libelle)
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{ $service->libelle }}</p>
                                </div>
                            </div>
                            @endif

                            @if ($service->description)
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{ $service->description }}</p>
                                </div>
                            </div>
                            @endif
                            <br />
                            @if ($service->video)
                            <div class="row">
                                <div class="col-md-12"><img src="{{  asset('assets/images') }}/{{ $service->video }}"
                                        alt=""></div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @if ($est_souscrit->est_souscrit == 1)
                    <div class="row" id="horaire">
                        <div class="comment mt-4 text-justify float-left property_wrap wow fadeInUp">
                            <h4> Horaire </h4>
                            <br>
                            @foreach ($horaires as $horaire)
                            <div class="row">
                                <div class="col-md-4">
                                    <p> {{ $horaire->jour }} </p>
                                </div>
                                <div class="col-md-4">
                                    <p> {{ $horaire->h_ouverture }} </p>
                                </div>
                                <div class="col-md-4">
                                    <p> {{ $horaire->h_fermerture }} </p>
                                </div>
                            </div>
                            @endforeach
                            <br>
                        </div>
                    </div>
                    @endif
                @endforeach

                <div class="row" id="avis">
                    <div class="comment mt-4 text-justify float-left property_wrap wow fadeInUp">
                        @if(Session::has('ok'))
                        <div class="alert alert-success" role="alert">{{Session::get('ok') }}</div>
                        @endif
                        <h4> Avis </h4>
                        @foreach ($avis2 as $avi2)
                        <form method="POST" action="{{ route('entreprise-avis',['id'=>$avi2->id]) }}" id="commentform">

                            @csrf
                            <div class="comment-form-rating">
                                <div class="form-group">
                                    <label for="note">Votre notes</label><br>
                                    <p class="stars">

                                        <label for="rated-1"></label>
                                        <input type="radio" id="rated-1" name="note" value="1">
                                        <label for="rated-2"></label>
                                        <input type="radio" id="rated-2" name="note" value="2">
                                        <label for="rated-3"></label>
                                        <input type="radio" id="rated-3" name="note" value="3">
                                        <label for="rated-4"></label>
                                        <input type="radio" id="rated-4" name="note" value="4">
                                        <label for="rated-5"></label>
                                        <input type="radio" id="rated-5" name="note" value="5" checked="checked">
                                        @error('note')<span class="text-danger">{{$message}}</span>@enderror
                                    </p>
                                </div>

                            </div>
                            <br>
                            <div class="form-group">
                                <label for="commentaire">Votre commentaires </label><samp style="color: red"> *</samp>
                                <textarea name="commentaire" id="commentaire" cols="30" rows="5" class="form-control"
                                    style="background-color: ;"></textarea>
                                @error('commentaire')<span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit" value="Noter">
                            </p>
                        </form>
                        @endforeach
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 offset-md-1 offset-sm-1 col-12 mt-4 ">
                <div class="row">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
                    @endif
                    @foreach ($Profil_entreprises as $Profil_entreprise)
                    <form id="algin-form" method="POST"
                        action="{{ route('profil-entreprise-mail',['entreprise_id'=>$Profil_entreprise->id]) }}">
                        @csrf
                        <div class="form-group">
                            <h4>Contacter {{ $Profil_entreprise->nom }}</h4>
                            <label for="nom">Nom</label><samp style="color: red">*</samp>
                            <input type="text" name="nom" id="fullname" class="form-control">
                            @error('nom')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label><samp style="color: red">*</samp>
                            <input type="text" name="email" id="email" class="form-control">
                            @error('email')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="objet">Nom de l'entreprise ({{ $Profil_entreprise->nom }})</label><samp
                                style="color: red">*</samp>
                            <input type="text" name="objet" id="objet" class="form-control">
                            @error('objet')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label><samp style="color: red">*</samp>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                style="background-color: ;"></textarea>
                            @error('message')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <p>(<samp style="color: red">*</samp> Champ obligatoire)</p>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="post" class="btn">Postez</button>
                        </div>
                    </form>
                    @endforeach
                    <br>
                </div>

            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/app.js') }}"></script>
@include('frontend.footer')