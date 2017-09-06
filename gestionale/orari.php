<?php
include "component/head.php";
require_once("../class/dao/ConfigurationDAO.php");

$configurationDAO = new ConfigurationDAO($db->getConnection());
?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "component/navigator.php"; ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Orari Apertura</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Orari Apertura</div>
                    <!-- /.panel-heading -->
                    <form action="action/configuration/updateConfiguration.php" method="POST">
                        <div class="panel-body">
                            <div class="dataTable_wrapper table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Giorno</th>
                                        <th>Orario</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $arrayValori = array();
                                    $arrayValori = $configurationDAO->retrieveConfiguration();
                                    if ($arrayValori) {
                                        foreach ($arrayValori as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><?php echo $key; ?></td>
                                                <td>
                                                    <input class="form-control" type="text" style="width: 100%"
                                                                   value="<?php echo $value; ?>" id="orario" name="<?php echo $key; ?>">
                                                </td>
                                            </tr>
                                        <?php }
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="row">
                                <div class="col-lg-8" >
                                    <p></p>
                                </div>
                                <div class="col-lg-4" >
                                    <button style="float:right" class="btn btn-primary" type="submit"><i class="fa fa-floppy-o "></i> Salva</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
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
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            "language": {
                "lengthMenu": "Mostra _MENU_ elementi",
                "zeroRecords": "Nessun dato trovato",
                "info": "Pagina _PAGE_ di _PAGES_",
                "infoEmpty": "Nessuna informazione",
                "infoFiltered": "(filtered from _MAX_ total records)"}
        });
    });
</script>

</body>

</html>
