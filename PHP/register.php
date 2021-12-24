<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/register.css">
  <title>Register Page</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo" src="../Images/logo (1).png" style="width:80px" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active nav1" aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="../PHP/rooms.php">Rooms and Suite</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active nav2" href="../PHP/dine.php">Dine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="../PHP/enjoy.php">Enjoy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="../PHP/contact.php">Contact</a>
          </li>
        </ul>
        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active nav3" aria-current="page" href="../PHP/register.php">Signup</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav3" aria-current="page" href="../PHP/login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <section class="h-100 h-custom" style="background-color: #8fc4b7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
          <div class="card rounded-3">
            <img src="../Images/banner2.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

              <form action="auth.php" method="post" class="px-md-2">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1q" class="form-control" placeholder="Enter the Name" name="name" />
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1q" class="form-control" placeholder="Enter the Email" name="email" />
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example1q" class="form-control" placeholder="Enter the Password" name="password" />
                </div>

                <div class="form-outline mb-4">
                  <input type="tel" id="form3Example1q" class="form-control" placeholder="Enter the Phone Number" name="number" />
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1q" class="form-control" placeholder="Enter the Address" name="address" />
                </div>




                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
                <p>Already have an account? <a href="./login.php" class="link-info">Sign In here</a></p>

            </div>




            </form>

          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>