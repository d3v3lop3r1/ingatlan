<?php
use App\client;
use App\agent;
?>
<br><br><br>
<h3>Lakás Hirdetés feladás</h3>
<h5 class="text-muted">alapadatok</h5>
@if (count($errors)>0)
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <ul>
                <li>{{$error}}</li>
                </ul>
                
            @endforeach
    </div>
@endif
<br>
{!! Form::open(['url'=>'/admin', 'method'=>'POST','name'=>'lakas_eladas']) !!}
    {!! Form::hidden('type_id','1')!!}
    {!! Form::hidden('list_type','1')!!}
    {!! Form::hidden('active','0')!!}

            <div class="panel-body">
                  <div class="container">
                    <div class="row">
                    
                    <!-- Első oszlop  -->
                      <div class="col-lg-3 col-md-3 col-sm-3">

                        {{-- Ügynök kiválasztása  --}}

                        <div class="form-group">
                            {!! Form::label('Ügynök',null,['class' => 'control-label']); !!}
                            {!! Form::select('agent_id',agent::pluck('name','id'),null,['placeholder'=>'--Válassz ügynököt--','class' => 'form-control','require']); !!}
                        </div>

                        {{-- Kliens kiválasztása  --}}

                        <div class="form-group">
                            {!! Form::label('Kliens',null,['class' => 'control-label']); !!}
                            {!! Form::select('client_id',['0'=>'--Válassz ügynököt--'],null,['class' => 'form-control']); !!}
                        </div>

                        {{-- Lakás típusa --}}

                        <div class="form-group">
                            {!! Form::label('Lakás típusa*','Tégla',['class' => 'control-label']); !!}
                            {!! Form::select('subtype',[
                                'Tégla'=>'Tégla',
                                'Panel'=>'Panel',
                                'Csúsztatott zsalus'=>'Csúsztatott zsalus'

                                ],
                                ['class' => 'form-control']
                            ); 
                            !!}
                        </div>

                        {{-- Header --}}

                        <div class="form-group">
                            {!! Form::label('Hirdetés fejléce*',null,['class' => 'control-label']); !!}
                            {!! Form::text('header',null,['class' => 'form-control', 'placeholder'=>'Adj meg egy fejlécet...']); !!}
                        </div>

                        {{-- Text --}}

                        <div class="form-group">
                            {!! Form::label('Ingatlan egyéb leírása*',null,['class' => 'control-label']); !!}
                            {!! Form::textarea('text',null,['class' => 'form-control', 'rows'=>'5', 'placeholder'=>'Írd ide a leírást...']); !!}
                        </div>
                      </div><!-- elso oszlop -->
                      
                    <!-- Második oszlop  -->
                      <div class="col-lg-3 col-md-3">

                        {{-- Country --}}

                        {!! Form::hidden('country','Maygarország')!!}


                        {{-- Megye --}}

                        <div class="form-group">
                                {!! Form::label('Megye*',null,['class' => 'control-label']); !!}
                                {!! Form::select('region',[
                                    'Bács-Kiskun'=>'Bács-Kiskun',
                                    'Baranya'=>'Baranya',
                                    'Békés'=>'Békés',
                                    'Borsod-Abaúj-Zemplén'=>'Borsod-Abaúj-Zemplén',
                                    'Csongrád'=>'Csongrád',
                                    'Fejér'=>'Fejér',
                                    'Győr-Moson-Sopron'=>'Győr-Moson-Sopron',
                                    'Hajdú-Bihar'=>'Hajdú-Bihar',
                                    'Jász-Nagykun-Szolnok'=>'Jász-Nagykun-Szolnok',
                                    'Komárom-Esztergom'=>'Komárom-Esztergom',
                                    'Nógrád'=>'Nógrád',
                                    'Pest'=>'Pest',
                                    'Somogy'=>'Somogy',
                                    'Szabolcs-Szatmár-Bereg'=>'Szabolcs-Szatmár-Bereg',
                                    'Tolna'=>'Tolna',
                                    'Vas'=>'Vas',
                                    'Veszprém'=>'Veszprém',
                                    'Zala'=>'Zala'],'Baranya',                                
                                    ['class' => 'form-control']
                                ); 
                                !!}
                        </div>

                        {{-- Helység --}}

                        <div class="form-group">
                            {!! Form::label('Helység*',null,['class' => 'control-label']); !!}
                            {!! Form::text('city',null,['class' => 'form-control', 'placeholder'=>'Add meg a helység nevét...']); !!}
                        </div>

                        {{-- Utca --}}

                        <div class="form-group">
                            {!! Form::label('Utca*',null,['class' => 'control-label']); !!}
                            {!! Form::text('street',null,['class' => 'form-control', 'placeholder'=>'Add meg az utca nevét...']); !!}
                        </div>

                        {{-- Házszám --}}

                        <div class="form-group">
                            {!! Form::label('Házszám*',null,['class' => 'control-label']); !!}
                            {!! Form::text('street_number',null,['class' => 'form-control', 'placeholder'=>'Add meg a házszámot...']); !!}
                        </div>

                        {{-- Ár --}}

                        <div class="form-group">
                            {!! Form::label('Eladási ár(Ft)*',null,['class' => 'control-label']); !!}
                            {!! Form::number('price',null,['class' => 'form-control', 'placeholder'=>'Add meg az árat...']); !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Minimum eladási ár(Ft)*',null,['class' => 'control-label']); !!}
                            {!! Form::number('min_price',null,['class' => 'form-control', 'placeholder'=>'Add meg a minimum árat...']); !!}
                        </div>
    
                    </div>
                      <!-- Második oszlop vége -->

                      <!-- Harmadik oszlop -->
                      <div class="col-lg-3 col-md-3">

                        {{-- Emeletek --}}

                        <div class="form-group">
                                {!! Form::label('Emeletek*',null,['class' => 'control-label']); !!}
                                {!! Form::select('floors',[
                                    'szuterén'=>'szuterén',
                                    'földszint'=>'földszint',
                                    'félemelet'=>'félemelet',
                                    '1'=>'1',
                                    '2'=>'2',
                                    '3'=>'3',
                                    '4'=>'4',
                                    '5'=>'5',
                                    '6'=>'6',
                                    '7'=>'7',
                                    '8'=>'8',
                                    '9'=>'9',
                                    '10'=>'10',
                                    '10 felett'=>'10 felett'],null,                               
                                    ['class' => 'form-control']
                                ); 
                                !!}
                            </div>
    
    
                        {{-- Szobák száma --}}

                        <div class="form-group">
                            {!! Form::label('Szobák száma(db)*',null,['class' => 'control-label']); !!}
                            {!! Form::number('room_no',null,['class' => 'form-control', 'placeholder'=>'Add meg a szobák számát...']); !!}
                        </div>

                        {{-- Félszobák száma --}}
                        
                        <div class="form-group">
                            {!! Form::label('Félszobák száma(db)*',null,['class' => 'control-label']); !!}
                            {!! Form::number('halfroom_no',null,['class' => 'form-control', 'placeholder'=>'Add meg a félszobák számát...']); !!}
                        </div>

                        {{-- Alapterület --}}

                        <div class="form-group">
                          {!! Form::label('Alapterület(m2)*',null,['class' => 'control-label']); !!}
                          {!! Form::number('area',null,['class' => 'form-control', 'placeholder'=>'Add meg az alapterületet...']); !!}
                        </div>

                        {{-- Állapot --}}

                        <div class="form-group">
                            {!! Form::label('Állapot*',null,['class' => 'control-label']); !!}
                            {!! Form::select('condition',[
                                'új építésű'=>'új építésű',
                                'újszerű'=>'újszerű',
                                'felújított'=>'felújított',
                                'jó állapotú'=>'jó állapotú',
                                'közepes állapotú'=>'közepes állapotú',
                                'felújítandó'=>'felújítandó'
                                ],null,                               
                                ['class' => 'form-control']
                            ); 
                            !!}

                        </div>

                        {{-- Fűtés --}}

                        <div class="form-group">
                            {!! Form::label('Fűtés*',null,['class' => 'control-label']); !!}
                            {!! Form::select('heating',[
                                'gáz(cirko)'=>'gáz(cirko)',
                                'gáz(konvektor)'=>'gáz(konvektor)',
                                'gáz(héra)'=>'gáz(héra)',
                                'távfűtés'=>'távfűtés',
                                'távfűtés egyedi méréssel'=>'távfűtés egyedi méréssel',
                                'elektromos'=>'elektromos',
                                'házközponti'=>'házközponti',
                                'házközponti egyedi méréssel'=>'házközponti egyedi méréssel',
                                'fan-coil'=>'fan-coil',
                                'geotermikus'=>'geotermikus',
                                'cserépkályha'=>'cserépkályha',
                                'egyéb'=>'egyéb'
                                ],null,                               
                                ['class' => 'form-control']
                            ); 
                            !!}
                                
                        </div>

                        {{-- Céges hirdetés --}}

                        <div class="form-group">
                            {!! Form::label('Céges hirdetés*',null,['class' => 'control-label']); !!}
                            {!! Form::checkbox('ad_type', false); !!}
                        </div>


                      </div>
                      
                      <!-- Harmadik oszlop vége -->


                    </div> <!-- Row -->
                    <hr>
                  </div><!-- Container -->
            </div><!-- Panel-body -->
