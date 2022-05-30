
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
        width: 700px ;
        height: 200px auto;
    }

    .comment1{
    border: 1px solid rgba(16, 46, 46, 1);
    background-color: rgba(16, 46, 46, 0.973);
    border-radius: 5px;
    padding-left: 40px;
    padding-right: 30px;
    padding-top: 10px;
    width: 1200px;
    height: 250px;
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
    <div class="container property_rent wow fadeInUp">
        @foreach ($Profil_entreprises as $Profil_entreprise)
            <div class="row">
                <div class="comment1">
                    <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="80" height="80">
                    <h4> {{ $Profil_entreprise->nom }}</h4>
                    <span>-{{ $Profil_entreprise->libelle }}</span>
                </div>
            </div>
        @endforeach
    </div>

    <div class="container ">
        <div class="row">
            <div class="col-sm-6 col-md-7 col-12 pb-4 property_rent wow fadeInUp">
                @foreach ($Profil_entreprises as $Profil_entreprise)
                    <div class="comment mt-4 text-justify float-left property_wrap wow fadeInUp">
                        <h4> Coordonnées </h4>
                        <br>
                        <div class="row">
                            @if ($Profil_entreprise->telephone2)
                                <div class="col-md-4"><span><i class="fas fa-map-marker-alt"></i></span> <p>{{ $Profil_entreprise->adresse }}</p></div>
                                <div class="col-md-4"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone }}</p></div>
                            @endif
                            
                            @if ($Profil_entreprise->telephone2)
                                <div class="col-md-4"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone2 }}</p></div>
                            @else
                                <div class="col-md-6"><span><i class="fas fa-map-marker-alt"></i></span> <p>{{ $Profil_entreprise->adresse }}</p></div>
                                <div class="col-md-6"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone }}</p></div>
                            @endif 
                            
                            <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a href="{{ $Profil_entreprise->siteweb }}">{{ $Profil_entreprise->siteweb }}</a></div>

                            @if ($Profil_entreprise->telephone3)
                                <div class="col-md-4"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone3 }}</p></div>
                            @endif

                            @if ($Profil_entreprise->telephone4)
                                <div class="col-md-4"><span><i class="fas fa-phone"></i></span> <p>{{ $Profil_entreprise->telephone4 }}</p></div>
                            @endif
                            
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <p>{{ $Profil_entreprise->description }}</p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4"><span><i class="fas fa-map-marked-alt"></i></span> <a href="{{ $Profil_entreprise->itineraire }}">Itineraire</a></div>
                            <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a href="{{ $Profil_entreprise->siteweb }}">Site Web</a></div>
                            <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a href="{{ $Profil_entreprise->siteweb }}">Site Web</a></div>
                        </div>
                        <br>                    
                    </div>
                @endforeach
                
                <div class="comment mt-4 text-justify float-left property_wrap wow fadeInUp">
                    <h4> Service </h4>
                    <br>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>                    
                </div>
                
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
            <div class="col-lg-4 col-md-5 col-sm-6 offset-md-1 offset-sm-1 col-12 mt-4 property_rent wow fadeInUp">
                @foreach ($Profil_entreprises as $Profil_entreprise)
                    <form id="algin-form">
                        <div class="form-group">
                            <h4>Laisser un message à {{ $Profil_entreprise->nom }}</h4>
                            <label for="name">Nom</label>
                            <input type="text" name="name" id="fullname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="msg" id=""msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="button" id="post" class="btn">Postez</button>
                        </div>
                    </form>
                @endforeach
                <br>
            </div>
        </div>
    </div>
</section>
@include('frontend.footer')