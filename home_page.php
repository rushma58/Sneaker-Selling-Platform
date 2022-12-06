<?php include 'include/head.php' ?>


<section class="container product" id="product"  style="margin-top: 100px; margin-bottom: 30px;">
    <h1 class="heading">latest <span>Products</span></h1>
<?php 
    $sql = "SELECT * FROM products ORDER BY shoe_id DESC LIMIT 20" ;
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)) {?>

        <div class=" col-md-4 box-container">
            <div class="box inputGroupContainer">
                <div class=" content">
                    <img class = "" src="<?php echo $row['image']; ?>" alt="no image">
                    <!-- <img src="img/product4/1.jpg" alt=""> -->
                    <h3><?php echo $row['title']?></h3>
                    <div class="price">Rs. <?php echo $row['price']?></div>
                    <div><a href="<?php echo 'each_product.php?shoeid='.$row['shoe_id'] ?>">View Details</a></div>
                </div>
            </div>
        </div>

<?php }?>
       
</section>

<?php include 'include/footer.php' ?>
   

 