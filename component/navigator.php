<?php
    require_once('class/DBManager.php');
    require_once('class/dao/CategoryDAO.php');
    require_once('class/dao/ConfigurationDAO.php');
    $db= new DBManager();
    $catDAO = new CategoryDAO($db->getConnection());
    $cats = $catDAO->retrieveCategorys();
    $confDAO = new ConfigurationDAO($db->getConnection());

    session_start();
    $orari = $confDAO->retrieveConfiguration();
    $_SESSION['confCache'] = $orari;
?>
<!--preloader start-->
<div id="preloader">
    <!--<div id="status"><img src="images/preloader.gif" id="preloader_image" alt="loader"></div>-->
</div>
<!--preloader end-->
<!--Head Section start-->
<header class="garden_header1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="eco_logo">
                    <a href="../index.php"><img src="images/FF_bianco-orizzontale-navigator.png" class="img-responsive" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12  pull-right">
                <div class="eco_info">
                    <div class="eco_ph padding_lr"><i class="fa fa-phone"></i>
                        <a style="color:#FFFFFF;" href="tel:+39333 681 9062">+39 333 681 9062</a>
                    </div>
                    <div class="eco_email">
                        <i class="fa fa-envelope"></i>
                        <!--<a style="color:#FFFFFF;" href="mailto:info@floricolturafiorenzo.it"> info@floricolturafiorenzo.it</a>-->
                        <a href="mailto:info@floricolturafiorenzo.it">
                            <svg height="20" width="220">
                                <text fill="#ffffff" font-size="16px" font-family="Open Sans"
                                      x="47%" y="97%" style="text-anchor: middle">info@floricolturafiorenzo.it</text>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="eco_social_icon facebookContainer">
                    <ul>
                        <a href="https://www.facebook.com/floricolturafiorenzo.it/" title="Facebook">
                            <!--<li><i class="fa fa-facebook"></i></li>-->
                            <li><img src="images/facebookIcon.png" class="img-responsive" alt="logoFacebook"></li>
                        </a>
                        <a href="https://www.instagram.com/floricolturafiorenzo/" title="Instagram">
                            <!--<li><i class="fa fa-facebook"></i></li>-->
                            <li><img src="images/instagramIcon.png" class="img-responsive" alt="logoFacebook"></li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Head Section End-->
<!--Menu Start-->
<div class="eco_header">
    <div class="container containerCenter">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"><span class="eco_toggle_menu"><span class="glyphicon glyphicon-list"></span></span><span class="eco_toggle_text">MENU</span> <span class="sr-only">Toggle navigation</span> </button>
                    </div>
                    <!--navbar-header-->
                    <div id="main-nav" class="collapse navbar-collapse padding_left">
                        <ul class="nav navbar-nav my_menu">
                            <li class="eco_pos_rel homeButton"><a href="../index.php" class="<?php echo $page == "home" ? "active" : "";?>">HOME</a></li>
                            <li class="eco_pos_rel"><a href="../servizi.php" class="<?php echo $page == "servizi" ? "active" : "";?>">Servizi</a>
                                <!--sub-menu start-->
                                <ul class="sub-menu">
                                    <li><a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page == "servizi" ? "ser1" : "ser1offset";?>">In Vivaio</a></li>
                                    <li><a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page == "servizi" ? "ser2" : "ser2offset";?>">Per La Festa</a></li>
                                    <li><a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page == "servizi" ? "ser3" : "ser3offset";?>">Giardini e Terrazzi</a></li>
                                    <li><a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page == "servizi" ? "ser4" : "ser4offset";?>">Irrigazione</a></li>
                                    <li><a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page == "servizi" ? "ser5" : "ser5offset";?>">Consegna a domicilio</a></li>
                                </ul>
                                <!--./sub-menu end-->
                            </li>
                            <li class="eco_pos_rel"><a class="<?php echo $page == "galleria" ? "active" : "";?>">Galleria</a>
                                <!--sub-menu start-->
                                <ul class="sub-menu">
                                    <?php if(isset($cats)) {
                                        foreach ($cats as $cat) { ?>
                                        <li><a href="../gallery.php?catId=<?php echo $cat->getValue();?>" ><?php echo $cat->getLabel();?></a></li>
                                    <?php }} ?>
                                </ul>
                                <!--./sub-menu end-->
                            </li>
                            <li class="eco_pos_rel"><a href="../chisiamo.php" class="<?php echo $page == "chisiamo" ? "active" : "";?>">CHI SIAMO</a></li>
                            <li class="eco_pos_rel"><a href="../dovesiamo.php" class="<?php echo $page == "dovesiamo" ? "active" : "";?>">DOVE SIAMO</a></li>
                            <li class="eco_pos_rel"><a href="../contattaci.php" class="<?php echo $page == "contattami" ? "active" : "";?>">CONTATTACI</a></li>
                        </ul>
                    </div>
                    <!--navbar-collapse-->
                </nav>
            </div>
        </div>
        <!--navbar-->
    </div>
    <!--container-->
</div>
<!--header-->
<!--second menu start-->
<div class="pagenav fixedmenu">
    <div class="holder-fixedmenu">
        <div class="logo-fixedmenu">
            <a href="../index.php"><img src="../images/FF_bianco-orizzontale-navigator.png" alt="barra">
            </a>
        </div>
        <div class="menu-fixedmenu home">
            <ul id="menu-home-page" class="menu my_menu">
                <li class="eco_pos_rel">
                    <a href="../index.php" class="<?php echo $page == "home" ? "active" : "";?>">HOME</a>
                </li>
                <li class="eco_pos_rel">
                    <a href="../servizi.php" class="<?php echo $page == "servizi" ? "active" : "";?>">Servizi</a>
                    <!--sub-menu start-->
                    <ul class="sub-menu">
                        <li>
                            <a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page != "servizi" ? "ser1offset" : "ser1";?>">In Vivaio</a>
                        </li>
                        <li>
                            <a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page == "servizi" ? "ser2" : "ser2offset";?>">Per La Festa</a>
                        </li>
                        <li>
                            <a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page == "servizi" ? "ser3" : "ser3offset";?>">Giardini e Terrazzi</a>
                        </li>
                        <li>
                            <a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page == "servizi" ? "ser4" : "ser4offset";?>">Irrigazione</a>
                        </li>
                        <li>
                            <a class="<?php echo $page == "servizi" ? "scroll" : "";?>" href="../servizi.php#<?php echo $page == "servizi" ? "ser5" : "ser5offset";?>">Consegna a domicilio</a>
                        </li>

                    </ul>
                    <!--./sub-menu end-->
                </li>
                <li class="eco_pos_rel"><a class="<?php echo $page == "galleria" ? "active" : "";?>">Galleria</a>
                    <!--sub-menu start-->
                    <ul class="sub-menu">
                        <?php if(isset($cats)) {
                            foreach ($cats as $cat) { ?>
                               <li><a href="../gallery.php?catId=<?php echo $cat->getValue();?>" ><?php echo $cat->getLabel();?></a></li>
                            <?php }} ?>
                    </ul>
                    <!--./sub-menu end-->
                </li>
                <li class="eco_pos_rel"><a href="../chisiamo.php" class="<?php echo $page == "chisiamo" ? "active" : "";?>">CHI SIAMO</a></li>
                <li class="eco_pos_rel"><a href="../dovesiamo.php" class="<?php echo $page == "dovesiamo" ? "active" : "";?>">DOVE SIAMO</a></li>
                <li class="eco_pos_rel"><a href="../contattaci.php" class="<?php echo $page == "contattami" ? "active" : "";?>">CONTATTACI</a></li>
            </ul>
        </div>
    </div>
</div>
<!--second menu end-->
<!--Menu Section End-->
<!--Home Section Start-->

<!--Home Slider End-->