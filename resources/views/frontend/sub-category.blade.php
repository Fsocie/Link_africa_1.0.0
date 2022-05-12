
  @include('frontend.header')
  @include('frontend.navbar')
  <div class="property-wrap property_rent wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1 style="color:#003366">Sous Categories</h1>
      </div>
      <br/>
  <div id="menu-cust"  >
     <a href="{{ route('entreprise') }}" style="background-color:#ffb900; font-weight:bold" class="blood">Agroalimentaire</a>
     <a href="{{ route('entreprise') }}" class="tensimeter">Banque / Assurance</a>
     <a href="{{ route('entreprise') }}" class="scale">Papier / Carton / Imprimerie</a>
     <a href="{{ route('entreprise') }}" class="thermometer">BTP / Matériaux de construction</a>
     <a href="{{ route('entreprise') }}" class="mdevice">Chimie / Parachimie</a>
     <a href="{{ route('entreprise') }}" class="ear"> Édition / Communication / Multimédia</a>
     <a href="{{ route('entreprise') }}" class="bmassage">Études et conseils</a>
    <a href="{{ route('entreprise') }}" class="weelchair"> Machines et équipements / Automobile</a>
    <a href="{{ route('entreprise') }}" class="asupport">Textile / Habillement / Chaussure</a>
    <a href="{{ route('entreprise') }}" class="woman">Commerce / Négoce / Distribution</a>
    <a href="{{ route('entreprise') }}" class="baby">Électronique / Électricité</a>
    <a href="{{ route('entreprise') }}" class="tooth"> Industrie pharmaceutique</a>
    <a href="{{ route('entreprise') }}" class="humidifier">Informatique / Télécoms</a>
    <a href="{{ route('entreprise') }}" class="emergencykit"> Métallurgie / Travail du métal</a>
    <a href="{{ route('entreprise') }}" class="bmassage">Services aux entreprises</a>
    <a href="{{ route('entreprise') }}" class="bmassage"> Transports / Logistique</a>
      <a href="{{ route('entreprise') }}" class="baby">Optique & Ophtamologie</a>
    <a href="{{ route('entreprise') }}" class="tooth"> Cliniques et Médecine</a>
    <a href="{{ route('entreprise') }}" class="humidifier">Informatique / Télécoms</a>
    <a href="{{ route('entreprise') }}" class="emergencykit"> Métallurgie / Travail du métal</a>
  
  </div></div></div>
  @include('frontend.footer')