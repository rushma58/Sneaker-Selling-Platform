<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sneakers</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <link href="css\bootstrap.css" rel="stylesheet">
         
         <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
         <link rel="stylesheet" href="css/style.css">

         <script src="js/script.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container" style="background-color:white; border: none;">
                        <a class="navbar-brand" href="home_page.php"><img src="img/logo.png" alt="" class="logo"></a>
                        <div class="navbar-collapse" >
                          <ul class="navbar-nav ms-auto me-auto ">
                            <li class="nav-item">
                              <a class="nav-link" href="shoe_sports.php">Sports</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="shoe_sneakers.php">Sneakers</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="shoe_formal.php">Formal</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="shoe_slippers.php">Slippers</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="shoe_boots.php">Boots</a>
                            </li>
                            
                          </ul>
                          <ul class="navbar-nav ms-auto me-0 ">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="sell_page.php"><b>Sell</b></a>
                            </li>
                            
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="login.php"><b>Login</b></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="registration.php"><b>SignUp</b></a>
                            </li>
                          </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="product container" id="product" style="margin-top: 70px;">
            <h1 class="heading">latest <span>Products</span></h1>
            <?php 
                session_start();
                include_once 'include/connection.php';

                $sql = "SELECT * FROM products ORDER BY shoe_id DESC LIMIT 10" ;
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)) {?>

                    <div class="col-md-4 box-container">
                        <div class="box inputGroupContainer">
                            <div class=" content">
                                <img src="<?php echo $row['image']; ?>" alt="no image">
                                
                                <h3><?php echo $row['title']?></h3>
                                <div class="price">Rs. <?php echo $row['price']?></div>
                                <div><a href="<?php echo 'each_product.php?shoeid='.$row['shoe_id'] ?>">View Details</a></div>
                            </div>
                        </div>
                    </div>

            <?php }?>
            </section>
        
<?php include 'include/footer.php' ?>

<script src="js/script.js"></script>

