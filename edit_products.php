<?php 
$title = "Edit Category";
include 'admin_head.php';
$editId = $_GET['id'];
//echo $editId;
$sql = "SELECT * FROM products WHERE shoe_id = $editId";
$result = mysqli_query($conn,$sql);
$image="";

while($row = mysqli_fetch_array($result)) {
    $categories = $row['categories'];
    $title = $row['title'];
    $brand_name = $row['brand_name'];
    $model_name = $row['model_name'];
    $color = $row['color'];
    $size = $row['size'];
    $conditions = $row['conditions'];
    $location = $row['location'];
    $delivery = $row['delivery'];
    $price = $row['price'];
    $negotiable = $row['negotiable'];
    $prod_description = $row['prod_description'];
    $image = $row['image'];
}
if (isset($_POST['update'])) { 
    $updated_categories = $_POST['categories'];
    $updated_title = $_POST['title'];
    $updated_brand_name = $_POST['brand_name'];
    $updated_model_name = $_POST['model_name'];
    $updated_color = $_POST['color'];
    $updated_size = $_POST['size'];
    $updated_conditions = $_POST['conditions'];
    $updated_location = $_POST['location'];
    $updated_delivery = $_POST['delivery'];
    $updated_price = $_POST['price'];
    $updated_negotiable = $_POST['negotiable'];
    $updated_prod_description = $_POST['prod_description'];
    $updated_image = $_FILES['image'];
$sql = "UPDATE products SET categories ='". $updated_categories."',title ='". $updated_title."',brand_name ='". $updated_brand_name."', model_name = '".$updated_model_name. "',color ='". $updated_color."',size ='". $updated_size."',conditions ='". $updated_conditions."',location ='". $updated_location."',delivery ='". $updated_delivery."',price ='". $updated_price."',negotiable ='". $updated_negotiable."',prod_description ='". $updated_prod_description."' WHERE shoe_id = '". $editId."'";
    
    if (mysqli_query($conn, $sql)) {
        $success = "Category Updated Successfully !";
    } else {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>

<body>
    <div id="wrapper" style="margin-top:70px">
        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header heading">Edit Products</h2>
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
    <!-- <div class="wrapper" style="margin-top: 70px;"> -->
        <!-- <h1 class="heading">Add Products</h1> -->
        <div class="container">
             <?php include 'include/message.php'; ?>
             <fieldset>

            <form class="well form-horizontal" action="edit_products.php?id=<?php echo $editId;?>" method="post">
                <!-- <div class="col-lg-6 col-md-6"> -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="categories">Categories</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $categories; ?>"class="form-control" name="categories" placeholder="Categories">
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Title of the product: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $title; ?>" class="form-control" type="text" name="title" id="title">
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                        <label class="col-md-4 control-label" for="brand_name">Brand Name: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $brand_name; ?>"class="form-control" type="text" name="brand_name" id="brand_name">
                            </div>
                        </div>
                    </div>

                                    <div class="form-group">
                        <label class="col-md-4 control-label" for="model_name">Model Name: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $model_name; ?>"class="form-control" type="text" name="model_name" id="model_name">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="color">Color: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $color; ?>"class="form-control" type="text" name="color" id="color">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="size">size: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $size; ?>" class="form-control" type="text" name="size" id="size">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="conditions">Conditions: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $conditions; ?>" class="form-control" type="text" name="conditions" id="conditions">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="location">Location: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $location; ?>" class="form-control" type="text" name="location" id="location">
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                        <label class="col-md-4 control-label" for="delivery">Delivery: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $delivery; ?>" class="form-control" type="text" name="delivery" id="delivery">
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                        <label class="col-md-4 control-label" for="price">Price: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $price; ?>" class="form-control" type="text" name="price" id="price">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="negotiable">Price Negotiable: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <input value="<?php echo $negotiable; ?>" class="form-control" type="text" name="negotiable" id="negotiable">
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                        <label class="col-md-4 control-label" for="prod_description">Product Description: </label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <textarea class="form-control" type="text" name="prod_description" id="prod_description" >value="<?php echo $prod_description; ?>"</textarea>
                                <!-- <input class="form-control" type="text" name="prod_description" id="prod_description"> -->
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4"><br>
                            <input class="btn btn-success " type="submit" name="update" value="Update" >
                            <a href="list_products.php" class="btn btn-primary">All Category</a>
                        </div>
                    </div>

                <!-- <div class="col-sm-12">
                    <button type="submit" name="update" class="btn btn-success">
                        Update
                    </button>
                    <a href="list_products.php" class="btn btn-primary">All Category</a>
                </div> -->
            </form>
        </fieldset>
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
