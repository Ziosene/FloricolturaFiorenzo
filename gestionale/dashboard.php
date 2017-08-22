<?php
    include "component/head.php";
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include "component/navigator.php";
            require_once("../class/dao/FotogalleryDAO.php");
            require_once("../class/dao/CategoryDAO.php");
            require_once("../class/dao/StatisticDAO.php");
            require_once("../class/dao/NewsletterDAO.php");

            $fotogalleryDAO = new FotogalleryDAO($db->getConnection());
            $catDAO = new CategoryDAO($db->getConnection());
            $stat = new StatisticDAO($db->getConnection());
            $newsletterDAO = new NewsletterDAO($db->getConnection());

            $numFotogallery = $fotogalleryDAO->numFotogallery();
            $numCat = $catDAO->numCategory();
            $view = $stat->visualizzazioni();
            $numEmail = $newsletterDAO->numEmail();
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-laptop fa-5x"></i>
                                </div>

                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numCat; ?></div>
                                    <div>Categorie</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-photo fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numFotogallery; ?></div>
                                    <div>Fotogallery</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numEmail; ?></div>
                                    <div>Newsletter</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-eye fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $view; ?></div>
                                    <div>Visualizzazioni</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
