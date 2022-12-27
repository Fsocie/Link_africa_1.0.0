@section('title')
{{ "Professionels" }}
@endsection
@include('frontend.header')
@include('frontend.navbar')

<section class="section about-section gray-bg">
    <div class="wrap-main-container">
        <div class="container">
            <div id="flashes-container"></div>
        </div>
        <div id="main-container" data-base-container-for-background-ad class="container pt-8 px-8 pb-20">
            <div class="results-page">
                <nav></nav>

                <div class="flex flex-wrap ls:flex-nowrap ls:gx-8">
                    <div class="w-full ls:w-8/12">
                        <h3 style="color: #0b3c5d">Professionels</h3>
                        <div class="my-20 -mx-4 t:mx-0">
                            <div class="flex flex-col direct-child:py-6 -my-6">
                                <div class="">
                                    @foreach ($users as $user)
                                    <div class="flex flex-col gap-4 lg:p-4 p-2  rounde-lg m-2">
                                        <div
                                            class="flex items-center justify-between w-full p-2 lg:rounded-full md:rounded-full hover:bg-gray-100 cursor-pointer border-2 rounded-lg">
                                    
                                            <div class="lg:flex md:flex items-center">
                                                <div class="h-12 w-12 mb-2 lg:mb-0 border md:mb-0 rounded-full mr-3"></div>
                                    
                                                <div class="flex flex-col">
                                    
                                                    <div class="text-sm leading-3 text-gray-700 font-bold w-full">{{ $user->nom }} {{ $user->prenoms }}</div>
                                    
                                                    <div class="text-xs text-gray-600 w-full"> {{ $user->adresse }}
                                                    </div>
                                    
                                                    <div class="text-xs text-gray-600 w-full"> {{ $user->titre }}
                                                    </div>
                                    
                                                </div>
                                    
                                            </div>
                                    
                                            <svg class="h-6 w-6 mr-1 invisible md:visible lg:visible xl:visible" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="#">CV</a>
                                        </div>
                                        
                                    
                                    </div>
                                        <br>
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
                                        <h4 style="color: #0b3c5d">Sociétés les plus consultées <small></small></h4>
                                        @foreach ($entreprisePopulaire as $entreprisePopulaires)
                                        <div class="relative flex items-center py-8 px-8 border-0 border-b border-gray-400 border-solid first:border-t hover:bg-gray-100"
                                            style="width: auto">
                                            <div class="flex-1 mr-8 flex flex-col">
                                                <a class="stretched-link text-black text-12 hover:text-link mb-3 font-bold"
                                                    href="{{ route('profil-entreprise',['entreprise_id'=>$entreprisePopulaires]) }}">{{
                                                    $entreprisePopulaires->nom }}</a>
                                                <div class="flex text-10 font-light text-gray-600 items-center">
                                                    <div class="mr-8  flex items-center">
                                                        <i
                                                            class="text-12 mr-2 text-gray-400 fa fa-map-marker"></i><span>{{
                                                            $entreprisePopulaires->adresse }}</span>
                                                    </div>
                                                    <div class=" flex items-center">
                                                        <i class="text-12 mr-2 text-gray-400 fa fa-globe"></i><a
                                                            href="{{ $entreprisePopulaires->siteweb }}"><span>Site
                                                                Web</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <i class="hidden t:block text-20 tnp tnp-arrow"></i>
                                        </div>
                                        @endforeach
                                        
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