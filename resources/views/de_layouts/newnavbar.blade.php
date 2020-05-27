<header class="fixed-top drop-shadow" id="app2">
    <nav class="navbar navbar-expand-lg navbar-light" >
        <a href="/de/home" class="navbar-brand mr-4"><img src="/images/logos/ingatlanfox-logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="navbar-nav mt-4 mr-5">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">Kaufen<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"> </a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'zeiger' => 'Alle']); ?>">Alle</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 1,'zeiger' => 'Wohnung']); ?>">Wohnung</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 2,'zeiger' => 'Haus']); ?>">Haus</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 3,'zeiger' => 'Ferienobjekte']); ?>">Ferienobjekte</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 4,'zeiger' => 'Garage']); ?>">Garage</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 5,'zeiger' => 'Büro']); ?>">Büro</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 6,'zeiger' => 'Gewerbeimmobilien']); ?>">Gewerbeimmobilien</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 7,'zeiger' => 'Lager-Lagerhalle']); ?>">Lager-Lagerhalle</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 8,'zeiger' => 'Verkaufslokal']); ?>">Verkaufslokal</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 9,'zeiger' => 'Grundstück-Land']); ?>">Grundstück-Land</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 10,'zeiger' => 'Gastronomoie-Hotel']); ?>">Gastronomoie-Hotel</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 1,'list_type' => 11,'zeiger' => 'Sonstiges']); ?>">Sonstiges</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">Mieten<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"> </a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'zeiger' => 'Alle']); ?>">Alle</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 1,'zeiger' => 'Wohnung']); ?>">Wohnung</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 2,'zeiger' => 'Haus']); ?>">Haus</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 3,'zeiger' => 'Ferienobjekte']); ?>">Ferienobjekte</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 4,'zeiger' => 'Garage']); ?>">Garage</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 5,'zeiger' => 'Büro']); ?>">Büro</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 6,'zeiger' => 'Gewerbeimmobilien']); ?>">Gewerbeimmobilien</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 7,'zeiger' => 'Lager-Lagerhalle']); ?>">Lager-Lagerhalle</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 8,'zeiger' => 'Verkaufslokal']); ?>">Verkaufslokal</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 9,'zeiger' => 'Grundstück-Land']); ?>">Grundstück-Land</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 10,'zeiger' => 'Gastronomoie-Hotel']); ?>">Gastronomoie-Hotel</a></li>
                        <li><a href="<?php echo action('dePagesController@showing', ['type_id' => 2,'list_type' => 11,'zeiger' => 'Sonstiges']); ?>">Sonstiges</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">Info<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"> </a></li>
                        <li><i class="fas fa-info"></i><a href="/de/wissenwertes"> Wissenwertes</a></li>
                        <li><i class="fas fa-home"></i><a href="/de/fur-eigentumer"> Für Eigentümer</a></li>
                        <li><i class="fas fa-money-bill-wave"></i><a href="/de/fur-kaufer-und-mieter"> Für Kaufer-Mieter</a></li>
                        <li><i class="fas fa-tools"></i><a href="/de/hausverwaltung"> Hausverwaltung</a></li>
                        <li><i class="fas fa-hammer"></i><a href="/de/renovieren-umbauen"> Renovieren-Umbauen</a></li>
                        <li><i class="fa fa-question-circle fa-sm"></i><a href="/de/hilfe-rund-um-haus"> Hilfe rund um Haus</a></li>
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
                    <?php
                        $url=url()->full() ;
                        $root_url=url('/') . '/de';
                        $new_url = Str::after($url, $root_url);
                    ?>
                    <a  href="{{$new_url}}" class="ml-4 pb-0"><img class="pb-1" src="/icons/Flags/hungary-flag-icon-32.png" alt="Hungarian flag" width="22"></a>
                </li>
            </ul>
                <div class="navbar-nav d-none d-lg-block mt-4 mr-4">
                    <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="cookie-show-eye"><i class="far fa-eye"></i></span></a>
                    <div class="dropdown-menu navbar-favourites-container">
                        <show-favourites></show-favourites>
                    </div>
                </div>
                <ul class="navbar-nav mt-4">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="message-select-envelope"><i class="far fa-envelope"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"> </a></li>
                            <li><a href="#" data-toggle="modal" data-target="#messengerModal"> Üzenjen nekünk</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
    </nav>
</header>


