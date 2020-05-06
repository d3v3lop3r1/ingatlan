@php
use App\photo;
use Carbon\Carbon;
use App\property;
$type_id=config('property.type_id.hu');
$list_type=config('property.list_type.hu');
$subtype=config('property.subtype.hu');
$region= config('property.region.hu');
@endphp
@extends('layout.main')

@section('tartalom')

    <div class="container-fluid">
        <div class="row">
            <div class="d-none col-lg-2  d-lg-block">
                <div class="card">
                    <h4 class="center-xs card-header">Olcsóbb lakások</h4>
                    @foreach ($prop_elado_lakasok_cheap as $prop)
                        <div class="media shadow-sm p-1 mt-1 mb-1">
                            @php
                                $photo_count = $prop->photos->count();
                                $photo = $prop->photos->where('is_default','1')->first();
                                if ($photo){
                                    $photo_file = $photo->file1;
                                    $photo_file = "/uploads/" . $photo_file;
                                } else {
                                    $photo_file = "/uploads/placeholder.png";
                                }
                            @endphp
                            <img src="{{$photo_file}}" class="img-thumbnail mr-3" alt="fotó" width="50" height="50">
                            <div class="media-body home-media-body">
                                <a href="/index/{{$prop->id}}" class="list-group-item-action">
                                    <span class="home-place-left">{{$region[$prop->region]}} - {{$prop->city}}</span><br>
                                    {{$prop->header_hun}}<br>
                                    <span class="badge badge-danger money">{{$prop->price}}-Ft</span>
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card mt-2">
                    <h4 class="card-header center-xs">Eladó házak most olcsóbban</h4>
                    @foreach ($prop_elado_hazak_cheap as $prop)
                        <div class="media shadow-sm p-1 mt-1 mb-1">
                            @php
                                $photo_count = $prop->photos->count();
                                $photo = $prop->photos->where('is_default','1')->first();
                                if ($photo){
                                    $photo_file = $photo->file1;
                                    $photo_file = "uploads/" . $photo_file;
                                } else {
                                    $photo_file = "uploads/placeholder.png";
                                }
                            @endphp
                            <img src="{{$photo_file}}" class="img-thumbnail mr-3" alt="{{$prop->header_hun}}" width="50" height="50">
                            <div class="media-body home-media-body">
                                <a href="/index/{{$prop->id}}" class="list-group-item-action">
                                    <span class="home-place-left">
                                        {{$region[$prop->region]}} - {{$prop->city}}
                                    </span><br>
                                    <span class="mt-1">{{$prop->header_hun}}</span><br>
                                    <span class="badge badge-danger money">{{$prop->price}}-Ft</span>
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <h1 class="text-uppercase center-xs">kiemelt ajánlataink</h1>
                <div class="row center-xs ingatlan-sor">
                    @foreach ($properties as $property)
                            <?php
                            $photo_count = $property->photos->count();
                            $photo = $property->photos->where('is_default','1')->first();
                            if ($photo){
                                $photo_file = $photo->file1;
                                $photo_file = "/uploads/" . $photo_file;
                            } else {
                                $photo_file = "/uploads/placeholder.png";
                            }

                            ?>

                            <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="row">
                                        <div class="col-xs-12 prop-header">
                                            <h5><a class="stretched-link" href="/index/{{$property->id}}">{{$property->header_hun}}</a></h5>
                                            <div class="row justify-content-between">
                                                <div class="col-auto prop-header-alatt-bal start-xs ">

                                                    <?php
                                                    echo ($type_id[$property->type_id]);
                                                    $dt = Carbon::parse($property->updated_at);
                                                    $days=$dt->diffInDays();
                                                    if ($days < 14){
                                                        echo "<span class='badge badge-secondary badge-danger ml-2'>Új</span>";
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col-xs-2 col-md-2 prop-header-alatt-jobb">
                                                    <i class="fas fa-camera-retro"></i> {{$photo_count}}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xs-12 main-photo">
                                            <div class="col-auto prop-header-alul-jobb">
                                            ID:{{110000 + $property->id}} - {{$list_type[$property->list_type]}} {{$type_id[$property->type_id]}} {{$region[$property->region]}}
                                            </div>
                                            <img class="img-thumbnail" src="{{$photo_file}}" alt="">
                                        </div>
                                    </div>


                                    {{--  Adatok  --}}


                                    <div class="row center-xs">
                                        <div class="col-xs-12 main-price border">
                                            <span class="money">{{$property->price}}</span>.- Ft
                                        </div>
                                        <div class="col-xs-12 main-details">
                                            <div class="row kiskockak center-xs border">
                                                <div class="col xs-4">
                                                    <i class="fa fa-ruler fa-xl"></i><span> Terület:</span><br>
                                                    @if ($property->land_area)
                                                        {{$property->land_area}}m2
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                                <div class="col xs-4">
                                                    <i class="fas fa-expand-alt fa-xl"></i><span> Lakótér:</span><br>
                                                    @if ($property->area)
                                                        {{$property->area}}m2
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                                <div class="col xs-4">
                                                    <i class="fas fa-th-large fa-xl"></i><span> Szobák:</span><br>
                                                    @if ($property->room_no)
                                                        {{$property->room_no}}
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            </div>
                    @endforeach

                </div>
                <div class="jumbotron" >
                    <h1>ITT JÓ HELYEN JÁR</h1>
                    <h4>ha ingatlant keres, vagy eladná-bérbeadná ingatlanát a napfényes Baranyánkban.</h4>
                    <p>Mi itthon vagyunk itt, segítünk, közbenjárunk, kapcsolatot teremtünk a határon túlról érkezettekkel is a siker érdekében.</p>
                </div>
                <div class="row">
                    <section class="col-xs-12 col-sm-4">
                        <img class="img-responsive  center-block img-thumbnail" src="/images/sample-house/homes-for-sale-hoboken-nj-1316365_640.jpg" alt="Ház Eladó">
                        <h3 class="mt-2">Eladná-Kiadná ingatlanát?</h3>
                        <h4>Ha ránk bízza ingatlana bemutatását, akkor a profi márketinges hadjáratunkkal gyorsan értékesítjük! Hogyan-hol prezentálunk?</h4>
                        <p class="text-uppercase text-info">
                            2 nyelven<br>
                            3+ országban<br>
                            4+ ingatlanportálokon is<br>
                            az Ön sikere érdekében!</strong>
                        </p>
                        <ul class="">
                            <li>Tanácsadás, ingatlana felmérése</li>
                            <li>Fotózás-videózás-ha kell drón bevetésével</li>
                            <li>Többnyelvű Exposé, és Steakholder analízis kérésre</li>
                            <li>Aktív ingatlanszemlék, tanácsadás mindkét félnek</li>
                            <li>Külföldi érdeklődőknél tolmácsolunk</li>
                            <li>Földhivatalban, irodákban intézzük a hivatalosakat</li>
                            <li>Ha távol- vagy külföldön van, eljárunk érdekében!</li>
                        </ul>
                    </section>
                    <section class="col-xs-12 col-sm-4 ">
                        <img class="img-responsive center-block img-thumbnail" src="/images/sample-house/architecture-21805_640.jpg" alt="Ház Eladó">
                        <h4 class="mt-2">Ingatlant venne?<br>
                        ingatlant bérelne?</h4>
                        <ul class="">
                            <li>Tanácsadás, igényeinek felmérése,
                            ingatlanszemlékre való kíséret</li>
                            <li>Adás-vétel vagy bérleti megálapodásnál előszerződést szerkesztünk,
                            transzparensen elemzünk, tanácsolunk döntéséhez</li>
                            <li>Ha máshol is talált volna ingatlant, de
                            szüksége lenne tanácsadóra-tolmácsra, segíteni fogunk, hívjon!</li>
                            <li>Előszerződés írása, megállapodások
                            hitelesítése ügyvédnél</li>
                            <li>Gondnoki tevékenys is a szolgáltatásaink egyike,
                            távollétében óvjuk, javítjuk, adminisztráljuk tulajdonát kérésére</li>
                            <li>Projektfox építő brigádunk többéves tapasztalatai
                            megbízásokat vállal akár nagyobb átépítésekre, renoválásokra!</li>
                        </ul>
                    </section>
                    <section class="col-xs-12 col-sm-4 ">
                        <div class="embed-responsive embed-responsive-16by9">
                                <video class="embed-responsive-item thumbnail" src="/images/sample-house/Water-3967.mp4" loop autoplay muted></video>
                        </div>
                        <h4 class="mt-2">
                        Önnek is van információja
                        eladandó,
                        kiadandó
                        ingatlanok felől?
                        </h4>
                        <p>
                        akkor egy
                        jövedelmező kereseti
                        lehetőséget biztosíthatunk Önnek is!

                        Legyen Ön is Alkalmi Ügynökünk –
                        Ingatlanfox* Agent

                        Jelentkezzen
                        az egyedülálló
                        lehetőségre
                        </p>
                        <h4>Hitelfelvétel?</h4>
                        <p>
                            Intézkedünk hogy a legjobb ajánlatot
                            kapja! Szakemberünkkel felveszi a
                            kapcsolatot aki kikeresi Önnek is az
                            aktuálisan legjobbat!
                        </p>
                        <h4>CSOK?</h4>
                        <p>
                            Olyan térségban választ ingatlant
                            ahol a Magyar kormány átvállalja az
                            ingatlan teljes költségét? Kérdezzen
                            bennünket, szakemberünk akkor is
                            fog tud segíteni ha a listánkban nem
                            talált megfelelőt!
                        </p>
                    </section>
                </div>
                <div class="jumbotron  hide visible-lg visible-md" >
                    <h1>NINCS AKI VIGYÁZNA INGATLANÁRA? KÜLFÖLDÖN VAN?</h1>
                    <p class="lead"> Baranyában gondoki ügyeletet vállalunk, megóvjuk, javítgatjuk ha kell, a történésekről informáljuk.</p>
                </div>
            </div>
            <div class="d-none col-lg-2  d-lg-block end-xs">
                <div class="card mb-2">
                    <img src="/images/harkany/harkanyi-gyogyfurdo-legi.jpg" class="card-img-top" alt="Harkany">  
                    <div class="card-body">
                        <h4>
                            Auswandern? <br>
                            Harkány-Siklós-Pécs Umgebung 
                            in den Südwesten von Ungarn 
                            wirdimmer beliebter 
                            als Alternativer Wohnsitz
                        </h4>
                        <p>
                            Neben günstigen Immobilienpreisen
                            locken vor allem vergleichsweise 
                            niedrigen Lebensunterhaltungskosten.
                            Zudem profitieren aktuell Euro-Inhaber 
                            vom mehr als guten Wechselkurs 
                            zum Forint, um bis zu 20% Rabatt!
                        </p>
                    </div>                  
                </div>
                <div class="card mb-2">
                    <img src="/images/harkany/harkany_tabor_edzotabor_10.jpg" class="card-img-top" alt="Harkany">  
                    <div class="card-body">
                        <p>
                            Herliche Erholung, Aktivurlaub 
                            in Harkány, Südwestungarn, 
                            wo wir zu Hause sind <br>
                            <a href="http://turizmus.harkany.hu/userfiles/kirandulas_nemet.pdf">Link</a>
                        </p>
                    </div>                  
                </div>
                <div class="card mb-2">
                    <img src="/images/harkany/hotel.jpg" class="card-img-top" alt="Harkany Hotel"> 
                    <div class="card-body">
                        <h4>
                            Hotels in Harkány 
                            für Alle Ansprüche
                        </h4>
                        <p><a href="https://www.thermalhotelharkany.eu/de">Thermal Hotel Harkány</a></p>                   
                    </div>
                </div>
                <div class="card mb-2">
                    <img src="/images/harkany/borut.jpg" class="card-img-top" alt="Harkany Weinstrasse"> 
                    <div class="card-body">
                        <h4>
                            Berühmte Weinstrasse Villány
                        </h4>
                        <p><a href="https://villanyiborvidek.hu/de">Link</a></p>                   
                    </div>
                </div>
                <div class="card mb-2">
                    <img src="/images/harkany/borut_all.jpg" class="card-img-top" alt="Villány-Siklós-Szekszárd Weinstrasse"> 
                    <div class="card-body">
                        <h4>
                            Berühmte Weinstrasse Ungarns <br> Villány-Siklós-Szekszárd
                        </h4>
                        <p><a href="https://www.ungarisches-weingefuehl.de/villany-siklos-und-szekszard">Link</a></p>    
                        <hr>
                        <p>
                            Merkblatt zum Aufenthalt Deutscher in Ungarn <br>
                            <a href="https://budapest.diplo.de/blob/1642226/8e927e2dde0b72127fc55abd41bed50e/mb-aufenthalt-in-ungarn-data.pdf">Link</a>
                        </p>               
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

