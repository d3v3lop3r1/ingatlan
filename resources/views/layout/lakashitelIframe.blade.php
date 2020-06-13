

<script>
    var base_url = 'https://hitel.pannonsafe.hu/';
    var current_uri = 'https://hitel.pannonsafe.hu/iframehitelkalkulator';
</script>


<link rel="stylesheet" type="text/css" href="css/calculator_box.css"/>
<link rel="stylesheet" type="text/css" href="https://hitel.pannonsafe.hu/assets/css/nouislider.min.css"/>
            <div class="calculator-box" id="container">
                <br>
                <h4>HITELKALKULÁTOR</h4>
                <p>Segítünk megtalálni a legjobb hitelt gyorsan és egyszerűen</p>
                <br>

                <div class="form-group">
                    <label class="calc_slider_text" for="hitelosszeg">Hitelösszeg (Ft):</label>
                    <input class="form-control " autocomplete="off" id="hitelosszeg" contenteditable="true"
                           value="10000000"/>
                </div>


                <div class="form-group">
                    <label class="calc_slider_text" for="futamido">Hitelcél:</label>
                    <select class="form-control " id="hitelcel" onchange="hitelcel_change()">
                        <option value="1">Használt lakóingatlan vásárlás (Piaci kamatozású)</option>
                        <option value="16">Használt lakóingatlan vásárlás (Államilag támogatott)</option>
                        <option value="7">Új lakóingatlan vásárlás (Piaci kamatozású)</option>
                        <option value="17">Új lakóingatlan vásárlás (Államilag támogatott)</option>
                        <option value="5">Új lakóingatlan építés (Piaci kamatozású)</option>
                        <option value="18">Új lakóingatlan építés (Államilag támogatott)</option>
                        <option value="12" selected>Használt lakóingatlan korszerűsítés (Piaci kamatozású)</option>
                        <option value="19">Használt lakóingatlan korszerűsítés (Államilag támogatott)</option>
                        <option value="6">Használt lakóingatlan bővítés (Piaci kamatozású)</option>
                        <option value="20">Használt lakóingatlan bővítés (Államilag támogatott)</option>
                        <option value="13">Lakóingatlan felújítás</option>
                        <option value="11">Lakáscélú hitelkiváltás</option>
                        <option value="3">Egyéb hitelkiváltás</option>
                        <option value="2">Szabad felhasználású jelzáloghitel</option>
                        <option value="4" >Személyi kölcsön
                        </option>
                        <option value="23">Építési telek vásárlása</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="calc_slider_text" for="futamido">Futamidő:</label>
                    <select class="form-control " id="futamido">
                        <option class="kolcson" value="1">1 év</option>
                        <option class="kolcson" value="2">2 év</option>
                        <option class="kolcson" value="3">3 év</option>
                        <option class="kolcson" value="4">4 év</option>
                        <option class="kolcson" value="5">5 év</option>
                        <option value="6">6 év</option>
                        <option value="7">7 év</option>
                        <option value="8">8 év</option>
                        <option value="9">9 év</option>
                        <option value="10">10 év</option>
                        <option value="15">15 év</option>
                        <option value="20" selected>20 év</option>
                        <option value="25">25 év</option>
                        <option value="30">30 év</option>
                    </select>
                </div>

                <div class="form-check">
                    <label class="calc_slider_text">Kamatperiódus:</label>
                    <br>
                    <div class='form-group'>
                        <input id='periodusok_3' type="checkbox" class="form-check-input" value="3" checked/>
                        <label for="periodusok_3" class="form-check-label">3 havi</label>

                        <input id='periodusok_6' type="checkbox" class="form-check-input" value="6" checked/>
                        <label for="periodusok_6" class="form-check-label">6 havi</label>

                        <br>

                        <input id='periodusok_12' type="checkbox" class="form-check-input" value="12" checked/>
                        <label for="periodusok_12" class="form-check-label">1 éves</label>

                        <input id='periodusok_36' type="checkbox" class="form-check-input" value="36" checked/>
                        <label for="periodusok_36" class="form-check-label">3 éves</label>

                        <input id='periodusok_60' type="checkbox" class="form-check-input" value="60" checked/>
                        <label for="periodusok_60" class="form-check-label">5 éves</label>

                        <input id='periodusok_120' type="checkbox" class="form-check-input" value="120" checked/>
                        <label for="periodusok_120" class="form-check-label">10 éves</label>

                        <input id='periodusok_180' type="checkbox" class="form-check-input" value="180" checked/>
                        <label for="periodusok_180" class="form-check-label">15 éves</label>

                        <input id='periodusok_240' type="checkbox" class="form-check-input" value="240" checked/>
                        <label for="periodusok_240" class="form-check-label">20 éves</label>

                        <input id='periodusok_fix' type="checkbox" class="form-check-input" value="999" checked/>
                        <label for="periodusok_fix" class="form-check-label">Fix</label>


                    </div>
                </div>

                <div class="form-group" style="text-align: left">
                    <label class="calc_slider_text">Havi jövedelem:</label><br>
                    <input id='jovedelem_limit' type="checkbox" class="form-control custom-checkbox" value="1" checked/>
                    <label for="jovedelem_limit" class="nice_checkbox nice_checkbox-checked">250 000 Ft felett</label>
                </div>
                <button id="calculateBtn" style="margin-top: 20px;max-width: 320px"
                        class="btn btn-secondary btn-block text-uppercase "><i class="fa fa-chevron-right"
                                                                               aria-hidden="true"></i> Szeretném a legjobb
                    ajánlatot
                </button>

                <p class="info">
                    <b>Miért jó, ha részletes tájékoztatást kérek?</b><br><br>
                    • Mert megtudhatom, hogy miből adódik a banki ajánlatok közötti különbség<br>
                    • Tájékoztatást kapok arról, hogy mi szükséges a legkedvezőbb kondíciók eléréséhez<br>
                    • Számodra fontos paraméterek figyelembe vételével kaphatsz finanszírozási ajánlatot<br>
                    • Időt és pénzt takarítunk meg az ajánlatok kiértékelésével<br>
                </p>

            </div>
            <div class="result-box" id="result-box" style="display: none">
                <h4 style="font-weight: normal;width:100%">
                    <br>
                    LEGJOBB AJÁNLATAINK:<br>


                    <div class="hitel_eredmeny_box hitel_kalk_box">
                        <table style="width: 100%;table-layout: fixed">
                            <tr>
                                <td>Deviza</td>
                                <td style="width: 130px;">Futamidő</td>
                                <td>Törlesztő</td>
                                <td>Kamat</td>
                            </tr>
                        </table>
                    </div>
                                        <div class="hitel_eredmeny_box hitel_kalk_box" id="eredmeny_1">
                            <table style="width: 100%;table-layout: fixed">
                                <tr>
                                    <td style="text-align: center">
                                        <table style="width: 100%">
                                            <tr>
                                                <td><img align="center" style="width: 30px;margin:auto"
                                                         src="https://hitel.pannonsafe.hu/assets/images/hun_flag_icon.png"/></td>
                                                <td>HUF</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width: 130px;">
                                        <div><span class="futamido_kezdeskor"></span></div>
                                        <div><span class="futamido_utan"></span></div>
                                    </td>
                                    <td>
                                        <div><span class="tolreszto_kezdeskor"></span></div>
                                        <div><span class="tolreszto_utan"></span></div>
                                    </td>
                                    <td><span class="kamat"></span></td>
                                </tr>
                            </table>
                        </div>
                                            <div class="hitel_eredmeny_box hitel_kalk_box" id="eredmeny_2">
                            <table style="width: 100%;table-layout: fixed">
                                <tr>
                                    <td style="text-align: center">
                                        <table style="width: 100%">
                                            <tr>
                                                <td><img align="center" style="width: 30px;margin:auto"
                                                         src="https://hitel.pannonsafe.hu/assets/images/hun_flag_icon.png"/></td>
                                                <td>HUF</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width: 130px;">
                                        <div><span class="futamido_kezdeskor"></span></div>
                                        <div><span class="futamido_utan"></span></div>
                                    </td>
                                    <td>
                                        <div><span class="tolreszto_kezdeskor"></span></div>
                                        <div><span class="tolreszto_utan"></span></div>
                                    </td>
                                    <td><span class="kamat"></span></td>
                                </tr>
                            </table>
                        </div>
                                            <div class="hitel_eredmeny_box hitel_kalk_box" id="eredmeny_3">
                            <table style="width: 100%;table-layout: fixed">
                                <tr>
                                    <td style="text-align: center">
                                        <table style="width: 100%">
                                            <tr>
                                                <td><img align="center" style="width: 30px;margin:auto"
                                                         src="https://hitel.pannonsafe.hu/assets/images/hun_flag_icon.png"/></td>
                                                <td>HUF</td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td style="width: 130px;">
                                        <div><span class="futamido_kezdeskor"></span></div>
                                        <div><span class="futamido_utan"></span></div>
                                    </td>
                                    <td>
                                        <div><span class="tolreszto_kezdeskor"></span></div>
                                        <div><span class="tolreszto_utan"></span></div>
                                    </td>
                                    <td><span class="kamat"></span></td>
                                </tr>
                            </table>
                        </div>

                    <button id="recalculate" style="margin-top: 20px;height:30px;"
                            class="last_show  btn btn-secondary btn-block text-uppercase " onclick="recalc();"><i
                                class="fa fa-chevron-right" aria-hidden="true"></i>ÚJRA KALKULÁLOK
                    </button>
                    <div class='row'>
                        <div class='span12'>
                            <hr>
                        </div>
                    </div>
                </h4>
                <h4 class="last_show" style="width: 100%">Szeretnéd megkapni a legjobb hitelt?</h4>
                <p class="last_show" style="margin-bottom: 0px"><br>Iratkozz fel és szakértő tanácsadónk hamarosan felhív,
                    hogy személyre szabott tanácsot adjon.</p>

                <div class="last_show">
                    <style type="text/css">
        .titlepart {
            display: none;
        }
        .mmform-container {
            background-color: inherit !important;
            font-size: 14px !important;
        }

        .formrowcontainer {
            padding: 0px !important;
            text-align: left;
        }


        fieldset.datafields, fieldset.submitpart, fieldset.titlepart, fieldset.thankyoupart {
            padding: 5px 0px !important;
            margin: 0px !important;
        }

        .fieldcontainer {
            padding:5px 0px;
        }

        label.checkbox-checked:after {
            width: 1em !important;
            height: 0.5em !important;
        }

        .mmform-container div.submitcontainer a.submitbutton, .mmform-container div.submitcontainer button.submitbutton, .mmform-container button.mmform-event-button {
            background-color: #035458 !important;
            margin: auto !important;
        }

        div.error-container {
            color: #aa0000 !important;
        }
    </style>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" title="" href="https://d1ursyhqs5x9h1.cloudfront.net/sw/mailmaster/css/form-template-minimal-light.css" type="text/css">
        <script type="text/javascript" src="https://d1ursyhqs5x9h1.cloudfront.net/sw/scripts/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://d1ursyhqs5x9h1.cloudfront.net/sw/scripts/mailmaster-scripts-1.0.js"></script>
        <script type="text/javascript" src="https://d1ursyhqs5x9h1.cloudfront.net/sw/scripts/mmutils.min.js"></script>
        <script src="https://d1ursyhqs5x9h1.cloudfront.net/sw/scripts/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            var submitProgress = false;
            var productTaxRates = '';
            var productTaxRateDefault = '';
            var taxRateVat = '';
            var taxRateBrutto = '';
            var taxRateVatSum = '';
            var shippingTaxRates = '';
            var shippingTaxRateDefault = '';
            var recaptchaResponse = '';
            glsPontok = '';
            mmjQuery = jQuery.noConflict();

            mmjQuery(window).load(function() {
                var parent_url = decodeURIComponent( document.location.hash.replace( /^#/, '' ) ),link;

                var error = false;
                var emailuniquefail = false;
                var emailuniquecheck = false;
                var checkNum = 0;

                function setHeight(extraHeight) {
                    try {
                        messaging.postMessage({ if_height: parseInt(mmjQuery.getDocHeight())+extraHeight,form_id: 157904}, parent_url, parent );
                        /* Set referer hidden field */
                        if (mmjQuery("#mssysform1579041535981649 input[name='mssys_referer_page']").length == 0) {
                            mmjQuery("#mssysform1579041535981649").append('<input type="hidden" name="mssys_referer_page" value="'+parent_url+'">');
                        }
                    } catch(err) {
                        /* There is no parent window */
                    }
                };

                var prevent_multiple_submit_code = Math.floor(Date.now() / 1000) + '' + Math.floor((Math.random() * 9999999999) + 1);
                mmjQuery("#mssysform1579041535981649 input[name='mssys_submit_params']").val(prevent_multiple_submit_code);






                Inputmask.extendDefinitions({
                    'x': {
                        validator: "(20|30|31|70)",
                        cardinality:2,
                        prevalidator: [
                            { validator: "[237]", cardinality: 1 },
                            { validator: "(20|30|31|70)", cardinality: 2 },
                        ]
                    }
                });


                mmjQuery("#mmform-container1535981649 input[name^='mssys_mobile']").inputmask("+36x9999999", {
                    onBeforeMask: function (value, opts) {
                        return (value.replace(/^\+36/, "")).replace(/^0036/, "").replace(/^36/, "");
                    },
                    placeholder: ""
                });



                mmjQuery(".mezo610649").hide();

                mmjQuery("#mmform-container1535981649 .submitbutton").click(function (e) {
                    vatCheck = false;
                    if (mmjQuery(this).attr('id') == 'want_upsell') {
                        mmjQuery("#mssysform1579041535981649 input[name='mssys_want_upsell']").val('1');
                    } else if (mmjQuery(this).attr('id') == 'dont_want_upsell') {
                        mmjQuery("#mssysform1579041535981649 input[name='mssys_want_upsell']").val('0');
                    }
                    mmjQuery("#mssysform1579041535981649").trigger('submit');
                });
                if (mmjQuery("#mmform-container1535981649 .postalsamechk").length > 0) {
                    if (mmjQuery("#mmform-container1535981649 .postalsamechk").is(":checked")) {
                        mmjQuery("#mmform-container1535981649 div[id^='containermssys_postal_']").hide();
                    }
                }
                mmjQuery("#mmform-container1535981649 .postalsamechk").click(function () {
                    if (mmjQuery(this).prop('checked')) {
                        mmjQuery("#mmform-container1535981649 div[id^='containermssys_postal_']").hide();
                    } else {
                        mmjQuery("#mmform-container1535981649 div[id^='containermssys_postal_']").show();
                    }
                    setHeight(0);
                });
                if (mmjQuery("#mmform-container1535981649 .billsamechk").length > 0) {
                    if (mmjQuery("#mmform-container1535981649 .billsamechk").is(":checked")) {
                        mmjQuery("#mmform-container1535981649 div[id^='containermssys_bill_']").hide();
                    }
                }
                mmjQuery("#mmform-container1535981649 .billsamechk").click(function () {
                    if (mmjQuery(this).prop('checked')) {
                        mmjQuery("#mmform-container1535981649 div[id^='containermssys_bill_']").hide();
                    } else {
                        mmjQuery("#mmform-container1535981649 div[id^='containermssys_bill_']").show();
                    }
                    setHeight(0);
                });


                mmjQuery("#mssysform1579041535981649").submit(function (event) {
                    if (submitProgress) {
                        event.preventDefault();
                        return false;
                    }
                    error = false;
                    emailuniquefail = false;
                    submitProgress = true;

                    var osm_shipping_method_type =                                              mmjQuery("#mmform-container1535981649 input[name='shipping_method']:checked").attr("osm_shipping_methods")

                    mmjQuery("#mmform-container1535981649 .error-container").hide();
                    mmjQuery("#mmform-container1535981649 .error-field").removeClass('error-field');

                    /*mmjQuery("input[name='form_submit']").attr('disabled',true);*/
                    if (mmjQuery("#mmform-container1535981649 .submitbutton img").length == 0) {
                        mmjQuery("#mmform-container1535981649 .submitbutton").html("Feldolgozás...");
                    }
                    if (mmjQuery("#mmform-container1535981649 .postalsamechk").prop('checked') && osm_shipping_method_type != 'pickpackpont' && osm_shipping_method_type != 'shipping_glspont' && osm_shipping_method_type != 'mplpont') {
                        mmjQuery("#mmform-container1535981649 #mssys_postal_company").val(mmjQuery("#mmform-container1535981649 #mssys_bill_company").val());
                        mmjQuery("#mmform-container1535981649 #mssys_postal_country").val(mmjQuery("#mmform-container1535981649 #mssys_bill_country option:selected").val());
                        mmjQuery("#mmform-container1535981649 #mssys_postal_zip").val(mmjQuery("#mmform-container1535981649 #mssys_bill_zip").val());
                        mmjQuery("#mmform-container1535981649 #mssys_postal_city").val(mmjQuery("#mmform-container1535981649 #mssys_bill_city").val());
                        mmjQuery("#mmform-container1535981649 #mssys_postal_address").val(mmjQuery("#mmform-container1535981649 #mssys_bill_address").val());
                        mmjQuery("#mmform-container1535981649 #mssys_postal_state").val(mmjQuery("#mmform-container1535981649 #mssys_bill_state").val());
                    }
                    if (mmjQuery("#mmform-container1535981649 .billsamechk").prop('checked')) {
                        if (osm_shipping_method_type == 'pickpackpont' || osm_shipping_method_type == 'shipping_glspont' || osm_shipping_method_type == 'mplpont' && (mmjQuery("#mmform-container1535981649 #mssys_lastname").val() != '' || mmjQuery("#mmform-container1535981649 #mssys_firstname").val() != '')) {
                            mmjQuery("#mmform-container1535981649 #mssys_bill_company").val(mmjQuery("#mmform-container1535981649 #mssys_lastname").val() + ' ' + mmjQuery("#mmform-container1535981649 #mssys_firstname").val());
                        } else {
                            mmjQuery("#mmform-container1535981649 #mssys_bill_company").val(mmjQuery("#mmform-container1535981649 #mssys_postal_company").val());
                        }
                        mmjQuery("#mmform-container1535981649 #mssys_bill_country").val(mmjQuery("#mmform-container1535981649 #mssys_postal_country option:selected").val());
                        mmjQuery("#mmform-container1535981649 #mssys_bill_zip").val(mmjQuery("#mmform-container1535981649 #mssys_postal_zip").val());
                        mmjQuery("#mmform-container1535981649 #mssys_bill_city").val(mmjQuery("#mmform-container1535981649 #mssys_postal_city").val());
                        mmjQuery("#mmform-container1535981649 #mssys_bill_address").val(mmjQuery("#mmform-container1535981649 #mssys_postal_address").val());
                        mmjQuery("#mmform-container1535981649 #mssys_bill_state").val(mmjQuery("#mmform-container1535981649 #mssys_postal_state").val());
                    }

                    mmjQuery('input[type="file"]').each(function(){
                        var errormsg = '';
                        if (!checkExtension(mmjQuery(this).val())) {
                            errormsg = "A feltöltendő fájl kiterjesztése nem engedélyezett.";
                            error = true;
                            mmjQuery(this).focus();
                        }
                        if (errormsg != '') {
                            alert(errormsg);
                        }
                    });

                    if (!emailuniquecheck) {
                        if (mmjQuery("#mmform-container1535981649 #containeremail input[name='email']").val() != '') {
                            mmjQuery.ajax({
                                type: "GET",
                                url: "https://sw.marketingszoftverek.hu/api/check-email-uniqueness-json.php",
                                data: {ns_id:'157904',token:'yQyayBXXwKFEA5cG5FH4YnVcoKaNylFOakLdthGNmdtihqZPuF1535981529',email:mmjQuery("#mmform-container1535981649 input[name='email']").val()},
                                cache: false,
                                dataType: "jsonp",
                                jsonp: 'jsonp_callback',
                                async: false,
                                success: function(msg){
                                    /*mmjQuery("input[name='form_submit']").removeAttr("disabled");*/
                                    if (msg.response == '1') {
                                        mmjQuery("#mmform-container1535981649 #containeremail .error-container").show().html('Ezzel az email címmel már feliratkozott korábban!');

                                        mmjQuery("#mmform-container1535981649 .submitbutton").removeClass('mm-submit-disabled');
                                        mmjQuery("#mmform-container1535981649 .submitbutton").html("Küldés");
                                        emailuniquefail = true;
                                        submitProgress = false;
                                        mmjQuery("#mmform-container1535981649 input[name='email']").focus();
                                    } else {
                                        if (!error) {
                                            emailuniquecheck = true;
                                            emailuniquefail = false;
                                            submitProgress = false;
                                            mmjQuery("#mssysform1579041535981649").trigger("submit");
                                            mmjQuery("#mmform-container1535981649 #containeremail .error-container").hide();

                                        } else {
                                            emailuniquecheck = false;
                                            mmjQuery("#mmform-container1535981649 input[name='email']").focus();
                                        }
                                    }
                                }
                            });
                            event.preventDefault();
                        }
                    }

                    if (emailuniquefail) {
                        mmjQuery("#mmform-container1535981649 #containeremail .error-container").show();
                        mmjQuery("#mmform-container1535981649 input[name='email']").addClass('error-field');

                        error = true;
                    }


                    if (!checkMail(mmjQuery("#mmform-container1535981649 input[name='email']").val()) ) {
                        mmjQuery("#mmform-container1535981649 #containeremail .error-container").show();
                        mmjQuery("#mmform-container1535981649 input[name='email']").addClass('error-field').focus();

                        error = true;
                    }





                    var tmp_input_val = mmjQuery("#mmform-container1535981649 #containermssys_fullname input[type='text'],"+
                        "#mmform-container1535981649 #containermssys_fullname [type='email'],"+
                        "#mmform-container1535981649 #containermssys_fullname [type='url'],"+
                        "#mmform-container1535981649 #containermssys_fullname [type='number'],"+
                        "#mmform-container1535981649 #containermssys_fullname [type='password'],"+
                        "#mmform-container1535981649 #containermssys_fullname [type='tel']").val();
                    if (mmjQuery("#mmform-container1535981649 #containermssys_fullname").is(":visible") && (tmp_input_val == '' || tmp_input_val == '0000-00-00' || tmp_input_val == '0000.00.00')) {
                        mmjQuery("#mmform-container1535981649 #containermssys_fullname .error-container").show();

                        mmjQuery("#mmform-container1535981649 #containermssys_fullname input").addClass('error-field').focus();
                        error = true;
                    }


                    var tmp_input_val = mmjQuery("#mmform-container1535981649 #containermssys_bill_zip input[type='text'],"+
                        "#mmform-container1535981649 #containermssys_bill_zip [type='email'],"+
                        "#mmform-container1535981649 #containermssys_bill_zip [type='url'],"+
                        "#mmform-container1535981649 #containermssys_bill_zip [type='number'],"+
                        "#mmform-container1535981649 #containermssys_bill_zip [type='password'],"+
                        "#mmform-container1535981649 #containermssys_bill_zip [type='tel']").val();
                    if (mmjQuery("#mmform-container1535981649 #containermssys_bill_zip").is(":visible") && (tmp_input_val == '' || tmp_input_val == '0000-00-00' || tmp_input_val == '0000.00.00')) {
                        mmjQuery("#mmform-container1535981649 #containermssys_bill_zip .error-container").show();

                        mmjQuery("#mmform-container1535981649 #containermssys_bill_zip input").addClass('error-field').focus();
                        error = true;
                    }


                    var regexp = /^([+]36)(20|30|31|70)([0-9]{7})$/i;
                    if (mmjQuery("#mmform-container1535981649 #containermssys_mobile").is(":visible") && mmjQuery("#mmform-container1535981649 #containermssys_mobile input[name='mssys_mobile']").val() == '' || (mmjQuery("#mmform-container1535981649 #containermssys_mobile input[name='mssys_mobile']").val() != '' && !regexp.test(mmjQuery("#mmform-container1535981649 #containermssys_mobile input[name='mssys_mobile']").val()))) {
                        mmjQuery("#mmform-container1535981649 #containermssys_mobile input[name='mssys_mobile']").addClass('error-field').focus();
                        mmjQuery("#mmform-container1535981649 #containermssys_mobile .error-container").show();

                        error = true;
                    }


                    if (mmjQuery("#mmform-container1535981649 #containergdpr_nyilatkozat").is(":visible") && !mmjQuery("#mmform-container1535981649 #containergdpr_nyilatkozat input[type='checkbox']").prop('checked')) {
                        mmjQuery("#mmform-container1535981649 #containergdpr_nyilatkozat .error-container").show();
                        mmjQuery("#mmform-container1535981649 #containergdpr_nyilatkozat input[type='checkbox']:first").focus();

                        error = true;
                    }

                    setHeight(0);

                    if (error) {
                        submitProgress = false;
                        /*mmjQuery("input[name='form_submit']").removeAttr("disabled");*/
                        mmjQuery("#mmform-container1535981649 .submitbutton").removeClass('mm-submit-disabled');
                        if (mmjQuery("#mmform-container1535981649 .submitbutton img").length == 0) {
                            mmjQuery("#mmform-container1535981649 .submitbutton").html("Küldés");
                        }
                        return false;
                    } else {
                        /*mmjQuery("input[name='form_submit']").removeAttr("disabled");*/

                        messaging.postMessage({setmmcookie:1}, parent_url, parent );
                        return true;
                    }
                });



                if (document.charset != undefined) {
                    mmjQuery('#mssys-character-encoding').val(document.charset);
                } else if (document.characterSet != '') {
                    mmjQuery('#mssys-character-encoding').val(document.characterSet);
                }
                mmjQuery("#mmform-container1535981649 .prodqty,#mmform-container1535981649 .shippingmethodradio,#mmform-container1535981649 .prodchk,#mmform-container1535981649 input[name='prod_id']").trigger('change');
                setHeight(0);setTimeout(function(){setHeight(0)},1000);
                mmUtility.saveUtmParams();


            });
            mmjQuery.getDocHeight = function(){
                return Math.max(
                    mmjQuery(document).height(),
                    mmjQuery(window).height(),
                        /* For opera: */
                    document.documentElement.clientHeight
                );
            };

            function mmNumberFormat(number, decimals, dec_point, thousands_sep) {

                var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
                var d = dec_point == undefined ? "," : dec_point;
                var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
                var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;

                return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
            }

            function isNumber(n) {
                return !isNaN(parseFloat(n)) && isFinite(n);
            }


        </script>
        <script type="text/javascript">

            mmjQuery(document).ready(function() {
                mmjQuery('.formrowcontainer').each(function() {
                    var placeHolder = mmjQuery(this).children('label').text();
                    if (placeHolder != '') {
                        if ((mmjQuery(this).find('input[type="text"]').prop('class') != 'date') && (mmjQuery(this).find('input[type="text"]').prop('class') != 'time')) {
                            mmjQuery(this).find('input[type="text"]').prop('placeholder', placeHolder);
                        }

                        mmjQuery(this).find('input[type="email"]').prop('placeholder', placeHolder);
                        mmjQuery(this).find('input[type="tel"]').prop('placeholder', placeHolder);
                        mmjQuery(this).find('input[type="url"]').prop('placeholder', placeHolder);

                        if (mmjQuery(this).parents("#braintree-paymentinfo-container").length == 0 && mmjQuery(this).find('input').prop('type') != 'checkbox' && mmjQuery(this).find('input').prop('type') != 'radio' && mmjQuery(this).find('input').prop('class') != 'date' && mmjQuery(this).find('input').prop('class') != 'time' && mmjQuery(this).find('select').length == 0 && mmjQuery(this).find('input').prop('type') != 'file' && mmjQuery(this).find('textarea').length == 0) {
                            mmjQuery(this).children('label').remove();
                        }
                    }
                });

                function setRadioButton(type,selector) {
                    if (type == 'interact') {
                        var mm_input_name = mmjQuery(selector).attr("name");
                        var mm_input_id = mmjQuery(selector).attr("id");
                        mmjQuery('input[name="' + mm_input_name + '"]').each(function() {
                            mmjQuery('label[for="' + mmjQuery(this).attr("id") + '"]').addClass('radio-label').removeClass('radio-selected');
                        });
                        mmjQuery('label[for="' + mm_input_id + '"]').addClass('radio-selected').removeClass('radio-label');
                        if (mmjQuery(selector).prop('name') === 'shipping_method' || mmjQuery(selector).prop('name') === 'online_payment_method') {
                            mmjQuery('input[type="radio"]:checked').next('label').addClass('radio-selected').removeClass('radio-label');
                            mmjQuery('input[type="radio"]:not(:checked)').next('label').addClass('radio-label').removeClass('radio-selected');
                        }
                    } else {
                        mmjQuery('input[type="radio"]:checked').each(function() {
                            mmjQuery('label[for="' + mmjQuery(this).attr("id") + '"]').addClass('radio-selected').removeClass('radio-label');
                        });
                        mmjQuery('input[type="radio"]:not(:checked)').each(function() {
                            mmjQuery('label[for="' + mmjQuery(this).attr("id") + '"]').addClass('radio-label').removeClass('radio-selected');
                        });
                    }
                }

                function setCheckbox(type,selector) {
                    if (type == 'interact') {
                        var checkboxSelector = mmjQuery(selector).prop('id');
                        if (mmjQuery(selector).is(':checked')) {
                            mmjQuery('label.checkbox-formlabel[for=' + checkboxSelector + ']').addClass('checkbox-checked');
                        } else {
                            mmjQuery('label.checkbox-checked[for=' + checkboxSelector + ']').removeClass('checkbox-checked').addClass('checkbox-formlabel');
                        }
                    } else {

                        var checkboxSelector = mmjQuery(selector).prop('id');
                        if (mmjQuery(selector).is(':checked')) {
                            mmjQuery('label.checkbox-formlabel[for=' + checkboxSelector + ']').addClass('checkbox-checked');
                        } else {
                            mmjQuery('label.checkbox-checked[for=' + checkboxSelector + ']').removeClass('checkbox-checked').addClass('checkbox-formlabel');
                        }

                        mmjQuery('input[type="checkbox"]').each(function() {

                            var checkboxSelector = mmjQuery(this).prop('id');

                            if (mmjQuery(this).is(':checked')) {
                                mmjQuery('label.checkbox-formlabel[for=' + checkboxSelector + ']').addClass('checkbox-checked');
                            } else {
                                mmjQuery('label.checkbox-checked[for=' + checkboxSelector + ']').removeClass('checkbox-checked').addClass('checkbox-formlabel');
                            }
                        });
                    }
                }

                mmjQuery('input[type="radio"]').change(function() {
                    setRadioButton('interact',mmjQuery(this));
                }); /* Set radio buttons */

                mmjQuery('input[type="checkbox"]').change(function() {
                    setCheckbox('interact',mmjQuery(this));
                }); /* Set checkboxes */

                setRadioButton('initial');
                setCheckbox('initial');

                if (mmjQuery(".postalsamechk").is(":checked")) {
                    mmjQuery('label.checkbox-formlabel[for=' + mmjQuery(".postalsamechk").prop('id') + ']').addClass('checkbox-checked');
                }
                if (mmjQuery(".billsamechk").is(":checked")) {
                    mmjQuery('label.checkbox-formlabel[for=' + mmjQuery(".billsamechk").prop('id') + ']').addClass('checkbox-checked');
                }

            });

        </script>
        <form action="http://sw.marketingszoftverek.hu/t/sub" method="post" enctype="multipart/form-data" id="mssysform1579041535981649" class="mssysform mssysnsid157904" target="_top">
            <input name="nl_id" type="hidden" value="85147">
            <input name="ns_id" type="hidden" value="157904">

            <input type="hidden" name="character-encoding" id="mssys-character-encoding" value="">

            <div id="mmform-container1535981649" class="mmform-container">
                <fieldset class="titlepart">
                    <h2>Hitel kiváltás kalkuláció</h2>
                    <div class="form-desc"></div>
                </fieldset>
                <fieldset class="datafields">
                    <input type="hidden" name="mssys_submit_params" value="" />



                    <div id="containermssys_fullname" class="formrowcontainer">
                        <label class="formlabel" >Teljes név</label>
                        <div class="fieldcontainer">
                            <input id="mssys_fullname" name="mssys_fullname" type="text" value="">
                        </div>
                        <div style="clear: both;"></div>
                        <div class="error-container">Kérjük, ezt a mezőt is legyen szíves kitölteni!</div>
                    </div>
                    <div style="clear: both;"></div>
                    <div id="containeraddress_1535636457" class="formrowcontainer mezo610649">
                        <label class="formlabel" >Address</label>
                        <div class="fieldcontainer">
                            <input id="address_1535636457" name="address_1535636457" type="text" value="">
                        </div>
                        <div style="clear: both;"></div>
                    </div>
                    <div style="clear: both;"></div>
                    <div id="containeremail" class="formrowcontainer">
                        <label class="formlabel" >E-mail</label>
                        <div class="fieldcontainer">
                            <input id="email" name="email" type="email" value="">
                        </div>
                        <div style="clear: both;"></div>
                        <div class="error-container">Kérjük, ezt a mezőt is legyen szíves kitölteni!</div>
                    </div>
                    <div style="clear: both;"></div>
                    <div id="containermssys_bill_zip" class="formrowcontainer">
                        <label class="formlabel" >Irányítószám</label>
                        <div class="fieldcontainer">
                            <input id="mssys_bill_zip" name="mssys_bill_zip" type="text" value="">
                        </div>
                        <div style="clear: both;"></div>
                        <div class="error-container">Kérjük, ezt a mezőt is legyen szíves kitölteni!</div>
                    </div>
                    <div style="clear: both;"></div>
                    <div id="containermssys_mobile" class="formrowcontainer">
                        <label class="formlabel" >Belföldi mobil telefonszám</label>
                        <div class="fieldcontainer">
                            <input id="mssys_mobile" name="mssys_mobile" type="tel" value="">
                        </div>
                        <div style="clear: both;"></div>
                        <div class="error-container">Kérjük, ezt a mezőt is legyen szíves kitölteni!</div>
                    </div>
                    <div style="clear: both;"></div>
                    <div id="containerhirlevelet_ker" class="formrowcontainer">
                        <input type="checkbox" id="hirlevelet_ker" name="hirlevelet_ker"    > <label for="hirlevelet_ker" class="checkbox-formlabel" style="display:inline;">Szeretnék hírlevelet kapni</label>	<div class="error-container">Kérjük, ezt a mezőt is legyen szíves kitölteni!</div>		</div>
                    <div style="clear: both;"></div>
                    <div id="containergdpr_nyilatkozat" class="formrowcontainer">
                        <input type="checkbox" id="gdpr_nyilatkozat" name="gdpr_nyilatkozat"    > <label for="gdpr_nyilatkozat" class="checkbox-formlabel" style="display:inline;">Elfogadom az <a target="_blank" href="https://tarifalo.pannonsafe.hu/kozvetitodokumentumok/pannonsafe_uzletszabalyzat.pdf">Üzletszabályzatot</a> és az <a href="https://www.pannonsafe.hu/rolunk/adatkezelesunk" target="_blank">adatkezelési nyilatkozatot</a></label>	<div class="error-container">Kérjük, ezt a mezőt is legyen szíves kitölteni!</div>		</div>
                    <div style="clear: both;"></div>
                    <textarea name="mmform_hitelcel" style="display:none;"></textarea>
                    <textarea name="mmform_havi_jovedelem" style="display:none;"></textarea>
                    <textarea name="mmform_kamatperiodus" style="display:none;"></textarea>
                    <textarea name="mmform_hitelosszeg" style="display:none;"></textarea>
                    <textarea name="mmform_futamido" style="display:none;"></textarea>








                    <style>

                        .belowsubmitcontainer-upsell {
                            margin-bottom:15px;
                        }
                        .below-submit-item {
                            margin-top:15px;
                        }
                        .checkbox-formlabel > p {
                            margin:0px;
                            padding:0px;
                        }
                    </style>
                </fieldset>
                <fieldset class="submitpart">
                    <div class="submitcontainer">
                        <a href="javascript:;" class="submitbutton">Küldés</a>
                    </div>
                    <div class="belowsubmitcontainer"></div>
                </fieldset>
            </div>
        </form>
        <script type="text/javascript">
        mmjQuery('.submitbutton','.mmform-container').addClass("btn btn-secondary btn-block text-uppercase").css('padding','12px 15px').html('<i class="fa fa-chevron-right" aria-hidden="true"></i>Küldés');
    </script>
        </div>
    </div>


    <script type="text/javascript" src="https://d1ursyhqs5x9h1.cloudfront.net/sw/scripts/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://hitel.pannonsafe.hu/assets/js/utils_kalk.js"></script>
    <script type="text/javascript" src="https://hitel.pannonsafe.hu/assets/js/nouislider.min.js"></script>
    <script type="text/javascript" src="../js/min_autoNumeric.js"></script>
    <script type="text/javascript">

        let height;
        function sendPostMessage ()  {
            if (height !== document.getElementById('container').offsetHeight) {
                height = document.getElementById('container').offsetHeight;
                window.parent.postMessage({
                    frameHeight_ew913RtGH323wrWE42: height
                }, 'http://localhost:8000');
                console.log(height) // check the message is being sent correctly
            }
        }

        window.onload = sendPostMessage;
        window.onresize = sendPostMessage;

        var num_hitelosszeg = new AutoNumeric('#hitelosszeg', {
            decimalPlaces: 0,
            digitGroupSeparator: ' ',
            currencySymbol: ' Ft',
            currencySymbolPlacement: 's'
        });

        $('.nice_checkbox').click(function (e) {
            $(this).toggleClass('nice_checkbox-checked');
        })

        function showresponse(data, i, timeout) {

            if (data[i] && data[i].torleszto) {


                var futamido_text = " 1 -  " + data[i].futamido + " hónap:";
                var torleszto_text = "<span style='color: #ef7f1b;font-weight: bold'>" + number_format(data[i].torleszto, 0, '', ' ') + " Ft</span>";

                var futamido_text2 = "";
                var torleszto_text2 = "";
                if (data[i].tamogatott && data[i].torleszto_utan != '' && data[i].torleszto_utan != 0) {
                    var futamido_text = " 1 -  60 hónap:";
                    var futamido_text2 = "61 - " + data[i].futamido + " hónap:";

                    var torleszto_text = "<span style='color: #ef7f1b;font-weight: bold'>" + number_format(data[i].torleszto, 0, '', ' ') + " Ft</span>";
                    var torleszto_text2 = "<span style='color: #ef7f1b;font-weight: bold'>" + number_format(data[i].torleszto_utan, 0, '', ' ') + " Ft</span>";

                }


                $('.futamido_kezdeskor', $("#eredmeny_" + (i + 1))).html(futamido_text);
                $('.futamido_utan', $("#eredmeny_" + (i + 1))).html(futamido_text2);

                $('.tolreszto_kezdeskor', $("#eredmeny_" + (i + 1))).html(torleszto_text);
                $('.tolreszto_utan', $("#eredmeny_" + (i + 1))).html(torleszto_text2);

                $('.kamat', $("#eredmeny_" + (i + 1))).html(number_format(data[i].kamat, 2, ',', ' ') + '%');

                $('textarea[name=mmform_hitelcel]').text($('#hitelcel option:selected').text());
                $('textarea[name=mmform_futamido]').text($('#futamido option:selected').text());
                $('textarea[name=mmform_havi_jovedelem]').text(($('#jovedelem_limit').prop('checked') ? '250 000 Ft felett' : '250 000 Ft alatt'));
                $('textarea[name=mmform_hitelosszeg]').text(($('#hitelosszeg').val()) + ' Ft');
                $('textarea[name=mmform_kamatperiodus]').text($('.periodusok:checked').map(function () {
                    return $(this).val()
                }).get().join(' hó, ') + ' hó');


                setTimeout(function () {
                    $("#eredmeny_" + (i + 1)).fadeIn();
                    sendPostMessage();
                }, timeout);
            }


        }


        function hitelcel_change() {
            var hitelcel = $('#hitelcel').val()
            var futamido = $('#futamido').val();

            if (hitelcel == 4) {
                $('.periodus_valaszto').hide();
                $(':not(.kolcson)', '#futamido').hide();
                if (futamido > 10) $('#futamido').val(5);
            } else {
                $('.periodus_valaszto').show();
                $('#futamido option').show();
            }
            sendPostMessage();

        }

        $("#calculateBtn").click(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: base_url + 'penznaviapi',
                dataType: "json",
                data: {
                    action: 'get_hitel_kalkulacio',
                    hitelcel: parseInt($('#hitelcel').val()),
                    hitelosszeg: num_hitelosszeg.getNumber(),
                    futamido: parseInt($('#futamido').val()) * 12,
                    jovedelem_limit: +$('#jovedelem_limit').prop('checked'),
                    periodusok: $('.periodusok:checked').map(function () {
                        return parseInt($(this).val())
                    }).get()
                },
                success: function (rData) {
                    if (rData.penznavigatorApiResponse.responseData.hitelKalkulaciok) {
                        var data = rData.penznavigatorApiResponse.responseData.hitelKalkulaciok;
                        if (data[0] && data[0].torleszto) {

                            //találatok
                            $('.last_show').hide();
                            $("#eredmeny_1").hide();
                            $("#eredmeny_2").hide();
                            $("#eredmeny_3").hide();
                            $(".calculator-box").hide();
                            $(".result-box").show();

                            sendPostMessage();
                            $("html, body").animate({scrollTop: $('#result-box').offset().top}, 1000, function () {
                                var timer_kezd = 0;
                                for (var i = 0; i <= 2; i++) {
                                    if (i == 0) timer_kezd = -750;
                                    timer_kezd += 750;
                                    showresponse(data, i, timer_kezd);
                                }
                                timer_kezd += 1000;
                                setTimeout(function () {
                                    $('.last_show').fadeIn();
                                    sendPostMessage();
                                }, timer_kezd);


                            });


                        } else {
                            alert("Nincs a keresésnek megfelelő találat!");
                        }
                    } else {
                        alert("Valami hiba történt. Próbálja újra!");
                    }
                }
            });
        });

        function recalc() {
            $(".calculator-box").fadeIn();
            $(".result-box").fadeOut();
            setTimeout(function(){
                sendPostMessage();
            }, 1000);
        }

        hitelcel_change();

    </script>
