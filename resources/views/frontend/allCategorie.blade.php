@section('title')
    {{ "Secteur d'activités" }}
@endsection
@include('frontend.header')
@include('frontend.navbar')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    body{
      background: white;
    }
  </style>
  <section class="our_blog_area p_120 popular_wrap wow fadeInUp">
      <div class="container" style="margin-top: -30px;">
          <div class="main_title">
              <h2 style="color: blue">Annuaire des sociétés du Togo</h2>
              <div class="container">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{  asset('assets/images/1.jpg') }}" class="d-block w-100" alt="">
                    </div>
                    @foreach ($pubs as $pub)
                          <div class="carousel-item">
                            <img src="{{  asset('assets/images') }}/{{ $pub->image }}" class="d-block w-100" alt="">
                          </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <br />
          </div>                      
          <div class="container"> 
              <div class="row">
                <div class="grid grid-custom gap-2 justify-items-stretch sm:grid-cols-3 md:grid-cols-3">
                  @foreach ($categories as $categorie)
                  <div class="px-10 py-10 text-center bg-[#1da1f2] shadow-md rounded-2xl">
                      <a href="{{ route('subCat',['categorie_id'=>$categorie->id]) }}">
                          <p class="mt-3 text-white">{{$categorie->libelle}}</p>
                      </a>
                  </div>
                  @endforeach
              </div>
              </div>
          </div>
      </div>
  </section>
  <script src="{{ asset('js/app.js') }}"></script>
@include('frontend.footer')
