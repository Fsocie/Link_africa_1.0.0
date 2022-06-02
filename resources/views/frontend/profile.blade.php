@include('frontend.header')
@include('frontend.navbar')

<section class="section about-section gray-bg" id="about">
    <div class="wrap-main-container">
        <div class="container">
            <div id="flashes-container"></div>
        </div>
        <div id="main-container" data-base-container-for-background-ad class="container pt-8 px-8 pb-20">
            <div class="results-page">
                <nav></nav>

                <div class="flex flex-wrap ls:flex-nowrap ls:gx-8">
                    <div class="w-full ls:w-8/12">
                        <div class="my-20 -mx-4 t:mx-0">
                            <div class="flex flex-col direct-child:py-6 -my-6">
                                <div class="">
                                    @foreach ($users as $user)
                                    <article class="relative px-4 t:px-8 py-8 rounded-lg transition-default shadow-box hover:shadow-boxHover border border-solid border-gray-400 z-1">
                                    <div class="flex">
                                        <div class="mr-8">
                                            <img class="h-26 w-26 t:w-32 t:h-32 object-cover rounded-full" src="{{ Storage::url($user->photo) }}"
                                                title="{{ $user->nom }} {{ $user->prenoms }}" alt="{{ $user->nom }} {{ $user->prenoms }}" />
                                        </div>
                                        <div class="flex-1">
                                            <a href="user/181470b2b0.html?_locale=fr"
                                                class="stretched-link font-bold text-14 t:text-16 text-black hover:text-black no-underline hover:no-underline mb-1">
                                                {{ $user->nom  }} {{ $user->prenoms }}
                                            </a>
                                            <div class="text-14 text-brand-blue mb-1">
                                                {{ $user->adresse }}
                                            </div>
                                            <div class="text-14 text-gray-700 mb-1">
                                                {{ $user->titre }}
                                            </div>
                                        </div>
                                        <div class="">
                                            <a class="btn btn-blue rounded-full z-10" href="#">CV</a>
                                        </div>
                                    </div>
                                </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="my-20 ls:my-16 pagerfanta">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-reset justify-content-center">
                                    {{ $users->onEachSide(1)->links() }}
                                </ul>
                            </nav>   
                        </div>
                    </div>
                    <div class="w-full ls:w-4/12">
                        <aside class="sidebar flex flex-col direct-child:my-6 -my-6 h-full">
                                <div class="hidden ls:block">
                                    <div class="panel panel-facebook">
                                        <div class="panel-body">
                                            <h3>Sociétés les plus consultées <small></small></h3>
                                            @foreach ($entreprisePopulaire as $entreprisePopulaires)
                                                <div class="relative flex items-center py-8 px-8 border-0 border-b border-gray-400 border-solid first:border-t hover:bg-gray-100" style="width: auto">
                                                    <div class="flex-1 mr-8 flex flex-col">
                                                        <a class="stretched-link text-black text-16 hover:text-link mb-3 font-bold" href="{{ route('profil-entreprise',['entreprise_id'=>$entreprisePopulaires]) }}">{{ $entreprisePopulaires->nom }}</a>
                                                        <div class="flex text-12 font-light text-gray-600 items-center">
                                                            <div class="mr-8  flex items-center">
                                                                <i class="text-16 mr-2 text-gray-400 fa fa-map-marker"></i><span>{{ $entreprisePopulaires->adresse }}</span>
                                                            </div>
                                                            <div class=" flex items-center">
                                                                <i class="text-16 mr-2 text-gray-400 fa fa-globe"></i><a href="{{ $entreprisePopulaires->siteweb }}"><span>Site Web</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <i class="hidden t:block text-20 tnp tnp-arrow"></i>
                                                </div>
                                            @endforeach
                                            <br>
                                        </div>
                                    </div>
                                </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

@include('frontend.footer')