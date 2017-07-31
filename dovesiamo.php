<!DOCTYPE html>
<!--[if IE 9]> <html lang="it" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--><html lang="it"><!--<![endif]-->
<!-- Header Start -->

<head>
    <title>Dove Siamo :: Floricoltura Fiorenzo</title>
    <?php include "component/seo.php"; ?>
    <!--Main Css Start-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--Main Css End-->
    <!--color changing css file-->
    <link rel="stylesheet" id="theme-change" type="text/css" href="#">
    <!--color changing css file end-->
    <!-- favicon link -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logoge.png" />
    <!-- favicon link End -->
</head>
<!-- Header End -->
<!-- Body Start -->

<body>
    <?php
        $page = "dovesiamo";
        include "component/navigator.php";
    ?>
    <!--Breadcrumb Start-->
    <div class="eco_bread">
        <div class="container">
            <div class="eco_page_topbar">
                <div class="eco_page_title">
                    <h4 class="text-uppercase">dove trovarci</h4>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb End-->
    <!--Inner Container Start-->
    <!--eco_contactForm Start-->
    <div class="eco_inner_page_container">
        <div class="container">
            <div class="eco_contact_page padder_top_50 padder_bottom_50">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!--eco_mapdiv strat-->
                        <div class="eco_mapdiv">
                            <div id="bigth_googleMap" style="width:100%;height:450px;"></div>
                        </div>
                        <!--eco_mapdiv end-->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabel-dovesiamo" >
                                <div class="eco_contact_info">
                                    <ul>
                                        <li><i class="fa fa-home"> </i>FLORICOLTURA FIORENZO
                                            <br>
                                            <span class="eco_left_spacer text-uppercase">via cascina villa 1<br>cernusco sul naviglio, milano (mi)</span>
                                        </li>
                                        <li><i class="fa fa-phone"></i>(+39) 02 923 2431</li>
                                        <li><i class="fa fa-mobile"></i>(+39) 333 681 9062</li>
                                        <li><i class="fa fa-envelope"></i>info@floricolturafiorenzo.it</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                <h5>Come raggiungerci</h5>
                                    <p>Seguire la <span class="eco_color">Strada Statale 11 Padana Superiore</span>,
                                        raggiungere l'<span class="eco_color">Esselunga di Pioltello</span>,
                                        alla rotonda prendere l'uscita per <span class="eco_color">via Melghera</span>
                                        (per entrare a Cernusco sul Naviglio. Percorrere la via fino al raggiungere di un semaforo.
                                        Superare il semaforo e salire sul ponte. Vi trovate così in <span class="eco_color">Via della Martesana</span>,
                                        tranquillamente percorribile con i mezzi.</p></li>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--eco_contactForm end-->
    <!--go to top Start-->
    <div class="totop">
        <div class="gototop">
            <a href="#">
                <div class="arrowgototop"> </div>
            </a>
        </div>
    </div>
    <!--go to top End-->
    <!--Footer Section Start-->
    <?php include "component/footer.php"; ?>
    <!--Footer Section End-->
    <!--Script Start-->
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/plugins/prettyphoto/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="js/plugins/rainyday/rainyday.js" type="text/javascript"></script>
    <script src="js/jquery.mixitup.js" type="text/javascript"></script>
    <script src="js/scrollReveal.js" type="text/javascript"></script>
    <script src="js/circles.js" type="text/javascript"></script>
    <script src="js/plugins/countto/jquery.countTo.js" type="text/javascript"></script>
    <script src="js/plugins/countto/jquery.appear.js" type="text/javascript"></script>
    <script src="js/plugins/parallax/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <!--Revolution slider js start-->
	<script src="js/plugins/rev/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script src="js/plugins/rev/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="js/plugins/rev/js/revolution.extension.actions.min.js" type="text/javascript"></script>
    <script src="js/plugins/rev/js/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
    <script src="js/plugins/rev/js/revolution.extension.kenburn.min.js" type="text/javascript"></script>
    <script src="js/plugins/rev/js/revolution.extension.parallax.min.js" type="text/javascript"></script>
    <script src="js/plugins/rev/js/revolution.extension.slideanims.min.js" type="text/javascript"></script>
    <script src="js/plugins/rev/js/revolution.extension.video.min.js" type="text/javascript"></script>
    <script src="js/plugins/rev/js/revolution.extension.navigation.min.js" type="text/javascript"></script>
	<!--Revolution slider js end-->
    <script src="js/plugins/jquery-ui/jquery-ui.js" type="text/javascript"></script>
    <script src="js/plugins/smoothscroll/smoothScroll.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWX1bpxsxSVixeIVtmUYfd5aJ1RCzaKJU&callback=initMap"
            type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            var myCenter = new google.maps.LatLng("45.519925", "9.306987");

            function initialize() {
                var mapProp = {
                    center: myCenter,
                    zoom: 15,
                    scrollwheel: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("bigth_googleMap"), mapProp);
                
                var marker = new google.maps.Marker({
                    position: myCenter,
                    map: map,
                    animation: google.maps.Animation.BOUNCE
                });
                marker.setMap(map);
                var infowindow = new google.maps.InfoWindow({
                    content: ""
                });
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        });
    </script>
    <!--Script End-->
    <!--Body End-->
</body>

</html>