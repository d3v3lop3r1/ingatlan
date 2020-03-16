<?php
use App\client;
use App\agent;

?>

@extends('layout.main-simple')

@section('tartalom')
<div class="row center-xs">
    <div class="col-xs-12">
        <h3>Hirdetés feladás</h3>
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
    </div>
</div>
{!! Form::open(['url'=>'/properties', 'method'=>'POST','name'=>'lakas_eladas']) !!}

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

                        {{-- Aktív --}}
                        
                        <div class="form-group">
                            {!! Form::label('Aktív',null,['class' => 'control-label']); !!}
                            {!! Form::select('active',[
                                '1'=>'igen',
                                null=>'nem',
                                ],null,                               
                                ['class' => 'form-control']
                            ); 
                            !!}
                                
                        </div>

                        {{-- Kiemelt --}}
                        
                        <div class="form-group">
                            {!! Form::label('Kiemelt',null,['class' => 'control-label']); !!}
                            {!! Form::select('kiemelt',[
                                '1'=>'igen',
                                null=>'nem',
                                ],null,                               
                                ['class' => 'form-control']
                            ); 
                            !!}
                                
                        </div>
                        
                        {{--  Hirdetés tipusa  --}}

                        <div class="form-group">
                            {!! Form::label('Hirdetés típusa*',null,['class' => 'control-label']); !!}
                            {!! Form::select('type_id',[
                                0=>'Eladó',
                                1=>'Eladó cserelehetőséggel',
                                2=>'Kiadó eladási opcióval',
                                3=>'Kiadó',
                                ],null,['class' => 'form-control']); 
                            !!}
                        </div>
                        {{--  Ingatlan tipusa  --}}

                        <div class="form-group">
                            {!! Form::label('Ingatlan típusa*',null,['class' => 'control-label']); !!}
                            {!! Form::select('list_type',[
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
                                ],null,['class' => 'form-control']); 
                            !!}
                        </div>

                        {{-- Ingatlan altípusa --}}

                        <div class="form-group">
                            {!! Form::label('Ingatlan altípusa*',null,['class' => 'control-label']); !!}
                            {!! Form::select('subtype',[
                                null=>'nem releváns',
                                'Tégla'=>'Tégla',
                                'Panel'=>'Panel',
                                'Csúsztatott zsalus'=>'Csúsztatott zsalus',
                                'Családi ház'=>'Családi ház',
                                'Ikerház'=>'Ikerház',
                                'Sorház'=>'Sorház',
                                'Házrész'=>'Házrész',
                                'Tanya'=>'Tanya',
                                'Könnyűszerkezetes'=>'Könnyűszerkezetes',
                                'Zártkert'=>'Zártkert',
                                'Szántóföld'=>'Szántóföld',
                                'Pince'=>'Pince',
                                'Közöshasználatú'=>'Közöshasználatú',
                                'Egyéb'=>'Egyéb',
                                ],null,['class' => 'form-control']); 
                            !!}
                        </div>

                        {{-- Header --}}

                        <div class="form-group">
                            {!! Form::label('Hirdetés fejléce*',null,['class' => 'control-label']); !!}
                            {!! Form::text('header',null,['class' => 'form-control', 'placeholder'=>'Adj meg egy fejlécet...']); !!}
                        </div>

                        {{-- Text --}}

                      </div><!-- elso oszlop -->
                      
                    <!-- Második oszlop  -->
                      <div class="col-lg-3 col-md-3">

                        {{-- Country --}}

                        {!! Form::hidden('country','Magyarország')!!}


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
                            {!! Form::label('Cím*',null,['class' => 'control-label']); !!}
                            {!! Form::text('street',null,['class' => 'form-control', 'placeholder'=>'Add meg az utca nevét...']); !!}
                        </div>

                        {{-- Házszám vagy helyrajzi szám--}}

                        <div class="form-group">
                            {!! Form::label('Házszám vagy helyrajzi szám*',null,['class' => 'control-label']); !!}
                            {!! Form::text('street_number',null,['class' => 'form-control', 'placeholder'=>'Add meg a házszámot...']); !!}
                        </div>

                        {{-- Eladási Ár --}}

                        <div class="form-group">
                            {!! Form::label('Eladási ár(Ft)*',null,['class' => 'control-label']); !!}
                            {!! Form::number('price',null,['class' => 'form-control', 'placeholder'=>'Add meg az árat...']); !!}
                        </div>

                        {{-- Minimum eladási Ár --}}
                        <div class="form-group">
                            {!! Form::label('Minimum eladási ár(Ft)*',null,['class' => 'control-label']); !!}
                            {!! Form::number('min_price',null,['class' => 'form-control', 'placeholder'=>'Add meg a minimum árat...']); !!}
                        </div>
    
                        {{-- Attraktivitás --}}
                        
                        <div class="form-group">
                            {!! Form::label('Attraktivitás',null,['class' => 'control-label']); !!}
                            {!! Form::number('attraktivitas',null,['class' => 'form-control', 'placeholder'=>'Attraktivitás értéke (1-5)']); !!}
                        </div>

                        {{-- Állapot --}}
                        
                        <div class="form-group">
                            {!! Form::label('Állapot',null,['class' => 'control-label']); !!}
                            {!! Form::number('allapot',null,['class' => 'form-control', 'placeholder'=>'Állapot értéke (1-5)']); !!}
                        </div>

                        {{-- Extrák --}}
                        
                        <div class="form-group">
                            {!! Form::label('Extrák',null,['class' => 'control-label']); !!}
                            {!! Form::number('extrak',null,['class' => 'form-control', 'placeholder'=>'Extrák értéke (1-5)']); !!}
                        </div>


                    </div>


                      <!-- Második oszlop vége -->

                      <!-- Harmadik oszlop -->
                      <div class="col-lg-3 col-md-3">

                        {{-- Emeletek --}}

                        <div class="form-group">
                                {!! Form::label('Ha emeleti*',null,['class' => 'control-label']); !!}
                                {!! Form::select('floors',[
                                    null=>'nem releváns',
                                    'szuterén'=>'szuterén',
                                    'földszinti'=>'földszinti',
                                    'félemeleti'=>'félemeleti',
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

                        {{-- Lakóterület --}}

                        <div class="form-group">
                          {!! Form::label('Lakóterület(m2)*',null,['class' => 'control-label']); !!}
                          {!! Form::number('area',null,['class' => 'form-control', 'placeholder'=>'Add meg az lakóterületet...']); !!}
                        </div>

                        {{-- Telekterület --}}

                        <div class="form-group">
                          {!! Form::label('Telekterület(m2)*',null,['class' => 'control-label']); !!}
                          {!! Form::number('land_area',null,['class' => 'form-control', 'placeholder'=>'Add meg az telekterületet...']); !!}
                        </div>

                        {{-- Állapot --}}

                        <div class="form-group">
                            {!! Form::label('Állapot*',null,['class' => 'control-label']); !!}
                            {!! Form::select('condition',[
                                null=>'nem releváns',
                                'kitűnő állapotú'=>'kitűnő állapotú',
                                'új építésű'=>'új építésű',
                                'újszerű'=>'újszerű',
                                'felújított'=>'felújított',
                                'részben felújítva'=>'részben felújítva',
                                'jó állapotú'=>'jó állapotú',
                                'közepes állapotú'=>'közepes állapotú',
                                'felújítandó'=>'felújítandó',
                                'azonnal beköltözhető'=>'azonnal beköltözhető',
                                ],null,                               
                                ['class' => 'form-control']
                            ); 
                            !!}

                        </div>

                        {{-- Fűtés --}}

                        <div class="form-group">
                            {!! Form::label('Fűtés*',null,['class' => 'control-label']); !!}
                            {!! Form::select('heating',[
                                null=>'nem releváns',
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
                                'kandalló'=>'kandalló',
                                'egyéb'=>'egyéb'
                                ],null,                               
                                ['class' => 'form-control']
                            ); 
                            !!}
                                
                        </div>

                        {{-- Céges hirdetés --}}

                        <div class="form-group">
                            {!! Form::label('Céges hirdetés*',null,['class' => 'control-label']); !!}
                            {!! Form::checkbox('ad_type'); !!}
                        </div>



                      </div>
                      
                      <!-- Harmadik oszlop vége -->


                    </div> <!-- Row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Ingatlan egyéb leírása*',null,['class' => 'control-label']); !!}
                                {!! Form::textarea('text',null,['class' => 'form-control', 'rows'=>'5', 'placeholder'=>'Írd ide a leírást...']); !!}
                            </div>
                        </div>
                    </div>
                    <hr>
                  </div><!-- Container -->
            </div><!-- Panel-body -->
            <div class="panel-body">
                    <div class="container">
                      <div class="row">
                          
                        <!-- Első oszlop  -->
                        
                        <div class="col-lg-3 col-md-3">
  
                          {{-- Kilátás --}}
                          <div class="form-group">
                              {!! Form::label('Kilátás',null,['class' => 'control-label']); !!}
                              {!! Form::select('look',[
                                null=>'nem releváns',
                                  'udvari'=>'udvari',
                                  'utcai'=>'utcai',
                                  'panorámás'=>'panorámás',
                                  'kertre néző'=>'kertre néző'],  null,                              
                                  ['class' => 'form-control']
                              ); 
                              !!}
                                      
                          </div>
      
  
                          {{-- Tájolás --}}
  
                          <div class="form-group">
                              {!! Form::label('Tájolás',null,['class' => 'control-label']); !!}
                              {!! Form::select('orientation',[
                                    null=>'nem releváns',
                                  'észak'=>'észak',
                                  'északkelet'=>'északkelet',
                                  'kelet'=>'kelet',
                                  'délkelet'=>'délkelet',
                                  'dél'=>'dél',
                                  'délnyugat'=>'délnyugat',
                                  'nyugat'=>'nyugat',
                                  'délkelet'=>'délkelet',
                                  'északnyugat'=>'északnyugat'
                                  ], null, 
                                  ['class' => 'form-control']
                              ); 
                              !!}
                          </div>
  
                          {{-- Parkolás --}}
  
                          <div class="form-group">
  
                              {!! Form::label('Parkolás',null,['class' => 'control-label']); !!}
                              {!! Form::select('parking',[
                                    null=>'nem releváns',
                                  'garázs - az árban'=>'garázs - az árban',
                                  'garázs - megvehető'=>'garázs - megvehető',
                                  'kültéri - az árban'=>'kültéri - az árban',
                                  'kültéri - megvehető'=>'kültéri - megvehető',
                                  'utcán - ingyenes'=>'utcán - ingyenes',
                                  'utcán - fizetős'=>'utcán - fizetős',
                                  'teremgarázs - az árban'=>'teremgarázs - az árban',
                                  'teremgarázs - megevhető'=>'teremgarázs - megevhető',
                                  'parkolás az udvarban'=>'parkolás az udvarban'
                                  ], null,
                                  ['class' => 'form-control']
                              ); 
                              !!}
  
                          </div>
  
                          {{-- Komfort fokozat --}}
  
                          <div class="form-group">
                              {!! Form::label('Komfort fokozat',null,['class' => 'control-label']); !!}
                              {!! Form::select('comfort',[
                                    null=>'nem releváns',
                                  'luxus'=>'luxus',
                                  'duplakomfortos'=>'duplakomfortos',
                                  'összkömfortos'=>'összkömfortos',
                                  'komfortos'=>'komfortos',
                                  'félkomfortos'=>'félkomfortos',
                                  'komfort nélküli'=>'komfort nélküli'
                                  ],null,
                                  ['class' => 'form-control']
                              ); 
                              !!}
                          </div>
                        </div><!-- elso oszlop vége -->
                        
                      <!-- Második oszlop  -->
                      
                        <div class="col-lg-3 col-md-3">
  
                          {{-- Tetőtér --}}
  
                          <div class="form-group">
                              {!! Form::label('Tetőtér',null,['class' => 'control-label']); !!}
                              {!! Form::select('attic',[
                                null=>'nem releváns',
                                  'tetőtéri'=>'tetőtéri',
                                  'nem tetőtéri'=>'nem tetőtéri',
                                  'legfelső emelet, nem tetőtéri'=>'legfelső emelet, nem tetőtéri',
                                  'zárószint'=>'zárószint',
                                  'penthouse'=>'penthouse',
                                  'egyéb'=>'egyéb'
                                  ],null,
                                  ['class' => 'form-control']
                              ); 
                              !!}
                          </div>
  
                          {{-- Belmagasság --}}
  
                          <div class="form-group">
                              {!! Form::label('Belmagasság',null,['class' => 'control-label']); !!}
                              {!! Form::select('room_height',[
                                null=>'nem releváns',
                                  '3m-nél alacsonyabb'=>'3m-nél alacsonyabb',
                                  '3m-nél magasabb'=>'3m-nél magasabb'
                                  ],null,
                                  ['class' => 'form-control']
                              ); 
                              !!}
                                  
                          </div>
  
                          {{-- Fürdők száma --}}
  
                          <div class="form-group">
                                  {!! Form::label('Fürdők száma(db)*',null,['class' => 'control-label']); !!}
                                  {!! Form::number('bathroom_no',null,['class' => 'form-control']); !!}
          
                          </div>
                          {{-- Wc-k száma --}}
  
                          <div class="form-group">
                                  {!! Form::label('WC-k száma(db)*',null,['class' => 'control-label']); !!}
                                  {!! Form::number('toilet_no',null,['class' => 'form-control']); !!}
          
                          </div>
                                  
                        </div><!-- Második oszlop -->
  
                        <!-- Harmadik oszlop -->
  
                        <div class="col-lg-3 col-md-3">
  
  
  
                          <div align="right" class="form-group form-inline">
                              
                            <div class="col-sm-4">
                                {!! Form::label('Lift ',null,['class' => 'control-label']); !!}
                                {!! Form::select('lift',[
                                  null=>'nincs',
                                  '1'=>'van',
                                  ],null,                               
                                  ['class' => 'form-control']
                              ); 
                              !!}
                              </div>
                              <div class="col-sm-4">
                                {!! Form::label('Erkély ',null,['class' => 'control-label']); !!}
                                {!! Form::select('balcony',[
                                  null=>'nincs',
                                  '1'=>'van',
                                  ],null,                               
                                  ['class' => 'form-control']
                              ); 
                              !!}
                              </div>
                          
                              <div class="col-sm-4">
                                {!! Form::label('Lékondi ',null,['class' => 'control-label']); !!}
                                {!! Form::select('aircondition',[
                                  null=>'nincs',
                                  '1'=>'van',
                                  ],null,                               
                                  ['class' => 'form-control']
                              ); 
                              !!}
                              </div>
                            </div>
                            <div align="right" class="form-group">
                                {!! Form::label('Akadálymentesített ',null,['class' => 'control-label']); !!}
                                {!! Form::select('disabled',[
                                  null=>'nem',
                                  '1'=>'igen',
                                  ],null,                               
                                  ['class' => 'form-control']
                              ); 
                              !!}
                            </div>
                            <div align="right" class="form-group">
                                {!! Form::label('Kertkapcsolatos ',null,['class' => 'control-label']); !!}
                                {!! Form::select('garden',[
                                  null=>'nem',
                                  '1'=>'igen',
                                  ],null,                               
                                  ['class' => 'form-control']
                              ); 
                              !!}
                            </div>
                          </div><!-- Harmadik oszlop vége -->
                      </div> <!-- Row -->
                    </div><!-- Container -->
              </div><!-- Panel-body -->
  <div align="center">
      <button class="btn btn-primary mb-5" type="submit" >MENTÉS</button>
  </div>
  </form>

@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

        $('select[name="agent_id"]').on('change', function(){
            var agentId = $(this).val();
            if(agentId) {
                $.ajax({
                    url: '/clients/get/'+agentId,
                    type:"GET",
                    dataType:"json",
/*                     beforeSend: function(){
                        $('#loader').css("visibility", "visible");
                    },
 */
                    success:function(data) {

                        $('select[name="client_id"]').empty();

                        $.each(data, function(key, value){

                            $('select[name="client_id"]').append('<option value="'+ key +'">' + value + '</option>');

                        });
                    },
/*                     complete: function(){
                        $('#loader').css("visibility", "hidden");
                    }
 */                });
            } else {
                $('select[name="client_id"]').empty();
            }

        });

        });
    </script>
@endsection
