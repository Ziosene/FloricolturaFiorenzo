<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--><html lang="it"><!--<![endif]-->
<!-- Header Start -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floricoltura Fiorenzo</title>
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

	<?php include "component/navigator.php"; ?>

    <!--Home Heading-->
    <div class="wraper">
        <div class="container">
            <div class="eco_main_heading">
                <h1 class="text-center"><span>I NOSTRI </span> <strong><span class="eco_color">SERVIZI</span></strong> </h1>
                <div class="eco_small_text text-center">Vi proponiamo i seguenti servizi</div>
            </div>
        </div>
    </div>
    <!--Home Heading End-->

    <!--Achievement Section Start-->
    <div class="eco_service_wraper">
        <div class="container">
			<div class="eco_wraper text-center">
                <!-- spacer -->
            </div>
			<div class="row">
				<div class="garden_featurediv text-center">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="eco_home_service" data-scrollreveal="enter from the left over 1s">
							<div class="eco_service_icon">
								<a href="#" class="eco_transition"> <i class="glyph-icon flaticon-nature-1"></i> </a>
							</div>
							<div class="eco_service_text">
								<h5 class="text-uppercase"> Giardini e Terrazzi </h5>
								<div class="eco_service_data">Realizzazione, manutenzione e cura di giardini e terrazzi.</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="eco_home_service" data-scrollreveal="enter from the bottom over 1s">
							<div class="eco_service_icon">
								<a href="#" class="eco_transition"> <i class="glyph-icon flaticon-plant-on-a-hand"></i></a>
							</div>
							<div class="eco_service_text">
								<h5 class="text-uppercase"> Eventi </h5>
								<div class="eco_service_data">Organizzazione e allestimento eventi, quali matrimoni, battesimi, ...</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="eco_home_service" data-scrollreveal="enter from the bottom over 1s">
							<div class="eco_service_icon">
								<a href="#" class="eco_transition"> <i class="glyph-icon flaticon-nature-2"></i> </a>
							</div>
							<div class="eco_service_text">
								<h5 class="text-uppercase"> Vivaio </h5>
								<div class="eco_service_data">Vendita diretta al pubblico di piante prodotte nelle nostre serre</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="eco_home_service" data-scrollreveal="enter from the right over 1s">
							<div class="eco_service_icon">
								<a href="#" class="eco_transition"> <i class="glyph-icon flaticon-water"></i> </a>
							</div>
							<div class="eco_service_text">
								<h5 class="text-uppercase"> Irrigazione </h5>
								<div class="eco_service_data">Installazione e manutenzione degli impianti di irrigazione</div>
							</div>
						</div>
					</div>

				</div>
			</div>
        </div>
    </div>
    <!--Achievement Section End-->
    <!--Recycling1 Section Start-->

	<?php
		require_once('class/dao/FotogalleryDAO.php');
		require_once('class/domain/Fotogallery.php');
		$fotogalleryDAO = new FotogalleryDAO($db->getConnection());
		$gallery = $fotogalleryDAO->retrieveFotogalleryShowroom();
		if(isset($gallery)){
	?>

    <div class="eco_recycle">
        <div class="container">
            <div class="eco_wraper text-center">
                <div class="eco_small_heading text-uppercase">La raccolta dei nostri migliori</div>
                <h2 class="eco_heading text-uppercase">Prodotti</h2>
                <div class="eco_border padder_bottom_50"></div>
				<!-- DESKTOPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP - INIZIO -->
                <div class="eco_uneven_slider">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i> <span class="sr-only">Previous</span> </a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> <span class="sr-only">Next</span> </a>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<?php for ($i = 0; $i < count($gallery) && $i + 6 <= count($gallery); ) {?>
							<div class="item <?php echo $i==0 ? "active" : ""?>">
								<div class="eco_one_third eco_show_overlay garden_gallery">
									<div class="eco_port_recentimage eco_margin_bottom">
										<div class="eco_port_overdefult">
											<div class="eco_port_recentdescription">
												<h5><?php echo $gallery[$i]->getCategoryName();?></h5>
											</div>
										</div>
										<div class="eco_port_image">
											<img style="width:100%; height:292px;" src="<?php echo "/resources/".$gallery[$i]->getCategoryName()."/".$gallery[$i]->getFileName()?>" alt="" class="img-responsive">
										</div>
									</div>
								</div>
								<?php $i++; ?>
								<div class="eco_one_third eco_show_overlay garden_gallery">
									<div class="eco_port_recentimage eco_margin_bottom">
										<div class="eco_port_overdefult">
											<div class="eco_port_recentdescription">
												<h5><?php echo $gallery[$i]->getCategoryName();?></h5>
											</div>
										</div>
										<div class="eco_port_image">
											<img style="width:100%; height:292px;" src="<?php echo "/resources/".$gallery[$i]->getCategoryName()."/".$gallery[$i]->getFileName()?>" alt="" class="img-responsive">

										</div>
									</div>
								</div><?php $i++; ?>
								<div class="eco_one_third_right eco_show_overlay garden_gallery">
									<div class="eco_port_recentimage eco_margin_bottom">
										<div class="eco_port_overdefult">
											<div class="eco_port_recentdescription">
												<h5><?php echo $gallery[$i]->getCategoryName();?></h5>
											</div>
										</div>
										<div class="eco_port_image">
											<img style="width:100%; height:292px;" src="<?php echo "/resources/".$gallery[$i]->getCategoryName()."/".$gallery[$i]->getFileName()?>" alt="" class="img-responsive">
										</div>
									</div>
								</div><?php $i++; ?>
								<div class="eco_one_third_btm eco_show_overlay garden_gallery">
									<div class="eco_port_recentimage eco_margin_bottom">
										<div class="eco_port_overdefult">
											<div class="eco_port_recentdescription">
												<h5><?php echo $gallery[$i]->getCategoryName();?></h5>
											</div>
										</div>
										<div class="eco_port_image">
											<img style="width:100%; height:292px;" src="<?php echo "/resources/".$gallery[$i]->getCategoryName()."/".$gallery[$i]->getFileName()?>" alt="" class="img-responsive">
										</div>
									</div>
								</div><?php $i++; ?>
								<div style="left:383px;" class="eco_one_third_btm eco_show_overlay garden_gallery">
									<div class="eco_port_recentimage eco_margin_bottom">
										<div class="eco_port_overdefult">
											<div class="eco_port_recentdescription">
												<h5><?php echo $gallery[$i]->getCategoryName();?></h5>
											</div>
										</div>
										<div class="eco_port_image">
											<img style="width:100%; height:292px;" src="<?php echo "/resources/".$gallery[$i]->getCategoryName()."/".$gallery[$i]->getFileName()?>" alt="" class="img-responsive">
										</div>
									</div>
								</div><?php $i++; ?>
								<div class="eco_one_third_btm_right eco_show_overlay garden_gallery">
									<div class="eco_port_recentimage eco_margin_bottom">
										<div class="eco_port_overdefult">
											<div class="eco_port_recentdescription">
												<a href="portfolio-singlevideo.html" title="Plants Cutting">
													<h5><?php echo $gallery[$i]->getCategoryName();?></h5>
												</a>
											</div>
										</div>
										<div class="eco_port_image">
											<img style="width:100%; height:292px;" src="<?php echo "/resources/".$gallery[$i]->getCategoryName()."/".$gallery[$i]->getFileName()?>" alt="" class="img-responsive">
										</div>
									</div>
								</div><?php $i++; ?>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<!-- DESKTOPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP - FINE -->
				<!-- MOBILEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE - INIZIO -->
				<div class="row">
					<div class="eco_tabs_slide_section">
						<div id="eco_uneven" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<a class="left carousel-control" href="#eco_uneven" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i> <span class="sr-only">Previous</span> </a>
							<a class="right carousel-control" href="#eco_uneven" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> <span class="sr-only">Next</span> </a>
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<?php for ($i = 0; $i < count($gallery) && $i + 3 <= count($gallery); ) {?>
								<div class="item <?php echo $i==0 ? "active" : ""?>">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="eco_port_recentimage eco_margin_bottom">
											<div class="eco_port_image">
												<img style="width:100%; height:292px;" src="<?php echo "/resources/".$gallery[$i]->getCategoryName()."/".$gallery[$i]->getFileName()?>" alt="" class="img-responsive">
												<?php $i++; ?>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="eco_port_recentimage eco_margin_bottom">
											<div class="eco_port_image">
												<img style="width:100%; height:292px;" src="<?php echo "/resources/".$gallery[$i]->getCategoryName()."/".$gallery[$i]->getFileName()?>" alt="" class="img-responsive">
												<?php $i++; ?>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="eco_port_recentimage eco_margin_bottom">
											<div class="eco_port_image">
												<img style="width:100%; height:292px;" src="<?php echo "/resources/".$gallery[$i]->getCategoryName()."/".$gallery[$i]->getFileName()?>" alt="" class="img-responsive">
												<?php $i++; ?>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							<!-- Controls -->
						</div>
					</div>
				</div>
				<!-- MOBILEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE - FINE -->
            </div>
        </div>
    </div>
	<?php } ?>

    <!--Recycling1 Section End-->
    <!--Recycling1 Img Section Start-->
    <div class="garden_contact text-center">
        <div class="container">
            <div class="eco_main_heading padder_bottom_30">
                <h1 class="text-center text-uppercase">vieni a trovarci</h1>
                <div class="eco_small_text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dapibus commodo interdum.</div>
                <a href="#" class="eco_img_width"><img src="images/ecorecycling-logo-main.png" class="eco_img_responsive padder_bottom_30" alt="">
                </a>
            </div>
            <div class="eco_contact_btn"><a href="#" class="eco_transition">CONTACT US NOW</a>
            </div>
        </div>
    </div>
    <!--Recycling1 Img Section End-->
    <!--Recycling1 Img Section End-->
	<div class="eco_contactadd_slider garden_clientslider">
        <div class="container">
            <div class="slider4">
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
                <!--slide 2-->
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
                <div class="slide"><img src="http://placehold.it/225x132" alt="">
                </div>
            </div>
            <p class="eco_color3 text-center padder_top_20">This is a list of <strong>companies</strong> that already trust us with their gardening process. Do join them.</p>
        </div>
    </div>
    <!--contact slider Section End-->

    <?php include "component/footer.php"; ?>

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
    <script src="http://maps.googleapis.com/maps/api/js?key=&amp;sensor=false"></script>
	<!--Script End-->
    <!--Body End-->
</body>

</html>