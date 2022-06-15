@include('frontend.header')
@include('frontend.navbar')
<section class="contact_area p_120 our_blog_area p_120 popular_wrap wow fadeInUp">
    <div class="container">
        <div id="mapBox" class="mapBox" 
            data-lat="40.701083" 
            data-lon="-74.1522848" 
            data-zoom="13" 
            data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
            data-mlat="40.701083"
            data-mlon="-74.1522848">
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h6>Lomé, Togo</h6>
                        <p>Notre quartier</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><a href="tel:{{ $parametres->telephone1 }}">{{ $parametres->telephone1 }}</a></h6>
                        <p>Avédji derrière la pharmacie laus Deo Lomé,Togo</p>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><a href="mailto:{{ $parametres->email }}">{{ $parametres->email }}</a></h6>
                        <p>Ecrivez nous à tout moment !</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
                @endif
                <form class="row contact_form" action="{{ route('contact.store') }}" method="POST" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
                            @error('nom')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email">
                            @error('email')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="objet" name="objet" placeholder="Entrez l'objet">
                            @error('objet')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Entrez votre message"></textarea>
                            @error('message')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn submit_btn">Evoyer Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('frontend.footer')