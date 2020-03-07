<h3>Lakás Bérbeadás feladás</h3>
<form action="adatrogzites.php" method="post" name="lakas_eladas" >
<input type="hidden" name="tipus" value="1" />
<input type="hidden" name="lista_tipus" value="2" />
        
            <div class="panel-body">
                  <div class="container">
                    <div class="row">
                    
                    <!-- Első oszlop  -->
                      <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                          <label class="" for="nev">Név*</label>
                          <input class="form-control" type="text" name="nev" id="nev" required />
                        </div>
                        <div class="form-group">
                          <label class="" for="email">Email cím*</label>
                          <input class="form-control" type="text" name="email" id="email" required />
                        </div>
                        <div class="form-group">
                          <label class="" for="mobil">Mobil szám*</label>
                          <input class="form-control" type="text" name="mobil" id="mobil" required />
                        </div>
                        <div class="form-group">
                          <label for="tipus" >Lakás típusa*</label>
                            <select class="form-control" name="altipus" id="tipus">
                                <option value="tégla"  >tégla</option>
                                <option value="panel"  >panel</option>
                                <option value="csúsztatott zsalus"  >csúsztatott zsalus</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label class="" for="header">Hirdetés címe*</label>
                          <input class="form-control" type="text" name="header" id="header" placeholder="hirdetés címe" required  />
                        </div>
                        <div class="form-group">
                          <label for="text" class="">Ingatlan egyéb leírása*</label>
                          <textarea class="form-control"  name="text" id="text" maxlength="500" rows="5" required ></textarea>
                        </div>
                      </div><!-- elso oszlop -->
                      
                    <!-- Második oszlop  -->
                      <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="orszag" class="">Ország*</label>
                                <select class="form-control" name="orszag" id="orszag">
                                <option value="Magyarország" selected="selected"  >Magyarország</option>
                                <option value="Ausztria">Ausztria</option>
                                <option value="Románia">Románia</option>
                                <option value="Horvátország">Horvátország</option>
                                <option value="Szlovákia">Szlovákia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="megye" class="">Megye*</label>
                            <select class="form-control" name="megye" id="megye">
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
                            <label for="helyseg" class="">Helység*</label>
                            <input class="form-control" type="text" name="helyseg" id="helyseg" value="" placeholder="helység neve" required  />
                        </div>
                        <div class="form-group">
                            <label for="utca" class="">Utca*</label>
                            <input class="form-control" type="text" name="utca" id="utca" required  />
                        </div>
                        <div class="form-group">
                            <label for="hazszam" class="">Házszám*</label>
                            <input class="form-control" type="text" name="hazszam" id="hazszam" required  />
                        </div>
                        <div class="form-group">
                          <label for="emeletek" class="">Emeletek</label>
                            <select class="form-control" name="emeletek" id="emeletek">
                                <option value="szuterén">szuterén</option>
                                <option value="földszint">földszint</option>
                                <option value="félemelet">félemelet</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="10 felett">10 felett</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="ar" class="">Bérleti díj(Ft/hó):*</label>
                        	<div class="input-group">
                              <input class="form-control" type="number" name="ar" id="ar"  required />
                              <span class="input-group-addon">Ft</span>
                          	</div> 
                        </div>
                      </div><!-- Második oszlop -->
                      
                      <!-- Harmadik oszlop -->
                      <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="szobak-szama" class="">Szobák száma*</label>
                          <div class="input-group">
                              <input class="form-control" type="number" min="1" max="50" value="1" name="szobak_szama" id="szobak-szama" required  />
                              <span class="input-group-addon">db</span> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="felszobak-szama" class="">Félszobák száma*</label>
                          <div class="input-group">
                              <input class="form-control" type="number" min="0" max="50" value="0" name="felszobak_szama" id="felszobak-szama" required  />
                              <span class="input-group-addon">db</span> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="alapterulet" class="">Alapterület*</label>
                          <div class="input-group">
                              <input class="form-control" type="number" min="10" max="2000" name="alapterulet" id="alapterulet" required  />
                              <span class="input-group-addon">m2</span> 
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="allapot" class="">Állapot</label>
                            <select class="form-control" name="allapot" id="allapot">
                                <option value="új építésű">új építésű</option>
                                <option value="újszerű">újszerű</option>
                                <option value="felújított">felújított</option>
                                <option value="jó állapotú">jó állapotú</option>
                                <option value="közepes állapotú">közepes állapotú</option>
                                <option value="felújítandó">felújítandó</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="futes" class="">Fűtés</label>
                            <select class="form-control" name="futes" id="futes">
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
                          <label for="kaucio" class="">Kaució összege(Ft):*</label>
                        	<div class="input-group">
                              <input class="form-control" type="number" name="kaucio" id="kaucio"  required />
                              <span class="input-group-addon">Ft</span>
                          	</div> 
                        </div>
                        <div class="form-group">
                          <label for="berleti_szerzodes" class="">Bérleti szerződés</label>
                            <select class="form-control" name="berleti_szerzodes" id="berleti_szerzodes">
                                <option value="1 évre">1 évre</option>
                                <option value="2 évre">2 évre</option>
                                <option value="megegyezés szerint">megegyezés szerint</option>
                            </select>
                        </div>
                        <div class="form-group">
                        	<label for="maganhirdetes">Magánhirdetés</label>
                          <input class="" type="checkbox" name="maganhirdetes" id="maganhirdetes">
                        </div>
                        <div class="form-group">
                        	<label for="onkormanyzati">Önkormányzati</label>
                          <input class="" type="checkbox" name="lakas_onkormanyzati" id="onkormanyzati">
                        </div>
                      </div><!-- Harmadik oszlop vége -->
                    </div> <!-- Row -->
                  </div><!-- Container -->
            </div><!-- Panel-body -->