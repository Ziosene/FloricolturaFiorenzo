<?php include "component/head.php"; ?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "component/navigator.php"; ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Utenti Iscritti</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Utenti Iscritti</div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>Nome Cognome</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $result = mysqli_query($db->getConnection(),"SELECT id, email, nomeCognome FROM newsletter ORDER BY id DESC LIMIT 0 ,100");
                                if(isset($result)){
                                    while ($view = mysqli_fetch_array($result)){
                                        ?>
                                        <tr>
                                            <td><?php echo $view['id'];?></td>
                                            <td><?php echo $view['email'];?></td>
                                            <td><?php echo $view['nomeCognome'];?></td>
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
