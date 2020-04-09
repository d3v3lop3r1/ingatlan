                                    {{-- ADATOK --}}

                    <div class="row">

                        <!-- Első oszlop  -->
                        <div class="col-xs-3">
                            {{-- Aktív --}}

                            <div class="form-group">
                                {!! Form::label('Aktív',null,['class' => 'control-label']); !!}
                                {!! Form::select('active',[0=>'nem',1=>'igen'],null,['class' => 'form-control']); !!}
                            </div>

                            {{-- Kiemelt --}}

                            <div class="form-group">
                                {!! Form::label('Kiemelt',null,['class' => 'control-label']); !!}
                                {!! Form::select('kiemelt',[0=>'nem',1=>'igen'],null,['class' => 'form-control']); !!}
                            </div>

                                                    {{--  Hirdetés tipusa  --}}

                            <div class="form-group">
                                {!! Form::label('Hirdetés típusa*',null,['class' => 'control-label']); !!}
                                {!! Form::select('type_id',$type_id,null,['class' => 'form-control']);
                                !!}
                            </div>


                            {{--  Ingatlan tipusa  --}}

                            <div class="form-group">
                                {!! Form::label('Ingatlan típusa*',null,['class' => 'control-label']); !!}
                                {!! Form::select('list_type',$list_type,null,['class' => 'form-control']);
                                !!}
                            </div>

                            {{-- Ingatlan altípusa --}}

                            <div class="form-group">
                                {!! Form::label('Ingatlan altípusa*',null,['class' => 'control-label']); !!}
                                {!! Form::select('subtype',$subtype,null,['class' => 'form-control']);
                                !!}
                            </div>

                            {{-- Árak--}}

                            <div class="form-group">
                                {!! Form::label('Eladási ár(Ft)*',null,['class' => 'control-label']); !!}
                                {!! Form::number('price',null,['class' => 'form-control', 'placeholder'=>'Add meg az árat...']); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Minimum eladási ár(Ft)*',null,['class' => 'control-label']); !!}
                                {!! Form::number('min_price',null,['class' => 'form-control', 'placeholder'=>'Add meg a minimum árat...']); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Akciós ár(Ft)*',null,['class' => 'control-label']); !!}
                                {!! Form::number('act_price',null,['class' => 'form-control', 'placeholder'=>'Add meg a minimum árat...']); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Minimum depozit(Ft)*',null,['class' => 'control-label']); !!}
                                {!! Form::number('deposit',null,['class' => 'form-control', 'placeholder'=>'Add meg a minimum árat...']); !!}
                            </div>

                        </div>
                        <!-- elso oszlop Vége -->

                        <!-- Második oszlop  -->
                        <div class="col-xs-3">

                            {{-- Country --}}

                            {!! Form::hidden('country','Magyarország')!!}


                            {{-- Megye --}}

                            <div class="form-group">
                                    {!! Form::label('Megye*',null,['class' => 'control-label']); !!}
                                    {!! Form::select('region',$region,null,['class' => 'form-control']); !!}
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

                            {{-- Házszám vagy helyrajzi szám --}}

                            <div class="form-group">
                                {!! Form::label('Házszám vagy helyrajzi szám*',null,['class' => 'control-label']); !!}
                                {!! Form::text('street_number',null,['class' => 'form-control', 'placeholder'=>'Add meg a házszámot...']); !!}
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
                        </div>
                        <!-- Második oszlop vége -->

                        <!-- Harmadik oszlop -->
                        <div class="col-xs-3">

                            {{-- Emeletek --}}

                            <div class="form-group">
                                    {!! Form::label('Ha emeleti*',null,['class' => 'control-label']); !!}
                                    {!! Form::select('floors',$floors,null,['class' => 'form-control'] ); !!}


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

                        {{-- Állapot --}}

                            <div class="form-group">
                                {!! Form::label('Állapot*',null,['class' => 'control-label']); !!}
                                {!! Form::select('condition',$condition,null,['class' => 'form-control']); !!}
                            </div>

                            {{-- Fűtés --}}

                            <div class="form-group">
                                {!! Form::label('Fűtés*',null,['class' => 'control-label']); !!}
                                {!! Form::select('heating',$heating,null,['class' => 'form-control']); !!}
                            </div>

                            {{-- Céges hirdetés --}}

                            <div class="form-group">
                                {!! Form::label('Céges hirdetés*',null,['class' => 'control-label']); !!}
                                {!! Form::select('ad_type',[0=>'nem',1=>'igen',],null,['class' => 'form-control']); !!}
                            </div>

                        </div>
                        {{--  Harmadik oszlop vége --}}
                        {{-- Negyedik oszlop --}}
                        <div class="col-xs-3">

                            {{-- Parkolás --}}

                            <div class="form-group">
                                {!! Form::label('Parkolás',null,['class' => 'control-label']); !!}
                                {!! Form::select('parking',$parking,null,['class' => 'form-control']); !!}
                            </div>

                            {{-- Komfort fokozat --}}

                            <div class="form-group">
                                {!! Form::label('Komfort fokozat',null,['class' => 'control-label']); !!}
                                {!! Form::select('comfort',$comfort,null,['class' => 'form-control']); !!}
                            </div>

                            {{-- Belmagasság --}}

                            <div class="form-group">
                                {!! Form::label('Belmagasság',null,['class' => 'control-label']); !!}
                                {!! Form::select('room_height',$room_height,null,['class' => 'form-control']); !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('Lift ',null,['class' => 'control-label']); !!}
                                {!! Form::select('lift',[0=>'nincs',1=>'van'],null,['class' => 'form-control'] ); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Erkély ',null,['class' => 'control-label']); !!}
                                {!! Form::select('balcony',[0=>'nincs',1=>'van'],null,['class' => 'form-control']); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Terasz ',null,['class' => 'control-label']); !!}
                                {!! Form::select('terrace',[0=>'nincs',1=>'van'],null,['class' => 'form-control']); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Lékondi ',null,['class' => 'control-label']); !!}
                                {!! Form::select('aircondition',[0=>'nincs',1=>'van'],null,['class' => 'form-control']); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Akadálymentesített ',null,['class' => 'control-label']); !!}
                                {!! Form::select('disabled',[0=>'nem',1=>'igen'],null,['class' => 'form-control']); !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Kertkapcsolatos ',null,['class' => 'control-label']); !!}
                                {!! Form::select('garden',[0=>'nem',1=>'igen'],null,['class' => 'form-control']); !!}
                            </div>

                        </div><!-- Negyedik oszlop vége -->

                    </div> <!-- Row -->

                    {{-- Text --}}


                    <div class="row">
                            {{-- Header --}}
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Hirdetés fejléce*(Magyar)',null,['class' => 'control-label']); !!}
                                {!! Form::text('header_hun',null,['class' => 'form-control']); !!}
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Ingatlan rövid leírása*(Magyar)',null,['class' => 'control-label']); !!}
                                {!! Form::textarea('short_text_hun',null,['class' => 'form-control', 'placeholder'=>'Írd ide a rövid leírást...']); !!}
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Ingatlan leírása*(Magyar)',null,['class' => 'control-label']); !!}
                                {!! Form::textarea('text_hun',null,['class' => 'form-control', 'placeholder'=>'Írd ide a leírást...']); !!}
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Hirdetés fejléce*(Deutch)',null,['class' => 'control-label']); !!}
                                {!! Form::text('header_de',null,['class' => 'form-control']); !!}
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Ingatlan rövid leírása*(Deutch)',null,['class' => 'control-label']); !!}
                                {!! Form::textarea('short_text_de',null,['class' => 'form-control', 'placeholder'=>'Írd ide a rövid leírást...']); !!}
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Ingatlan leírása*(Deutch)',null,['class' => 'control-label']); !!}
                                {!! Form::textarea('text_de',null,['class' => 'form-control', 'placeholder'=>'Írd ide a leírást...']); !!}
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Hirdetés fejléce*(English)',null,['class' => 'control-label']); !!}
                                {!! Form::text('header_en',null,['class' => 'form-control']); !!}
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Ingatlan rövid leírása*(English)',null,['class' => 'control-label']); !!}
                                {!! Form::textarea('short_text_en',null,['class' => 'form-control', 'placeholder'=>'Írd ide a rövid leírást...']); !!}
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                {!! Form::label('Ingatlan egyéb leírása*(English)',null,['class' => 'control-label']); !!}
                                {!! Form::textarea('text_en',null,['class' => 'form-control', 'placeholder'=>'Írd ide a leírást...']); !!}
                            </div>
                        </div>
                    </div>
