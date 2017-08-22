<!DOCTYPE html>
<!--[if IE 9]> <html lang="it" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--><html lang="it"><!--<![endif]-->
<!-- Header Start -->
<head>
    <title>Contattami :: Floricoltura Fiorenzo</title>
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
        $page = "contattami";
        include "component/navigator.php";
    ?>
    <!--Inner Container Start-->
    <!--eco_contactForm Start-->
    <script>

        function submitContact(){

            var param="name="+document.getElementById("uname").value+"&email="+document.getElementById("umail").value+"&subject="+document.getElementById("subj").value+"&messageEmail="+document.getElementById("msg").value;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "email_form.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.setRequestHeader("Content-length", param.length);
            xmlhttp.setRequestHeader("Connection", "close");

            xmlhttp.onreadystatechange = function() {
                if(xmlhttp.responseText == "ok"){
                    document.getElementById("contactMeSociety").style.display = "none";
                    document.getElementById("result").style.display = "";
                    document.getElementById("contactMeSociety").reset();
                }
            };

            xmlhttp.send(param);

        }
    </script>

    <div class="wraper">
        <div class="container">
            <div class="eco_main_heading">
                <h1 class="text-center"><span>SCRIVETECI PER QUALSIASI TIPO DI </span> <BR><strong><span class="eco_color">INFORMAZIONE</span></strong> </h1>
                <div class="eco_small_text text-center">Vi risponderemo il prima possibile!</div>
            </div>
        </div>
    </div>

    <div class="eco_inner_page_container">
        <div class="container">
            <div class="eco_contact_page padder_top_50 padder_bottom_50">
                <form action="javascript:submitContact();" id="contactMeSociety">
                    <div class="row">
                            <div class="eco_contact_form">
                                <div class="form-group">
                                    <label><span class="text-form">Nome Cognome</span></label>
                                    <input required type="text" id="uname" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><span class="text-form">Email</span></label>
                                    <input required type="email" id="umail" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><span class="text-form">Oggetto</span></label>
                                    <input required type="text" id="subj" name="subject" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><span class="text-form">Messaggio</span></label>
                                    <textarea required class="form-control tr_textarea" id="msg" name="messageEmail" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                        <div class="material-switch">
                                            <span class="text-form">Newsletter</span>
                                            <input id="someSwitchOptionSuccess" name="SwitchOptionNewsletter" type="checkbox" checked/>
                                            <label for="someSwitchOptionSuccess" class="label-success"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btn" value="send" id="em_submit" class="btn btn-primary">
                                    <p id="err"></p>
                                </div>
                            </div>
                    </div>
                </form>
                <div id="result" style="display:none;">Grazie! <br> Messaggio inviato correttamente</div>
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