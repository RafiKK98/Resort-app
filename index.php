<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Homepage</title>
    <link rel="stylesheet" href="./CSS/style.css">
  </head>
  <body>
      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="logo" src="./Images/logo (1).png" alt="Logo">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active nav1" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav2" href="#">Rooms and Suite</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active nav2" href="#">Dine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active nav2" href="#">Enjoy</a>
            </li>
          </ul>
          <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active nav3" aria-current="page" href="#"
                  >Signup</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active nav3" aria-current="page" href="#"
                  >Login</a
                >
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
            <img src="./Images/banner2.jpg" class="d-block w-100" alt="Banner">
            <div class="carousel-caption d-none d-md-block">
                <h1>DuSai Resort & Spa</h1>
                <p>The most exotic resort in Bangladesh</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./Images/banner3.jpg" class="d-block w-100" alt="Banner">
            <div class="carousel-caption d-none d-md-block">
                <h1>DuSai Resort & Spa</h1>
                <p>The most exotic resort in Bangladesh</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./Images/banner4.jpg" class="d-block w-100" alt="Banner">
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

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    
  </body>
</html>
