@php
    use App\property;
    $properties = property::all();
    $cities = Arr::pluck($properties,'city','city');
    $cities = Arr::sort($cities);
    foreach ($cities as $city){
        $count_city = property::where('city',$city)->count();
        $cities[$city]= $city . '(' . $count_city . ')';
    }
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
<div class="container">
    <div class="row drop-shadow search-box center-xs">
        <div class="col-auto">
                {!! Form::open(['action'=>'PagesController@search', 'method'=>'POST', 'class'=>'']); !!}
                <div class="row center-xs">
                        <div class="col-auto">
                            {!! Form::label('Eladó/Kiadó',null,['class' => 'search-label', 'for'=>'type_id']); !!}
                            {!! Form::select('type_id',([null=>'Mind']+$type_id),null,['class' => 'form-control form-control-sm', 'id'=>'type_id']); !!}
                        </div>
                        <div class="col-auto">
                            {!! Form::label('Ingatlan típus',null,['class' => 'search-label', 'for'=>'list_type']); !!}
                            {!! Form::select('list_type',([null=>'Mind'])+$list_type,null,['class' => 'form-control form-control-sm', 'id'=>'list_type']); !!}
                        </div>
                        <div class="col-auto">
                            {!! Form::label('Hol?',null,['class' => 'search-label', 'for'=>'city']); !!}
                            {!! Form::select('city',([null=>'Mind']+$cities)
                                ,null, ['class' => 'form-control form-control-sm', 'id'=>'city']);
                            !!}
                        </div>
                        <div class="col-auto">
                            {!! Form::label('Szobák',null,['class' => 'search-label', 'for'=>'room_no']); !!}
                            {!! Form::select('room_no',[
                                null=>'Mind',
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
                        {!! Form::label('Min. alapterület',null,['class' => 'search-label', 'for'=>'area']); !!}
                        {!! Form::number('area',null,['class' => 'form-control  form-control-sm text-sm', 'id'=>'area']); !!}
                    </div>
                    <div class="col-auto">
                        {!! Form::label('Min. telekterület',null,['class' => 'search-label', 'for'=>'land_area']); !!}
                        {!! Form::number('land_area',null,['class' => 'form-control  form-control-sm', 'id'=>'land_area']); !!}
                    </div>
                    <div class="col-auto">
                        {!! Form::label('Max. ár',null,['class' => 'search-label', 'for'=>'price_max']); !!}
                        {!! Form::number('price_max',null,['class' => 'form-control  form-control-sm', 'id'=>'price_max']); !!}
                    </div>
                </div>
                <div class="row center-xs">
                    <div class="col-auto mt-3">
                        <button class="btn btn-sajat btn-sm mr-1" type="submit" >KERESÉS</button>
                        <button class="btn btn-sajat btn-sm ml-1" type="button" data-toggle="collapse" data-target="#collapseDetailedSearch" aria-expanded="false" aria-controls="collapseDetailedSearch">
                            Részletes keresés
                        </button>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
