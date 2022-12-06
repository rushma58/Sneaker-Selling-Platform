<?php

include_once 'include/connection.php';
session_start();
$id = $_GET["id"];
//echo $id;
$sql = "DELETE FROM userinfo WHERE user_id = $id";
if (mysqli_query($conn, $sql)) {
    $_SESSION['success'] = "User Deleted.";
    header('location: list_user.php');
}
mysqli_close($conn);

?>