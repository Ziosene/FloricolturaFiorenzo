<?php
include "component/head.php";
require_once("../class/dao/CategoryDAO.php");

$catDAO = new CategoryDAO($db->getConnection());
$results = $catDAO->retrieveCategorys();
$count = $catDAO->numCategory();
?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "component/navigator.php"; ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Categorie</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <?php if($_GET['delete'] == 'success'){ ?>
                    <div class="alert alert-success">
                        La categoria &egrave; stata eliminata
                    </div>
                <?php } ?>
                <?php if($_GET['new'] == 'success'){ ?>
                    <div class="alert alert-success">
                        La categoria &egrave; stata creata
                    </div>
                <?php } ?>
                <?php if($_GET['new'] == 'duplicate'){ ?>
                    <div class="alert alert-warning">
                        Attenzione: la categoria desiderata esiste gi&#224;
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="col-lg-10" >
                        <p>In questa sezione &#232; possibile configurare le opportune categorie di foto.</p>
                    </div>
                    <div class="col-lg-2" >
                            <button href="#" data-toggle="modal" data-target="#newCat" style="float:right" class="btn btn-primary" type="button"><i class="fa fa-plus"></i> Aggiungi</button>
                     </div>
                </div>
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Categorie (<?php echo $count;?>)
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Azioni</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(isset($results)) {
                                    foreach ($results as $cat) { ?>
                                        <tr>
                                            <td><?php echo $cat->getLabel(); ?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#deleteConfirm"
                                                    onclick="prepareDeleteStatment(<?php echo $cat->getValue(); ?>);">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php   }
                                }
                                ?>
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

<div id="deleteConfirm" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Conferma</h4>
            </div>
            <div class="modal-body">
                <p>Sei sicuro di voler eliminare la categoria selezionata ?</p>
            </div>
            <div class="modal-footer">
                <form action="action/category/deleteCategory.php" id="deleteForm" method="POST">
                    <input type="hidden" id="idDel" name="idDel" value="" />
                    <button type="button" onclick="document.getElementById('deleteForm').submit();" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Elimina</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </form>
            </div>
        </div>

    </div>
</div>

<div id="newCat" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <form method="POST" action="action/category/createCategory.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Crea nuova categoria</h4>
                </div>
                <div class="modal-body">
                    <p><input required type="text" style="width:100%;" name="nome" id="nome" placeholder="Nome" /></p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default"><i class="fa fa-floppy-o"></i> Salva</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                </div>
            </form>
        </div>

    </div>
</div>

<script type="text/javascript">

    function prepareDeleteStatment( id ){
        var hidden = document.getElementById("idDel");
        hidden.value =id;
    }

</script>

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
                "infoFiltered": "(filtered from _MAX_ total records)"
            }
        });
    });
</script>

</body>

</html>
