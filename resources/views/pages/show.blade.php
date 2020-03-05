<?php
use App\photo;
use Carbon\Carbon;
use Intervention\Image\ImageManager;

?>
@extends('layout.main')
@section('tartalom')
    <section id="ingatlanok-header">
        <div class="container-fluid">
            <div class="row center-xs">
                <div class="col-xs-12">
                    <h1>Ingatlanok</>
                </div>
            </div>
        </div>
    </section>
    <section id="ingatlanok-lista">
        <div class="container-fluid">
            <div class="row center-xs ingatlan-sor">
                @foreach ($properties as $property)
                    <?php 
                    $photo_count = $property->photos->where('is_default','1')->count();
                    if ($photo_count){
                        $photo = $property->photos->where('is_default','1')->first();
                        $photo_file = $photo->file1;
                        $photo_file = "uploads/" . $photo_file;
                    } else {
                        $photo_file = "placeholder.png";
                    }
                    $image = Image::make($photo_file)->resize(300, 200);

                    ?>
                    
                    <div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 col-xl-3 ingatlan-box mb-3">
                            <div class="row">
                                <div class="col-xs-12 prop-header">
                                    <h5><a href="index/{{$property->id}}">{{$property->header}}</a></h5>
                                        <?php
                                        switch($property->type_id){
                                            case 0:
                                                echo '<h4>Eladó';
                                                $dt = Carbon::parse($property->updated_at);
                                                $days=$dt->diffInDays();
                                                if ($days < 14){
                                                    echo "<span class='badge badge-secondary'>Új</span>";
                                                }
                                                echo '</h4>';
                                                break;
                                            case 1:
                                                echo '<h4>Eladó cserelehetőséggel</h4>';
                                                break;
                                            case 2:
                                                echo '<h4>Kiadó eladási opcióval</h4>';
                                                break;
                                            case 3:
                                                echo '<h4>Kiadó</h4>';
                                                break;
                                          }

                                        ?>
                                    
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
        </div>
        <div class="container-fluid lapozas">
            <div class="row center-xs">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    {{ $properties->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection