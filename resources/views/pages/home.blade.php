@php
use App\photo;
use Carbon\Carbon;
use App\property;

@endphp
@extends('layout.main')

@section('tartalom')

    <div class="container-fluid">
        <div class="row">
            <div class="col d-none d-lg-block">
                <h4 class="center-xs">Eladó olcsóbb lakások</h4>
                            @foreach ($prop_elado_lakasok_cheap as $prop)
                                <div class="media shadow-sm p-2 mt-1">
                                    @php
                                        $photo_count = $prop->photos->count();
                                        $photo = $prop->photos->where('is_default','1')->first();
                                        if ($photo){
                                            $photo_file = $photo->file1;
                                            $photo_file = "uploads/" . $photo_file;
                                        } else {
                                            $photo_file = "uploads/placeholder.png";
                                        }
                                    @endphp
                                    <img src="{{$photo_file}}" class="img-thumbnail mr-3" alt="{{$prop->header}}" width="50" height="50">
                                    <div class="media-body">
                                        <a href="/index/{{$prop->id}}" class="">
                                            <span class="badge badge-warning">{{$prop->city}}</span><br>
                                            {{$prop->header}}<br>
                                            <span class="badge badge-danger money">{{$prop->price}}-Ft</span>
                                        </a>
                                
                                    </div>
                                </div>            
                            @endforeach
                <div class="p-2 mt-2">
                    <h4>Eladó olcsóbb házak</h4>
                    @foreach ($prop_elado_hazak_cheap as $prop)
                        <div class="media shadow-sm p-2 mt-1">
                            @php
                                $photo_count = $prop->photos->count();
                                $photo = $prop->photos->where('is_default','1')->first();
                                if ($photo){
                                    $photo_file = $photo->file1;
                                    $photo_file = "uploads/" . $photo_file;
                                } else {
                                    $photo_file = "uploads/placeholder.png";
                                }
                            @endphp
                            <img src="{{$photo_file}}" class="img-thumbnail mr-3" alt="{{$prop->header}}" width="50" height="50">
                            <div class="media-body">
                                <a href="/index/{{$prop->id}}" class="">
                                    <span class="badge badge-warning">{{$prop->city}}</span><br>
                                    {{$prop->header}}<br>
                                    <span class="badge badge-danger money">{{$prop->price}}-Ft</span>
                                </a>
                        
                            </div>
                        </div>            
                    @endforeach
                </div>                 
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <h1 class="text-uppercase">kiemelt ajánlataink</h1>
                <div class="row center-xs ingatlan-sor">
                    @foreach ($properties as $property)                       
                            <?php 
                            $photo_count = $property->photos->count();
                            $photo = $property->photos->where('is_default','1')->first();
                            if ($photo){
                                $photo_file = $photo->file1;
                                $photo_file = "uploads/" . $photo_file;
                            } else {
                                $photo_file = "placeholder.png";
                            }

                            ?>
                            
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                    <div class="row">
                                        <div class="col-xs-12 prop-header">
                                            <h5><a class="stretched-link" href="/index/{{$property->id}}">{{$property->header}}</a></h5>
                                            <div class="row justify-content-between">
                                                <div class="col-auto prop-header-alatt-bal start-xs ">
                                                    <?php
                                                    $dt = Carbon::parse($property->updated_at);
                                                    $days=$dt->diffInDays();
                                                    switch($property->type_id){
                                                        case 0:
                                                            echo 'Eladó';
                                                            break;
                                                        case 1:
                                                            echo 'Eladó cserelehetőséggel';
                                                            break;
                                                        case 2:
                                                            echo 'Kiadó eladási opcióval';
                                                            break;
                                                        case 3:
                                                            echo 'Kiadó';
                                                            break;
                                                    }
                                                    if ($days < 14){
                                                        echo "<span class='badge badge-secondary badge-danger ml-2'>Új</span>";
                                                    }
                                                    ?>
                                                </div>
                                                <div class="col-xs-2 col-md-2 prop-header-alatt-jobb">
                                                    <i class="fas fa-camera-retro"></i> {{$photo_count}}
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-xs-12 main-photo">
                                            <img class="img-thumbnail" src="{{$photo_file}}" alt="">
                                        </div>
                                    </div>


                                    {{--  Adatok  --}}
                                    
                                    
                                    <div class="row center-xs">
                                        <div class="col-xs-12 main-price border">
                                            <span class="money">{{$property->price}}</span>.- Ft
                                        </div>
                                        <div class="col-xs-12 main-details">
                                            <div class="row kiskockak center-xs border">
                                                <div class="col xs-4">
                                                    <i class="fa fa-ruler fa-xl"></i><span> Terület:</span><br>
                                                    @if ($property->land_area)
                                                        {{$property->land_area}}m2
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                                <div class="col xs-4">
                                                    <i class="fas fa-expand-alt fa-xl"></i><span> Lakótér:</span><br>
                                                    @if ($property->area)
                                                        {{$property->area}}m2
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                                <div class="col xs-4">
                                                    <i class="fas fa-th-large fa-xl"></i><span> Szobák:</span><br>
                                                    @if ($property->room_no)
                                                        {{$property->room_no}}
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>                                                   
                            </div>
                    @endforeach
                    
                </div>
                <div class="jumbotron" >
                    <h1>VÁSÁROLNA VAGY BÉRELNE INGATLANT A DÉLDUNÁNTÚLON?</h1>
                    <h4>Akkor jó helyen jár.</h4>
                    <p>Baranyában, Pécsett, Harkányban, Siklóson is segítségére leszünk!</p>
                </div>
                <div class="row">
                    <section class="col-xs-12 col-sm-4">
                        <img class="img-responsive  center-block img-thumbnail" src="/images/sample-house/homes-for-sale-hoboken-nj-1316365_640.jpg" alt="Ház Eladó">
                        <h3 class="mt-2">Ön is ingatlantulajdonos?</h3>
                        <h4>Ingatlanát megnyerő profillal mutatjuk be</h4> 
                        <p class="text-uppercase text-info">
                            2 nyelven<br>
                            3 országban<br>
                            4+ ingatlanportálon is<br>
                            a mielőbbi siker érdekében!</strong>
                        </p> 
                        <ul class="">
                            <li>Teljes körű ingyenes tájékoztatás</li>
                            <li>Ingatlanszemlékre való kíséret</li>
                            <li>Fordítások, tolmácsolások  német-magyar nyelven érdeklődőknek</li>
                            <li>Adás- vételi Foglaló, vagy  Előszerződés, szerződések tervezése</li>
                            <li>Megállapodások hitelesítése ügyvéd közreműködésével</li>
                            <li>Földhivatalnál, intézménynél is eljárunk az Ön érdekében</li>
                            <li>Tanácsadás Adó-/Illetéktérítések-/Tulajdonjog bejegyzésével kapcsolatban, és más hivataloknál, intézményeknél</li>
                        </ul>
                    </section>
                    <section class="col-xs-12 col-sm-4 ">
                        <img class="img-responsive center-block img-thumbnail" src="/images/sample-house/architecture-21805_640.jpg" alt="Ház Eladó">
                        <h4 class="mt-2">Ingatlant venne?<br>
                        ingatlant bérelne?</h4>
                        <ul class="">
                            <li>Személyesen kapcsolatfelvétel,
                            baráti tanácsadás az Ön érdekében</li>
                            <li>Kíséret Ingatlanszemlékre,
                            földhivatalba, Exposé, stb.</li>
                            <li>Német-magyar tolmács más
                            anyanyelvű eladók-kiadók esetén</li>
                            <li>Előszerződés írása, megállapodások
                            hitelesítése ügyvédnél</li>
                            <li>Ingatlanvétel után is segítünk mint
                            Gondnoka a távollétében</li>
                            <li>Felújításokat is vállal Projektfox
                            építkező brigádunk</li>
                        </ul>                  
                        <h4>Hitelfelvétel?</h4>
                        <p>
                            Intézkedünk hogy a legjobb ajánlatot
                            kapja! Szakemberünkkel felveszi a
                            kapcsolatot aki kikeresi Önnek is az
                            aktuálisan legjobbat!
                        </p> 
                        <h4>CSOK?</h4>   
                        <p>
                            Olyan térségban választ ingatlant
                            ahol a Magyar kormány átvállalja az
                            ingatlan teljes költségét? Kérdezzen
                            bennünket, szakemberünk akkor is
                            fog tud segíteni ha a listánkban nem
                            talált megfelelőt!
                        </p>
                    </section>
                    <section class="col-xs-12 col-sm-4 ">
                        <div class="embed-responsive embed-responsive-16by9">
                                <video class="embed-responsive-item thumbnail" src="/images/sample-house/Water-3967.mp4" loop autoplay muted></video>
                        </div>
                        <h4 class="mt-2">
                        Önnek is van információja 
                        eladandó, 
                        kiadandó 
                        ingatlanok felől?
                        </h4>
                        <p>
                        akkor egy
                        jövedelmező kereseti
                        lehetőséget biztosíthatunk Önnek is!
                        
                        Legyen Ön is Alkalmi Ügynökünk –
                        Ingatlanfox* Agent
                        
                        Jelentkezzen 
                        az egyedülálló 
                        lehetőségre
                        </p> 
                    </section>
                </div>
                <div class="container hide visible-lg visible-md" >
                    <div class="jumbotron" >
                    <h1>KÜLFÖLDÖN VAN? NEM  ÉR RÁ?</h1>
                    <p class="lead"> Ingatlanfox a baranya megyei Gondnok, háza felügyelője, megvédi tulajdonát!</p>
                    </div>
                </div>
                <div class="container" id="map-container">
                    <h3>Hirdetéseink a térképen</h3>
                    <div id="map" class="container"></div>
                </div>
            </div> 
            <div class="col d-none d-lg-block center-xs">
                <h4>Lakáshitel-kalkulátor</h4>
                <iframe id="hitel-kalk" src="https://www.hitel.hu/api/embed/?token=xpuV2fWKMnMMpZt9MTSTwofHdmZ8b6KkZV9vJYfj&amp;data=%2FWzKN2C9%2BbveE5mHLGFQvbr327%2FyFX2MqOelQvXtop7hDkqGG6hzkPngsE%2FLiyHf9Nz5jnEXOtuuDCN8o4wXwHL416FnexrxeDf7Q7Wv85qtd6nJGpCxNRnh5yx1nv4CduFjEaWvXnqKTvrNshGy6DvNYegHwYo9u1Ef6TgeF%2F7o8MR2ho4dbgV0Zl2EBSv1jy0411eh7AVjViF7A4MhDeojiZvsN2c61C05qrna8awH2wpC96lYy6Owkano42DPVQ3lQt%2BEHCT4AzQ2klbfyQ%3D%3D"></iframe>            

                <h4>CSOK településlista</h4>
                <iframe id="csok-map" frameborder="0" src="https://www.google.com/maps/d/u/0/embed?mid=1qH4VJVp5xs6vaKHyEHwmKth3kFMj4AP9&ll=46.19367658681184%2C18.40386481697169&z=10" allowfullscreen ></iframe>

            </div>
            </div>   
        </div>    
    </div> 
@endsection