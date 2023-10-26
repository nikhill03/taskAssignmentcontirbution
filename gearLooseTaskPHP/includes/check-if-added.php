<?php
    function check_if_added_to_cart($item_id){
        include 'common.php';
        $uid=1;
        $sql="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$uid' AND status='Added to cart'";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>=1){
            return 1;
        }
        else{
            return 0;
        }
    }
?>