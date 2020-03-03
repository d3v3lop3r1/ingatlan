            <div class="panel-body">
                  <div class="container">
                    <div class="row">
                        
                      <!-- Első oszlop  -->
                      
                      <div class="col-lg-3 col-md-3">

                        {{-- Kilátás --}}
                        <div class="form-group">
                            {!! Form::label('Kilátás',null,['class' => 'control-label']); !!}
                            {!! Form::select('look',[
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
                                'garázs - az árban'=>'garázs - az árban',
                                'garázs - megvehető'=>'garázs - megvehető',
                                'kültéri - az árban'=>'kültéri - az árban',
                                'kültéri - megvehető'=>'kültéri - megvehető',
                                'utcán - ingyenes'=>'utcán - ingyenes',
                                'utcán - fizetős'=>'utcán - fizetős',
                                'teremgarázs - az árban'=>'teremgarázs - az árban',
                                'teremgarázs - megevhető'=>'teremgarázs - megevhető'
                                ], null,
                                ['class' => 'form-control']
                            ); 
                            !!}

                        </div>

                        {{-- Komfort fokozat --}}

                        <div class="form-group">
                            {!! Form::label('Komfort fokozat',null,['class' => 'control-label']); !!}
                            {!! Form::select('comfort',[
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
                            {!! Form::select('height',[
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
                            {!! Form::checkbox('lift','',false); !!}
                          </div>
                          <div class="col-sm-4">
                            {!! Form::label('Erkély ',null,['class' => 'control-label']); !!}
                            {!! Form::checkbox('balcony','',false); !!}
                          </div>
                      
                          <div class="col-sm-4">
                            {!! Form::label('Légkondi ',null,['class' => 'control-label']); !!}
                            {!! Form::checkbox('aircondition','',false); !!}
                          </div>
                        </div>
                        <div align="right" class="form-group">
                            {!! Form::label('Akadálymentesített ',null,['class' => 'control-label']); !!}
                            {!! Form::checkbox('disabled','',false); !!}
                        </div>
                        <div align="right" class="form-group">
                            {!! Form::label('Kertkapcsolatos ',null,['class' => 'control-label']); !!}
                            {!! Form::checkbox('garden','',false); !!}
                        </div>
                        <div align="right" class="form-group">
                            {!! Form::label('Panelprogram ',null,['class' => 'control-label']); !!}
                            {!! Form::checkbox('panelprogram','',false); !!}
                        </div>
                      </div><!-- Harmadik oszlop vége -->
                    </div> <!-- Row -->
                  </div><!-- Container -->
            </div><!-- Panel-body -->
<div align="center">
    <button class="btn btn-default mb-5" type="submit" >MENTÉS</button>
</div>
</form>