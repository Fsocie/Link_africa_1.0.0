@section('title')
    {{ "Sous-secteurs d'activités" }}
@endsection
@include('frontend.header')
@include('frontend.navbar')
    <div class="property-wrap property_rent wow fadeInUp">
        <div class="container">
            <div class="title">
                <h1 style="color:#003366">Tous les sous-catégories</h1>
            </div>
            <br/>
            <div id="menu-cust"  >
                @foreach ($allsubCategories as $allsubCategorie)
                <a href="{{ route('entreprise',['sousCategorie_id'=>$allsubCategorie->id]) }}" class="asupport">{{ $allsubCategorie->libelle }}</a>
                @endforeach
            </div>
        </div>
    </div>
@include('frontend.footer')