
  @include('frontend.header')
  @include('frontend.navbar')

<section class="our_blog_area p_120">
    <div class="container">
        <div class="main_title">
            <h2>Annuaire des sociétés du Togo</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="blog_inner row">
            @foreach ($categories as $categorie)
            <div class="col-lg-4">
                <a href="{{ route('subCat',['categorie_id'=>$categorie->id]) }}">
                    <div class="o_blog_item">
                        <div class="blog_img">
                            <img class="img-fluid" src="{{ asset('assets2/img/our-blog/our-blog-1.jpg') }}" alt="">
                        </div>
                        <div class="blog_text">
                            <a href="{{ route('subCat', ['categorie_id'=>$categorie->id]) }}"><h4>{{ $categorie->libelle }}</h4></a>
                            <p>{{ $categorie->description }}</p>
                        </div>
                    </div>
                </a>
                
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('frontend.footer')
