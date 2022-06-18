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
      <div class="container">
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
          </div>                      
          <div class="container"> 
              <div class="row">
                  @foreach ($categories as $categorie)
                  <div class="grid-cell-category flex w-1/2 mm:w-1/3 t:w-1/4 ls:w-1/3 p-1 ls:p-4 relative">
                    <div
                      class="bg-brand-yellow hover:bg-brand-yellowDark flex flex-col items-center justify-center w-full rounded-lg p-6 ls:p-8">
                        <i class="text-46 ls:text-55 text-black mb-3 ls:mb-4 tnp tnp-communication"></i>
                        <a href="{{ route('subCat',['categorie_id'=>$categorie->id]) }}" class="stretched-link text-center text-11 ls:text-14 text-black hover:text-black no-underline hover:no-underline">
                          <p style="font-size: 14px">{{$categorie->libelle}}</p>
                        </a>
                    </div>
                  </div>
                @endforeach
              </div>
          </div>
      </div>
  </section>
  <script src="{{ asset('js/app.js') }}"></script>
@include('frontend.footer')
