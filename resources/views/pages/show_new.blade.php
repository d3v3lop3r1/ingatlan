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
                <div class="row center-xs">
                    <div class="col-xs-6">
                        <div class="row bottom-xs around-xs mb-3 mt-3">
                            <div class="col-xs d-inline">
                                Nézet: &ensp;<i class="fas fa-th"></i>&ensp;<i class="fas fa-th-list"></i>
                            </div>
                            <div class="col-xs d-inline">
                                {!! Form::open(['action'=>'PagesController@filter', 'method'=>'GET','name'=>'filter', 'class'=>'form-inline']) !!}
                                        {!! Form::label('Rendezés:',null,['class' => 'control-label']); !!}&ensp;
                                        {!! Form::select('filter',[
                                            '1'=>'Dátum szerint legfrissebb',
                                            '2'=>'Dátum szerint legrégebbi',
                                            '3'=>'Ár szerint legdrágább',
                                            '4'=>'Ár szerint legolcsóbb',
                                            '5'=>'Méret szerint legnagyobb',
                                            '6'=>'Méret szerint legkisebb'
                                            ],session('filter'),['class' => 'form-control-sm','onchange'=>'this.form.submit()']); !!}
                                            {!! Form::hidden('old_url', url()->full()) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="ingatlanok-lista">
            <div class="container">
                <div class="row ingatlan-sor">
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

                            <div class="col-xs-12 mb-6">
                                    <div class="row border mt-3 shadow">
                                        <div class="col-xs-3">
                                            <div class="row center-xs">
                                                <div class="col-xs-12 mt-2">
                                                    <img class="img-thumbnail" src="{{$photo_file}}" alt="">
                                                </div>
                                                <div class="col-xs-12 show-new-price">
                                                    <h5 class="text-white"><span class="money">{{$property->price}}</span>.-Ft</h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xs-3">
                                            <table class="table table-sm show-adatok-tabla  mt-2">
                                                <thead class="pt-3">
                                                    <tr>
                                                        <th align="center"> ID:1100{{$property->id}}</th>
                                                        <th align="center"></th>
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
                                                    <tr  class="index-price">
                                                        <td align="center" colspan="2" class=" pt-3 pr-3"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="row">
                                                <div class="col-xs-12 mt-2 show-new-header">
                                                    <h4>{{$property->header_hun}}</h4>
                                                </div>
                                                <div class="col-xs-12 show-new-short-text">
                                                    @php
                                                        echo ($property->short_text_hun);
                                                    @endphp
                                                </div>
                                            </div>

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
