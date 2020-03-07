<?php
use App\agent;

use Carbon\Carbon;
?>
@extends('layout.main')

@section('tartalom')
      <?php
        $photo_default = $property->photos->where('is_default','1')->first();
        $photos = $property->photos->where('is_default',null)->all();
        $photo_default_file = $photo_default->file1;
        $photo_default_file = "/uploads/" . $photo_default_file;
      ?>
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
                  <table class="table table-light table-sm index-adatok-tabla">
                    <thead class="thead-dark">
                      <tr>
                        <th># {{70000+$property->id}}</th>
                        <th colspan="3">{{$property->header}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Régió</th>
                        <td>{{$property->region}}</td>
                        <th>Attraktivitás</th>
                        <td >
                          @for ($i = 0; $i < $property->attraktivitas ; $i++)
                            <i class="fas fa-star stars"></i>
                          @endfor                          
                        </td>
                      </tr>
                      <tr>
                        <th>Város</th>
                        <td>{{$property->city}}</td>
                        <th>Állapot</th>
                        <td>
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
                        <td>
                          @for ($i = 0; $i < $property->extrak ; $i++)
                            <i class="fas fa-star stars"></i>
                          @endfor                          
                        </td>

                      </tr>
                      <tr>
                        <th>Telek méret</th>
                        <td>{{$property->land_area}} m2</td>
                        <th>Lakóterőlet</th>
                        <td>{{$property->area}} m2</td>
                      </tr>

                      <tr>
                        <th>Szobák száma</th>
                        <td>{{$property->room_no}} db</td>
                        <th>Fürdők száma</th>
                        <td>{{$property->bathroom_no}} db</td>
                      </tr>

                      <tr>
                        <th>Extrák</th>
                        <td colspan="3"></td>
                      </tr>
                      <tr>
                        <th align="right" class="bg-danger pt-2"><h5 class="text-white" >Ár</h5></th>
                        <th class="bg-danger pt-2 pr-3"><h5 class="text-white" id="eur"></h5></th>
                        <th class="bg-danger pt-2 pr-3"><h5 class="text-white money">{{$property->price}} Ft</h5></th>
                      </tr>

                      <tr>
                        <td colspan="4"><h4>Leírás</h4></td>
                      </tr>
                      <tr>
                        <td colspan="4"><?php echo $property->text; ?></td>
                      </tr>
                      
                    </tbody>
                  </table>
              </div>

                  {{--  Agent oszlop  --}}

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 index-agent">
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
                        <li class="list-group-item"><small><strong><i class="far fa-envelope"></i> Email</strong> {{$property->agents->email}}</small></li>
                        <li class="list-group-item"><small><strong><i class="fas fa-globe"></i> Nyelvek</strong> Magyar-Német-Spanyol</small></li>
                      </ul>
                    </div>
              </div>
          </div>
        </div>
      </div>
      <div class="container-fluid hide visible-lg visible-md center" >
        <div class="jumbotron" >
              <h1>EL SZERETNÉ ADNI LAKÁSÁT, HÁZÁT?</h1>
              <p>Mi nem csak képekkel, de videókkal is prezentáljuk ingatlanját!<br>
                 1 hirdetésfeladás INGYENES!
          </p>
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