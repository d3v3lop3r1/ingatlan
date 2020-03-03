<h3>Garázs Hirdetés feladás</h3>
<form action="adatrogzites.php" method="post" name="telek_eladas" >
    <input type="hidden" name="lista_tipus" value="1" />
	<input type="hidden" name="tipus" value="4" />
      <div class="container">
        <div class="row">
          <!-- Első oszlop -->	
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
                <input class="form-control" type="text" name="city" id="city" value="" placeholder="helység neve"  />
            </div>
            <div class="form-group">
                <label for="street" class="">Utca*</label>
                <input class="form-control" type="text" name="street" id="street" placeholder="utca neve" required  />
            </div>
            <div class="form-group">
                <label for="st_number" class="">Házszám*</label>
                <input class="form-control" type="text" name="st_number" placeholder="házszám" id="st_number" required  />
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
              <label for="area" class="">Alapterület*</label>
              <div class="input-group">
                  <input class="form-control" type="number" min="10" max="2000" name="area" id="area" required  />
                  <span class="input-group-addon">m2</span> 
              </div>
            </div>
            <div class="form-group">
              <label for="price" class="">Eladási ár*</label>
                <div class="input-group">
                  <input class="form-control" type="number" name="price" id="price"  required />
                  <span class="input-group-addon">Ft</span> 
                </div>
            </div>
            <div class="form-group">
              <label for="min_price" class="">Minimum eladási ár*</label>
                <div class="input-group">
                  <input class="form-control" type="number" name="min_price" id="min_price"  required />
                  <span class="input-group-addon">Ft</span> 
                </div>
            </div>
          </div> <!-- Második oszlop vége -->
          
          <!-- Harmadik oszlop -->	
          <div class="col-lg-3 col-md-3">
                <br><br>
                <div align="right">
                    <button class="btn btn-default" type="submit" >TOVÁBB</button>
                </div>
          </div> <!-- Második oszlop vége -->
        </div> <!-- Row -->
      </div> <!-- Container -->
</form>
