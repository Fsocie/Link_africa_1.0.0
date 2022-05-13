
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
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-7 col-12 pb-4">
                <h2>Les entreprises ..........................</h2>
                <a href="{{ route('profil-entreprise') }}">
                    <div class="comment mt-4 text-justify float-left">
                        <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="80" height="80">
                        <h4> Entreprise</h4>
                        <span>-Sous-categorie</span>
                        <br>
                        <div class="row">
                            <div class="col-md-6"><span><i class="fas fa-map-marker-alt"></i></span> <p>adresse.................................</p></div>
                            <div class="col-md-6"><span><i class="fas fa-phone"></i></span> <p>telephone.....................</p></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4"><span><i class="fas fa-map-marked-alt"></i></span> <p>Itinéraire..............</p></div>
                            <div class="col-md-4"><span><i class="fas fa-file"></i></span> <p>Profile.......................</p></div>
                            <div class="col-md-4"><span><i class="fas fa-globe"></i></span> <p>SiteWeb..........................</p></div>
                        </div>                    
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <style>
                    body {
                        font-family: 'lato', sans-serif;
                        }
                        .container1 {
                        max-width: 1000px;
                        margin-left: auto;
                        margin-right: auto;
                        padding-left: 10px;
                        padding-right: 10px;
                        }

                        h2 {
                        font-size: 26px;
                        margin: 20px 0;
                        text-align: center;
                        small {
                            font-size: 0.5em;
                        }
                        }

                        .responsive-table {
                        li {
                            border-radius: 3px;
                            padding: 25px 30px;
                            display: flex;
                            justify-content: space-between;
                            margin-bottom: 25px;
                        }
                        .table-header {
                            background-color: #95A5A6;
                            font-size: 14px;
                            text-transform: uppercase;
                            letter-spacing: 0.03em;
                        }
                        .table-row {
                            background-color: #ffffff;
                            box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
                        }
                        .col-1 {
                            flex-basis: 10%;
                        }
                        .col-2 {
                            flex-basis: 40%;
                        }
                        .col-3 {
                            flex-basis: 25%;
                        }
                        .col-4 {
                            flex-basis: 25%;
                        }
                        
                        @media all and (max-width: 100px) {
                            .table-header {
                            display: none;
                            }
                            .table-row{
                            
                            }
                            li {
                            display: block;
                            }
                            .col0 {
                            
                            flex-basis: auto;
                            
                            }
                            .col0 {
                            display: flex;
                            padding: 10px 0;
                            &:before {
                                color: #6C7A89;
                                padding-right: 10px;
                                content: attr(data-label);
                                flex-basis: 50%;
                                text-align: right;
                            }
                            }
                        }
                        }
                </style>
                <div class="container1">
                    <h2>Sociétés les plus consultées <small></small></h2>
                    <ul class="responsive-table">
                        <li class="table-row">
                            <div class="col0 col-1" data-label="Job Id">42311</div>
                            <div class="col0 col-2" data-label="Customer Name">John Carpenter</div>
                            <div class="col0 col-3" data-label="Amount">$115</div>
                            <div class="col0 col-4" data-label="Payment Status">Pending</div>
                        </li>
                    </ul>
                </div>
                <br>
            </div>
        </div>
    </div>
</section>
@include('frontend.footer')