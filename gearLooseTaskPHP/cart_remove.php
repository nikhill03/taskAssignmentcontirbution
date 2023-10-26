<?php
    include 'includes/common.php';
        $uid=1;
        if(isset($_GET["id"])){
            $item_id=$_GET["id"];
            $sql="DELETE FROM users_items WHERE user_id='$uid' AND item_id='$item_id' AND status='Added to cart'";
            mysqli_query($con,$sql);
            header("location: cart.php");
        }
        else if($_GET["empty"]=="true"){
            $empty="DELETE FROM users_items WHERE user_id='$uid' AND status!='Added to cart'";
            mysqli_query($con,$empty);
            header("location: products.php");
        }
        else{
            header("location: cart.php");
        }
   
?>