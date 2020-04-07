@php
use App\agent;
use Carbon\Carbon;
$type_id=config('property.type_id.de');
$list_type=config('property.list_type.de');
$subtype=config('property.subtype.de');
$region= config('property.region.de');
$floors=config('property.floors.de');
$condition=config('property.condition.de');
$heating=config('property.heating.de');
$parking=config('property.parking.de');
$comfort=config('property.comfort.de');
$room_height=config('property.room_height.de');

@endphp
@extends('de_layouts.main')

@section('tartalom')
      @php
        $photo_default = $property->photos->where('is_default','1')->first();
        $photos = $property->photos->where('is_default',null)->all();
        $photo_default_file = $photo_default->file1;
        $photo_default_file = "/uploads/" . $photo_default_file;
      @endphp
      <div class="container-fluid" id="first-main">
          <div class="row">

              {{--  Fenykep oszlop  --}}

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
                <a href="{{$photo_default_file}}" data-lightbox="roadtrip"><img class="img-thumbnail" src="{{$photo_default_file}}" alt=""></a>
                <div class="row">
                  @foreach ($photos as $photo)
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                      <a href="/uploads/{{$photo->file1}}" data-lightbox="roadtrip"><img class="img-thumbnail" src="/uploads/{{$photo->file1}}" height="50" alt=""></a>
                    </div>
                  @endforeach
                </div>
              </div>

              {{--  Adatok oszlop   --}}

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 mt-1">
                  <table class="table table-sm table-bordered index-adatok-tabla">
                    <thead class="pt-3">
                      <tr>
                        <th>ID:1100{{$property->id}}</th>
                        <th colspan="3">{{$property->header_de}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Region</th>
                        <td>{{$region[$property->region]}}</td>
                        <th>Atraktivität</th>
                        <td class="index-stars">
                          @for ($i = 0; $i < $property->attraktivitas ; $i++)
                            <i class="fas fa-star stars"></i>
                          @endfor
                        </td>
                      </tr>
                      <tr>
                        <th>Stadt</th>
                        <td>{{$property->city}}</td>
                        <th>Zustand</th>
                        <td  class="index-stars">
                          @for ($i = 0; $i < $property->allapot ; $i++)
                            <i class="fas fa-star stars"></i>
                          @endfor
                        </td>
                      </tr>
                      <tr>
                        <th>Letztes Update</th>
                        <td>
                          <?php
                              $dt = Carbon::parse($property->updated_at);
                              echo "Vor " . $dt->diffInDays()." Tag(en)";
                          ?>
                        </td>
                        <th>Extras</th>
                        <td class="index-stars">
                          @for ($i = 0; $i < $property->extrak ; $i++)
                            <i class="fas fa-star stars"></i>
                          @endfor
                        </td>

                      </tr>
                      <tr>
                        <th>Größe der Grundstück</th>
                        <td>{{$property->land_area}} m2</td>
                        <th>Größe des Wohnfläche</th>
                        <td>{{$property->area}} m2</td>
                      </tr>

                      <tr>
                        <th>Zahl der Zimmer</th>
                        <td>{{$property->room_no}}</td>
                        <th>Zahl der Badezimmer</th>
                        <td>{{$property->bathroom_no}}</td>
                      </tr>
                      <tr>
                        <th>Zustand</th>
                        <td>{{$condition[$property->condition]}}</td>
                        <th>Heizung</th>
                        <td>{{$heating[$property->heating]}}</td>
                      </tr>

                      <tr>
                        <th>Extras</th>
                        <td colspan="3">
                          @if ($property->lift)
                            <img class="pl-3" src="/images/extras_icons/Elevator_icon.png" height="50" alt="">
                          @endif
                          @if ($property->aircondition)
                            <img class="pl-3" src="/images/extras_icons/air-conditioner.png" height="50" alt="">
                          @endif
                          @if ($property->balcony)
                            <img class="pl-3" src="/images/extras_icons/balcony-icon.png" height="50" alt="">
                          @endif
                          @if ($property->disabled)
                            <img class="pl-3" src="/images/extras_icons/icon-disabled.png" height="50" alt="">
                          @endif
                          @if ($property->garden)
                            <img class="pl-3" src="/images/extras_icons/garden-icon.png" height="50" alt="">
                          @endif

                        </td>
                      </tr>
                      <tr  class="table-borderless index-price">
                        <td align="right" class=" pt-3"><h5 class="text-white" >Preis</h5></td>
                        <td class=" pt-3 pr-3"><h5 class="text-white" id="eur"></h5></td>
                        <td class=" pt-3 pr-3"><h5 class="text-white money">{{$property->price}} Ft</h5></td>
                        <td class=" pt-3 pr-3"></th>
                      </tr>

                      <tr class="table-borderless" align="center">
                        <th class="pt-3 justify-content-center" colspan="2">
                          <h4>
                            {{$type_id[$property->type_id]}} - {{$list_type[$property->list_type]}} - {{$property->city}}
                          </h4>
                        </th>
                        <th colspan="2"></th>
                      </tr>
                      <tr>
                        <td colspan="4"><span class="index-text"><?php echo $property->text_de ?></span> </td>
                      </tr>

                    </tbody>
                  </table>
              </div>

                  {{--  Agent oszlop  --}}

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 index-agent">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="media  mt-1 pt-1 drop-shadow">
                      <img src="/uploads/agents/{{$property->agents->photo}}" width="64" class="align-self-start mr-1 ml-1" alt="{{$property->agents->name}}">
                      <div class="media-body">
                        <h5 class="mt-0"><strong>{{$property->agents->name}}</strong></h5>
                        <p class="pl-1 pr-1"><small>Sollten Sie Fragen haben, bitte nehmen Sie den Kontakt mit unseren Agent auf.
                          Falls Sie kein ungarisch Sprechen, dann melden Sie sich bitte bei Herrn Sztarovics <br>
                          0049-1578-400 1214 oder 0036-20-777 2000 <br> er hilft Sie weiter.</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><small><strong><i class="fas fa-phone"></i> Telefon</strong> {{$property->agents->tel}}</small></li>
                        <li class="list-group-item"><small><strong><i class="far fa-envelope"></i> Email</strong> {{$property->agents->email}}</small></li>
                        <li class="list-group-item"><small><strong><i class="fas fa-globe"></i> Nyelvek</strong> {{$property->agents->languages}}</small></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-12 pt-3">
                    <div class="card w3-padding w3-margin-bottom w3-small">
                      <div class="card-header">
                        <h4>Anzeigenposition auf der Karte:</span></h4>
                      </div>
                      <div class="card-body">
                        <iframe
                          frameborder="0" style="border:0; width:100%; height:300px;"
                          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBrdH7bXJbDwNHSyPVwWIoyIeTdiUbWP_c
                          &q={{$property->city}}%2C%20{{$property->street}}" allowfullscreen >
                        </iframe>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Würden Sie eine Immobilie kaufen?<br> Würden Sie eine Immobilie mieten?</h4>
                      </div>
                      <div class="card-body">
                        <ul>
                          <li>Persönlicher Kontakt, freundliche Beratung zu Ihrem Vorteil</li>
                          <li>Eskorte zur Immobilieninspektion, zum Grundbuchamt, zum Exposé usw.</li>
                          <li>Deutsch-ungarischer Dolmetscher für Verkäufer und Verleger in anderen Muttersprachen</li>
                          <li>Schreiben eines Vorvertrags, Bescheinigung von Vereinbarungen mit einem Anwalt</li>
                          <li>Wir helfen Ihnen als Hausmeister in Ihrer Abwesenheit auch nach dem Kauf einer Immobilie/li>
                          <li>Unser Projektfox-Bauteam führt ebenfalls Renovierungsarbeiten durch</li>
                        </ul>
                      </div>
                      <div class="card-header">
                          <h4>Borgen?</h4>
                      </div>
                      <div class="card-body">
                        <p>
                          Wir machen das beste Angebot
                          bekommt! Unser Spezialist holt das ab
                          Kontakt, der auch Sie sucht
                          derzeit das beste!
                        </p>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="container-fluid hide visible-lg visible-md center" >
        <div class="jumbotron" >
              <h1>WÜRDEN SIE IN DÉLDUNÁNTÚL EIN EIGENTUM KAUFEN ODER MIETEN?</h1>
              <h4>Dann sind Sie hier richtig.</h4>
              <p>Wir helfen Ihnen auch in Baranya, Pécs, Harkány und Siklós!</p>
        </div>
      </div>
      <div class="container" id="map-container">
          <h3>Unsere Anzeigen auf der Karte</h3>
          <div id="map" class="container"></div>
      </div>
@endsection
@section('scripts')
  <script>
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        var myHuf = myArr.rates.HUF;
        var myEur = Math.floor(<?php echo $property->price ?> / myHuf);
        var formatter = new Intl.NumberFormat('de-DE', {
          style: 'currency',
          currency: 'EUR',
        });
        document.getElementById("eur").innerHTML = formatter.format(myEur) ;
      }
    };
    xmlhttp.open("GET", "https://api.openrates.io/latest", true);
    xmlhttp.send();
  </script>
@endsection
