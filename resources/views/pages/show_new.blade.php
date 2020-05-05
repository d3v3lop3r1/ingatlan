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
$filter= config('property.filter.hu')

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
    <div class="d-none alert alert-success" role="alert" id="alertSuccess">
        Az ingatlant sikeresen mentette a kedvencek közé!
    </div>
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
                                @php
                                    $full_url=url()->full();
                                @endphp
                                Nézet: &ensp;
                                @if (session('view')=='box')
                                    <i class="fas fa-th text-danger"></i>
                                @else
                                <a href="/search/view/2"><i class="fas fa-th text-secondary"></i></a>
                                @endif
                                &ensp;
                                @if (session('view')=='rectangle')
                                <i class="fas fa-th-list text-danger"></i>
                                @else
                                <a href="/search/view/1"><i class="fas fa-th-list text-secondary"></i></a>
                                @endif
                            </div>
                            <div class="col-xs d-inline">
                                {!! Form::open(['action'=>'PagesController@filter', 'method'=>'GET','name'=>'filter', 'class'=>'form-inline']) !!}
                                        {!! Form::label('Rendezés:',null,['class' => 'control-label']); !!}&ensp;
                                        {!! Form::select('filter',$filter,session('filter'),['class' => 'form-control-sm','onchange'=>'this.form.submit()']); !!}
                                            {!! Form::hidden('old_url', url()->full()) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="ingatlanok-lista">
            <div class="container" id="app">
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
                                                                {{-- Photo  --}}
                            <div class="col-xs-12 mb-6">
                                    <div class="row border mt-3 shadow">
                                        <div class="col-xs-12 col-md-3">
                                            <div class="row center-xs">
                                                <div class="col-xs-12 mt-2">
                                                    <img class="img-thumbnail" src="{{$photo_file}}" alt="">
                                                    @if ($property->act_price)
                                                        <div class="show_act_price"><span class="money">{{$property->price}}</span>.-Ft </div>
                                                    @endif
                                                </div>
                                                <div class="col-xs-12 show-new-price">
                                                    <h5 class="text-white">
                                                        @if ($property->act_price)
                                                            <span class="money">{{$property->act_price}}</span>.-Ft

                                                        @else
                                                            <span class="money">{{$property->price}}</span>.-Ft
                                                        @endif
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <table class="table table-borderless table-sm show-new-adatok-tabla  mt-2">
                                                        <thead class="pt-3">
                                                            <tr>
                                                                <td> ID:{{110000 + $property->id}}</td>
                                                                <td></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
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
                                                                <th>Lakóterület</th>
                                                                <td>{{$property->area}} m2</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Szobák</th>
                                                                <td>{{$property->room_no}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <img src="/uploads/agents/{{$property->agents->photo}}" width="64" class="img-thumbnail mr-1 ml-1" alt="{{$property->agents->name}}">
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <h5><span class="text-md">{{$property->agents->name}}</span></h5>
                                                            <p class="small">Vezető értékesítő</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Adatok --}}
                                        </div>

                                                        {{-- Header es short_text --}}
                                        <div class="col-xs-12 col-md-6">
                                                <div class="row d-flex flex-column align-self-stretch">
                                                    <div class="col-xs-5 mt-2">
                                                        @php
                                                                $dt = Carbon::parse($property->updated_at);
                                                                $days=$dt->diffInDays();
                                                        @endphp
                                                        <h4>
                                                            @if ($days < 7)
                                                                <span class="badge badge-success ml-2">új</span>
                                                            @endif
                                                            @if ($property->act_price)
                                                                <span class="badge badge-danger ml-2">áresés</span>
                                                            @endif

                                                        </h4>
                                                    </div>
                                                    <div class="col-xs-12 mt-2 show-new-header">
                                                        <a href="/index/{{$property->id}}"><h4>{{$property->header_hun}}</h4></a>
                                                    </div>
                                                    <div class="col-xs-12 show-new-short-text">
                                                        @php
                                                            echo ($property->short_text_hun);
                                                        @endphp
                                                    </div>
                                                    <div class="col-xs-22 align-self-end align-items-end mt-auto">
                                                        <a class="btn btn-info btn-sm show-new-adatok-btn" href="/index/{{$property->id}}">Megtekintem</a>
                                                        <save-favourite :property-id="'{!! json_encode($property->id) !!}'"></save-favourite>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
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
@section('scripts')
<script src="/js/app.js"></script>

@endsection