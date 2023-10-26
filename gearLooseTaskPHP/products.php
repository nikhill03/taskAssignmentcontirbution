<?php
require 'includes/common.php';

?>

<!doctype html>
<html lang="en">

<head>
  <title>Lifestyle Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="icons/head.png" type="image/x-icon">
  <link rel="stylesheet" href="css/products.css">
  <script src="js/tailwind.js"></script>
</head>

<body>

  <?php

  require 'includes/header.php';
  require 'includes/check-if-added.php';
  ?>


  <div class="flex flex-col items-start min-h-[100vh]">

    <div class="" id="head">
      <div class="text-center mb-2 p-4">
        <h1 class="text-4xl font-bold">Welcome to GearLoose Labs!</h1>
        <p class="font-semibold text-xl">Lab Equipments, Accessories, all at one place.</p>
      </div>
    </div>


    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 p-4 gap-4 w-full">

      <?php

      $query = "SELECT * FROM items";
      $result = mysqli_query($con, $query);
      foreach ($result as $value) {
      ?>

        <div class="gridItem flex flex-col items-center w-full justify-center rounded-xl border border-2 shadow-lg">
          <img src="images/<?php echo $value['image'] ?>" alt="" class="w-full rounded-xl h-full">
          <div class="productDetails flex flex-col items-center justify-center p-3 gap-3 ">

            <h3 class="font-semibold text-lg"><?php echo $value['name'] ?></h3>
            <p>Price: Rs <?php echo $value['price'] ?>.00</p>
            <?php
            if (check_if_added_to_cart($value['id'])) {
              echo '<a href="#" class="bg-green-400 p-2 rounded-xl text-white hover:bg-green-200" disabled>Added to cart</a>';
            } else {
            ?>
              <a href="cart-add.php?id=<?php echo $value['id']?>" name="add" value="add" class="bg-blue-400 p-2 rounded-xl text-white hover:bg-blue-500">Add to cart</a>
            <?php
            }
            ?>
            <p></p>
          </div>

        </div>

      <?php

      }

      ?>


    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>


<?php

require 'includes/footer.php';
?>



</html>