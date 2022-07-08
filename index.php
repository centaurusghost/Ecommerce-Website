<!DOCTYPE html>
<html lang="en">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- font awesome learn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- css files -->
<link rel="stylesheet" href="style.css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website learning from a video</title>

<body>
  <!-- navigation bar -->
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container-fluid">
        <img src="./images/mainlogo.png" alt="" class="MainLogo">
        <a class="navbar-brand" href="#">Logo</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="./customer_registration/index.php">Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Total Price:100</a>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- second child -->
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>

      </ul>
    </nav>

    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center">Ozone & Bishal</h3>
      <p class="text-center">
        They shall do it alone. We shall do it together.
      </p>
    </div>

    <!-- fourth child -->
    <div class="row">
      <div class="col-md-10">
        <!-- display products here -->
        <div class="row">
          <!-- to display 3 carts we are using 3 divisions -->
          <div class="col-md-4 mb-2">

            <div class="card">
              <img class="card-img-top" src="./images/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">String Description Of The Item</p>
                <a href="#" class="btn btn-primary">Add To Cart</a>
                <a href="#" class="btn btn-warning paddingbetweenbotons">View More</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img class="card-img-top" src="./images/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">String Description Of The Item</p>
                <a href="#" class="btn btn-primary">Add To Cart</a>
                <a href="#" class="btn btn-warning paddingbetweenbotons">View More</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 mb-2">
            <div class="card">
              <img class="card-img-top" src="./images/3.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">String Description Of The Item</p>
                <a href="#" class="btn btn-primary">Add To Cart</a>
                <a href="#" class="btn btn-warning paddingbetweenbotons">View More</a>
              </div>
            </div>

          </div>



          <div class="col-md-4 mb-2">
            <div class="card">
              <img class="card-img-top" src="./images/4.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">String Description Of The Item</p>
                <a href="#" class="btn btn-primary">Add To Cart</a>
                <a href="#" class="btn btn-warning paddingbetweenbotons">View More</a>
              </div>
            </div>

          </div>

          <div class="col-md-4 mb-2">

            <div class="card">
              <img class="card-img-top" src="./images/5.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">String Description Of The Item</p>
                <a href="#" class="btn btn-primary">Add To Cart</a>
                <a href="#" class="btn btn-warning paddingbetweenbotons">View More</a>
              </div>
            </div>

          </div>

          <div class="col-md-4 mb-2">

            <div class="card">
              <img class="card-img-top" src="./images/6.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">String Description Of The Item</p>
                <a href="#" class="btn btn-primary">Add To Cart</a>
                <a href="#" class="btn btn-warning paddingbetweenbotons">View More</a>
              </div>
            </div>

          </div>

        </div>

      </div>

      <div class="col-md-2 bg-dark p-1 sidenavbar">
        <!-- display side navigation bar -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-warning sidenavbardelivery">
            <a href="#" class="nav-link text-dark">
              <h4> Delivery Brands</h4>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              Brand 1
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light">
              Brand 2
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link text-light">
          Brand3
            </a>
          </li>

          <li class="nav-item">
            <a href="testCode.php" class="nav-link text-light">
              Test Insert Page
            </a>
          </li>
        </ul>
      </div>
    </div>



    <!-- last child -->
    <div class="bg-warning p-3 text-center text-light">
      <p>Ozone & Bishal. Feel Free To Contact Us</p>
    </div>
  </div>
  <?php

  ?>
  <!-- bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>