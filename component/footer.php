<!--Footer Section Start-->
<div class="eco_footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="eco_footer_data">
                    <a href="#" class="eco_footer_title"><img src="images/FF_bianco-orizzontale-navigator.png" class="img-responsive" alt="">
                    </a>
                    <div class="eco_footer_content">
                        <p>Da oltre 25 anni produciamo fiori di stagione, ci occupiamo di manutenzione di giardini e
                            forniamo fiori per le occasioni speciali come matrimoni e battesimi. L'attenzione al
                            dettaglio e alla cura della pianta da sempre ci fanno da motto. </p>
                    </div>
                </div>
            </div>

            <!--Footer Tag End-->
            <!--Footer Categories Start-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="eco_footer_data">
                    <h6 class="eco_footer_title"> Orari &nbsp;
                        <span class="eco_color"></span>
                    </h6>
                    <div class="eco_footer_content">
                        <ul>
                            <li><span style="width:90px;float:left;"><b>Lunedì:</b></span> <?php echo $_SESSION[confCache]['Lunedi'];?>
                            </li>
                            <li><span style="width:90px;float:left;"><b>Martedì:</b></span> <?php echo $_SESSION[confCache]['Martedi'];?>
                            </li>
                            <li><span style="width:90px;float:left;"><b>Mercoledì:</b></span> <?php echo $_SESSION[confCache]['Mercoledi'];?>
                            </li>
                            <li><span style="width:90px;float:left;"><b>Giovedì:</b></span> <?php echo $_SESSION[confCache]['Giovedi'];?>
                            </li>
                            <li><span style="width:90px;float:left;"><b>Venerdì:</b></span> <?php echo $_SESSION[confCache]['Venerdi'];?>
                            </li>
                            <li><span style="width:90px;float:left;"><b>Sabato:</b></span> <?php echo $_SESSION[confCache]['Sabato'];?>
                            </li>
                            <li><span style="width:90px;float:left;"><b>Domenica:</b></span> <?php echo $_SESSION[confCache]['Domenica'];?>
                            </li>
                            <li><span style="width:90px;float:left;"><b>Chiusure:</b></span> <?php echo $_SESSION[confCache]['Chiusure'];?>
                            </li>
                        </ul>
                    </div>
                    <!--Footer Categories Start-->
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="eco_footer_data">
                    <h6 class="eco_footer_title">Contatti</h6>
                    <p class="padder_bottom_10"><b style="color:#69af07">Floricoltura Fiorenzo</b> <br/>
                        via Cascina Villa, 1, 20063 <br/>Cernusco sul Naviglio MI</p>
                    <p><b>Telefono:</b> <a style="color:#69af07;" href="tel:+39333 681 9062">+39 333 681 9062</a>
                        <br>
                    </p>
                    <p><b>Email:</b>
<!--                        <a style="color:#69af07;" href="mailto:info@floricolturafiorenzo.it">info@floricolturafiorenzo.it</a>-->
                        <a href="mailto:info@floricolturafiorenzo.it">
                            <svg height="20" width="220">
                                <text fill="#69af07" font-size="16px" font-family="Open Sans"
                                      x="47%" y="97%" style="text-anchor: middle">info@floricolturafiorenzo.it</text>
                            </svg>
                        </a>
                    </p>
                    <div class="eco_footer_content">
                        <div class="fb-page" data-href="https://www.facebook.com/floricolturafiorenzo.it/"
                             data-tabs="diario" data-width="325" data-small-header="false"
                             data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/floricolturafiorenzo.it/"
                                        class="fb-xfbml-parse-ignore"><a
                                        href="https://www.facebook.com/floricolturafiorenzo.it/">Floricoltura
                                    Fiorenzo</a></blockquote>
                        </div>
                        <div id="fb-root"></div>
                        <script>(function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.10";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                    </div>
                    <!--Footer Categories Start-->
                </div>
            </div>

        </div>
    </div>
</div>
<footer>
    <div class="eco_copyight"> Floricoltura Fiorenzo &copy; 2017 by Lorenzo Senesi & William Nardo</div>
</footer>
<!--Footer Section End-->
<!--go to top-->
<div class="totop">
    <div class="gototop">
        <a href="#">
            <div class="arrowgototop"></div>
        </a>
    </div>
</div>

<?php include 'stat.php'; ?>