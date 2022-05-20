
@include('frontend.header')
@include('frontend.navbar')
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
    background:#f5f5f5;
}

#nav-items li a,#profile{
    text-decoration: none;
    color: rgb(224, 219, 219);
    background-color: black;
}


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
    border: 1px solid rgba(16, 46, 46, 1);
    background-color: rgba(16, 46, 46, 0.973);
    float: left;
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
    width: 650px ;
    height: 200px auto;
}
.comment h4,.comment span,.darker h4,.darker span, .comment p{
    display: inline;
}

.comment p,.comment span,.darker p,.darker span{
    color: rgb(184, 183, 183);
}

h1,h4{
    color: white;
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
            <div class="col-sm-5 col-md-7 col-12 pb-4">
                {{-- @foreach ($sousCategories as $sousCategorie)
                    <h2>{{ $sousCategorie->libelle }}</h2>
                @endforeach --}}
                
                @foreach ($recherches as $recherche)
                    <a href="{{ route('profil-entreprise',['entreprise_id'=>$recherche->id]) }}">
                        <div class="comment mt-4 text-justify float-left">
                            <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="80" height="80">
                            <h4> {{ $recherche->nom }}</h4>
                            <span>-{{ $recherche->libelle }}</span>
                            <br>
                            <div class="row">
                                <div class="col-md-6"><span><i class="fas fa-map-marker-alt"></i></span> <p>{{ $recherche->adresse }}</p></div>
                                <div class="col-md-6"><span><i class="fas fa-phone"></i></span> <p>{{ $recherche->telephone }}</p></div>
                            </div>
                            <br>
                            <div class="row">
                                @if ($recherche->itineraire)
                                    <div class="col-md-4"><span><i class="fas fa-map-marked-alt"></i></span> <a href="{{ $recherche->itineraire }}">Itineraire</a></div>
                                @endif
                                
                                <div class="col-md-4"><span><i class="fas fa-file"></i></span> <a href="{{ route('profil-entreprise',['entreprise_id'=>$recherche->id]) }}">Profile</a></div>

                                @if ($recherche->siteweb)
                                    <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a href="{{ $recherche->siteweb }}">Site Web</a></div>
                                @endif
                                
                            </div>
                            <br>
                            <div class="row">
                                <p>
                                    {{ $recherche->description }}
                                </p>
                            </div>                    
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4 property_rent wow fadeInUp">
                <style>
                    .ok{
                        
                        margin: auto;
                    }
                </style>
                    <h3>Sociétés les plus consultées <small></small></h3>
                    <section class="u-clearfix u-image u-section-1" id="carousel_4782" data-image-width="1980" data-image-height="1200">
                        <div class="u-clearfix u-sheet u-sheet-1">
                            <div class="u-list u-list-1">
                                <div class="u-repeater u-repeater-1">
                                    <div class="u-container-style u-grey-10 u-list-item u-repeater-item u-video-cover u-list-item-1">
                                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                                            <h2 class="u-custom-font u-text u-text-default u-text-1">Excepteur sint occaecat </h2>
                                            <p class="u-text u-text-default u-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                                            <div class="u-border-1 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
                                        </div>
                                    </div>
                                <hr />
                                </div>
                            </div>
                        </div>
                    </section>
                <br>
            </div>
        </div>
    </div>
</section>
@include('frontend.footer')