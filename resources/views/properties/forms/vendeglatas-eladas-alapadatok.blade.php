<h3>Vendéglátás Hirdetés feladás</h3>
<form action="adatrogzites.php" method="post" name="vendeglatas_eladas" >
<input type="hidden" name="lista_tipus" value="1" />
<input type="hidden" name="tipus" value="8" />
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
              <label for="tipus" class="" >Vendéglátás típusa*</label>
                <select class="form-control" name="altipus" id="tipus">
                    <option value="szálloda, hotel, panzió"  >szálloda, hotel, panzió</option>
                    <option value="étterem, vendéglő"  >étterem, vendéglő</option>
                    <option value="egyéb vendéglátó egység"  >egyéb vendéglátó egység</option>
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
              <label for="ar" class="">Eladási ár(Ft):*</label>
                <div class="input-group">
                  <input class="form-control" type="number" name="ar" id="ar"  required />
                  <span class="input-group-addon">Ft</span>
                </div> 
            </div>
          </div><!-- Második oszlop -->
          
          <div class="col-lg-3 col-md-3"><!-- Harmadik oszlop -->
            <div class="form-group">
              <label for="alapterulet" class="">Alapterület*</label>
              <div class="input-group">
                  <input class="form-control" type="number" min="10" max="2000" name="alapterulet" id="alapterulet" required  />
                  <span class="input-group-addon">m2</span> 
              </div>
            </div>
            <div align="right" class="form-group">
                <label for="legkondi">Légkondi</label>
                <input class="" type="checkbox" name="legkondi" id="legkondi">
            </div>
            <div align="right" class="form-group">
                <label for="akadalymentesitett">Akadálymentesített</label>
                <input class="" type="checkbox" name="akadalymentesitett" id="akadalymentesitett">
            </div>
            <div align="right">
                <button class="btn btn-default" type="submit" >TOVÁBB</button>
            </div>
          </div><!-- Harmadik oszlop vége -->
        </div> <!-- Row -->
      </div><!-- Container -->
</form>