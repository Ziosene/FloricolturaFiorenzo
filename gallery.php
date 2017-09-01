<!DOCTYPE html>
<!--[if IE 9]> <html lang="it" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--><html lang="it"><!--<![endif]-->
<!-- Header Start -->
<head>
    <title>Galleria :: Floricoltura Fiorenzo</title>
    <?php include "component/seo.php"; ?>
    <!--Main Css Start-->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <!--Main Css End-->
    <!--color changing css file-->
<!--    <link rel="stylesheet" id="theme-change" type="text/css" href="#">-->
    <!--color changing css file end-->
    <!-- favicon link -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logoge.png" />
    <!-- favicon link End -->
</head>
<!-- Header End -->
<!-- Body Start -->

<body>
    <?php
        $page = "galleria";
        include "component/navigator.php";
        include "class/dao/FotogalleryDAO.php";
		$catId = $_GET["catId"];
		$fotoDAO = new FotogalleryDAO($db->getConnection());
		$fotos = $fotoDAO->retrieveFotogalleryByCategory($catId);
    ?>
    <!--Breadcrumb Start-->
    <div class="eco_bread">
        <div class="container">
            <div class="eco_page_topbar">
                <div class="eco_page_title">
                    <h4 class="text-uppercase"><?php echo $catDAO->retrieveNameById($catId); ?></h4>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb End-->
    <div class="eco_inner_page_container">
        <div class="container">
            <div class="eco_filter">

            </div>
			<div class="row">
				<div class="eco_mix_grid" id="grid">
					<?php
                    if(isset($fotos)){
                    foreach ($fotos as $foto){?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
							<div class="eco_port_recentimage garden_portfolio">
								<div class="eco_port_overdefult">
									<div class="eco_port_recentdescription text-center">
										<div class="eco-page-portfolio-categories-3cl"> <a href="#" rel="tag" class="text-uppercase">Lawn Care</a> </div>
									</div>
								</div>
								<div class="eco_port_image">
									<a href="#"><img style="width:100%; height:287px;" src="<?php echo "/resources/".$foto->getCategoryName()."/".$foto->getFileName()?>" alt="<?php echo $foto->getCategoryName(); ?>" class="img-responsive"></a>
								</div>
							</div>
							<h5 class="eco_port_min_title padder_bottom_20 text-uppercase"><a href=""><?php echo $foto->getNome()?></a></h5>
						</div>
					<?php }}else{ ?>

                        Non è stata caricata ancora nessuna foto per questa categoria.

                    <?php }?>
				</div>
			</div>
        </div>
    </div>
    <!--container-->
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

    <!--Script End-->

    <!--Body End-->
</body>

</html>