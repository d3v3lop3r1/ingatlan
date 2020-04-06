<?php
use App\photo;
use Carbon\Carbon;
use Intervention\Image\ImageManager;
use App\property;
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

?>
@extends('layout.main')
@section('tartalom')
    @php
        $prop_count = $properties->count();
        if (!isset($mutato)){
            $mutato='';
        }
    @endphp
    @if ($prop_count)
    @php
        $properties=$properties->paginate(9);
    @endphp
    <section id="ingatlanok-header">
            <div class="container-fluid">
                <div class="row center-xs">
                    <div class="col-xs-12">
                        <h4>{{$mutato}}</h4>
                        <h4>Ajánlatok száma: <span class="badge badge-primary">{{$prop_count}}</span> </h4>
                    </div>
                </div>
            </div>
        </section>
        <section id="ingatlanok-lista">
            <div class="container-fluid">
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
                            
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ingatlan-box mb-6">
                                    <div class="row border mt-3 shadow">
                                        <div class="col-xs-3 main-photo">
                                            <div class="row">
                                                <div class="col-auto prop-header-alul-jobb">
                                                ID:{{1100 + $property->id}}
                                                </div>
                                            </div>
                                            <img class="img-thumbnail" src="{{$photo_file}}" alt="">
                                        </div>
                                        <div class="col-xs-3 prop-header-new">
                                            <h5><a class="stretched-link" href="/index/{{$property->id}}">{{$property->header_hun}}</a></h5>
                                            <div class="row justify-content-between">
                                                <div class="col-auto prop-header-alatt-bal start-xs ">
                                                    <?php
                                                    $dt = Carbon::parse($property->updated_at);
                                                    $days=$dt->diffInDays();
                                                    echo $type_id[$property->type_id];
                                                    if ($days < 14){
                                                        echo "<span class='badge badge-secondary badge-danger ml-2'>Új</span>";
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col-xs-auto prop-header-alatt-jobb">
                                                    <i class="fas fa-camera-retro"></i> {{$photo_count}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-3">
                                            <table class="table table-sm table-bordered index-adatok-tabla  mt-2">
                                              <thead class="thead-dark pt-3">
                                                <tr>
                                                  <th scope="col"> ID:{{1100+$property->id}}</th>
                                                  <th  scope="col" >Adatok</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr  scope="row">
                                                  <th>Régió</th>
                                                  <td>{{$region[$property->region]}}</td>
                                                </tr>
                                                <tr>
                                                  <th>Város</th>
                                                  <td>{{$property->city}}</td>
                                                </tr>
                                                <tr>
                                                  <th>Telek méret</th>
                                                  <td>{{$property->land_area}} m2</td>
                                                </tr>  
                                                <tr>
                                                  <th>Lakóterőlet</th>
                                                  <td>{{$property->area}} m2</td>
                                                </tr>
                          
                                                <tr>
                                                  <th>Szobák száma</th>
                                                  <td>{{$property->room_no}} db</td>
                                                </tr>
                                                <tr  class="table-borderless index-price">
                                                  <td colspan="2" class=" pt-3 pr-3"><h5 class="text-white"><span class="money">{{$property->price}}</span>.-Ft</h5></td>
                                                </tr>                                                
                                              </tbody>
                                            </table>
                                        </div>  
                                            <div class="col-xs-4">
                                                @php
                                                    echo ($property->header_hun);
                                                @endphp
                                                
                                            </div>
                                </div>


                                    {{--  Adatok  --}}
                                    
                                    
                            </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="container lapozas">
                <div class="row">
                    <div class="col-xs mx-auto">
                        <p>
                            {{ $properties->appends(Request::except('page'))->links() }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @else
        <div class="container-fluid">
            <div class="row center-xs">
                <div class="col-xs-12">
                    <h3 class="text-danger">SAJNOS NINCS A KERESÉSNEK MEGFELELŐ INGATLAN!</h3>
                </div>
            </div>
        </div>
    @endif
@endsection