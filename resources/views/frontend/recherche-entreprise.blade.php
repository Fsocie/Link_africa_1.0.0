@section('title')
    {{ "Recherche entreprise" }}
@endsection
@include('frontend.header')
@include('frontend.navbar')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
        .navbar-nav{
        width: 100%;
    }

    @media(min-width:568px){
        .end{
            margin-left: auto;
        }
    }

    @media(max-width:768px){
        #post{
            width: 100%;
        }
    }
    #clicked{
        padding-top: 1px;
        padding-bottom: 1px;
        text-align: center;
        width: 100%;
        background-color: #ecb21f;
        border-color: #a88734 #9c7e31 #846a29;
        color: black;
        border-width: 1px;
        border-style: solid;
        border-radius: 13px; 
    }

    #profile{
        background-color: unset;
        
    } 

    #post{
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

    body{
      background: white !important;
    }

    /* #nav-items li a,#profile{
        text-decoration: none;
        color: rgb(224, 219, 219);
        background-color: black;
    } */


    .comments{
        margin-top: 5%;
        margin-left: 20px;
    }

    .darker{
        border: 1px solid #ecb21f;
        background-color: black;
        float: right;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px;
    }

    .comment{
        border: 1px solid #0b3c5d;
        background-color: white;
        float: left;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px;
        width: 650px;
        height: 200px auto;
        border-width: 1px 1px 1px 12px;
        border-color: #0b3c5d
    }
    .comment h4,.comment span,.darker h4,.darker span, .comment p{
        display: inline;
    }

    
    .comment p,.darker p,.darker span{
        color: rgb(0, 0, 10);;
    }

    .comment i, .comment span, a{
        color: #0b3c5d
    }

    h1,h4{
        color: black;
        font-weight: bold;
    }
    label{
        color: rgb(212, 208, 208);
    }

    #align-form{
        margin-top: 20px;
    }
    .form-group p a{
        color: white;
    }

    #checkbx{
        background-color: black;
    }

    #darker img{
        margin-right: 15px;
        position: static;
    }

    .form-group input,.form-group textarea{
        background-color: black;
        border: 1px solid rgba(16, 46, 46, 1);
        border-radius: 12px;
    }

    form{
        border: 1px solid rgba(16, 46, 46, 1);
        background-color: rgba(16, 46, 46, 0.973);
        border-radius: 5px;
        padding: 20px;
    }
</style>
<!-- Main Body -->
<section class="popular_wrap wow fadeInUp">
    <div class="container">
        <div class="row">
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
        <br />
        <div class="row">
            <div class="col-sm-5 col-md-7 col-12 pb-4">
                {{-- @foreach ($sousCategories as $sousCategorie)
                    <h2>{{ $sousCategorie->libelle }}</h2>
                @endforeach --}}
                
                @foreach ($recherches as $recherche)
                    <a href="{{ route('profil-entreprise',['entreprise_id'=>$recherche->id]) }}">
                        <div class="comment mt-4 text-justify float-left">
                            @if ($recherche->photo)
                                <img src="{{  asset('assets/images') }}/{{ $recherche->photo }}" alt="" class="rounded-circle" width="80" height="80">
                            @else
                                <img src="{{ asset('default.png') }}" alt="" class="rounded-circle" width="80" height="80">
                            @endif
                            <h4> <a href="{{ route('profil-entreprise',['entreprise_id'=>$recherche->id]) }}">{{ $recherche->nom }}</a></h4><br />
                            <span>{{ $recherche->sousCategorie }}</span>
                            <br>
                            <div class="row">
                                @if ($recherche->adresse)
                                    <div class="col-md-6"><span><i class="fas fa-map-marker-alt"></i></span> <p>{{ $recherche->adresse }}</p></div>
                                @endif
                                @if ($recherche->telephone)
                                    <div class="col-md-6"><a href="tel:{{ $recherche->telephone }}"><span><i class="fas fa-phone"></i></span> <p>{{ $recherche->telephone }}</p></a></div>
                                @endif
                            </div>
                            <div class="row">
                                @if ( $recherche->description_entreprise )
                                    <div class="col-md-12">
                                        <p>
                                            {{ $recherche->description_entreprise }}
                                        </p>
                                    </div>
                                @endif
                                
                            </div>
                            <div class="row">
                                @if ($recherche->itineraire)
                                    <div class="col-md-4"><span><i class="fas fa-map-marked-alt"></i></span> <a href="{{ $recherche->itineraire }}">Itineraire</a></div>
                                @endif
                                @if ($recherche->id)
                                    <div class="col-md-4"><span><i class="fas fa-file"></i></span> <a href="{{ route('profil-entreprise',['entreprise_id'=>$recherche->id]) }}">Profile</a></div>
                                @endif
                                @if ($recherche->siteweb)
                                    <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a href="{{ $recherche->siteweb }}">Site Web</a></div>
                                @endif
                                
                            </div>
                            <br>                    
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="col-lg-4 col-md-6 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <h3 style="color: #0b3c5d">Soci??t??s les plus consult??es <small></small></h3>
                @foreach ($entreprisePopulaire as $entreprisePopulaires)
                    <div class="relative flex items-center py-8 px-8 border-0 border-b border-gray-400 border-solid first:border-t hover:bg-gray-100"
                        style="width: auto">
                        <div class="flex-1 mr-8 flex flex-col">
                            <a class="stretched-link text-black text-12 hover:text-link mb-3 font-bold"
                                href="{{ route('profil-entreprise',['entreprise_id'=>$entreprisePopulaires]) }}">{{
                                $entreprisePopulaires->nom }}</a>
                            <div class="flex text-10 font-light text-gray-600 items-center">
                                <div class="mr-8  flex items-center">
                                    <i
                                        class="text-12 mr-2 text-gray-400 fa fa-map-marker"></i><span>{{
                                        $entreprisePopulaires->adresse }}</span>
                                </div>
                                <div class=" flex items-center">
                                    <i class="text-12 mr-2 text-gray-400 fa fa-globe"></i><a
                                        href="{{ $entreprisePopulaires->siteweb }}"><span>Site
                                            Web</span></a>
                                </div>
                            </div>
                        </div>
                        <i class="hidden t:block text-20 tnp tnp-arrow"></i>
                    </div>
                @endforeach
                <br>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/app.js') }}"></script>
@include('frontend.footer')