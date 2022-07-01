
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>user | Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/css/line-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/css/line-awesome-font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/vendor/fontawesome-free/css/all.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/PROFILE_ENTREPRISE/css/responsive.css')}}">
</head>
<body class="sign-in" style="background-color: #142c57">
    <div class="wrapper">
        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                     
                        
                        <div class="col-lg-12">
                            <div class="login-sec">

                                <ul class="sign-control">
                                    <a style="margin-left:1rem;background-color:grey;padding:0.2rem 0.5rem;color:#fff;border-top-left-radius:5px;border-bottom-left-radius:5px" href="{{route('home')}}" title="">Acceuil</a>
                                    <a style="margin-left:1rem;background-color:grey;padding:0.2rem 0.5rem;color:#fff;border-top-right-radius:5px;border-bottom-right-radius:5px" href="{{route('user.edit')}}" title="">Mettre a jour mes informations</a>
                                </ul>
                                <div class="sign_in_sec current" id="tab-1">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                            </button>
                                            {{ $message }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <p>Nom:{{$user[0]->nom}}</p>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <p>Prenom:{{$user[0]->prenoms}}</p>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <p>Email:{{$user[0]->email}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <p>Telephone:{{$user[0]->telephone}}</p>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <p>Adresse:{{$user[0]->adresse}}</p>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <p>Fonction:{{$user[0]->titre}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <p>Desription:{{$user[0]->description}}</p>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <p>Type:{{$user[0]->type}}</p>
                                        </div>
                                        
                                    </div>
                                    {{--<h3>Connectez-vous</h3>
                                    <form action="{{ route('authenticate') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Votre Email...">
                                                   
                                                    <i class="la la-user"></i>
                                                    
                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-12 no-pdd">
                                                <div class="sn-field">
                                                    <input type="password" name="mdp" class="form-control @error('mdp') is-invalid @enderror" placeholder="Votre Password...">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12 no-pdd">
                                                <button type="submit" value="submit">Connexion</button>
                                            </div>
                                        </div>
                                    </form>--}}
                                </div>
                                
                                
                           

                            </div><!--login-sec-->
                        </div><!--col-lg-6-->

                    </div><!--row-->
                </div><!--signin-pop-->
            </div><!--signin-popup-->

            <div class="footy-sec">
                <div class="container">
                   
                    <p><img src="{{asset('assets/PROFILE_ENTREPRISE/images/copy-icon.png')}}" alt="">Copyright 2022</p>
                </div><!--container-->
            </div><!--footy-sec-->
        </div>
    </div>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{asset('assets/PROFILE_ENTREPRISE/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/PROFILE_ENTREPRISE/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/PROFILE_ENTREPRISE/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/PROFILE_ENTREPRISE/lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/PROFILE_ENTREPRISE/js/script.js')}}"></script>
</body>

</html>