
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
                @foreach ($sousCategories as $sousCategorie)
                    <h2>{{ $sousCategorie->libelle }}</h2>
                @endforeach
                
                @foreach ($entreprises as $entreprise)
                    <a href="{{ route('profil-entreprise',['entreprise_id'=>$entreprise->id]) }}">
                        <div class="comment mt-4 text-justify float-left">
                            <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="80" height="80">
                            <h4> {{ $entreprise->nom }}</h4>
                            <span>-{{ $entreprise->libelle }}</span>
                            <br>
                            <div class="row">
                                <div class="col-md-6"><span><i class="fas fa-map-marker-alt"></i></span> <p>{{ $entreprise->adresse }}</p></div>
                                <div class="col-md-6"><span><i class="fas fa-phone"></i></span> <p>{{ $entreprise->telephone }}</p></div>
                            </div>
                            <br>
                            <div class="row">
                                @if ($entreprise->itineraire)
                                    <div class="col-md-4"><span><i class="fas fa-map-marked-alt"></i></span> <a href="{{ $entreprise->itineraire }}">Itineraire</a></div>
                                @endif
                                
                                <div class="col-md-4"><span><i class="fas fa-file"></i></span> <a href="{{ route('profil-entreprise',['entreprise_id'=>$entreprise->id]) }}">Profile</a></div>

                                @if ($entreprise->siteweb)
                                    <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <a href="{{ $entreprise->siteweb }}">Site Web</a></div>
                                @endif
                                
                            </div>
                            <br>
                            <div class="row">
                                <p>
                                    {{ $entreprise->description }}
                                </p>
                            </div>                    
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <style>
                    table {
                        border-collapse: collapse;
                        width: auto;
                        margin: auto;
                        padding: 5px;
                    }

                    th, td {
                        padding: 8px;
                        text-align: left;
                        border-bottom: 1px solid #ddd;
                    }
                </style>
                <div class="row">
                    <h3>Sociétés les plus consultées <small></small></h3>
                    <div class="col-md-6">
                        <table>
                            <tr>
                                <td>Peter..............................................................................................................................................</td>
                            </tr>
                            <tr>
                                <td>Lois...............................................................</td>
                            </tr>
                            <tr>
                                <td>Joe......................................................................</td>
                            </tr>
                            <tr>
                                <td>Cleveland.....................................................................</td>
                            </tr>
                        </table>
                    </div>
                    
                </div>
                <br>
            </div>
        </div>
    </div>
</section>
@include('frontend.footer')