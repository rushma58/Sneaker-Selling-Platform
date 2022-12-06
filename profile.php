<?php 
        include 'include/head.php';?>


<?php 
        $title = "Add Profile";

        $userId = $_SESSION['userId'];

        if(isset($userId)){
            $sql = "SELECT * FROM userInfo WHERE user_id = '$userId' LIMIT 1" ;
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)) {
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $email = $row['email'];
                $dob = $row['dob'];
                $gender = $row['gender'];
                $phone_number = $row['phone_number'];
            // echo $fname;
            }
           $profileSql = "SELECT * FROM user_profile WHERE user_id = '$userId' LIMIT 1";
           $profileResult = mysqli_query($conn,$profileSql);
           while($profileRow = mysqli_fetch_array($profileResult)) {
            $City = $profileRow['city'];
            $State = $profileRow['state'];
            
           }
        }

        if (isset($_POST['update'])) {
            header('location: update_profile.php');
            }

            if(isset($_POST['close'])){
                header('location: home_page.php');
            }
            mysqli_close($conn);
        ?>

    <div id="wrapper">
        <!-- Navigation -->
        <!-- <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            

        </nav> -->

        <div  class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header" style="text-align: center;"><b >My Profile</b></h2>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12">
                <?php include 'include/message.php';?>
                </div>
                <form action="update_profile.php" method="post">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b> Details</b>
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input value ="<?php echo $first_name; ?>"
                                             readonly="readonly" class="form-control" name="first_name" placeholder="fname">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input value ="<?php echo $last_name; ?>"
                                             readonly="readonly" class="form-control" name="last_name" placeholder="lname">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input value="<?php echo $phone_number; ?>" 
                                            readonly="readonly" class="form-control" name="phone_number" placeholder="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="<?php echo $email; ?>" 
                                            readonly="readonly" class="form-control" name="email" placeholder="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input value="<?php echo $dob; ?>" 
                                            readonly="readonly" class="form-control" name="dob" placeholder="dob">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input value="<?php echo $gender; ?>" 
                                            readonly="readonly" class="form-control" name="gender" placeholder="gender">

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <b>Address</b>
                                    </div>
                                    <div class="panel-body">                       
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label> City </label>
                                                <input value="<?php echo $City; ?>" 
                                                readonly="readonly" class="form-control" name="city" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input value="<?php echo $State; ?>" 
                                                readonly="readonly" class="form-control" name="state" placeholder=" State">
                                            </div>
                                        </div>
                                    </div>
                                </div>               
                                <div class="panel panel-default">
                                      <div class="col-sm-12">
                                            <input type="submit" name="update" value="Update" class="btn   btn-success">
                                             <!-- Update -->
                                            
                                            <input type="submit" name="close" value= "close" class="btn   btn-danger">
                                            
                                            
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>               
            </form>
        </div>
            <!-- /.row -->
    </div>
        <!-- /#page-wrapper -->


