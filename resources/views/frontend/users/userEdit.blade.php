
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>user | Edit</title>
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
<body class="sign-in">
    <div class="wrapper">
        <div class="sign-in-page">
            <div class="signin-popup">
                <div class="signin-pop">
                    <div class="row">
                     
                        
                        <div class="col-lg-12">
                            <div class="login-sec">

                                <ul class="sign-control">

                                    <a style="margin-left:1rem;background-color:grey;padding:0.2rem 0.5rem;color:#fff;border-top-left-radius:5px;border-bottom-left-radius:5px" href="{{route('home')}}" title="">Acceuil</a>
                                    <a style="margin-left:1rem;background-color:grey;padding:0.2rem 0.5rem;color:#fff;border-top-right-radius:5px;border-bottom-right-radius:5px" href="{{route('user.profile')}}" title="">Mon Profile</a>
                                </ul>
                                <div class="sign_in_sec current" id="tab-1">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                            </button>
                                            {{ $message }}
                                        </div>
                                    @endif
                                    @if ($message = Session::get('error'))
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                            </button>
                                            {{ $message }}
                                        </div>
                                    @endif
                                    <form action="{{route('user.update',$user[0]->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label style="margin-bottom: 0.5rem" for="">Nom</label>
                                                <input type="text" name="nom" value="{{$user[0]->nom}}" class="form-control" placeholder="nom...">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label style="margin-bottom: 0.5rem" for="">Prenom</label>
                                                <input type="text" name="prenoms" value="{{$user[0]->prenoms}}" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label style="margin-bottom: 0.5rem" for="">Email</label>
                                                <input type="text" name="email" value="{{$user[0]->email}}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label style="margin-bottom: 0.5rem" for="">Telephone</label>
                                                <input type="text" name="telephone" value="{{$user[0]->telephone}}" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label style="margin-bottom: 0.5rem" for="">Adresse</label>
                                                <input type="text" name="adresse" value="{{$user[0]->adresse}}" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label style="margin-bottom: 0.5rem" for="">Fonction</label>
                                                <input type="text" name="titre" value="{{$user[0]->titre}}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label style="margin-bottom: 0.5rem" for="">Description</label>
                                                <textarea name="description" value="" class="form-control" id="" cols="5" rows="3">{{$user[0]->description}}</textarea>
                                            </div> 
                                            <div class="col-md-4">
                                                <div class="form-group sn-field">
                                                        <input type="password" name="mdp" value="" class="form-control @error('mdp') is-invalid @enderror" id="" placeholder="mot de pass de l'Utilisateur">
                                                        <i class="la la-lock"></i>   
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group sn-field">
                                                    <input type="password" name="c_mdp" value="" class="form-control @error('c_mdp') is-invalid @enderror" id="" placeholder="confirmer mot de pass de l'Utilisateur">
                                                    <i class="la la-lock"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <button type="submit" value="submit">Mettre à jour</button>
                                        </div>
                                    </form>
                                   
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