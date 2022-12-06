<?php 
$title = "My Wishlist";
include 'include/head.php';
$user_id =$_SESSION['userId'];


$sql = "SELECT * FROM cartDetail where user_id='$user_id'";
// var_dump($sql); die();
$results = mysqli_query($conn, $sql);

?>

<body>

    <div id="wrapper" style="margin-top:70px;">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 pe-0">
                    <h2 class="page-header heading mx-0 pe-0"> My Wishlist </h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="margin-top:20px;">
                <div class="col-sm-12 pe-0">

                <?php include 'include/message.php';?>
                
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Seller Name</th>
                                <th>Contact Number</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($results) > 0){
                            while ($row = mysqli_fetch_array($results)){?>
                            <tr>
                                <td><?php echo $row['user_id'];?></td>
                                <td><?php echo $row['title'];?>
                                </td>
                                <td><?php echo $row['price'];?>
                                </td>
                                <td><?php echo $row['seller_name'];?>
                                </td>
                                <td><?php echo $row['phone_number'];?>
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

