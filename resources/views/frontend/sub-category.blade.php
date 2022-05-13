
  @include('frontend.header')
  @include('frontend.navbar')
  <div class="property-wrap property_rent wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1 style="color:#003366">Sous Categories</h1>
      </div>
      <br/>
  <div id="menu-cust"  >
    @foreach ($sousCategories as $sousCategorie)
      <a href="{{ route('entreprise') }}" class="asupport">{{ $sousCategorie->libelle }}</a>
    @endforeach
  </div></div></div>
  @include('frontend.footer')