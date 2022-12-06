
<?php 
include 'include/head.php'; 
    if(isset($_POST['wishlist'])){
        $userId = $_SESSION['userId'];
        $shoe_id = $_POST['shoe_id'];
        $cart_sql="INSERT into cart(user_id,product_id) VALUES($userId, $shoe_id)";
        $cart_result= mysqli_query($conn,$cart_sql);
        // var_dump($cart_sql);
        // var_dump($cart_sql);
        // die();
        if($cart_result){
           $_SESSION['success'] = "Added to wishlist Succesfully";
            // die();
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        else{
            header('Location: ' . $_SERVER['HTTP_REFERER']);

        }

    
    }
?>