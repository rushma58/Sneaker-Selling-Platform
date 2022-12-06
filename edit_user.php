<?php 
$title = "Edit ";
include 'admin_head.php';
$editId = $_GET['id'];
//echo $editId;
$sql = "SELECT * FROM userInfo WHERE user_id = $editId";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $dob = $row['dob'];
    $email = $row['email'];
    $phone_number = $row['phone_number'];
}
if (isset($_POST['update'])) { 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number']; 

    $sql = "UPDATE userInfo SET first_name ='". $first_name."', last_name = '".$last_name. "', dob = '".$dob. "', email = '".$email. "', contact = '".$phone_number. "' WHERE user_id = '". $editId."'";
    
    if (mysqli_query($conn, $sql)) {
        $success = "User Updated Successfully !";
    } else {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>

<body>
    <div id="wrapper" style="margin-top:70px">
        <!-- Navigation -->
        <!-- <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            
        </nav> -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header heading">Edit User</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <div class="col-sm-12">
            <?php 
                if (!empty($success)) { ?>
                    <div class="alert alert-success">
                        <?php echo $success;  ?>
                    </div>
                <?php } ?>
            </div>

            <form action="edit_user.php" method="post">

                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input value="<?php echo $first_name; ?>" class="form-control" name="first_name" placeholder="First Name">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input value="<?php echo $last_name; ?>" class="form-control" name="last_name" placeholder="last_name">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input value="<?php echo $dob; ?>" class="form-control" name="dob" placeholder="Date of Birth">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input value="<?php echo $email; ?>" class="form-control" name="email" placeholder="email">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label>Contact</label>
                        <input value="<?php echo $phone_number; ?>" class="form-control" name="phone_number" placeholder="Phone Number">
                    </div>
                </div>
               
                
                <div class="col-sm-12">
                    <button type="submit" name="update" class="btn btn-success">
                        Update
                    </button>
                    <a href="list_user.php" class="btn btn-primary">All User</a>
                </div>
            </form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



</body>

</html>