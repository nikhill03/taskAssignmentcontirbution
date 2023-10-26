<?php
    $item=$_GET["id"];
    include 'includes/common.php';
    $query = "INSERT INTO users_items (user_id,item_id,status) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    $status="Added to cart";
    $user_id = 1;
    mysqli_stmt_bind_param($stmt, "sss",$user_id,$item,$status);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($con);
    header("location: products.php");
?>