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
                            <div class="media-body home-media-body
                                <a href="/index/{{$prop->id}}" class="list-group-item-action">
                                    <div class="home-text body">
                                        <span class="home-place-left">{{$region[$prop->region]}} - {{$prop->city}}</span><br>
                                        {{$prop->header_hun}}<br>
                                        <span class="badge badge-danger money">{{$prop->price}}-Ft</span>
                                    </div>
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
                    @foreach ($properties_kiemeltek as $property)
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
                                                    <i class="fas fa-camera-retro">&nbsp{{$photo_count}}</i>
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
                                            @if ($property->act_price)
                                            <i class="fas fa-caret-down text-success"></i><span class="money">{{$property->act_price}}</span>.-Ft
                                            @else
                                                <span class="money">{{$property->price}}</span>.-Ft
                                            @endif
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
                    <h1>Ismerje meg a mi csodálatos Baranyánkat!</h1>
                    <p>Többnemzetiségű barátságos EU-régió, ahol a napfény is otthonra talál nap mint nap.</p>
                    <p>
                        A Duna- és Dráva folyóink találkozásánál az életerőt adó mediterrán éghajlatú Baranyánkról
                        nem csak a nagyvárosainkban regélnek, hanem külföldön is. Nyaralókat, vagy a letelepedéshez
                        hangulatos házakat vásárolnak, aztán alakítgatják át, szeretgetik nagyvárosi honfitársaink –
                        ha tehetik. Osztrák-Német-Holland-Horvát érdeklődőink is felfedezték már ezt a remek vidéket,
                        és vásárolgatnak is szorgalmasan
                    </p>
                </div>
                <h1 class="text-uppercase center-xs">HURRÁ, MOST OLCSÓBB LETT!</h1>
                <div class="row center-xs ingatlan-sor">
                    @foreach ($properties_areses as $property)
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
                                            @if ($property->act_price)
                                            <i class="fas fa-caret-down text-success"></i><span class="money">{{$property->act_price}}</span>.-Ft
                                            @else
                                                <span class="money">{{$property->price}}</span>.-Ft
                                            @endif
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

                <div class="jumbotron">
                    <h4>Most az ingatlanfox* segítségével</h4>
                    <h1>ÖN  IS  MEGTALÁLJA  ÁLOMINGATLANÁT</h1>
                    <p>Gondnoki Megbízása révén gondoskodunk ingatlana felől távollétében is! Nem hagyjuk magára sem
                        Önt sem ingatlanát.</p>
                    <h4>Árulja el nekünk hol-milyen ingatlant szeretne,
                        és mi utánajárunk, megtaláljuk azt!
                    </h4>
                </div>
                <div class="jumbotron">
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
                @include('/de_pages/reklamok')
            </div>
        </div>
    </div>
@endsection

