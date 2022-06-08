<!DOCTYPE>
<?php

include("functions/functions.php");

?>
<html>

<head>
  <title>Superfine Agro</title>

  <link rel="stylesheet" href="styles/style.css" media="all" />


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>

<body>


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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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


          <button class="btn btn-outline-danger" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!--Main container starts from here -->
  <div class="main_wrapper">

    <!--  content wrapper starts -->
    <div class="content_wrapper d-flex">

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

        <?php cart(); ?>

        <div id="shopping">
          <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
            <b style="color:yellow">Shopping Cart -</b> <b style="color:white">Total Items:<?php total_items(); ?> Total Price: <?php total_price() ?></b> <a href="cart.php" style="color:yellow"> Go to cart</a>
          </span>
        </div>
        <?php $ip = getIp(); ?>

        <div id="products_box">

          <?php getpro(); ?>
          <?php getCatPro(); ?>
          <?php getBrandPro(); ?>

        </div>
      </div>

    </div>

    <!--  content wrapper ends -->


    <div id="footer">

      <h3 style="text-align:center; padding-top:30px;">© 2022 Copyright: Superfine Agro</h2>

    </div>



  </div>

  <!--Main container ends here -->
</body>

</html>