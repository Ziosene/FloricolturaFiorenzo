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
            <?php if($_GET['email'] == 'added'){ ?>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                            <div class="alert alert-success">
                                L'Invio della mail massiva è stato programmato. Verrà processato a breve.
                            </div>

                    </div>
                </div>
            <?php } ?>

            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Email massive
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Oggetto</th>
                                        <th>Stato</th>
                                        <th>Data</th>
                                        <th>Azioni</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $result = mysqli_query($db->getConnection(),"SELECT id, oggetto, sent FROM plannedmail ORDER BY id desc");
                                    if(isset($result)){
                                        while ($email = mysqli_fetch_array($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $email['id'];?></td>
                                                <td><?php echo $email['oggetto'];?></td>
                                                <td><?php echo $email['sent'];?></td>

                                                <td>
                                                    <?php if( $email['sent']=="In Attesa"){ ;?>
                                                        AZIONI FUTURE
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php  }
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
