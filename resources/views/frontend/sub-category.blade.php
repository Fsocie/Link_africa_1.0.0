
  @include('frontend.header')
  @include('frontend.navbar')
  <div class="property-wrap property_rent wow fadeInUp">
    <div class="container">
      @foreach ($Categories as $Categorie)
        <div class="title">
          <h1 style="color:#003366">{{ $Categorie->libelle }}</h1>
        </div>
      @endforeach
      
      <br/>
  <div id="menu-cust"  >
    @foreach ($sousCategories as $sousCategorie)
      <a href="{{ route('entreprise',['sousCategorie_id'=>$sousCategorie->id]) }}" class="asupport">{{ $sousCategorie->libelle }}</a>
    @endforeach
  </div></div></div>
  @include('frontend.footer')