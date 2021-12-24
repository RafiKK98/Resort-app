<?php
  // session_start();
  // $var_name = $_SESSION['n'];

  include "../DB/database.php";
  $current_user_mail;
  $current_user_name;

  $conn = OpenConnection();
  
  $result = mysqli_query($conn,"SELECT * FROM currentuser;");

  while($row = mysqli_fetch_assoc($result)) {
    $current_user_mail = $row['mail_id'];
    $current_user_name = $row['name'];
  }

  CloseConnection($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <title>Book Room</title>
  <link rel="stylesheet" href="../CSS/style5.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo" src="../Images/logo (1).png" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active nav1" aria-current="page" href="index2.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="./rooms2.php">Rooms and Suite</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active nav2" href="./dine2.php">Dine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="./enjoy2.php">Enjoy</a>
          </li>
        </ul>
        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <div class="nav-link active nav3">
                <?php
                  // echo "Welcome ".$var_value;
                  // $_SESSION['current'] = $var_value;
                  echo "Welcome " . $current_user_name;
                ?>
              </div>
                
              <!-- <a class="nav-link active nav3" aria-current="page" href="./PHP/register.php">Signup</a> -->
            </li>
            <li class="nav-item">
              <form action="bookroom.php" method="post">
                <input type="submit" class="btn btn-secondary nav-link active nav3" name="bookroom" value="Book a Room"> 
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav3" aria-current="page" href="../index.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Carousel -->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../Images/banner2.jpg" class="d-block w-100" alt="Banner">
        <div class="carousel-caption d-none d-md-block">
          <h1>DuSai Resort & Spa</h1>
          <p>The most exotic resort in Bangladesh</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../Images/banner3.jpg" class="d-block w-100" alt="Banner">
        <div class="carousel-caption d-none d-md-block">
          <h1>DuSai Resort & Spa</h1>
          <p>The most exotic resort in Bangladesh</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../Images/banner4.jpg" class="d-block w-100" alt="Banner">
        <div class="carousel-caption d-none d-md-block">
          <h1>DuSai Resort & Spa</h1>
          <p>The most exotic resort in Bangladesh</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Container -->
  <div class="container">
        <form action="addToCart.php" method="post">
            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Images/room1.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Superior King / Twin</h5>
                                
                                <div class="form-outline mb-4">
                                    <input type="number" name="totalRoom1" placeholder="Enter Total Room Number" class="form-control" id="form2Example18">
                                </div>

                                <!-- <button type="submit" class="btn btn-info  btn-block" >Save</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Images/room2.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Premium King / Twin</h5>
                                <div class="form-outline mb-4">
                                    <input type="number" step="0.01" name="price2" placeholder="Enter price" class="form-control " id="form2Example18">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" name="totalRoom2" placeholder="Enter Total Room Number" class="form-control" id="form2Example18">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Images/room3.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Villa Deluxe Queen</h5>
                                <div class="form-outline mb-4">
                                    <input type="number" step="0.01" name="price3" placeholder="Enter price" class="form-control " id="form2Example18">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" name="totalRoom3" placeholder="Enter Total Room Number" class="form-control" id="form2Example18">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Images/room4.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Villa Deluxe King</h5>
                                <div class="form-outline mb-4">
                                    <input type="number" step="0.01" name="price4" placeholder="Enter price" class="form-control " id="form2Example18">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" name="totalRoom4" placeholder="Enter Total Room Number" class="form-control" id="form2Example18">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Images/room5.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Villa Suite C</h5>
                                <div class="form-outline mb-4">
                                    <input type="number" step="0.01" name="price5" placeholder="Enter price" class="form-control " id="form2Example18">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" name="totalRoom5" placeholder="Enter Total Room Number" class="form-control" id="form2Example18">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Images/room6.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Villa Suite B</h5>
                                <div class="form-outline mb-4">
                                    <input type="number" step="0.01" name="price6" placeholder="Enter price" class="form-control " id="form2Example18">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" name="totalRoom6" placeholder="Enter Total Room Number" class="form-control" id="form2Example18">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Images/room7.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Villa Suite A</h5>
                                <div class="form-outline mb-4">
                                    <input type="number" step="0.01" name="price7" placeholder="Enter price" class="form-control " id="form2Example18">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" name="totalRoom7" placeholder="Enter Total Room Number" class="form-control" id="form2Example18">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Images/room8.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Honeymoon Villa</h5>
                                <div class="form-outline mb-4">
                                    <input type="number" step="0.01" name="price8" placeholder="Enter price" class="form-control " id="form2Example18">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" name="totalRoom8" placeholder="Enter Total Room Number" class="form-control" id="form2Example18">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../Images/room9.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Presidential Villa</h5>
                                <div class="form-outline mb-4">
                                    <input type="number" step="0.01" name="price9" placeholder="Enter price" class="form-control " id="form2Example18">
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="number" name="totalRoom9" placeholder="Enter Total Room Number" class="form-control" id="form2Example18">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-dark  btn-block" style="margin-bottom:10px">Save</button>

        </form>


    </div>

  

  <footer id="footer">
    <p>Niteshwar, Giashnagar, Moulvi Bazar, Bangladesh. Phone: +880 86164100, Hotline: +880 1617005511</p>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>


