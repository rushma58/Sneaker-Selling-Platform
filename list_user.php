<?php 
$title = "User List";
include 'admin_head.php';

$sql = "SELECT * FROM userDetail";
$results = mysqli_query($conn, $sql);

?>

<body>

    <div id="wrapper" style="margin-top:70px;">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header heading"> User List </h2>
                    <!-- <a href="add-customer.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add Customer</a> -->
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
                                <td>#</td>
                                <td>Full Name</td>
                                <td>Address</td>
                                <td>Email</td>
                                <td>Contact</td>
                                <td>Created On</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(mysqli_num_rows($results) > 0){
                            while ($row = mysqli_fetch_array
                            ($results)){ 
                        ?>
                            <tr>
                                <td><?php echo $row['user_id'];?></td>
                                <td><?php echo $row['full_name'];?>
                                </td>
                                <td><?php echo $row['address'];?>
                                </td>
                                <td><?php echo $row['email'];?>
                                </td>
                                <td><?php echo $row['phone_number'];?>
                                </td>
                                <td><?php echo $row['created_on'];?>
                                </td>
                                <td>
                                <a href="edit_user.php?id=<?php echo $row['user_id']; ?>" class=" btn-xs btn-success "><i class= fa fas-edit></i>Edit</a>
                                <a href="delete_user.php?id=<?php echo $row['user_id']; ?>" class="btn-xs btn-danger ">Delete</a>
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

