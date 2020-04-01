@php
use App\photo;
use Carbon\Carbon;
use App\property;
$type_id=config('property.type_id.de');
@endphp
@extends('de_layouts.main')

@section('tartalom')

    <div class="container-fluid">
        <div class="row">
            <div class="col d-none d-lg-block">
                <div class="card">
                    <h4 class="center-xs card-header">Günstigere Wohnungen zum Verkauf</h4>
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
                    <h4 class="card-header center-xs">Billigere Häuser zum Verkauf</h4>
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
                <h1 class="text-uppercase center-xs">Unsere Sonderangebote</h1>
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
                                                    $dt = Carbon::parse($property->updated_at);
                                                    $days=$dt->diffInDays();
                                                    echo $type_id[$property->type_id];
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
                    <h1>WÜRDEN SIE IN DÉLDUNÁNTÚL EIN EIGENTUM KAUFEN ODER MIETEN?</h1>
                    <h4>Dann sind Sie hier richtig.</h4>
                    <p>Wir helfen Ihnen auch in Baranya, Pécs, Harkány und Siklós!</p>
                </div>
                <div class="row">
                    <section class="col-xs-12 col-sm-4">
                        <img class="img-responsive  center-block img-thumbnail" src="/images/sample-house/homes-for-sale-hoboken-nj-1316365_640.jpg" alt="Ház Eladó">
                        <h3 class="mt-2">Sind Sie auch ein Immobilienbesitzer?</h3>
                        <h4>Ihre Immobilie wird mit einem Gewinnerprofil präsentiert</h4> 
                        <p class="text-uppercase text-info">
                            2 Sprachen<br>
                            3 Länder<br>
                            4+ Immobilienportal<br>
                            für den Erfolg so schnell wie möglich!</strong>
                        </p> 
                        <ul class="">
                            <li>Vollständige kostenlose Informationen</li>
                            <li>Immobilien Escort</li>
                            <li>Übersetzungen, Dolmetschen für Deutsch-Ungarisch Interessierte</li>
                            <li>Planung von Kauf- und Kaufverträgen oder Vorverträgen</li>
                            <li>Authentifizierung von Vereinbarungen mit Unterstützung eines Anwalts</li>
                            <li>Wir handeln auch in Ihrem Grundbuchamt zu Ihrem Vorteil</li>
                            <li>Beratung bei der Registrierung von Steuer- / Gebührenerstattungen / Eigentumsrechten sowie bei anderen Ämtern und Institutionen</li>
                        </ul>
                    </section>
                    <section class="col-xs-12 col-sm-4 ">
                        <img class="img-responsive center-block img-thumbnail" src="/images/sample-house/architecture-21805_640.jpg" alt="Ház Eladó">
                        <h4 class="mt-2">Würden Sie eine Immobilie kaufen?<br> Würden Sie eine Immobilie mieten?</h4>
                        <ul class="">
                            <li>Persönlicher Kontakt, freundliche Beratung zu Ihrem Vorteil</li>
                            <li>Eskorte zur Immobilieninspektion, zum Grundbuchamt, zum Exposé usw.</li>
                            <li>Deutsch-ungarischer Dolmetscher für Verkäufer und Verleger in anderen Muttersprachen</li>
                            <li>Schreiben eines Vorvertrags, Bescheinigung von Vereinbarungen mit einem Anwalt</li>
                            <li>Wir helfen Ihnen als Hausmeister in Ihrer Abwesenheit auch nach dem Kauf einer Immobilie/li>
                            <li>Unser Projektfox-Bauteam führt ebenfalls Renovierungsarbeiten durch</li>
                          </ul>                  
                    </section>
                    <section class="col-xs-12 col-sm-4 ">
                        <div class="embed-responsive embed-responsive-16by9">
                                <video class="embed-responsive-item thumbnail" src="/images/sample-house/Water-3967.mp4" loop autoplay muted></video>
                        </div>
                        <h4 class="mt-2">
                            Sie haben auch Informationen verkauft werden, ausgestellt werden Immobilien?
                        </h4>
                        <p>
                            dann eins lukratives Ergebnis Wir können Ihnen die Möglichkeit geben!
                        </p>
                        <p>
                            Werden Sie unser Gelegenheitsagent - Ingatlanox * Agent
                        </p>
                        Einloggen! Es ist einzigartig Gelegenheit
                        </p> 
                    </section>
                </div>
                <div class="jumbotron  hide visible-lg visible-md" >
                    <h1>IST EIN AUSLÄNDISCHES LAND? TUT ES NICHT?</h1>
                    <p class="lead"> Ingatlanox ist ein Hausmeister aus Baranya County. Ihr Hausverwalter schützt Ihr Eigentum!</p>
                </div>
                <div class="container" id="map-container">
                    <h3>Unsere Anzeigen auf der Karte</h3>
                    <div id="map" class="container"></div>
                </div>
            </div> 
            <div class="col d-none d-lg-block center-xs">
                <div class="card">
                    <h4 class="card-header">Home Loan Calculator</h4>
                    <iframe class="mt-2" id="hitel-kalk" src="https://www.hitel.hu/api/embed/?token=xpuV2fWKMnMMpZt9MTSTwofHdmZ8b6KkZV9vJYfj&amp;data=%2FWzKN2C9%2BbveE5mHLGFQvbr327%2FyFX2MqOelQvXtop7hDkqGG6hzkPngsE%2FLiyHf9Nz5jnEXOtuuDCN8o4wXwHL416FnexrxeDf7Q7Wv85qtd6nJGpCxNRnh5yx1nv4CduFjEaWvXnqKTvrNshGy6DvNYegHwYo9u1Ef6TgeF%2F7o8MR2ho4dbgV0Zl2EBSv1jy0411eh7AVjViF7A4MhDeojiZvsN2c61C05qrna8awH2wpC96lYy6Owkano42DPVQ3lQt%2BEHCT4AzQ2klbfyQ%3D%3D"></iframe>            

                    <h4>CSOK Ortsliste</h4>
                    <iframe id="csok-map" frameborder="0" src="https://www.google.com/maps/d/u/0/embed?mid=1qH4VJVp5xs6vaKHyEHwmKth3kFMj4AP9&ll=46.19367658681184%2C18.40386481697169&z=10" allowfullscreen ></iframe>
                </div>

            </div>
            </div>   
        </div>    
    </div> 
@endsection