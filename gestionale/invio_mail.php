<?php
include "component/head.php";
?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "component/navigator.php"; ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Digitazione Newsletter</h1>
            </div>
        </div>
        <!-- /.row -->
        <form action="action/newsletter/emailMassiveUpload.php" method="POST">
            <div class="row">
                <div class="col-lg-12">

                    <div class="panel panel-primary">
                        <div class="panel-heading">Oggetto</div>
                            <input type="text" required name="oggetto" class="form-control"  id="formEmail" placeholder="Oggetto della mail"/>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Email</div>
                            <textarea type="text" required id="testo" name="testo" class="form-control" rows="20" placeholder="Digita la mail da inviare"></textarea>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8" >
                    <p></p>
                </div>
                <div class="col-lg-4" >
                    <button style="float:right" class="btn btn-primary" type="submit"><i class="fa fa-envelope-o"></i> Invia</button>
                </div>
            </div>
        </form>
        <!-- /.row -->
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

<!-- DataTables JavaScript -->
<script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->


</body>

</html>
