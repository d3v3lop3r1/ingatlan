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
                    @if (isset($property->id))
                       
                        <?php 
                        $photo_count = $property->photos->count();
                        if ($photo_count){
                            $photo = $property->photos->where('is_default','1')->first();
                            $photo_file = $photo->file1;
                            $photo_file = "uploads/" . $photo_file;
                        } else {
                            $photo_file = "placeholder.png";
                        }

                        ?>
                        
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 ingatlan-box mb-3">
                                <div class="row">
                                    <div class="col-xs-12 prop-header">
                                        <h5><a class="stretched-link" href="index/{{$property->id}}">{{$property->header}}</a></h5>
                                        <div class="row justify-content-between">
                                            <div class="col-md-6 prop-header-alatt-bal start-md ">
                                                <?php
                                                $dt = Carbon::parse($property->updated_at);
                                                $days=$dt->diffInDays();
                                                switch($property->type_id){
                                                    case 0:
                                                        echo 'Eladó';
                                                        break;
                                                    case 1:
                                                        echo 'Eladó cserelehetőséggel';
                                                        break;
                                                    case 2:
                                                        echo 'Kiadó eladási opcióval';
                                                        break;
                                                    case 3:
                                                        echo 'Kiadó';
                                                        break;
                                                }
                                                if ($days < 14){
                                                    echo "<span class='badge badge-secondary badge-danger ml-2'>Új</span>";
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-2 prop-header-alatt-jobb">
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
                    @else
                        <h1>Nincs a keresésnek megfelelő találat!</h1>

                    @endif
                @endforeach
                
            </div>
        </div>
        <div class="container lapozas">
            <div class="row">
                <div class="col-xs mx-auto">
                    <p>
                        {{-- @php
                                
                        @endphp
                        {{ $properties->links() }} --}}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection