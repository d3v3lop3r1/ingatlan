@php
    use App\property;
    $properties = property::all();
    $cities = Arr::pluck($properties,'city','city');
    $cities = Arr::sort($cities);
@endphp
<div class="container search-container">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-row  drop-shadow search-box">
                {!! Form::open(['url'=>'/search', 'method'=>'POST','name'=>'search', 'class'=>'form-inline']); !!}
                    <div class="form-group col-sm-3">
                        {!! Form::select('type_id',[
                            0=>'Eladó',
                            3=>'Kiadó',
                            ],null,['class' => 'form-control form-control-sm', 'id'=>'type_id']); 
                        !!}
                    </div>


                    <div class="col">
                        {!! Form::label('Típus',null,['class' => 'search-label', 'for'=>'list_type']); !!}
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
                    <div class="col">
                        {!! Form::label('Szobák',null,['class' => 'search-label', 'for'=>'room_no']); !!}
                        {!! Form::number('room_no',null,['class' => 'form-control form-control-sm', 'id'=>'room_no']); !!}
                    </div>

                    <div class="col">
                        {!! Form::label('Lakóterület(m2)',null,['class' => 'search-label', 'for'=>'area']); !!}
                        {!! Form::number('area',null,['class' => 'form-control  form-control-sm', 'id'=>'area']); !!}
                      </div>

                    <div class="col">
                        <button class="btn btn-primary btn-sm" type="submit" >KERESÉS</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>