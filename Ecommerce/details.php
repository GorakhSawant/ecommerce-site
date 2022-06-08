<!DOCTYPE>
<?php

include("functions/functions.php");

?>
<html>

<head>
  <title>Superfine Agro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="stylesheet" href="styles/style.css" media="all" />
</head>

<body>

  <!--Main container starts from here -->
  <!-- <div class="main_wrapper"> -->

  <!-- navbar here -->
  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Superfine Agro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href=" all_products.php">All Products</a>

          </li>
          <li class="nav-item">
            <a class="nav-link active" href="customer/my_account.php">My Account</a>

          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">Shopping Carts</a>

          </li>

          <li class="nav-item">
            <a class="nav-link active" href="cart.php">Sign Up</a>

          </li>

          <li class="nav-item">
            <a class="nav-link active" href="contact.html">Contact US</a>

          </li>
        </ul>


        <form class="d-flex" role="search" method="get" action="results.php" enctype="multipart/form-data">
          <input type="text" name="user_query" placeholder="Search Product" />

          <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="main_wrapper">
    <!--  content wrapper starts -->
    <div class="content_wrapper">

      <div id="sidebar">

        <div id="sidebar_title">Categories</div>

        <ul id="cats">

          <?php getCats(); ?>

        </ul>

        <div id="sidebar_title">Brands</div>

        <ul id="cats">

          <?php getBrands(); ?>

        </ul>

      </div>

      <div id="content_area">

        <div id="shopping">
          <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
            <b style="color:yellow">Shopping Cart -</b> <b style="color:white">Total Items: Total Price:</b> <a href="cart.php" style="color:yellow"> Go to cart</a>
          </span>
        </div>

        <div id="products_box">
          <?php

          if (isset($_GET['pro_id'])) {
            $product_id = $_GET['pro_id'];
            $get_pro = "select * from products where product_id='$product_id'";
            $run_pro = mysqli_query($con, $get_pro);
            while ($row_pro = mysqli_fetch_array($run_pro)) {
              $pro_id = $row_pro['product_id'];
              $pro_title = $row_pro['product_title'];
              $pro_price = $row_pro['product_price'];
              $pro_image = $row_pro['product_image'];
              $pro_desc = $row_pro['product_desc'];

              echo "

                             <h3>$pro_title</h3>
                     
                             <img src='admin_area/product_images/$pro_image' width='400' height='300'/>

                             <p><b>Rs. $pro_price </b></p>

                             <p style='float:center'>$pro_desc </p> <br>

                             <a href='index.php?pro_id=$pro_id' style='float:center;'>Go Back</a><br><br>

                             <a href='details.php?pro_id=$pro_id'>
                             <button style='float:center;'>Add to Cart</button></a>

                            </div>

                        ";
            }
          }
          ?>


        </div>

      </div>

      <!--  content wrapper ends -->


      <div id="footer">

        <h2 style="text-align:center; padding-top:30px;">© 2022 Copyright: Superfine Agro</h2>

      </div>



    </div>

    <!--Main container ends here -->
</body>

</html>