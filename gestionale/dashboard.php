<?php
    include "component/head.php";
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include "component/navigator.php";
            require_once("../class/dao/ClientiDAO.php");
            require_once("../class/dao/TattooDAO.php");
            require_once("../class/dao/CategoryDAO.php");
            require_once("../class/dao/StatisticDAO.php");

            $clientiDAO = new ClientiDAO($db->getConnection());
            $tattooDAO = new TattooDAO($db->getConnection());
            $catDAO = new CategoryDAO($db->getConnection());
            $stat = new StatisticDAO($db->getConnection());

            $numClienti = $clientiDAO->numClienti();
            $numTattoo = $tattooDAO->numTattoo();
            $numCat = $catDAO->numCategory();
            $view = $stat->visualizzazioni();
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
                                    <i class="fa fa-comments fa-5x"></i>
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
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numTattoo; ?></div>
                                    <div>Tattoo</div>
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
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $numClienti; ?></div>
                                    <div>Clienti registrati</div>
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
                                    <i class="fa fa-support fa-5x"></i>
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
