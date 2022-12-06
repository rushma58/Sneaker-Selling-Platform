
<?php 
    session_start();
    include_once 'include/connection.php';

    // if(!isset($_SESSION['userId'])){
    //     header('location: login.php');
    // }

    //$username= $_SESSION['username'];

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
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.css">

     <script src="js/script.js"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 0px;margin-top: 0px;">
          <div class="container" >
            <a class="navbar-brand " href="admin_panel.php">
              <img src="img/logo.png" alt="" class="logo">
            </a>
            <div class="navbar-collapse">
              <ul class="navbar-nav ms-auto me-auto">

                <!-- <li>
                  <h2 class=" heading" style="text-align: center;margin:0px; ">Admin Panel</h2>
                </li> -->
                <li class="nav-item">
                  <h2 class=" heading text-center" style="margin:0px; ">Admin Panel</h2>
                </li>
              </ul>

              <ul class="navbar-nav">
                <li class="nav-item" >
                  <a class="nav-link active text-end" aria-current="page" href="logout.php"><b>Logout</b></a>
                </li>
              </ul>
            </div>
                    
            </div>         
        </nav>
    </header>

