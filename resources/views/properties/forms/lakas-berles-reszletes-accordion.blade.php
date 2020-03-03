<!-- Accordion 2-->    
            <div class="panel-body">
                  <div class="container">
                    <div class="row">
		              <!-- Első oszlop  -->
                      <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                          <label for="kilatas" class="">Kilátás</label>
                            <select class="form-control" name="kilatas" id="kilatas">
                                <option value="udvari">udvari</option>
                                <option value="utcai">utcai</option>
                                <option value="panorámás">panorámás</option>
                                <option value="kertre néző">kertre néző</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="tajolas" class="">Tájolás</label>
                            <select class="form-control" name="lakas_tajolas" id="tajolas">
                                <option value="észak">észak</option>
                                <option value="északkelet">északkelet</option>
                                <option value="kelet">kelet</option>
                                <option value="délkelet">délkelet</option>
                                <option value="dél">dél</option>
                                <option value="délnyugat">délnyugat</option>
                                <option value="nyugat">nyugat</option>
                                <option value="északnyugat">északnyugat</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="parkolas" class="">Parkolás</label>
                            <select class="form-control" name="parkolas" id="parkolas">
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
                          <label for="komfort" class="">Komfort fokozat</label>
                            <select class="form-control" name="komfort" id="komfort">
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
                          <label for="tetoter" class="">Tetőtér</label>
                            <select class="form-control" name="tetoter" id="tetoter">
                                <option value="tetőtéri">tetőtéri</option>
                                <option value="nem tetőtéri">nem tetőtéri</option>
                                <option value="legfelső emelet, nem tetőtéri">legfelső emelet, nem tetőtéri</option>
                                <option value="zárószint">zárószint</option>
                                <option value="penthouse">penthouse</option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="belmagassag" class="">Belmagasság</label>
                            <select class="form-control" name="lakas_belmagassag" id="belmagassag">
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
                        	<label for="erkely">Erkély</label>
                            <input class="" type="checkbox" name="lakas_erkely" id="erkely">
                        &nbsp;
                        	<label for="legkondi">Légkondi</label>
                            <input class="" type="checkbox" name="legkondi" id="legkondi">
                        </div>
                        <div align="right" class="form-group">
                        	<label for="akadalymentesitett">Akadálymentesített</label>
                            <input class="" type="checkbox" name="akadalymentesitett" id="akadalymentesitett">
                        </div>
                        <div align="right" class="form-group">
                        	<label for="kertkapcsolatos">Kertkapcsolatos</label>
                            <input class="" type="checkbox" name="lakas_kertkapcsolatos" id="kertkapcsolatos">
                        </div>
                        <div align="right" class="form-group">
                        	<label for="panelprogram">Panelprogram</label>
                            <input class="" type="checkbox" name="lakas_panelprogram" id="panelprogram">
                        </div>
                      </div><!-- Harmadik oszlop vége -->
                    </div> <!-- Row -->
                  </div><!-- Container -->
            </div><!-- Panel-body -->
<div align="right">
    <button class="btn btn-default" type="submit" >MENTÉS</button>
</div>
</form>