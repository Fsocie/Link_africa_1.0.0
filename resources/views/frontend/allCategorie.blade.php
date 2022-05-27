
  @include('frontend.header')
  @include('frontend.navbar')
<style>
    .p-3{
        background: #ffb900;
        width: 150px;
        height: 150px;
        border-radius: 30px
    }

    .mb-3 p{
            text-align: center;
            display: block;
            padding: 15px 0 14px 0;
            width: 100%;
        }

    .ratings i {
        color: green;
    }

    .install span {
        font-size: 12px;
    }

    .col-md-4 {
        margin-top: 20px;
    }
</style>
<section class="our_blog_area p_120 popular_wrap wow fadeInUp">
    <div class="container">
        <div class="main_title">
            <h2>Annuaire des sociétés du Togo</h2>
            <div class="col-md-12">
                <div class="buy-wrap wow fadeInUp" style="height: 20px">
                    <div class="container" >
                        <div class="title">
                        </div>
                    </div>
                </div>
            </div>
        </div>                      
        <div class="container"> 
            <div class="row">
                @foreach ($categories as $categorie)
                    <a href="{{ route('subCat',['categorie_id'=>$categorie->id]) }}">
                        <div class="col-md-4">
                            <div class="card p-3">
                                <div class="d-flex flex-row mb-3">
                                    <i class="fa-solid fa-tower-cell"></i>
                                    <p>{{ $categorie->libelle }}</p>
                                </div>
                            </div>
                        </div>
                    </a> 
                @endforeach
            </div>
        </div>
    </div>
</section>
@include('frontend.footer')
