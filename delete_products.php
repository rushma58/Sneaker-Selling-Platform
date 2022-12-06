<?php

include_once 'include/connection.php';
session_start();
$id=$_GET['id'];
//echo $id;
$sql = "DELETE FROM products WHERE shoe_id= $id";
if(mysqli_query($conn, $sql)){
    $_SESSION['success'] = "Category Deleted.";
    header('location: list_products.php');
}
mysqli_close($conn);
?>