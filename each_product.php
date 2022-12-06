<?php include 'include/head.php'; ?>
<?php 

    if(isset($_GET['shoeid'])){

        $shoeid=$_GET['shoeid'];
    
        $title = "Add Profile";

        $userId = $_SESSION['userId'];

        $seller_id="";

        $full_name="";
        $contact="";

        if(isset($userId)){
            $sql = "SELECT * FROM product_info WHERE shoe_id = $shoeid";
            //var_dump($sql); die();
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)) {
                // var_dump($row); die();
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
                // $seller_id = $row['seller_id'];
                $full_name = $row['first_name']." ".$row['last_name'];
                $contact = $row['phone_number'];
                $image = $row['image'];
            }       
        }


        mysqli_close($conn);
?>

<body>
    <section style="margin-top: 40px;">
        <div class="col-lg-5 pb-5" style="margin-top: 10px;">
            <?php include 'include/message.php';?>
            <div class="d-flex mb-3">
                <div class=" content">
                    <div class="panel panel-default">
                        <img class="img-responsive" src="<?php echo $image; ?>" alt="no image">
                       
                        <!-- <img class="img-responsive" src="img/product4/1.jpg" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold"><?php echo $title?></h3>
                    <div class=" mb-3">
                        <form>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <b> General</b>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Title </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $title; ?>" readonly="readonly" class="form-control" type="text" name="title" id="title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Price </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $price; ?>" readonly="readonly" class="form-control" type="text" name="price" id="price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Price Negotiable </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $negotiable; ?>" readonly="readonly" class="form-control" type="text" name="negotiable" id="negotiable">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Delivery </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $delivery; ?>" readonly="readonly" class="form-control" type="text" name="delivery" id="delivery">
                                                    </div>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <b>Specification</b>
                                        </div>
                                        <div class="panel-body">                       
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Brand Name </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $brand_name; ?>" readonly="readonly" class="form-control" type="text" name="brand_name" id="brand_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Model Name </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $model_name; ?>" readonly="readonly" class="form-control" type="text" name="model_name" id="model_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Category </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $categories; ?>" readonly="readonly" class="form-control" type="text" name="categories" id="categories">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Size </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $size; ?>" readonly="readonly" class="form-control" type="text" name="size" id="size">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Color </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $color; ?>" readonly="readonly" class="form-control" type="text" name="color" id="color">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Condition </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $conditions; ?>" readonly="readonly" class="form-control" type="text" name="conditions" id="conditions">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Product Description </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <textarea readonly="readonly" class="form-control" style="height: 15rem"><?php echo $prod_description; ?></textarea>
                                                        <!-- <input value ="<?php echo $prod_description; ?>" readonly="readonly" class="form-control" type="text" name="prod_description" id="prod_description"> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <b> Seller's Detail</b>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Name </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $full_name; ?>" readonly="readonly" class="form-control" type="text" name="full_name" id="full_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Contact Number </label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $contact; ?>" readonly="readonly" class="form-control" type="text" name="phone_number" id="phone_number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-6 control-label" >Location</label>
                                                <div class="col-md-6 inputGroupContainer">
                                                    <div class="input-group">
                                                        <input value ="<?php echo $location; ?>" readonly="readonly" class="form-control" type="text" name="location" id="location">
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <form action="wishlist_handle.php" method="POST">
                <input type="hidden" name="shoe_id" value="<?php echo $shoeid; ?>">
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['userId'];?>">
                <input type="hidden" name="seller_id" value="<?php echo $seller_id; ?>">
                <input type="submit" name="wishlist" value="Add to Wishlist" class="form-control" id="cart">
            </form>
        </section>

        
    <?php include 'include/footer.php';

};
?>


                
            