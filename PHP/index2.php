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

  <title>Homepage</title>
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

  <div class="container-fluid first">
    <div class="row f">
      <div class="col-md-6">
        <h3>
          DuSai Resort & Spa is the first world class 5 star standard boutique Villa Resort & Spa in Bangladesh
        </h3>
        <hr>
        <p>
          DuSai Resort & Spa is the first world class 5 star standard boutique Villa Resort & Spa in Bangladesh nestled within a small tropical forest on hillocks with thousands of trees and flanked by a 1000 feet long serpentine lake.
        </p>
        <a class="learn" href="https://www.dusairesorts.com/why-us" target="_blank" rel="noopener noreferrer">Learn more</a>
      </div>
      <div class="col-md-6">
        <div class="card mb-3" style="max-width: 570px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="../Images/award.jpg" class="img-fluid rounded-start award" alt="...">
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Awards & Accolades</h5>
                <h6 class="card-text">American Architecture Prize</h6>
                <p class="card-text">World Luxury Hotel Awards, one of the two international hotel categorisation body, has awarded on 2nd December 2017.</p>
                <a class="learn" href="https://www.dusairesorts.com/awards-accolades" target="_blank" rel="noopener noreferrer">Learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 i1">
        <a href="./rooms2.php">
          <div class="i3">
            <h2 class="rooms">Rooms & Suites</h2>
          </div>
        </a>
      </div>
      <div class="col-md-6 i2">
        <a href="./dine2.php">
          <div class="i3">
            <h2 class="rooms">Dine</h2>
          </div>
        </a>
      </div>
    </div>
  </div>

  <footer id="footer">
    <p>Niteshwar, Giashnagar, Moulvi Bazar, Bangladesh. Phone: +880 86164100, Hotline: +880 1617005511</p>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

