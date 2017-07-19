<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--><html lang="it"><!--<![endif]-->
<!-- Header Start -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contattami :: Floricoltura Fiorenzo</title>
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
        $page = "contattami";
        include "component/navigator.php";
    ?>
    <!--Breadcrumb Start-->
    <div class="eco_bread">
        <div class="container">
            <div class="eco_page_topbar">
                <div class="eco_page_title">
                    <h4 class="text-uppercase">contattaci</h4>
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
                <form action="#">
                    <div class="row">
                            <div class="eco_contact_form">
                                <div class="form-group">
                                    <label>Nome Cognome</label>
                                    <input required type="text" id="uname" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input required type="email" id="umail" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Oggetto</label>
                                    <input required type="text" id="subj" name="subject" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Messaggio</label>
                                    <textarea required class="form-control tr_textarea" id="msg" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btn" value="send" id="em_submit" class="btn btn-primary">
                                    <p id="err"></p>
                                </div>
                            </div>
                    </div>
                </form>
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

    <!--Script End-->
    <!--Body End-->
</body>

</html>