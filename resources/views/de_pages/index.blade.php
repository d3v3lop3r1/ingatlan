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
if ($property->act_price){
  $price = $property->act_price;
} else {
  $price = $property->price;
}
@endphp
@extends('de_layouts.main')

@section('tartalom')
@if (session('mail_message'))
<div class="alert alert-success text-center">{{session('mail_message')}}</div>
@endif

@php
if($property->photos->where('is_default','1')->count()>0){
    $photo_default = $property->photos->where('is_default','1')->first();
    $photo_default_file = $photo_default->file1;
    $photo_default_file = "/uploads/" . $photo_default_file;
} else {
    $photo_default_file = "/uploads/placeholder.png";
}
@endphp
<div class="container-fluid" id="first-main">
          <div class="row">

              {{--  Fenykep oszlop  --}}

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4" >
                <a href="{{$photo_default_file}}" data-lightbox="roadtrip"><img class="img-thumbnail" src="{{$photo_default_file}}" alt=""></a>
                <div class="row">
                    <?php
                      if($property->photos->where('is_default',null)->count()>0){
                          $photos = $property->photos->where('is_default',null)->all();
                          foreach ($photos as $photo){
                    ?>
                      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 mt-1">
                        <a href="/uploads/{{$photo->file1}}" data-lightbox="roadtrip"><img class="img-thumbnail" src="/uploads/{{$photo->file1}}" height="50" alt=""></a>
                      </div>
                  <?php
                          }
                      }
                  ?>
              </div>
            </div>
              {{--  Adatok oszlop   --}}

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 mt-1">
                  <table class="table table-sm table-bordered index-adatok-tabla">
                    <thead class="pt-3">
                      <tr>
                        <th>ID:{{110000 + $property->id}}</th>
                        <th colspan="3">{{$property->header_de}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Region</th>
                        <td>{{$region[$property->region]}}</td>
                        <th>Attraktivität</th>
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
                        <th>Update</th>
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
                        <th>Grundstück</th>
                        <td>{{$property->land_area}} m2</td>
                        <th>Wohnfläche</th>
                        <td>{{$property->area}} m2</td>
                      </tr>

                      <tr>
                        <th>Zimmer</th>
                        <td>{{$property->room_no}}</td>
                        <th>Badezimmer</th>
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
                            <img class="pl-3" src="/images/extras_icons/balcony-icon-new.png" height="50" alt="">
                          @endif
                          @if ($property->disabled)
                            <img class="pl-3" src="/images/extras_icons/icon-disabled.png" height="50" alt="">
                          @endif
                          @if ($property->garden)
                            <img class="pl-3" src="/images/extras_icons/garden-icon-new.png" height="50" alt="">
                          @endif
                          @if ($property->terrace)
                            <img class="pl-3" src="/images/extras_icons/terrace-icon.png" data-toggle="tooltip" data-placement="top" data-html="true" title="" height="50" alt="">
                          @endif
                        </td>
                      </tr>
                      <tr  class="table-borderless index-price">
                        <td class=" pt-3" colspan="4">
                          <h5 class="text-white" >
                            Preis &emsp;
                            @if ($property->act_price)
                              <i class="fas fa-caret-down text-success"></i>
                            @endif
                            <span class="money">{{$price}}</span>.-Ft
                            &emsp;
                            <span class="text-white" id="eur"></span>
                          </h5>
                        </td>
                      </tr>
                      <tr class="table-borderless index-header-sor">
                        <th class="pt-3" colspan="4">
                          <h4 class="index_mutato">
                            {{$list_type[$property->list_type]}} - {{$type_id[$property->type_id]}} - {{$property->city}}
                          </h4>
                        </th>
                      </tr>
                      <tr>
                        <td colspan="4" class="index-text">
                          <span >
                            <?php echo $property->text_de ?>
                            <small class="text-muted">
                              <strong>Daten</strong><br> 
                              keine Haftung für die Genauigkeiten von aufgelisteten Daten. 
                              Weitere Informationen werden erst vor Ort in Pécs nach Terminvereinbarung dargelegt.
                            </small>
                          </span> 
                        </td>
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
                        <li class="list-group-item"><small><strong><i class="fas fa-phone"></i> Telefon2</strong> {{$property->agents->tel2}}</small></li>
                        <li class="list-group-item"><small><strong><i class="far fa-envelope"></i> Email</strong> {{$property->agents->email}}</small></li>
                        <li class="list-group-item"><small><strong><i class="fas fa-globe"></i> Sprache</strong> {{$property->agents->languages}}</small></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-12 mt-1">
                    <button type="button" class="btn btn-sajat btn-block" data-toggle="modal" data-target="#messengerModal">
                        <i class="far fa-envelope"></i> &nbsp Nachricht absenden
                    </button>
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
                        <h4>Unsere Dienstleistungen sind erfogsversprechend, dabei fair und freundlich</h4>
                      </div>
                      <div class="card-body">
                        <ul>
                          <li>Na klar, es geht um eine Wunschimmobilie, trotzdem steht bei und der Mensch im Mittelpunkt</li>
                          <li>Unsere Repräsentanten raten, beraten und abraten faire Weise in Ihrer Interesse</li>
                          <li>Deutsch-ungarisch sprechende Dolmetscher steht Ihnen mit Rat und Tat auf der Stelle</li>
                          <li>Begleitservice bei Besichtigungen hilft Ihnen mit Auswertungen, Analysen</li>
                          <li>Wir empfehlen Ihnen auch für Ihre rechtliche Angelegenheiten deutsch-ungarisch sprchende Anwälte in Südwestungarn</li>
                          <li>Wir kümmern un sum Ihr Anwesen während Ihrer Abwesenheit Renovierungsarbeiten durch</li>
                        </ul>
                      </div>
                      <div class="card-header">
                          <h4>Und wenn Sie spezielle Wünsche haben</h4>
                      </div>
                      <div class="card-body">
                        <p>
                          Wir recherchieren nach, finden Ihr Wunschimmobilie
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
            <h1>JETZT IMMOBILIEN KAUFEN IN SÜDUNGARN</h1>
            <h1>JETZT KRIEGT MAN FÜR EURO</h1>
            <h1>TRAUMHÄUSER SUPER GÜNSTIG! </h1>
            <h4>2020 wird das Jahr der Schnäppcheneinkäufe von Traumhäuser.</h4>
            <p>Wir helfen Ihnen auch in Baranya, Pécs, Harkány und Siklós!</p>
        </div>
      </div>
      <div class="container" id="map-container">
          <h3>Unsere Anzeigen auf der Karte</h3>
          <div id="map" class="container"></div>
      </div>
@endsection
@section('scripts')
  @include('../scripts/get_eur')
@endsection
