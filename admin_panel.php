<?php 
$title = "Dashboard";
include 'admin_head.php';

 ?>

<body>

    <div id="wrapper" style="margin-top:70px">

        <!-- Navigation -->
        <!-- <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            
        </nav> -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header heading">Dashboard</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-2 col-md-6">
                    
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-th-large fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- <div class="huge">124</div> -->
                                    <div>Products</div>
                                </div>
                            </div>
                        </div>
                        <a href="list_products.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <!-- <div class="huge">13</div> -->
                                    <div>Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="list_user.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    
</body>


</html>
