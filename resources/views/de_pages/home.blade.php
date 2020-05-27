@php
use App\photo;
use Carbon\Carbon;
use App\property;
$type_id=config('property.type_id.de');
$list_type=config('property.list_type.de');
$subtype=config('property.subtype.de');
$region= config('property.region.de');

@endphp
@extends('de_layouts.main')

@section('tartalom')

    <div class="container-fluid">
        <div class="row home-container-row">
            <div class="d-none col-lg-2 d-lg-block">
                <div class="card">
                    <h4 class="center-xs card-header">Bezahlbare Wohnungen für Alle</h4>
                    @foreach ($prop_elado_lakasok_cheap as $prop)
                        <div class="media shadow-sm p-1 mt-1">
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
                            <div class="media-body">
                                <a href="/index/{{$prop->id}}" class="list-group-item-action">
                                    <span class="home-place-left">{{$prop->city}}</span><br>
                                    <span class="home-media-text">{{$prop->header_de}}</span><br>
                                    @if ($prop->act_price)
                                    <i class="fas fa-caret-down text-success"></i><span class="money">{{$prop->act_price}}</span>.-Ft
                                    @else
                                        <span class="money">{{$prop->price}}</span>.-Ft
                                    @endif
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card mt-2">
                    <h4 class="card-header center-xs">Erschwingliche Häuser in Südungarn</h4>
                    @foreach ($prop_elado_hazak_cheap as $prop)
                        <div class="media shadow-sm p-1 mt-1">
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
                            <img src="{{$photo_file}}" class="img-thumbnail mr-3" alt="{{$prop->header_de}}" width="50" height="50">
                            <div class="media-body">
                                <a href="/index/{{$prop->id}}" class="list-group-item-action">
                                    <span class="home-place-left">{{$prop->city}}</span><br>
                                    <span class="home-media-text">{{$prop->header_de}}</span><br>
                                    @if ($prop->act_price)
                                    <i class="fas fa-caret-down text-success"></i><span class="money">{{$prop->act_price}}</span>.-Ft
                                    @else
                                        <span class="money">{{$prop->price}}</span>.-Ft
                                    @endif
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <h1 class="text-uppercase center-xs">SONDERANGEBOTE</h1>
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
                                            <h5><a class="stretched-link" href="/de/index/{{$property->id}}">{{$property->header_de}}</a></h5>
                                            <div class="row justify-content-between">
                                                <div class="col-auto prop-header-alatt-bal start-xs ">

                                                    <?php
                                                    echo ($type_id[$property->type_id]);
                                                    $dt = Carbon::parse($property->updated_at);
                                                    $days=$dt->diffInDays();
                                                    if ($days < 14){
                                                        echo "<span class='badge badge-secondary badge-danger ml-2'>Neu</span>";
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col-xs-2 col-md-2 prop-header-alatt-jobb">
                                                    <i class="fas fa-camera-retro"></i> {{$photo_count}}
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xs-12 main-photo">
                                            <div class="row">
                                                <div class="col-auto prop-header-alul-jobb">
                                                    ID:{{110000 + $property->id}} - {{$list_type[$property->list_type]}} {{$type_id[$property->type_id]}} {{$region[$property->region]}}
                                                </div>
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
                                                    <i class="fa fa-ruler fa-xl"></i><span> Grundstück:</span><br>
                                                    @if ($property->land_area)
                                                        {{$property->land_area}}m2
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                                <div class="col xs-4">
                                                    <i class="fas fa-expand-alt fa-xl"></i><span> Wohnfläche:</span><br>
                                                    @if ($property->area)
                                                        {{$property->area}}m2
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                                <div class="col xs-4">
                                                    <i class="fas fa-th-large fa-xl"></i><span> Zimmer:</span><br>
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
                    <h2>Lernen Sie unser schönes Baranya kennen!</h1>
                    <h4>Eine deutschsprachige Region in der EU</h4>
                    <h4>
                        Mediterran Klima jenseits der Donau,
                        wo viele deutschstämmige Einwanderer
                        bereits Ihr Wunschimmobilien besitzen.
                    </h4>
                    <h2>mit ingatlanfox*</h2>
                    <h1>FINDEN SIE IHR TRAUMHAUS</h1>
                    <h4>
                        und wir kümmern uns um Ihren Anwesen
                        auch während Ihrer Abwesenheit!
                    </h4>
                    <p>Lassen Sie uns helfen die passenden Immobilie zu finden in unserem herrlichen Mediterran Ecke in Südwesten von Ungarn.</p>
                </div>
                <div class="row">
                    <section class="col-xs-12 col-sm-4">
                        <img class="img-responsive  center-block img-thumbnail" src="/images/sample-house/homes-for-sale-hoboken-nj-1316365_640.jpg" alt="Ház Eladó">
                        <h3 class="mt-2">Haben Sie in Ungarn Immobilie?</h3>
                        <h4>Wenn Sie verkaufen oder vermieten wollen, überlassen Sie es uns, denn unsere vorgemerkten Interessenten, sowie grenüberschreitenden Inserate sprechen für sich</h4>
                        <p class="text-uppercase text-info">
                            in 2 Sprachen<br>
                            in 3+ Länder<br>
                            in 4+ Immobilienportalen<br>
                            für die erfolgreiche Vermarktung</strong>
                        </p>
                        <ul class="">
                            <li>Beratung, Vermessung Ihrer Immobilie</li>
                            <li>Ablichtungen, Videoaufnahmen mit Drohnen</li>
                            <li>Zweisprachige Exposé, Steakholder Analyse bei Bedarf</li>
                            <li>Helfer bei Immobilienbesichtigungen, Ratgeber</li>
                            <li>Wir überwinden alle Sprachbarriere, Dolmetschen</li>
                            <li>Für Sie erledigen wir alle Behördengänge</li>
                            <li>Wir nehmen Ihre Anliegen ernst auch während Ihrer Abwesenheit</li>
                        </ul>
                    </section>
                    <section class="col-xs-12 col-sm-4 ">
                        <img class="img-responsive center-block img-thumbnail" src="/images/sample-house/architecture-21805_640.jpg" alt="Ház Eladó">
                        <h4 class="mt-2">Haus kaufen in Südungarn?<br>
                        Wohnung mieten in Südungarn?</h4>
                        <ul class="">
                            <li>Mit Rat- und Tat vermessen wir Ihr Bedarf,
                            begleiten wir bei Besichtigungen, Dolmetschen wenn nötig</li>
                            <li>Bei Miet- oder Kaufverträge verfassen wir Vorvertrage in 2 Sprachen auch
                            un helfen mit Analysen und Rat bei Ihrer Entscheidung</li>
                            <li>Sollten Sie anderweitig die passende Immobilie gefunden haben, fragen Sie uns denn
                            wir helfen gern als Schirmherr, als Dolmetscher und Verteidiger Ihrer Interesse!</li>
                            <li>Behördengänge erledigen wir auch für Sie,
                            deutsch-ungarisch sprechenden Notar/Anwälte kennen wir auch hier</li>
                            <li>Beauftragen Sie uns eventuell als Ihr vertraunswürdige Hausverwalter
                            der während Ihrer Abwesenheit um Alles kümmert, administriert</li>
                            <li>Unsere Projekftox Division baut, renoviert, repariert, und ist in der Lage
                            nach jahrelangen Erfahrungen auch größere Umbauten zu übernehmen</li>
                        </ul>
                    </section>
                    <section class="col-xs-12 col-sm-4 ">
                        <div class="embed-responsive embed-responsive-16by9">
                                <video class="embed-responsive-item thumbnail" src="/images/sample-house/Water-3967.mp4" loop autoplay muted></video>
                        </div>
                        <h4 class="mt-2">
                        Haben Sie auch Informationen
                        wer-wo will in Südungarn
                        verkaufen oder vermieten,
                        kaufen oder mieten?
                        </h4>
                        <p>
                        Wenn Sie wissen, bitte anrufen!
                        Angenommen, Sie sind um etwas
                        Zuverdienst nicht abgeneigt?

                        Gerne notieren wir Sie auch bald
                        als Info-Agent unseres Teams!


                        Ruefen Sie an 0049-1578-400 1214
                        Herr Sztarovics oder Frau Speck
                        </p>
                        <h4>Kaufen mit Kreditaufnahme in Ungarn?</h4>
                        <p>
                            Ja, es ist möglich.
                            Dafür haben wir auch einen kompetenten Fachmann
                            der Sie hilft günstigeres Angebot zu finden,
                            und geht mit bei der Behördengangen in Pécser-Raum
                        </p>
                        <h4>CSOK? Falusi CSOK?</h4>
                        <p>
                            Diese supergünstige Kreditaufnahmen
                            können nur ungarische Mitbürger in Anspruch nehmen.
                            Die sogennannte "Falusi CSOK" sogar nur für junge Familie
                            mit x Kinder die bereit sind langfristig in den
                            s.g. verlassene Dörfer auch wohnen. Die Staat übernimmt 100% vom Kaufpreis.
                            Für Sie als Verkäufer könnte das auch hilfreich sein...
                        </p>
                    </section>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                        <h2>In Ungarn sind Sie</h2>
                        <h1>WILLKOMMEN!</h1>

                        <h4>Wohnen im Alter in Ungarn! <br>
                        Leben Sie dort, wo andere Urlaub machen</h4>

                        <p>Haben sie sich vorgenommen im Ruhestand nochmal eine große Herausforderung zu bewältigen? Pflegehotels,
                        Seniorenresidenzen, betreutes Wohnen, oder eher das einege Heim? Ja, mit uns finden Sie jetzt sehr günstig
                        Ihr Traumimmobilien, die Lösung preiswerter aber nievauvoller zu Wohnen. Ob nur ein Sommerresidenz im
                        indyllischen Naturlandschaft bei Bad Harkány, Ferienhäuse auf dem Weinberg,  bis zu traumhafte Landhäuser
                        in den mediterranen Südwestungarn, wir finden für Sie auch was Sie nur wünschen.</p>

                        <h4>Auswandern im Alter ist Trend</h4>

                        <p>Auf jedem Fall es lohnt sich jetzt in Ungarn ein zweites Domizil, oder sogar dauerhaft zu wohnen.
                        Dann kommt man mit den sonst oft biederer Rente locker aus. Zehntausende deutsche und österreicher
                        Leben bereits in Ungarn dauerhaft, klar überwiegend Rentner, Rentnerehepaare. Nach der 20%-igen Absturz
                        von ungarischen Währung Forint im Frühling vom 202, Sie kriegen für Ihre Euro jetzt mehr!  Wir helfen Ihnen
                        Ihr Wunschimmobilien im herrlichen Südwesten zu finden!</p>

                        <h4>Rentenbezug im Ausland</h4>

                        <p>Als deutscher Staatsbürger gilt der gesetzliche Rentenanspruch unabhängig vom Wohnort.
                        Auch im Ausland erhalten Rentner, so lange sie die deutsche Staatsbürgerschaft behalten, die volle
                        gesetzliche Rente
                        Steuervorteile im Ausland
                        Das Auswandern in europäische Länder ist für Rentner rechtlich kein Problem. In jedem Land der
                        europäischen Union können Rentner mit einer Krankenversicherung und einem gesicherten Einkommen ohne
                        Auflagen ihren Lebensabend verbringen.</p>

                        <h2>
                            In Ungarn heißen Sie <br>
                            WILLKOMMEN!
                        </h2>
                                            </div>
                </div>
                <div class="jumbotron  hide visible-lg visible-md" >
                    <h1>KEINER DER SICH UM IHR HAUS KÜMMERT? VERTRAUENSVOLLER HAUSVERWALTER?</h1>
                    <p class="lead"> Unser Hausverwaltung Komplett-Service erledigt in Baranya für Sie Alle arbeiten wie Sie im Auftrag erteilen.</p>
                </div>
            </div>
            <div class="d-none col-lg-2 d-lg-block end-xs">
                @include('/de_pages/reklamok')
            </div>
        </div>
    </div>
@endsection
