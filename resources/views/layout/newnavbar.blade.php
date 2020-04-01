<header class="fixed-top drop-shadow" id="main-header">
  {{--  <div class="navbar-container">  --}}
    <div class="row" id="navbar-row">
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2" id="header-logo">
          <a href="/home"><img class="img-fluid" src="/images/logos/ingatlanfox-logo.png"></a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-6 col-lg-6 " id="navbar">
          <div class="row">
            <div class="col-xs-12">
              <nav class="navbar navbar-expand-lg navbar-light" >
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse " id="navbarCollapse">
                      <ul class="navbar-nav text-warning">
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                aria-haspopup="true" aria-expanded="false">Eladó ingatlanok<span class="caret"></span></a> 
                                <ul class="dropdown-menu">
                                  <li><a href="#"> </a></li>
                                  <li><a href="/osszes-elado-ingatlan">Összes ingatlan</a></li>
                                  <li><a href="/elado-lakasok">Lakás</a></li>
                                  <li><a href="/elado-hazak">Ház</a></li>
                                  <li><a href="/elado-nyaralok">Nyaraló</a></li>
                                  <li><a href="/elado-garazsok">Garázs</a></li>
                                  <li><a href="/elado-irodak">Iroda</a></li>
                                  <li><a href="/elado-ipari">Ipari Ingatlan</a></li>
                                  <li><a href="/elado-raktarak">Raktár</a></li>
                                  <li><a href="/elado-uzlethelyisegek">Üzlethelyiség</a></li>
                                  <li><a href="/elado-telek-fold">Telek-föld</a></li>
                                  <li><a href="/elado-vendeglatas">Vendéglátás</a></li>
                                  <li><a href="/elado-egyeb">Egyéb</a></li>
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                aria-haspopup="true" aria-expanded="false">Kiadó ingatlanok<span class="caret"></span></a> 
                                <ul class="dropdown-menu">
                                  <li><a href="#"> </a></li>
                                  <li><a href="/osszes-kiado-ingatlan">Összes ingatlan</a></li>
                                  <li><a href="/kiado-lakasok">Lakás</a></li>
                                  <li><a href="/kiado-hazak">Ház</a></li>
                                  <li><a href="/kiado-nyaralok">Nyaraló</a></li>
                                  <li><a href="/kiado-garazsok">Garázs</a></li>
                                  <li><a href="/kiado-irodak">Iroda</a></li>
                                  <li><a href="/kiado-ipari">Ipari Ingatlan</a></li>
                                  <li><a href="/kiado-raktarak">Raktár</a></li>
                                  <li><a href="/kiado-uzlethelyisegek">Üzlethelyiség</a></li>
                                  <li><a href="/kiado-telek-fold">Telek-föld</a></li>
                                  <li><a href="/kiado-vendeglatas">Vendéglátás</a></li>
                                  <li><a href="/kiado-egyeb">Egyéb</a></li>
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                aria-haspopup="true" aria-expanded="false">Info<span class="caret"></span></a> 
                                <ul class="dropdown-menu">
                                  <li><a href="#"> </a></li>
                                  <li><i class="fas fa-info"></i><a href="/jo-tudni"> Jó tudni</a></li>
                                  <li><i class="fas fa-home"></i><a href="/tulajdonosoknak"> Tulajdonosoknak</a></li>
                                  <li><i class="fas fa-money-bill-wave"></i><a href="/vevoknek-berloknek"> Vevőknek-Bérlőknek</a></li>
                                  <li><i class="fas fa-tools"></i><a href="/ingatlanfox-a-gondnok"> Ingatlanfox a Gondnok</a></li>
                                  <li><i class="fas fa-hammer"></i><a href="/felujitasok-atepitesek-kivitelezese"> Felújítások-Átépítések</a></li>
                                  {{--  <li><i class="fa fa-truck fa-sm"></i><a href="/koltozes-szervezese"> Költözés szervezése</a></li>  --}}
                                  <li><i class="fa fa-question-circle fa-sm"></i><a href="/segitseg-a-haz-korul"> Segítség a ház körül</a></li>
                                </ul>
                              </li>
                              
                                @if (Auth::check())
                                  @if (Auth::user()->email=='csernus@foxinfo.hu'||Auth::user()->email=='sztarovics@foxinfo.hu' )
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                      aria-haspopup="true" aria-expanded="false">ADMIN<span class="caret"></span></a> 
                                      <ul class="dropdown-menu">
                                        <li><a href="#"> </a></li>
                                        <li><a href="/properties"> Ingatlan lista</a></li>
                                        <li><a href="/properties/create"> Új ingatlan</a></li>
                                        <li><a href="/agents"> Ügynök lista</a></li>
                                        <li><a href="/agents/create"> Új ügynök</a></li>
                                        <li><a href="/clients"> Kliens lista</a></li>
                                        <li><a href="/clients/create"> Új kliens</a></li>
                                      </ul>
                                    </li>
                                  @endif
                                    <li class="nav-item">
                                      <span class="text-primary navbar-user-name mr-3"> Üdv {{Auth::user()->name}}</span>
                                    </li>
                                    <li class="nav-item">
                                      <a href="/logout" class=""> Kilépés </a>
                                    </li>
                                @else 
                                    <li class="nav-item">
                                      <a href="/login" class=""> Belépés </a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                  <a  href="/de/home" class="ml-2"> DE </a>
                                </li>

                            </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
    </div>
  {{--  </div>  --}}
</header>

      
      