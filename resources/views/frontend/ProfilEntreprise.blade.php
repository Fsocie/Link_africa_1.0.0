
@include('frontend.header')
@include('frontend.navbar')

<style>
    /* .navbar-nav{
    width: 100%;
} */

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
    background:white;
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
    border: 1px solid #EEF2F6;
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

.comment1{
    border: 1px solid #0b3c5d;
    background-color: white;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
    width: 1200px ;
    height: 250px auto;
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
label, p{
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
    border: 1px solid #0b3c5d;
    border-radius: 12px;
}

form{
    border: 1px solid #0b3c5d;
    background-color: #0b3c5d;
    border-radius: 5px;
    padding: 20px;
}
</style>
<!-- Main Body -->
<section class="popular_wrap wow fadeInUp">
    <div class="container ">
        @foreach ($Profil_entreprises as $Profil_entreprise)
            <div class="row ">
                <div class="comment1">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:white !important;">
                        <div class="container-fluid" style="background: white;">
                            <a class="navbar-brand" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#coordonnee"><i class="fa fa-phone mr-4 no-underline hover:no-underline text-gray-600"></i>Coordonnés</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#service"><i class="fa fa-shopping-cart mr-4 no-underline hover:no-underline text-gray-600"></i>Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#horaire"><i class="fa fa-clock-o mr-4 no-underline hover:no-underline text-gray-600"></i>Horaires</a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </nav>
                    @if ($Profil_entreprise->est_souscrit == 1)
                        @if ($Profil_entreprise->photo)
                            <img src="{{  asset('assets/images') }}/{{ $Profil_entreprise->photo }} }}" alt="" class="rounded-circle" width="80" height="80">
                        @else
                            <img src="{{  asset('default.png') }}" alt="" class="rounded-circle" width="80" height="80">
                        @endif
                    @else
                        <img src="{{ asset('default.png') }}" alt="" class="rounded-circle" width="80" height="80">
                    @endif
                    <h4> {{ $Profil_entreprise->nom }}</h4>
                    <span style="color: #0b3c5d">{{ $Profil_entreprise->libelle }}</span>
                </div>
            </div>
        @endforeach
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
                                    <div class="col-md-4"><span><i class="fas fa-map-marker-alt"></i></span> <p>{{ $Profil_entreprise->adresse }}</p></div>
                                    <div class="col-md-4"><a href="tel:{{ $Profil_entreprise->telephone }}"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone }}</p></a></div>
                                @endif
                                
                                @if ($Profil_entreprise->telephone2)
                                    <div class="col-md-4"><a href="tel:{{ $Profil_entreprise->telephone2 }}"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone2 }}</p></a></div>
                                @else
                                    <div class="col-md-6"><span><i class="fas fa-map-marker-alt"></i></span> <p>{{ $Profil_entreprise->adresse }}</p></div>
                                    <div class="col-md-6"><a href="tel:{{ $Profil_entreprise->telephone }}"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone }}</p></a></div>
                                @endif 
                                
                                @if ($Profil_entreprise->siteweb)
                                    <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a href="{{ $Profil_entreprise->siteweb }}">{{ $Profil_entreprise->siteweb }}</a></div>
                                @endif
                                
                                @if ($Profil_entreprise->telephone3)
                                    <div class="col-md-4"><a href="tel:{{ $Profil_entreprise->telephone3 }}"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone3 }}</p></a></div>
                                @endif

                                @if ($Profil_entreprise->telephone4)
                                    <div class="col-md-4"><a href="tel:{{ $Profil_entreprise->telephone4 }}"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone4 }}</p></a></div>
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
                                    <div class="col-md-4"><span><i class="fas fa-map-marked-alt"></i></span> <a href="{{ $Profil_entreprise->itineraire }}">Itineraire</a></div>
                                @endif
                                @if ($Profil_entreprise->siteweb)
                                <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a href="{{ $Profil_entreprise->siteweb }}">Site Web</a></div>
                                @endif
                                @if ($Profil_entreprise->siteweb)
                                    <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a href="{{ $Profil_entreprise->siteweb }}">Site Web</a></div>
                                @endif
                            </div>
                            <br>                    
                        </div>
                    @endforeach
                </div>
                @foreach ($est_souscrits as $est_souscrit)
                    @if ($est_souscrit->est_souscrit == 1)
                        <div class="row" id="service">
                            <div class="comment mt-4 text-justify float-left property_wrap wow fadeInUp">
                                <h4> Service </h4>
                                <br />
                                
                                    <div class="row owl-2-style">
                                        <div class="owl-carousel owl-2">
                                            @foreach ($service_images as $service_image)
                                                <div class="media-29101">
                                                    @if ($service_image->service_image)
                                                        <img src="{{  asset('assets/images/EntrepriseImages') }}/{{ $service_image->service_image }}" alt="Image" class="img-fluid" style="width: 150px; height: 150px;">
                                                    @else
                                                        <img src="{{  asset('assets/images/EntrepriseImages/default.png') }}" alt="Image" class="img-fluid" style="width: 150px; height: 150px; ">
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
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
                                                <div class="col-md-12"><p>{{ $service->libelle }}</p></div>
                                            </div>
                                        @endif
                                        
                                        @if ($service->description)
                                            <div class="row">
                                                <div class="col-md-12"><p>{{ $service->description }}</p></div>
                                            </div> 
                                        @endif
                                        <br />
                                        @if ($service->video)
                                            <div class="row">
                                                <div class="col-md-12"><img src="{{  asset('assets/images') }}/{{ $service->video }}" alt=""></div>
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
                                        <div class="col-md-4"><p> {{ $horaire->jour }} </p></div>
                                        <div class="col-md-4"><p> {{ $horaire->h_ouverture }} </p></div>
                                        <div class="col-md-4"><p> {{ $horaire->h_fermerture }} </p></div>
                                    </div>   
                                @endforeach
                                <br>                 
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 offset-md-1 offset-sm-1 col-12 mt-4 ">
                <div class="row">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
                @endif
                @foreach ($Profil_entreprises as $Profil_entreprise)
                    <form id="algin-form" method="POST" action="{{ route('profil-entreprise-mail',['entreprise_id'=>$Profil_entreprise->id]) }}">
                        @csrf
                        <div class="form-group">
                            <h4>Laisser un message à {{ $Profil_entreprise->nom }}</h4>
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
                            <label for="objet">Nom de l'entreprise ({{ $Profil_entreprise->nom }})</label><samp style="color: red">*</samp>
                            <input type="text" name="objet" id="objet" class="form-control">
                            @error('objet')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label><samp style="color: red">*</samp>
                            <textarea name="message" id=""message cols="30" rows="5" class="form-control" style="background-color: ;"></textarea>
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

@include('frontend.footer')