<div>
  <footer class="footer bg-style wow fadeInUp">
      <div class="container">
          <div class="footer-upper">
              <div class="row">
                  <div class="col-lg-3 col-md-12">
                      <div class="footer-widget about-widget"> <a href="{{ route('home') }}"> <img alt=""
                                  src="{{ asset('assets/images/logo.png') }}"> </a>
                          <p></p>
                          <div class="readmore"><a href="{{ route('contact') }}">Contacter </a></div>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-3">
                      <div class="footer-widget quick-links">
                          <h3 class="title">Liens rapides</h3>
                          <ul>
                              <li><a href="{{ route('home') }}"> Accueil</a> </li>
                              <li><a href="{{ route('professionnel') }}"> Professionnels</a> </li>
                              {{-- <li><a href="#."> Entreprises</a> </li>
                              <li><a href="#."> Services</a> </li> --}}
                              <li><a href="{{ route('contact') }}"> Contact </a> </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-5">
                      <div class="footer-widget contact">
                          <h3 class="title">Professionnels</h3>
                          <ul class="property_sec">
                              <li>
                                  <div class="rec_proprty">
                                      <div class="propertyImg"><img alt=""
                                              src="{{ asset('assets/images/property_small01.jpg') }}"></div>
                                      <div class="property_info">
                                          <h4><a href="#">Agence Togo</a></h4>
                                          <p> </p>
                                          <div class="priceWrp"> </div>
                                      </div>
                                  </div>
                              </li>
                              <li>
                                  <div class="rec_proprty">
                                      <div class="propertyImg"><img alt=""
                                              src="{{ asset('assets/images/property_small02.jpg') }}"></div>
                                      <div class="property_info">
                                          <h4><a href="#">Agence B??nin</a></h4>
                                          <p> </p>
                                          <div class="priceWrp"></div>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                      <div class="footer-widget contact">
                          <h3 class="title">Contacts</h3>
                          <ul class="footer-adress">
                              <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>Afrique , Togo ,
                                      B??nin</span> </li>
                              <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a
                                          href="mailto:{{ $parametres->email }}"> {{ $parametres->email }} </a></span>
                              </li>
                              <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a
                                          href="tel:{{$parametres->telephone2}}">
                                          {{$parametres->telephone2}}</a></span> </li>
                          </ul>
                          <div class="social-icons footer_icon">
                              <ul>
                                  <li><a href="{{ $parametres->lienface }}"><i class="fab fa-facebook-f"
                                              aria-hidden="true"></i></a></li>
                                  <li><a href="{{ $parametres->lientwitter }}"><i class="fab fa-twitter"
                                              aria-hidden="true"></i></a></li>
                                  <li><a href="{{ $parametres->lieninsta }}"><i class="fab fa-instagram"
                                              aria-hidden="true"></i></a></li>
                                  <li><a href="{{ $parametres->lienyoutube }}"><i class="fab fa-youtube"
                                              aria-hidden="true"></i></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </footer>
</div>

<div class="modal" id="modal-countries" data-backdrop="true" tabindex="-1" role="dialog"
  aria-labelledby="modal-countries-label">
  <div class="modal-dialog w-full ls:w-860px" role="document">
      <div class="modal-content rounded-lg min-h-screen ls:min-h-auto">
          <div class="p-12 border-0 text-center">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title m-0 text-18 ls:text-22" id="modal-countries-label">...S??lectionnez votre pays
              </h4>
          </div>
          <div class="px-6 flex flex-wrap justify-center">

              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/afrique.png') }}"
                      alt="Drapeau du Togo" />
                  <div class="country-label">Afrique</div>
              </a>

              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/za.png') }}"
                      alt="Drapeau d&#039;Afrique du Sud" />
                  <div class="country-label">Afrique du Sud</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/dz.png') }}"
                      alt="Drapeau d&#039;Alg??rie" />
                  <div class="country-label">Alg??rie</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/ao.png') }}" alt="Drapeau du Angola" />
                  <div class="country-label">Angola</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/bj.png') }}" alt="Drapeau du B??nin" />
                  <div class="country-label">B??nin</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/bw.png') }}" alt="Drapeau du Botswana" />
                  <div class="country-label">Botswana</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/bf.png') }}"
                      alt="Drapeau du Burkina Faso" />
                  <div class="country-label">Burkina Faso</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/cm.png') }}" alt="Drapeau du Cameroun" />
                  <div class="country-label">Cameroun</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/cg.png') }}"
                      alt="Drapeau du Congo-Brazzaville" />
                  <div class="country-label">Congo-Brazzaville</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/cd.png') }}"
                      alt="Drapeau du Congo-Kinshasa" />
                  <div class="country-label">Congo-Kinshasa</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/ci.png') }}"
                      alt="Drapeau de C??te d???Ivoire" />
                  <div class="country-label">C??te d???Ivoire</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/dj.png') }}" alt="Drapeau du Djibouti" />
                  <div class="country-label">Djibouti</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/eg.png') }}" alt="Drapeau du ??gypte" />
                  <div class="country-label">??gypte</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/et.png') }}" alt="Drapeau du ??thiopie" />
                  <div class="country-label">??thiopie</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/ga.png') }}" alt="Drapeau du Gabon" />
                  <div class="country-label">Gabon</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/gh.png') }}" alt="Drapeau du Ghana" />
                  <div class="country-label">Ghana</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/gn.png') }}" alt="Drapeau de Guin??e" />
                  <div class="country-label">Guin??e</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/ke.png') }}" alt="Drapeau du Kenya" />
                  <div class="country-label">Kenya</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/lr.png') }}" alt="Drapeau du Lib??ria" />
                  <div class="country-label">Lib??ria</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/mg.png') }}"
                      alt="Drapeau du Madagascar" />
                  <div class="country-label">Madagascar</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/mw.png') }}" alt="Drapeau du Malawi" />
                  <div class="country-label">Malawi</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/ml.png') }}" alt="Drapeau du Mali" />
                  <div class="country-label">Mali</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/ma.png') }}" alt="Drapeau du Maroc" />
                  <div class="country-label">Maroc</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/mu.png') }}" alt="Drapeau de Maurice" />
                  <div class="country-label">Maurice</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/mz.png') }}"
                      alt="Drapeau du Mozambique" />
                  <div class="country-label">Mozambique</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/na.png') }}" alt="Drapeau du Namibie" />
                  <div class="country-label">Namibie</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/ne.png') }}" alt="Drapeau du Niger" />
                  <div class="country-label">Niger</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/ng.png') }}" alt="Drapeau du Nig??ria" />
                  <div class="country-label">Nig??ria</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/ug.png') }}" alt="Drapeau du Ouganda" />
                  <div class="country-label">Ouganda</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/cf.png') }}"
                      alt="Drapeau de R??publique centrafricaine" />
                  <div class="country-label">R??publique centrafricaine</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/sn.png') }}" alt="Drapeau du S??n??gal" />
                  <div class="country-label">S??n??gal</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/so.png') }}" alt="Drapeau du Somalie" />
                  <div class="country-label">Somalie</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/tz.png') }}" alt="Drapeau du Tanzanie" />
                  <div class="country-label">Tanzanie</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/tg.png') }}" alt="Drapeau du Togo" />
                  <div class="country-label">Togo</div>
              </a>
              <a href="#"
                  class="w-90px&#x20;flex&#x20;flex-col&#x20;items-center&#x20;px-5&#x20;pb-7&#x20;text-center&#x20;text-12&#x20;rounded-md&#x20;border&#x20;border-solid&#x20;hover&#x3A;border-link&#x20;hover&#x3A;no-underline&#x20;hover&#x3A;text-link&#x20;cursor-pointer&#x20;border-transparent&#x20;text-black">
                  <img class="w-full h-auto" src="{{ asset('assets/images/64/tn.png') }}" alt="Drapeau du Tunisie" />
                  <div class="country-label">Tunisie</div>
              </a>
          </div>
          <div class="font-bold text-center py-12 text-16 ls:text-18">
              Showroomafrica, votre r??seau professionnel en Afrique
          </div>
      </div>
  </div>
</div>

<script src="{{ asset('assets4/js/jquery-3.3.1.min.js') }}"></script>
{{--
<script src="{{ asset('assets4/js/popper.min.js') }}"></script> --}}
{{--
<script src="{{ asset('assets4/js/bootstrap.min.js') }}"></script> --}}
<script src="{{ asset('assets4/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets4/js/main.js') }}"></script>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Owl Carousel -->
{{-- <script src="{{ asset('assets/js/owl.carousel.js') }}"></script> --}}

<!-- wow js -->
<script src="{{ asset('assets/js/animate.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>

<script>
  new WOW().init();
</script>

<!-- general script file -->
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/script.js') }}"></script>

{{--
<script src="{{ asset('assets2/js/jquery-3.2.1.min.js') }}"></script> --}}

{{-- <script src="{{ asset('assets2/js/popper.js') }}"></script> --}}
{{-- <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script> --}}
<script src="{{ asset('assets2/js/stellar.js') }}"></script>
<script src="{{ asset('assets2/vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ asset('assets2/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets2/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets2/vendors/isotope/isotope-min.js') }}"></script>
<script src="{{ asset('assets2/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets2/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets2/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets2/vendors/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets2/js/mail-script.js') }}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="{{ asset('assets2/js/gmaps.min.js') }}"></script>
<script src="{{ asset('assets2/js/theme.js') }}"></script>


{{-- <script src="{{ asset('assets3/js/desktop.js') }}"></script> --}}

{{--
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script> --}}
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js'></script>
<script src="./script.js"></script>

@yield('javascripts')

</body>

</html>