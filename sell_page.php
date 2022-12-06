<?php include 'include/head.php'; ?>

<?php 
	

	$errors = array();

	if (isset($_POST['upload'])) {
	    $categories = mysqli_real_escape_string($conn, $_POST['categories']);
	    $title = mysqli_real_escape_string($conn, $_POST['title']);
	    $brand_name = mysqli_real_escape_string($conn, $_POST['brand_name']);
	    $model_name = mysqli_real_escape_string($conn, $_POST['model_name']);
	    $color = mysqli_real_escape_string($conn, $_POST['color']);
	    $size = mysqli_real_escape_string($conn, $_POST['size']);
	    $conditions = mysqli_real_escape_string($conn, $_POST['conditions']);
	    $location = mysqli_real_escape_string($conn, $_POST['location']);
	    $delivery = mysqli_real_escape_string($conn, $_POST['delivery']);
	    $price = mysqli_real_escape_string($conn, $_POST['price']);
	    $negotiable = mysqli_real_escape_string($conn, $_POST['negotiable']);
	    $prod_description = mysqli_real_escape_string($conn, $_POST['prod_description']);
	    $image =$_FILES['image'];



	    $userid = $_SESSION['userId'];	    

	    // Validation
	    if (empty($title)) {
	        array_push($errors, "Title of the Product is Required");
	    }
	    if (empty($brand_name)) {
	        array_push($errors, "Brand Name is Required");
	    }
	    if (empty($model_name)) {
	        array_push($errors, "Model Name is Required");
	    }
	    if (empty($conditions)) {
	        array_push($errors, "Conditions is Required");
	    }
	    if (empty($price)) {
	        array_push($errors, "Price is Required");
	    }
	    if (empty($image)) {
	        array_push($errors, "Image is Required");
	    }

	    $filename = $image['name'];
	    $filetemp = $image['tmp_name'];

	    $destinationfile='./uploads/'.$filename;
	    move_uploaded_file($filetemp,$destinationfile) ;
	    
         
            
	    

	    if (count($errors) == 0) {
	        $insert_query = "INSERT INTO products (categories, brand_name, model_name, color, conditions, location, price, negotiable,image,  seller_id, title, size, delivery, prod_description, created_on) VALUES('$categories', '$brand_name', '$model_name','$color','$conditions','$location','$price', '$negotiable','$destinationfile','$userid','$title','$size','$delivery','$prod_description','now()')";
	        // echo $sql ;

	       
	       if(mysqli_query($conn, $insert_query))
	       {

	       	$_SESSION['success'] = "Successfully added the product";
			//header('location: home_page.php');
	       }
	        
	    }

	   	 mysqli_close($conn);
		}
?>

		<div class="wrapper" style="margin-top: 70px;">
			<h1 class="heading">Sell Page</h1>
			<div class="container">
				<?php include 'include/message.php'; ?>
				
				<fieldset>

				<form class="well form-horizontal" method="POST" action="sell_page.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-4 control-label" for="categories">Categories:</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
					  			<select class="form-control selectpicker" id="categories" name="categories">
						    		<option value="Sports">Sports</option>
						    		<option value="Sneakers">Sneakers</option>
						    		<option value="Formal">Formal</option>
						    		<option value="Slippers">Slippers</option>
						    		<option value="Boot">Boot</option>
					  			</select>
					  		</div>
					  	</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="title">Title of the product: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<input class="form-control" type="text" name="title" id="title">
			  				</div>
			  			</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="brand_name">Brand Name: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<input class="form-control" type="text" name="brand_name" id="brand_name">
			  				</div>
			  			</div>
					</div>
			  		
					<div class="form-group">
						<label class="col-md-4 control-label" for="model_name">Model Name: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<input class="form-control" type="text" name="model_name" id="model_name">
			  				</div>
			  			</div>
					</div>
			  		
					<div class="form-group">
						<label class="col-md-4 control-label" for="color">Color: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<input class="form-control" type="text" name="color" id="color">
			  				</div>
			  			</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="size">size: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<input class="form-control" type="text" name="size" id="size">
			  				</div>
			  			</div>
					</div>
			  		
					<div class="form-group">
						<label class="col-md-4 control-label" for="conditions">Conditions: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<select class="form-control selectpicker" id="conditions" name="conditions">
					  				<option value="BrandNew">Brand New</option>
					  				<option value="Like New">Like New</option>
					  				<option value="Used">Used</option>
					  			</select>
					  		</div>
					  	</div>
					</div>
			  		
					<div class="form-group">
						<label class="col-md-4 control-label" for="location">Location: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<input class="form-control" type="text" name="location" id="location">
			  				</div>
			  			</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="delivery">Delivery: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<select class="form-control selectpicker" id="delivery" name="delivery">
			  						<option value="All over Nepal">Yes all over nepal</option>
					  				<option value="Inside Valley">Inside Valley Only</option>
					  				<option value="Self Pickup">Self Pick Up</option>	
					  			</select>
			  				</div>
			  			</div>
					</div>
		  			
					<div class="form-group">
						<label class="col-md-4 control-label" for="price">Price: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<input class="form-control" type="text" name="price" id="price">
			  				</div>
			  			</div>
					</div>
			  		
					<div class="form-group">
						<label class="col-md-4 control-label" for="negotiable">Price Negotiable: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
						  		<select class="form-control selectpicker" id="negotiable" name="negotiable">
						  			<option value="yes">Yes</option>
						  			<option value="no">No</option>
						  			<option value="fixed price">Fixed Price</option>
						  		</select>
						  	</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="prod_description">Product Discription: </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<textarea class="form-control" type="text" name="prod_description" id="prod_description"></textarea>
			  					<!-- <input class="form-control" type="text" name="prod_description" id="prod_description"> -->
			  				</div>
			  			</div>
					</div>
			  		
					<div  class="form-group">
						<label class="col-md-4 control-label" for="image">Image:</label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
			  					<input type="file" name="image" id="image">
			  				</div>
			  			</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label"></label>
						<div class="col-md-4"><br>
			  				<input class="btn btn-lg btn-secondary " type="submit" name="upload" value="Upload">
			  			</div>
			  		</div>


				</form>
				

			</fieldset>	

