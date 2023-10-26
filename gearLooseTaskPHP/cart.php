<?php
require 'includes/common.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Anmol Sharma">

    <link href="fonts/material-icons.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet" type="text/css" />
    <script src="js/tailwind.js"></script>


    <title>Lifestyle Store</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;

    }

    th,
    td {
        padding: 5px;
    }
</style>

<body>

    <?php include 'includes/header.php'; ?>

    <div class="flex flex-col min-h-[100vh] items-center w-full gap-8">

        <div class="head bg-gray-400 flex flex-col items-center p-4 w-full">
            <h2 class="font-bold text-4xl">Organization's Cart</h2>
            <p class="">Following items were added in your cart : </p>
        </div>

        <div class="text-center w-[75%] flex flex-col gap-4">
            <table class="table border w-full ">
                <thead class="">
                    <tr class="">
                        <th class="text-center text-[18px]">Sr. No.</th>
                        <th class="text-center text-[18px]">Item</th>
                        <th class="text-center text-[18px]">Price</th>
                        <th class="text-center text-[18px]">Quantity</th>
                        <th class="text-center text-[18px]">Total</th>
                        <th class="text-center text-[18px]">Remove Item</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $uid = 1;
                    $view = "SELECT items.name, items.price, items.id FROM items, users_items WHERE users_items.user_id='$uid' AND users_items.item_id=items.id AND users_items.status='Added to cart'";
                    $result = mysqli_query($con, $view);
                    $total = 0;
                    $srno = 1;

                    if (mysqli_num_rows($result) > 0) {
                        while ($ro = mysqli_fetch_assoc($result)) {
                    ?>
                            <tr>
                                <td>
                                    <?php
                                    echo $srno;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $ro["name"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $ro["price"];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "1";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo "&#8377; " . $ro["price"];
                                    $srno++;
                                    $total = $total + $ro["price"];
                                    ?>
                                </td>
                                <td>
                                    <a href="cart_remove.php?id=<?php echo $ro["id"] ?>" class="font-[14px] text-blue-400 flex flex-col items-center justify-center"><img src="icons/delete.png" alt="remove" class="w-[24px]"> <p>Remove from cart</p></a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="font-bold text-[20px] text-black">Grand Total :</td>
                        <td class="font-bold text-[20px] text-black">
                            <?php
                            echo "&#8377; " . $total;
                            ?>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <script>
                function confirmed() {
                    if (window.confirm("Confirm Order ?")) {
                        location.href = "success.php";
                    }
                }
            </script>

            <?php
            if ($total == 0) {
            ?>
                <a id="link" class="p-2 bg-red-400 text-[ededed] w-full" style="text-decoration: none" href="">Confirm Order</a>
            <?php
            } else {
            ?>
                <a id="link" class="p-2 bg-red-400 text-[ededed] w-full" style="text-decoration: none" href="">Confirm Order</a>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    if ($total == 0) {
    ?>
        <script>
            alert("Empty cart.\nAdd items to the cart first !");
        </script>
    <?php
    }
    ?>
    <br />
    <br />

    <?php
    require('includes/footer.php')
    ?>
</body>

</html>