@php
    use App\property;
    $properties = property::all();
    $cities = Arr::pluck($properties,'city','city');
    $cities = Arr::sort($cities);
    foreach ($cities as $city){
        $count_city = property::where('city',$city)->count();
        $cities[$city]= $city . '(' . $count_city . ')';
    }
@endphp
<div class="container search-container">
    <div class="row search-row">
        <div class="col-xs">
            {!! Form::open(['action'=>'PagesController@search', 'method'=>'POST','name'=>'search', 'class'=>'']); !!}
            <div class="row  drop-shadow search-box center-xs">
                    <div class="col-auto">
                        {!! Form::label('Eladó/Kiadó',null,['class' => 'search-label', 'for'=>'type_id']); !!}
                        {!! Form::select('type_id',[
                            0=>'Eladó',
                            3=>'Kiadó',
                        ],null,['class' => 'form-control form-control-sm', 'id'=>'type_id']); 
                        !!}
                    </div>1
                    <div class="col-auto">
                        {!! Form::label('Ingatlan típus',null,['class' => 'search-label', 'for'=>'list_type']); !!}
                        {!! Form::select('list_type',[
                            null=>'Mind',
                            1=>'Lakás',
                            2=>'Ház',
                            3=>'Nyaraló',
                            4=>'Garázs',
                            5=>'Iroda',
                            6=>'Ipari',
                            7=>'Raktár',
                            8=>'Üzlethelyiség',
                            9=>'Telek-föld',
                            10=>'Vendéglátás',
                            11=>'Egyéb',
                            ],null,['class' => 'form-control form-control-sm', 'id'=>'list_type']); 
                        !!}
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

                    <div class="col-auto">
                        {!! Form::label('Min. alapterület',null,['class' => 'search-label', 'for'=>'area']); !!}
                        {!! Form::number('area',null,['class' => 'form-control  form-control-sm text-sm', 'id'=>'area']); !!}
                    </div>

                    <div class="col-auto">
                        {!! Form::label('Min. telekterület',null,['class' => 'search-label', 'for'=>'land_area']); !!}
                        {!! Form::number('land_area',null,['class' => 'form-control  form-control-sm', 'id'=>'land_area']); !!}
                    </div>
                    <div class="col-auto">
                        {!! Form::label('Min. ár',null,['class' => 'search-label', 'for'=>'price_min']); !!}
                        {!! Form::number('price_min',null,['class' => 'form-control  form-control-sm', 'id'=>'price_min']); !!}
                    </div>

                    <div class="col-auto">
                        {!! Form::label('Max. ár',null,['class' => 'search-label', 'for'=>'price_max']); !!}
                        {!! Form::number('price_max',null,['class' => 'form-control  form-control-sm', 'id'=>'price_max']); !!}
                    </div>

                    <div class="col-xs-12 mt-3">
                        <button class="btn btn-primary btn-sm" type="submit" >KERESÉS</button>
                    </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>