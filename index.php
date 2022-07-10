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
              <!-- <a class="nav-link" href="#">Total Price:100</a> -->
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

        <li class="">


          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Login</button>
          </div>



          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Login In</h4>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    <span class="fs-5 fw-bold text-center" aria-hidden="true">&times;</span>
                  </button>


                </div>
                <form action="" method="POST">
                  <div class="modal-body mx-3">
                    <div class="md-form mb-5 d-flex">
                      <input type="email" pattern="\d*" id="defaultForm-email" class="form-control validate" placeholder="Email" required>
                    </div>

                    <div class="md-form mb-4 d-flex align-items-center justify-content-center">

                      <input type="password" id="defaultForm-pass" pattern="\d*" class="form-control validate" placeholder="Password">
                    </div>

                  </div>
                  <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-success fs-5 fw-bold" type="submit">Login</button>
                  </div>
              </div>
              </form>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./supplier/supplier_register.php">become supplier</a>
        </li>

      </ul>
    </nav>






    <?php

    ?>
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>