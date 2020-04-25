@php
use App\agent;
use Carbon\Carbon;
$type_id=config('property.type_id.hu');
$list_type=config('property.list_type.hu');
$subtype=config('property.subtype.hu');
$region= config('property.region.hu');
$floors=config('property.floors.hu');
$condition=config('property.condition.hu');
$heating=config('property.heating.hu');
$parking=config('property.parking.hu');
$comfort=config('property.comfort.hu');
$room_height=config('property.room_height.hu');

@endphp
@extends('layout.main')

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
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 mt-1">
                      <a href="/uploads/{{$photo->file1}}" data-lightbox="roadtrip"><img class="img-thumbnail" src="/uploads/{{$photo->file1}}" height="50" alt=""></a>
                    </div>
                  @endforeach
                </div>
              </div>

              {{--  Adatok oszlop   --}}

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 mt-1">
                <div class="">
                  <table class="table table-sm table-bordered index-adatok-tabla">
                    <thead class="pt-3">
                      <tr>
                        <th> ID:1100{{$property->id}}</th>
                        <th colspan="3">{{$property->header_hun}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Régió</th>
                        <td>{{$region[$property->region]}}</td>
                        <th>Attraktivitás</th>
                        <td class="index-stars">
                          @for ($i = 0; $i < $property->attraktivitas ; $i++)
                            <i class="fas fa-star stars"></i>
                          @endfor
                        </td>
                      </tr>
                      <tr>
                        <th>Város</th>
                        <td>{{$property->city}}</td>
                        <th>Állapot</th>
                        <td class="index-stars">
                          @for ($i = 0; $i < $property->allapot ; $i++)
                            <i class="fas fa-star stars"></i>
                          @endfor
                        </td>
                      </tr>
                      <tr>
                        <th>Frissítve</th>
                        <td>
                          <?php
                              $dt = Carbon::parse($property->updated_at);
                              echo $dt->diffInDays()." napja";
                          ?>
                        </td>
                        <th>Extrák</th>
                        <td class="index-stars">
                          @for ($i = 0; $i < $property->extrak ; $i++)
                            <i class="fas fa-star stars"></i>
                          @endfor
                        </td>

                      </tr>
                      <tr>
                        <th>Telek méret</th>
                        <td>{{$property->land_area}} m2</td>
                        <th>Lakóterület</th>
                        <td>{{$property->area}} m2</td>
                      </tr>

                      <tr>
                        <th>Szobák</th>
                        <td>{{$property->room_no}}</td>
                        <th>Fürdők</th>
                        <td>{{$property->bathroom_no}}</td>
                      </tr>
                      <tr>
                        <th>Állapot</th>
                        <td>{{$condition[$property->condition]}}</td>
                        <th>Fűtés</th>
                        <td>{{$heating[$property->heating]}}</td>
                      </tr>

                      <tr>
                        <th>Extrák</th>
                        <td colspan="3">
                          @if ($property->lift)
                            <img class="pl-3" src="/images/extras_icons/Elevator_icon.png" data-toggle="tooltip" data-placement="top" data-html="true" title="Az ingatlanban lift található" height="50" alt="">
                          @endif
                          @if ($property->aircondition)
                            <img class="pl-3" src="/images/extras_icons/air-conditioner.png" data-toggle="tooltip" data-placement="top" data-html="true" title="Az ingatlanban légkondícionáló található" height="50" alt="">
                          @endif
                          @if ($property->balcony)
                            <img class="pl-3" src="/images/extras_icons/balcony-icon-new.png" data-toggle="tooltip" data-placement="top" data-html="true" title="Az ingatlanban erkély található" height="50" alt="">
                          @endif
                          @if ($property->disabled)
                            <img class="pl-3" src="/images/extras_icons/icon-disabled.png" data-toggle="tooltip" data-placement="top" data-html="true" title="Az ingatlan akadálymentesített" height="50" alt="">
                          @endif
                          @if ($property->garden)
                            <img class="pl-3" src="/images/extras_icons/garden-icon-new.png" data-toggle="tooltip" data-placement="top" data-html="true" title="Az ingatlanhoz kert tartozik" height="50" alt="">
                          @endif
                          @if ($property->terrace)
                            <img class="pl-3" src="/images/extras_icons/terrace-icon.png" data-toggle="tooltip" data-placement="top" data-html="true" title="Az ingatlanhoz terasz tartozik" height="50" alt="">
                          @endif

                        </td>
                      </tr>
                      <tr  class="table-borderless index-price">
                        <td align="right" class=" pt-3"><h5 class="text-white" >Ár</h5></td>
                        <td class=" pt-3 pr-3"><h5 class="text-white" id="eur"></h5></td>
                        <td class=" pt-3 pr-3">
                          @if ($property->act_price)
                              <h5 class="text-white"><i class="fas fa-caret-down"></i><span class="money">{{$property->act_price}}</span>.-Ft</h5></td>
                          @else
                              <h5 class="text-white"><span class="money">{{$property->price}}</span>.-Ft</h5></td>
                          @endif
                        <td class=" pt-3 pr-3"></th>
                      </tr>
                      <tr class="table-borderless index-header-sor">
                        <th class="pt-3" colspan="4">
                          <h4 class="index_mutato">
                            {{$list_type[$property->list_type]}} - {{$type_id[$property->type_id]}} - {{$property->city}}
                          </h4>
                        </th>
                      </tr>
                      <tr>
                        <td colspan="4"><span class="index-text"><?php echo $property->text_hun ?></span> </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>

                  {{--  Agent oszlop  --}}

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 index-agent">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="media  mt-1 pt-1 drop-shadow">
                      <img src="/uploads/agents/{{$property->agents->photo}}" width="64" class="align-self-start mr-1 ml-1" alt="{{$property->agents->name}}">
                      <div class="media-body">
                        <h5 class="mt-0"><strong>{{$property->agents->name}}</strong></h5>
                        <p class="pl-1 pr-1"><small>Ha kérdése lenne az ingatlannal kapcsolatban, kérjük vegye fel a kapcsolatot ügynökünkkel.</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><small><strong><i class="fas fa-phone"></i> Telefon</strong> {{$property->agents->tel}}</small></li>
                        <li class="list-group-item"><small><strong><i class="fas fa-phone"></i> Telefon2</strong> {{$property->agents->tel2}}</small></li>
                        <li class="list-group-item"><small><strong><i class="far fa-envelope"></i> Email</strong> {{$property->agents->email}}</small></li>
                        <li class="list-group-item"><small><strong><i class="fas fa-globe"></i> Nyelvek</strong> {{$property->agents->languages}}</small></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xs-12 pt-3">
                    <div class="card w3-padding w3-margin-bottom w3-small">
                      <div class="card-header">
                        <h4>Hirdetés helye a térképen:</span></h4>
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
                        <h4>Ingatlant venne?<br> Ingatlant bérelne?</h4>
                      </div>
                      <div class="card-body">
                        <ul>
                          <li>Személyesen kapcsolatfelvétel,
                          baráti tanácsadás az Ön érdekében</li>
                          <li>Kíséret Ingatlanszemlékre,
                          földhivatalba, Exposé, stb.</li>
                          <li>Német-magyar tolmács más
                          anyanyelvű eladók-kiadók esetén</li>
                          <li>Előszerződés írása, megállapodások
                          hitelesítése ügyvédnél</li>
                          <li>Ingatlanvétel után is segítünk mint
                          Gondnoka a távollétében</li>
                          <li>Felújításokat is vállal Projektfox
                          építkező brigádunk</li>
                        </ul>
                      </div>
                      <div class="card-header">
                          <h4>Hitelfelvétel?</h4>
                      </div>
                      <div class="card-body">
                        <p>
                          Intézkedünk hogy a legjobb ajánlatot
                          kapja! Szakemberünkkel felveszi a
                          kapcsolatot aki kikeresi Önnek is az
                          aktuálisan legjobbat!
                        </p>
                      </div>
                      <div class="card-header">
                        <h4>CSOK?</h4>
                      </div>
                      <div class="card-body">
                          <p>
                          Olyan térségban választ ingatlant
                          ahol a Magyar kormány átvállalja az
                          ingatlan teljes költségét? Kérdezzen
                          bennünket, szakemberünk akkor is
                          fog tud segíteni ha a listánkban nem
                          talált megfelelőt!
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
              <h1>VÁSÁROLNA VAGY BÉRELNE INGATLANT A DÉLDUNÁNTÚLON?</h1>
              <h4>Akkor jó helyen jár.</h4>
        <p>Baranyában, Pécsett, Harkányban, Siklóson is segítségére leszünk!</p>
        </div>
      </div>
      <div class="container" id="map-container">
          <h3>Hirdetéseink a térképen</h3>
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
