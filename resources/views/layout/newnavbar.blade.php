<header class="fixed-top drop-shadow" id="main-header">
  {{--  <div class="navbar-container">  --}}
    <div class="row bottom-xs center-xs" id="navbar-row">
        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2" id="header-logo">
          <a href="/home"><img class="img-fluid" src="/images/logos/ingatlanfox-logo.png"></a>
        </div>
        <div class="col-xs-6 col-sm-10 col-md-10 col-lg-10" id="navbar">
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
                              <li><a href="/show">Összes ingatlan</a></li>
                              <li><a href="/lakasok">Lakás</a></li>
                              <li><a href="/hazak">Ház</a></li>
                              <li><a href="/irodak">Iroda</a></li>
                              <li><a href="/ipari">Ipari Ingatlan</a></li>
                              <li><a href="/nyaralok">Nyaraló</a></li>
                              <li><a href="/garazsok">Garázs</a></li>
                              <li><a href="/raktarak">Raktár</a></li>
                              <li><a href="/uzlethelyisegek">Üzlethelyiség</a></li>
                              <li><a href="/telek-fold">Telek-föld</a></li>
                              <li><a href="/vendeglatas">Vendéglátás</a></li>
                              <li><a href="/egyeb">Egyéb</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                            aria-haspopup="true" aria-expanded="false">Bérbeadó ingatlanok<span class="caret"></span></a> 
                            <ul class="dropdown-menu">
                              <li><a href="#"> </a></li>
                              <li><a href="#">Lakás</a></li>
                              <li><a href="#">Ház</a></li>
                              <li><a href="#">Iroda</a></li>
                              <li><a href="#">Ipari Ingatlan</a></li>
                              <li><a href="#">Nyaraló</a></li>
                              <li><a href="#">Garázs</a></li>
                              <li><a href="#">Raktár</a></li>
                              <li><a href="#">Üzlethelyiség</a></li>
                              <li><a href="#">Telek-föld</a></li>
                              <li><a href="#">Vendéglátás</a></li>
                              <li><a href="#">Egyéb</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                            aria-haspopup="true" aria-expanded="false">Szolgáltatások<span class="caret"></span></a> 
                            <ul class="dropdown-menu">
                              <li><a href="#"> </a></li>
                              <li><a href="#">Ingatlanügy-Info</a></li>
                              <li><a href="#">Vevőknek-Bérlőknek</a></li>
                              <li><a href="#">Eladóknak-Kiadóknak</a></li>
                              <li><a href="#">Külföldieknek</a></li>
                              <li><a href="#">Ingatlanfox a Gondnok</a></li>
                              <li><a href="#">Ingatlan takarítása, felújítása</a></li>
                              <li><i class="fa fa-truck fa-sm"></i><a href="#"> Költözés szervezése</a></li>
                              <li><i class="fa fa-question-circle fa-sm"></i><a href="#"> Segítség a ház körül</a></li>
                            </ul>
                          </li>
                          <li>
                            @if (Auth::check())
                              <span class="text-danger mr-3">Üdvözöljük {{Auth::user()->name}}</span>
                              <a href="/logout" class="button">Logout</a>

                            @else 
                              <a href="/login" class="button">Login</a>
                            @endif
                          </li>
                        </ul>
            </div>
          </nav>
        </div>
    </div>
  {{--  </div>  --}}
</header>

      
      