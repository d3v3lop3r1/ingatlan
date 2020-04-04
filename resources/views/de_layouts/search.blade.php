@php
    use App\property;
    $properties = property::all();
    $cities = Arr::pluck($properties,'city','city');
    $cities = Arr::sort($cities);
    foreach ($cities as $city){
        $count_city = property::where('city',$city)->count();
        $cities[$city]= $city . '(' . $count_city . ')';
    }
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
<div class="container">
    <div class="row drop-shadow search-box center-xs">
        <div class="col-auto">
                {!! Form::open(['action'=>'dePagesController@search', 'method'=>'POST', 'class'=>'']); !!}
                <div class="row center-xs">
                        <div class="col-auto">
                            {!! Form::label('Kaufen/Mieten',null,['class' => 'search-label', 'for'=>'type_id']); !!}
                            {!! Form::select('type_id',([null=>'Alle']+$type_id),null,['class' => 'form-control form-control-sm', 'id'=>'type_id']); !!} 
                        </div>
                        <div class="col-auto">
                            {!! Form::label('Art der Immobilie',null,['class' => 'search-label', 'for'=>'list_type']); !!}
                            {!! Form::select('list_type',([null=>'Alle']+$list_type),null,['class' => 'form-control form-control-sm', 'id'=>'list_type']); !!} 
                        </div>
                        <div class="col-auto">
                            {!! Form::label('Wo?',null,['class' => 'search-label', 'for'=>'city']); !!}
                            {!! Form::select('city',([null=>'Alle']+$cities)
                                ,null, ['class' => 'form-control form-control-sm', 'id'=>'city']);
                            !!}
                        </div>
                        <div class="col-auto">
                            {!! Form::label('Zimmer',null,['class' => 'search-label', 'for'=>'room_no']); !!}
                            {!! Form::select('room_no',[
                                null=>'Alle',
                                1=>'1+',
                                2=>'2+',
                                3=>'3+',
                                4=>'4+',
                                5=>'5+',
                                6=>'6+',
                                7=>'7+',
                                8=>'8+',
                                9=>'9+',
                                10=>'10+',
                                ],null,['class' => 'form-control form-control-sm', 'id'=>'room_no']); 
                            !!}
                        </div>
                </div>
                <div class="collapse row center-xs" id="collapseDetailedSearch">
                    <div class="col-auto">
                        {!! Form::label('ab Wohnfläche/m2',null,['class' => 'search-label', 'for'=>'area']); !!}
                        {!! Form::number('area',null,['class' => 'form-control  form-control-sm text-sm', 'id'=>'area']); !!}
                    </div>
                    <div class="col-auto">
                        {!! Form::label('ab Grundstück/m2',null,['class' => 'search-label', 'for'=>'land_area']); !!}
                        {!! Form::number('land_area',null,['class' => 'form-control  form-control-sm', 'id'=>'land_area']); !!}
                    </div>
                    <div class="col-auto">
                        {!! Form::label('Preis bis/Ft',null,['class' => 'search-label', 'for'=>'price_max']); !!}
                        {!! Form::number('price_max',null,['class' => 'form-control  form-control-sm', 'id'=>'price_max']); !!}
                    </div>
                </div>
                <div class="row center-xs">
                    <div class="col-auto mt-3">
                        <button class="btn btn-primary btn-sm mr-1" type="submit" >SUCHE STARTEN</button>
                        <button class="btn btn-primary btn-sm ml-1" type="button" data-toggle="collapse" data-target="#collapseDetailedSearch" aria-expanded="false" aria-controls="collapseDetailedSearch">
                            Weitere Suchoptionen
                        </button>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>