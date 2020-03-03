<?php
use App\client;
use App\agent;
?>

<h3>Ház Hirdetés feladás</h3>
<form action="admin" method="POST" name="haz-eladas" > 
{{ csrf_field() }}
<input type="hidden" name="subtype" value="2" id="haz" />
<input type="hidden" name="list_type" value="1" />
            <div class="panel-body">
                  <div class="container">
                    <div class="row">
                    <!-- Első oszlop  -->
                      <div class="col-lg-3 col-md-3">
                      <div class="form-group">
                          <label class="" for="agent_id">Kliens*</label>
                          <select name="agent_id" id="agent_id">
                              <?php
                                  $clients = client::all();
                                  foreach($clients as $client){ ?>
                                      <option value="{{$client->id}}">{{$client->name}}</option>
                                  <?php
                                  }
                              ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="type" >Típus*</label>
                            <select class="form-control" name="type" id="type">
                                <option value="családi ház"  >családi ház</option>
                                <option value="ikerház"  >ikerház</option>
                                <option value="sorház"  >sorház</option>
                                <option value="házrész"  >házrész</option>
                                <option value="tanya"  >tanya</option>
                                <option value="könnyűszerkezetes"  >könnyűszerkezetes</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label class="" for="header">Hirdetés címe*</label>
                          <input class="form-control" type="text" name="header" max="200" id="header" placeholder="hirdetés címe" required  />
                        </div>
                        <div class="form-group">
                          <label for="text" class="">Ingatlan egyéb leírása*</label>
                          <textarea class="form-control"  name="text" id="text" maxlength="1000" rows="5" required ></textarea>
                        </div>
                      </div><!-- elso oszlop -->
                      
                    <!-- Második oszlop  -->
                      <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="country" class="">Ország*</label>
                                <select class="form-control" name="country" id="country">
                                <option value="Magyarország" selected="selected"  >Magyarország</option>
                                <option value="Ausztria">Ausztria</option>
                                <option value="Románia">Románia</option>
                                <option value="Horvátország">Horvátország</option>
                                <option value="Szlovákia">Szlovákia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="region" class="">Megye*</label>
                            <select class="form-control" name="region" id="region">
                                <option value="Bács-Kiskun">Bács-Kiskun</option>
                                <option value="Baranya" selected="selected">Baranya</option>
                                <option value="Békés">Békés</option>
                                <option value="Borsod-Abaúj-Zemplén">Borsod-Abaúj-Zemplén</option>
                                <option value="Csongrád">Csongrád</option>
                                <option value="Fejér">Fejér</option>
                                <option value="Győr-Moson-Sopron">Győr-Moson-Sopron</option>
                                <option value="Hajdú-Bihar">Hajdú-Bihar</option>
                                <option value="Heves">Heves</option>
                                <option value="Jász-Nagykun-Szolnok">Jász-Nagykun-Szolnok</option>
                                <option value="Komárom-Esztergom">Komárom-Esztergom</option>
                                <option value="Nógrád">Nógrád</option>
                                <option value="Pest">Pest</option>
                                <option value="Somogy" >Somogy</option>
                                <option value="Szabolcs-Szatmár-Bereg">Szabolcs-Szatmár-Bereg</option>
                                <option value="Tolna">Tolna</option>
                                <option value="Vas">Vas</option>
                                <option value="Veszprém">Veszprém</option>
                                <option value="Zala">Zala</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city" class="">Helység*</label>
                            <input class="form-control" type="text" name="city" id="city" placeholder="helység neve" required  />
                        </div>
                        <div class="form-group">
                            <label for="street" class="">Utca*</label>
                            <input class="form-control" type="text" name="street" id="street" required  />
                        </div>
                        <div class="form-group">
                            <label for="st_number" class="">Házszám*</label>
                            <input class="form-control" type="text" name="st_number" id="st_number" required  />
                        </div>
                        <div class="form-group">
                          <label for="price" class="">Eladási ár(Ft):*</label>
                        	<div class="input-group">
                              <input class="form-control" type="number" name="st_number" id="st_number"  required />
                              <span class="input-group-addon">Ft</span>
                          	</div> 
                        </div>
                      </div><!-- Második oszlop -->
                      
                      <div class="col-lg-3 col-md-3"><!-- Harmadik oszlop -->
                        <div class="form-group">
                          <label for="room_no" class="">Szobák száma*</label>
                          <div class="input-group">
                              <input class="form-control" type="number" min="1" max="50" name="room_no" value="1" id="room_no" required  />
                              <span class="input-group-addon">db</span> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="halfroom_no" class="">Félszobák száma*</label>
                          <div class="input-group">
                              <input class="form-control" type="number" min="0" max="50" name="halfroom_no" value="0" id="halfroom_no" required  />
                              <span class="input-group-addon">db</span> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="area" class="">Alapterület*</label>
                          <div class="input-group">
                              <input class="form-control" type="number" min="10" max="2000" name="area" id="area" required  />
                              <span class="input-group-addon">m2</span> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="land_area" class="">Telekterület*</label>
                          <div class="input-group">
                              <input class="form-control" type="number" min="10" max="500000" name="land_area" id="land_area" required  />
                              <span class="input-group-addon">m2</span> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="condition" class="">Állapot*</label>
                            <select class="form-control" name="condition" id="condition">
                                <option value="új építésű">új építésű</option>
                                <option value="újszerű">újszerű</option>
                                <option value="felújított">felújított</option>
                                <option value="jó állapotú">jó állapotú</option>
                                <option value="közepes állapotú">közepes állapotú</option>
                                <option value="felújítandó">felújítandó</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="heating" class="">Fűtés*</label>
                            <select class="form-control" name="heating" id="heating">
                                <option value="gáz(cirko)">gáz(cirko)</option>
                                <option value="gáz(konvektor)">gáz(konvektor)</option>
                                <option value="gáz(héra)">gáz(héra)</option>
                                <option value="távfűtés">távfűtés</option>
                                <option value="távfűtés egyedi méréssel">távfűtés egyedi méréssel</option>
                                <option value="elektromos">elektromos</option>
                                <option value="házközponti">házközponti</option>
                                <option value="házközponti egyedi méréssel">házközponti egyedi méréssel</option>
                                <option value="fan-coil">fan-coil</option>
                                <option value="geotermikus">geotermikus</option>
                                <option value="cserépkályha">cserépkályha</option>
                                <option value="egyéb">egyéb</option>
                            </select>
                        </div>
                        <div class="form-group">
                        	<label for="ad_type">Céges hirdetés</label>
                          <input class="" type="checkbox" name="ad_type" id="ad_type">
                        </div>
                      </div><!-- Harmadik oszlop vége -->
                    </div> <!-- Row -->
                  </div><!-- Container -->
            </div><!-- Panel-body -->
