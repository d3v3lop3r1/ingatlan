<header class="fixed-top drop-shadow" id="main-header">
  {{--  <div class="navbar-container">  --}}
    <div class="row bottom-xs center-xs" id="navbar-row">
        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2" id="header-logo">
          <a href="/main"><img class="img-fluid" src="/images/logos/ingatlanfox-logo.png"></a>
        </div>
        <div class="col-xs-6 col-sm-10 col-md-6 col-lg-6" id="navbar">
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
                              <li><a href="#">Jó tudni</a></li>
                              <li><a href="#">Vevőknek-Bérlőknek</a></li>
                              <li><a href="#">Eladóknak-Kiadóknak</a></li>
                              <li><a href="#">Külföldieknek</a></li>
                              <li><a href="#">Ingatlanfox a Gondnok</a></li>
                              <li><a href="#">Felújítások-Átépítések kivitelezése</a></li>
                              <li><i class="fa fa-truck fa-sm"></i><a href="#"> Költözés szervezése</a></li>
                              <li><i class="fa fa-question-circle fa-sm"></i><a href="#"> Segítség a ház körül</a></li>
                            </ul>
                          </li>
                          <li>
                            @if (Auth::check())
                              <span class="text-danger mr-3">Üdvözöljük {{Auth::user()->name}}</span>
                              <a href="/logout" class="button">Kilépés</a>

                            @else 
                              <a href="/login" class="button">Belépés</a>
                            @endif
                          </li>
                        </ul>
            </div>
          </nav>
        </div>
    </div>
  {{--  </div>  --}}
</header>

      
      