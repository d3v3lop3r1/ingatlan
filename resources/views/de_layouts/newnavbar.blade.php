<header class="fixed-top drop-shadow" id="main-header">
  {{--  <div class="navbar-container">  --}}
    <div class="row" id="navbar-row">
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2" id="header-logo">
          <a href="/de/home"><img class="img-fluid" src="/images/logos/ingatlanfox-logo.png"></a>
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
                                aria-haspopup="true" aria-expanded="false">Kaufen<span class="caret"></span></a> 
                                <ul class="dropdown-menu">
                                  <li><a href="#"> </a></li>
                                  <li><a href="">Alle</a></li>
                                  <li><a href="">Wohnung</a></li>
                                  <li><a href="">Haus</a></li>
                                  <li><a href="">Ferienobjekte</a></li>
                                  <li><a href="">Garage</a></li>
                                  <li><a href=""></a>Büro</li>
                                  <li><a href="">Gewerbeimmobilien</a></li>
                                  <li><a href="">Lager-Lagerhalle</a></li>
                                  <li><a href="">Verkaufslokal</a></li>
                                  <li><a href="">Grundstück-Land</a></li>
                                  <li><a href="">Gastronomoie-Hotel</a></li>
                                  <li><a href="">Sonstiges</a></li>
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                aria-haspopup="true" aria-expanded="false">Mieten<span class="caret"></span></a> 
                                <ul class="dropdown-menu">
                                  <li><a href="#"> </a></li>
                                  <li><a href="">Összes ingatlan</a></li>
                                  <li><a href="">Wohnung</a></li>
                                  <li><a href="">Haus</a></li>
                                  <li><a href="">Ferienobjekte</a></li>
                                  <li><a href="">Garage</a></li>
                                  <li><a href="">Büro</a></li>
                                  <li><a href="">Gewerbeimmobilien</a></li>
                                  <li><a href="">Lager-Lagerhalle</a></li>
                                  <li><a href="">Verkaufslokal</a></li>
                                  <li><a href="">Grundstück-Land</a></li>
                                  <li><a href="s">Gastronomoie-Hotel</a></li>
                                  <li><a href="">Sonstiges</a></li>
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                aria-haspopup="true" aria-expanded="false">Info<span class="caret"></span></a> 
                                <ul class="dropdown-menu">
                                  <li><a href="#"> </a></li>
                                  <li><i class="fas fa-info"></i><a href=""> Wissenwertes</a></li>
                                  <li><i class="fas fa-home"></i><a href=""> Für Eigentümer</a></li>
                                  <li><i class="fas fa-money-bill-wave"></i><a href=""> Für Kaufer-Mieter</a></li>
                                  <li><i class="fas fa-tools"></i><a href=""> Hausverwaltung</a></li>
                                  <li><i class="fas fa-hammer"></i><a href=""> Renovieren-Umbauen</a></li>
                                  <li><i class="fa fa-question-circle fa-sm"></i><a href=""> Hilfe rund um Haus</a></li>
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
                                  <span class="text-primary navbar-user-name mr-3">Hello {{Auth::user()->name}}</span>
                                  </li>
                                  <li class="nav-item">
                                  <a class="" href="/logout" class="button">Logout</a>
                                  </li>
                              @else 
                                  <li class="nav-item">
                                    <a href="/login" class="button">Login</a>
                                  </li>
                              @endif
                                  <li class="nav-item">
                                    <a  href="/home" class="ml-2"> HU </a>
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

      
      