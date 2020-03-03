<h3>Telek Bérbeadás feladás</h3>
<form action="adatrogzites.php" method="post" name="telek-eladas" >
<input type="hidden" name="lista_tipus" value="2" />

<input type="hidden" name="tipus" value="3" />
      <div class="container">
        <div class="row">
          <!-- Első oszlop -->	
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
                <input class="form-control" type="text" name="helyseg" id="helyseg" value="" placeholder="helység neve"  />
            </div>
            <div class="form-group">
                <label for="utca" class="">Utca (ha nincs, kérem írja be, hogy 'nincs')*</label>
                <input class="form-control" type="text" name="utca" id="utca" placeholder="utca neve" required  />
            </div>
            <div class="form-group">
                <label for="hazszam" class="">Házszám, hrsz.*</label>
                <input class="form-control" type="text" name="hazszam" placeholder="házszám" id="hazszam" required  />
            </div>
          </div> <!-- Első oszlop vége -->
          
          <!-- Második oszlop -->	
          <div class="col-lg-3 col-md-3">
            <div class="form-group">
              <label class="" for="header">Hirdetés címe*</label>
              <input class="form-control" type="text" name="header" max="200" id="header" placeholder="hirdetés címe" required  />
            </div>
            <div class="form-group">
              <label for="text" class="">Ingatlan egyéb leírása*</label>
              <textarea class="form-control"  name="text" id="text" maxlength="500" rows="5" required ></textarea>
            </div>
            <div class="form-group">
              <label for="altipus" class="">Telek fajtája*</label>
                <select class="form-control" name="altipus" id="altipus">
                    <option value="belterületi">belterületi</option>
                    <option value="külterületi">külterületi</option>
                    <option value="zártkerti">zártkerti</option>
                </select>
            </div>
            <div class="form-group">
              <label for="megkozelithetoseg" class="">Megközelíthetőség*</label>
                <select class="form-control" name="megkozelithetoseg" id="megkozelithetoseg">
                    <option value="aszfalt/beton út">aszfalt/beton út</option>
                    <option value="gyalogosan">gyalogosan</option>
                    <option value="földes út">földes út</option>
                    <option value="martaszfalt">martaszfalt</option>
                </select>
            </div>
            <div class="form-group">
              <label for="hasznalhatosag" class="">Használhatóság*</label>
                <select class="form-control" name="hasznalhatosag" id="hasznalhatosag">
                    <option value="tetszés szerint">tetszés szerint</option>
                    <option value="beépíthetö">beépíthetö</option>
                    <option value="nem beépíthetö">nem beépíthetö</option>
                    <option value="termöföld">termöföld</option>
                    <option value="erdő">erdő</option>
                    <option value="mező">mező</option>
                </select>
            </div>
            <div class="form-group">
              <label for="telekterulet" class="">Telekterület*</label>
                <div class="input-group">
                  <input class="form-control" type="number" min="10" max="500000" name="telekterulet" id="telekterulet" required  />
                  <span class="input-group-addon">m2</span> 
                </div>
            </div>
            <div class="form-group">
              <label for="ar" class="">Bérleti díj(Ft/hó)*</label>
                <div class="input-group">
                  <input class="form-control" type="number" name="ar" id="ar"  required />
                  <span class="input-group-addon">Ft</span> 
                </div>
            </div>
          </div> <!-- Második oszlop vége -->
          
          <!-- Harmadik oszlop -->	
          <div class="col-lg-3 col-md-3">
                <div class="form-group">
                <br><br>
                    <label for="viz">Víz</label>
                    <input class="" type="checkbox" name="viz" id="viz">
                    &nbsp;
                    <label for="gaz">Gáz</label>
                    <input class="" type="checkbox" name="gáz" id="gáz">
                    &nbsp;
                    <label for="villany">Villany</label>
                    <input class="" type="checkbox" name="villany" id="villany">
                    &nbsp;
                    <label for="csatorna">Csatorna</label>
                    <input class="" type="checkbox" name="csatorna" id="csatorna">
                </div>
                <br><br>
                <div align="right">
                    <button class="btn btn-default" type="submit" >TOVÁBB</button>
                </div>
          </div> <!-- Második oszlop vége -->
        </div> <!-- Row -->
      </div> <!-- Container -->
</form>
