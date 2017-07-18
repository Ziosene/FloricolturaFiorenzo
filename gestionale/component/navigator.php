<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" style="padding: 0px;margin-left: 6px;" href="dashboard.php"><img src="../../images/logoge.png" ></a>


            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" data-toggle="modal" data-target="#changePwd" ><i class="fa fa-key fa-fw"></i> Cambia password</a>
                        <li><a href="action/logout.php"><i class="fa fa-sign-out fa-fw"></i> Esci</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="fotogallery.php"><i class="fa fa-cloud-upload fa-fw"></i> Foto</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cogs fa-fw"></i> Configurazioni<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="categorie.php"><i class="fa  fa-archive  fa-fw"></i> Categorie</a>
                                </li>
                            </ul>
                        </li>          
                        <li>
                            <a href="visualizzazioni.php"><i class="fa fa-bar-chart-o fa-fw"></i> Visualizzazioni</a>
                        </li>                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->



        </nav>
        <div id="changePwd" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <form method="POST" action="../gestionale/action/administration/changePassword.php" enctype="multipart/form-data" autocomplete="false">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Cambia password di accesso</h4>
                        </div>
                        <div class="modal-body">
                            <p><input required type="password" style="width:100%;" name="ad-pass" id="password" placeholder="Password" /></p>
                            <p><input required type="password" style="width:100%;" name="ad-pass2" id="password" placeholder="Conferma password" /></p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default"><i class="fa fa-floppy-o"></i> Cambia</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>