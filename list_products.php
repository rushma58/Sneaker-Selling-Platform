<?php 
$title = "Category List";
include 'admin_head.php';

$sql = "SELECT * FROM products";
$results = mysqli_query($conn, $sql);

?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <!-- <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
             
        </nav> -->

        <div class="container" style="margin-top:70px">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"> Products List </h2>
                    <a href="add_products.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Product</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="margin-top:20px;">
                <div class="col-sm-12">

                <?php include 'include/message.php';?>
                
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand Name</th>
                                <th>Model Name</th>
                                <th>Price</th>
                                <th>Added On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($results) > 0){
                            while ($row = mysqli_fetch_array($results)){ 
                        ?>
                            <tr>
                                <td><?php echo $row['shoe_id'];?></td>
                                <td><?php echo $row['brand_name'];?>
                                </td>
                                <td><?php echo $row['model_name'];?>
                                </td>
                                <td><?php echo $row['price'];?>
                                </td>
                                <td><?php echo $row['created_on'];?>
                                </td>
                                <td>
                                <a href="edit_products.php?id=<?php echo $row['shoe_id']; ?>" class="btn-xs btn-success ">Edit</a>
                                <a href="delete_products.php?id=<?php echo $row['shoe_id']; ?>" class="btn-xs btn-danger ">Delete</a>
                                </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- /#wrapper -->
    
</body>

</html>
