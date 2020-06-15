<header class="fixed-top drop-shadow" id="app2">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a href="/home" class="navbar-brand mr-4"><img src="/images/logos/ingatlanfox-logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarCollapse">
      <ul class="navbar-nav mt-4 mr-5">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
          aria-haspopup="true" aria-expanded="false">Eladó<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"> </a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1]); ?>">Összes ingatlan</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 1]); ?>">Lakás</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 2]); ?>">Ház</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 3]); ?>">Nyaraló</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 4]); ?>">Garázs</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 5]); ?>">Iroda</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 6]); ?>">Ipari Ingatlan</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 7]); ?>">Raktár</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 8]); ?>">Üzlethelyiség</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 9]); ?>">Telek-föld</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 10]); ?>">Vendéglátás</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 1,'list_type' => 11]); ?>">Egyéb</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
          aria-haspopup="true" aria-expanded="false">Kiadó<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"> </a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2]); ?>">Összes ingatlan</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 1]); ?>">Lakás</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 2]); ?>">Ház</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 3]); ?>">Nyaraló</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 4]); ?>">Garázs</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 5]); ?>">Iroda</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 6]); ?>">Ipari Ingatlan</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 7]); ?>">Raktár</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 8]); ?>">Üzlethelyiség</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 9]); ?>">Telek-föld</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 10]); ?>">Vendéglátás</a></li>
            <li><a href="<?php echo action('PagesController@search', ['type_id' => 2,'list_type' => 11]); ?>">Egyéb</a></li>
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
            <li><i class="fa fa-question-circle fa-sm"></i><a href="/segitseg-a-haz-korul"> Segítség a ház körül</a></li>
          </ul>
        </li>
                    {{-- Admin blokk --}}
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
              <a href="/login"> Belépés </a>
            </li>
        @endif
        <li class="nav-item">
          <?php
            $url=url()->full() ;
            $slice = Str::after($url, url('/'));
            $new_url='/de' . $slice
          ?>
          <a  href="{{$new_url}}" class="ml-4 pb-0"><img class="pb-1" src="/icons/Flags/germany-flag-icon-32.png" alt="German flag" width="22"></a>
        </li>
      </ul>
      <div class="navbar-nav d-none d-lg-block mt-4 mr-4">
          <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="cookie-show-eye"><i class="far fa-eye"></i></span></a>
          <div class="dropdown-menu navbar-favourites-container">
            <show-favourites></show-favourites>
          </div>
      </div>
      <ul class="navbar-nav mt-4">
        <li class="nav-item">
            <a href="#" data-toggle="modal" data-target="#messengerModal">
                <span class="message-select-envelope"><i class="far fa-envelope"></i></span>
            </a>
        </li>
      </ul>
      <ul class="navbar-nav mt-4 ">
        <li class="nav-item">
            <a href="#" data-toggle="modal" data-target="#calculatorModal">
                <span class="navbar-loan"><i class="fas fa-hand-holding-usd"></i></span>
            </a>
        </li>
      </ul>

      </ul>

  </div>
  </nav>
</header>


