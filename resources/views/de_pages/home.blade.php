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
        <div class="row">
            <div class="col d-none d-lg-block">
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
                                    <span class="badge badge-info">{{$prop->city}}</span><br>
                                    {{$prop->header_de}}<br>
                                    <span class="badge badge-danger money">{{$prop->price}}-Ft</span>
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
                                    <span class="badge badge-info">{{$prop->city}}</span><br>
                                    {{$prop->header_de}}<br>
                                    <span class="badge badge-danger money">{{$prop->price}}-Ft</span>
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
                                            <span class="money">{{$property->price}}</span>.- Ft
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
                    <h1>Hier sind Sie richtig wenn</h1>
                    <h4>Sie suchen auch ein schönes Heim in Südungarn, oder wollen Ihr Eigenheim verkaufen-vermieten?</h4>
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
                    </section>
                </div>
                <div class="jumbotron  hide visible-lg visible-md" >
                    <h1>KEINER DER SICH UM IHR HAUS KÜMMERT? VERTRAUENSVOLLER HAUSVERWALTER?</h1>
                    <p class="lead"> Unser Hausverwaltung Komplett-Service erledigt in Baranya für Sie Alle arbeiten wie Sie im Auftrag erteilen.</p>
                </div>
                <div class="container" id="map-container">
                    <h3>Anzeigen auf Landkarte</h3>
                    <div id="map" class="container"></div>
                </div>
            </div>
            <div class="col d-none d-lg-block center-xs">
                <div class="card">
                    <h4 class="card-header">Kalkulator Finanzierung</h4>
                    <iframe class="mt-2" id="hitel-kalk" src="https://www.hitel.hu/api/embed/?token=xpuV2fWKMnMMpZt9MTSTwofHdmZ8b6KkZV9vJYfj&amp;data=%2FWzKN2C9%2BbveE5mHLGFQvbr327%2FyFX2MqOelQvXtop7hDkqGG6hzkPngsE%2FLiyHf9Nz5jnEXOtuuDCN8o4wXwHL416FnexrxeDf7Q7Wv85qtd6nJGpCxNRnh5yx1nv4CduFjEaWvXnqKTvrNshGy6DvNYegHwYo9u1Ef6TgeF%2F7o8MR2ho4dbgV0Zl2EBSv1jy0411eh7AVjViF7A4MhDeojiZvsN2c61C05qrna8awH2wpC96lYy6Owkano42DPVQ3lQt%2BEHCT4AzQ2klbfyQ%3D%3D"></iframe>

                    <h4>CSOK-Liste</h4>
                    <iframe id="csok-map" frameborder="0" src="https://www.google.com/maps/d/u/0/embed?mid=1qH4VJVp5xs6vaKHyEHwmKth3kFMj4AP9&ll=46.19367658681184%2C18.40386481697169&z=10" allowfullscreen ></iframe>
                </div>

            </div>
            </div>
        </div>
    </div>
@endsection
