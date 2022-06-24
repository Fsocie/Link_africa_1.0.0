
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <title>Connexion | Inscription</title>
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
                                    <li data-tab="tab-1" class="current"><a href="#" title="">Connexion</a></li>
                                    <li data-tab="tab-2"><a href="#" title="">Inscription</a></li>
                                </ul>
                                <div class="sign_in_sec current" id="tab-1">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                                            </button>
                                            {{ $message }}
                                        </div>
                                    @endif
                                    {{--@if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif--}}
                                    <h3>Connectez-vous</h3>
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
                                    </form>
                                </div>
                                
                                <div class="sign_in_sec" id="tab-2">
                                    <div class="signup-tab">
                                        <ul>
                                            <li data-tab="tab-3" class="current"><a href="#" title="">Utilisateur</a></li>
                                            <li data-tab="tab-4"><a href="#" title="">Entreprise</a></li>
                                        </ul>
                                    </div>

                                    <div class="dff-tab current" id="tab-3">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="nom" value="" class="form-control " id="" placeholder="nom de l'Utilisateur">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="prenoms" value="" class="form-control " id="" placeholder="prenom de l'Utilisateur">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="email" value="" class="form-control " id="" placeholder="email de l'Utilisateur">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="telephone" value="" class="form-control " id="" placeholder="telephone de l'Utilisateur">
                                                        <i class="la la-phone"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="adresse" value="" class="form-control " id="" placeholder="adresse de l'Utilisateur">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="titre" value="" class="form-control " id="" placeholder="Fonction de l'Utilisateur">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group sn-field">
                                                        <input type="password" name="mdp" value="" class="form-control " id="" placeholder="mot de pass de l'Utilisateur">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group sn-field">
                                                        <input type="password" name="adresse" value="" class="form-control " id="" placeholder="confirmer mot de pass de l'Utilisateur">
                                                        <i class="la la-lock"></i>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12 no-pdd">
                                                    <button type="submit" value="submit">Nouveau compte</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="dff-tab" id="tab-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="nom" value="" class="form-control " id="" placeholder="nom de l'entreprise">
                                                        <i class="la la-building"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="prenoms" value="" class="form-control " id="" placeholder="email de l'entreprise">
                                                        <i class="la la-user"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="email" value="" class="form-control " id="" placeholder="adresse de l'entreprise">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="nom" value="" class="form-control " id="" placeholder="status de l'entreprise">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="prenoms" value="" class="form-control " id="" placeholder="telephone-1 de l'entreprise">
                                                        <i class="la la-phone"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="email" value="" class="form-control " id="" placeholder="telephone-2 de l'entreprise">
                                                        <i class="la la-phone"></i>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="prenoms" value="" class="form-control " id="" placeholder="telephone-3 de l'entreprise">
                                                        <i class="la la-phone"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="email" value="" class="form-control " id="" placeholder="telephone-4 de l'entreprise">
                                                        <i class="la la-phone"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="nom" value="" class="form-control " id="" placeholder="itinearire de l'entreprise">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="text" name="prenoms" value="" class="form-control " id="" placeholder="siteweb de l'entreprise">
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <select>
                                                            <option>Pays</option>
                                                            <option>Category 1</option>
                                                            <option>Category 2</option>
                                                            <option>Category 3</option>
                                                            <option>Category 4</option>
                                                        </select>
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <select>
                                                            <option>Villes</option>
                                                            <option>Category 1</option>
                                                            <option>Category 2</option>
                                                            <option>Category 3</option>
                                                            <option>Category 4</option>
                                                        </select>
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <select>
                                                            <option>Sous category d'entreprise</option>
                                                            <option>Category 1</option>
                                                            <option>Category 2</option>
                                                            <option>Category 3</option>
                                                            <option>Category 4</option>
                                                        </select>
                                                        <i class="la la-globe"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                        <input type="file" name="prenoms" value=""  id="" placeholder="siteweb de l'entreprise">
                                                     
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group sn-field">
                                                       <textarea name="" class="form-control" id="" placeholder="description de l'entreprise" cols="5" rows="3"></textarea>
                                                     
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 no-pdd">
                                                    <button type="submit" value="submit">Nouvelle Entreprise</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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