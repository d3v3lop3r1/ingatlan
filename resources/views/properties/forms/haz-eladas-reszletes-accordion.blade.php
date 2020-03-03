            <div class="panel-body">
                  <div class="container">
                    <div class="row">
		              <!-- Első oszlop  -->
                      <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="look" class="">Kilátás</label>
                            <select class="form-control" name="look" id="look">
                                <option value="udvari">udvari</option>
                                <option value="utcai">utcai</option>
                                <option value="panorámás">panorámás</option>
                                <option value="kertre néző">kertre néző</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="parking" class="">Parkolás</label>
                            <select class="form-control" name="parking" id="parking">
                                <option value="garázs - az árban">garázs - az árban</option>
                                <option value="garázs - megvehető">garázs - megvehető</option>
                                <option value="kültéri - az árban">kültéri - az árban</option>
                                <option value="kültéri - megvehető">kültéri - megvehető</option>
                                <option value="utcán - ingyenes">utcán - ingyenes</option>
                                <option value="utcán - fizetős">utcán - fizetős</option>
                                <option value="teremgarázs - az árban">teremgarázs - az árban</option>
                                <option value="teremgarázs - megevhető">teremgarázs - megevhető</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="comfort" class="">Komfortfokozat</label>
                            <select class="form-control" name="comfort" id="comfort">
                                <option value="luxus">luxus</option>
                                <option value="duplakomfortos">duplakomfortos</option>
                                <option value="összkömfortos">összkömfortos</option>
                                <option value="komfortos">komfortos</option>
                                <option value="félkomfortos">félkomfortos</option>
                                <option value="komfort nélküli">komfort nélküli</option>
                            </select>
                        </div>
                      </div><!-- elso oszlop vége -->
                      
                    <!-- Második oszlop  -->
                    
                      <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="attic" class="">Tetőtér</label>
                            <select class="form-control" name="attic" id="attic">
                                <option value="beépített">beépített</option>
                                <option value="beépíthető">beépíthető</option>
                                <option value="nem beépíthető">nem beépíthető</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="height" class="">Belmagasság</label>
                            <select class="form-control" name="height" id="height">
                                <option value="3m-nél alacsonyabb">3m-nél alacsonyabb</option>
                                <option value="3m-nél magasabb">3m-nél magasabb</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="furdo-wc" class="">Fürdő-WC</label>
                            <select class="form-control" name="furdo_wc" id="furdo-wc">
                                <option value="külön helyiségben">külön helyiségben</option>
                                <option value="egy helyiségben">egy helyiségben</option>
                                <option value="külön és egyben is">külön és egyben is</option>
                            </select>
                        </div>
                        
                      </div><!-- Második oszlop -->
                      
                      <div class="col-lg-3 col-md-3"><!-- Harmadik oszlop -->
                        <div align="right" class="form-group">
                        <br><br>
                        	<label for="lift">Lift</label>
                            <input class="" type="checkbox" name="lift" id="lift">
                        &nbsp;
                        	<label for="terrace">Terasz</label>
                            <input class="" type="checkbox" name="terrace" id="terrace">
                        &nbsp;
                        	<label for="aircondition">Légkondi</label>
                            <input class="" type="checkbox" name="aircondition" id="aircondition">
                        </div>
                        <div align="right" class="form-group">
                        	<label for="cellar">Pince</label>
                            <input class="" type="checkbox" name="cellar" id="cellar">
                        </div>
                        <div align="right" class="form-group">
                        	<label for="diasbled">Akadálymentesített</label>
                            <input class="" type="checkbox" name="diasbled" id="diasbled">
                        </div>
                      </div><!-- Harmadik oszlop vége -->
                    </div> <!-- Row -->
                  </div><!-- Container -->
            </div><!-- Panel-body -->
<div align="right">
    <button class="btn btn-default" type="submit" >MENTÉS</button>
</div>
</form>