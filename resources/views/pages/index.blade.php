<?php
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
      <div class="container clearfix" id="first-main">
          <div class="row">

              {{--  Fenykep oszlop  --}}
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
                <a href="{{$photo_default_file}}" data-lightbox="roadtrip"><img class="img-thumbnail" src="{{$photo_default_file}}" alt=""></a>
                <div class="row">
                  @foreach ($photos as $photo)
                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
                      <a href="/uploads/{{$photo->file1}}" data-lightbox="roadtrip"><img class="img-thumbnail" src="/uploads/{{$photo->file1}}" height="50" alt=""></a>
                    </div>
                  @endforeach
                </div>
              </div>

              {{--  Adatok oszlop   --}}
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <table class="table table-light table-sm index-adatok-tabla">
                    <thead class="thead-dark">
                      <tr>
                        <th># {{70000+$property->id}}</th>
                        <th colspan="3">{{$property->header}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Megye</th>
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
                        <th colspan="2" class="bg-danger"><h4 class="text-white money">{{$property->price}} Ft</h4></th>
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

