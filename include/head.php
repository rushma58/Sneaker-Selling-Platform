
<?php 
    session_start();
    include_once 'connection.php';

    if(!isset($_SESSION['userId'])){
        header('location: login.php');
    }

    $username= $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - <?php echo $title;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link href="css\bootstrap.css" rel="stylesheet">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
     <link rel="stylesheet" href="css/style.css">


     <script src="js/script.js"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 0px;">
                    <div class="container-fluid" style="background-color:white; border: none;">
                    <a class="navbar-brand" href="home_page.php"><img src="img/logo.png" alt="" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto me-auto">
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
                      <ul class="navbar-nav ">
                        <li class="nav-item ">
                          <a class="nav-link active" aria-current="page" href="sell_page.php"><b>Sell</b></a>
                        </li>                       
                        <li class="nav-item ">
                          <a class="nav-link active" aria-current="page" href="profile.php"><b>Welcome <?php echo $username; ?></b></a>
                        </li>
                        <li class="nav-item ">
                          <a class="nav-link active" aria-current="page" href="wishlist.php"><b>My Wishlist</b></a>
                        </li>
                         <li class="nav-item ">
                          <a class="nav-link active" aria-current="page" href="logout.php"><b>Logout</b></a>
                        </li>
                      </ul>
                </div>
            </div>
        </nav>
    </header>

