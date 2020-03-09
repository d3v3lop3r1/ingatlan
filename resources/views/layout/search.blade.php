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
        <div class="col-xs-12">
            
            <div class="form-row  drop-shadow search-box">
                {!! Form::open(['url'=>'/search', 'method'=>'POST','name'=>'search', 'class'=>'form-inline']); !!}
                    <div class="col">
                        {!! Form::label('Eladó/Kiadó',null,['class' => 'search-label', 'for'=>'type_id']); !!}
                        {!! Form::select('type_id',[
                            0=>'Eladó',
                            3=>'Kiadó',
                            ],null,['class' => 'form-control form-control-sm', 'id'=>'type_id']); 
                        !!}
                    </div>
                    <div class="col">
                        {!! Form::label('Ingatlan típus',null,['class' => 'search-label', 'for'=>'list_type']); !!}
                        {!! Form::select('list_type',[
                            0=>'Mind',
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

                    <div class="col">
                        {!! Form::label('Hol?',null,['class' => 'search-label', 'for'=>'city']); !!}

                        {!! Form::select('city',(['0'=>'Mind']+$cities)
                            ,null, ['class' => 'form-control form-control-sm', 'id'=>'city']);
                         
                        !!}
                    </div>
                    <div class="col-auto">
                        {!! Form::label('Szobák',null,['class' => 'search-label', 'for'=>'room_no']); !!}
                        {!! Form::select('room_no',[
                            0=>'Mind',
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

                    <div class="col">
                        {!! Form::label('Min. alapterület',null,['class' => 'search-label', 'for'=>'area']); !!}
                        {!! Form::number('area',null,['class' => 'form-control  form-control-sm', 'id'=>'area']); !!}
                    </div>

                    <div class="col">
                        {!! Form::label('Min. telekterület',null,['class' => 'search-label', 'for'=>'land_area']); !!}
                        {!! Form::number('land_area',null,['class' => 'form-control  form-control-sm', 'id'=>'land_area']); !!}
                    </div>

                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-sm" type="submit" >KERESÉS</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>