<?php
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
   session_start();
   if(isset($_SESSION['views']))
    $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=1;

    //$i = $_SESSION['views'];
      
//echo"views = ".$_SESSION['views'];
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

  <script>
      // count(){
      //     $i = -1;
      // }
  </script>

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

  <div class="container" style="margin-top:20px">
      <div class="row">
          <div class="col-md-7">
              <div class="container-fluid">
        <form action="bookroom.php" method="post">
            <div class="row">
                <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                             <img src="../Images/lake-enjoy.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto" > 
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Welcome</h5>
                                
                                <div class="form-outline mb-4">
                                    <label for="date">Please Select the date:</label>
                                    <input type="date" name="date"  class="form-control" id="date">

                                    <label for="noOfDay">How Many Days?:</label>
                                    <input type="numver" name="noOfDay"  class="form-control" id="noOfDay">
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
                            <img src="../Images/room1.jpg" class="img-fluid rounded-start" alt="..." style="height:100%; width:auto" >
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Superior King / Twin  </h5>
                                <h6>Price: 14000BDT</h6>
                                
                                <div class="form-outline mb-4">
                                    <label for="roomnumber1">Total Room:</label>
                                    <input type="number" name="totalRoom1" placeholder="0" class="form-control" id="roomnumber1">
                                </div>
                                <div>
                                    <?php
                                        $conn = OpenConnection();
  
                                        $result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM room_t WHERE name = 'Superior King / Twin';");
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total']." Rooms Left";
                                        
                                        CloseConnection($conn);
                                    ?>
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
                                <h6>Price: 16000BDT</h6>
                                <div class="form-outline mb-4">
                                    <label for="roomnumber2">Total Room:</label>
                                    <input type="number" name="totalRoom2" placeholder="0" class="form-control" id="roomnumber2">
                                </div>
                                <div>
                                    <?php
                                        $conn = OpenConnection();
  
                                        $result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM room_t WHERE name = 'Premium King / Twin';");
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total']." Rooms Left";
                                        
                                        CloseConnection($conn);
                                    ?>
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
                                <h6>Price: 18000BDT</h6>
                                <div class="form-outline mb-4">
                                    <label for="roomnumber3">Total Room:</label>
                                    <input type="number" name="totalRoom3" placeholder="0" class="form-control" id="roomnumber3">
                                </div>
                                <div>
                                    <?php
                                        $conn = OpenConnection();
  
                                        $result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM room_t WHERE name = 'Villa Deluxe Queen';");
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total']." Rooms Left";
                                        
                                        CloseConnection($conn);
                                    ?>
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
                                <h6>Price: 20000BDT</h6>
                                <div class="form-outline mb-4">
                                    <label for="roomnumber4">Total Room:</label>
                                    <input type="number" name="totalRoom4" placeholder="0" class="form-control" id="roomnumber4">
                                </div>
                                <div>
                                    <?php
                                        $conn = OpenConnection();
  
                                        $result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM room_t WHERE name = 'Villa Deluxe King';");
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total']." Rooms Left";
                                        
                                        CloseConnection($conn);
                                    ?>
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
                                <h6>Price: 24000BDT</h6>
                                <div class="form-outline mb-4">
                                    <label for="roomnumber5">Total Room:</label>
                                    <input type="number" name="totalRoom5" placeholder="0" class="form-control" id="roomnumber5">
                                </div>
                                <div>
                                    <?php
                                        $conn = OpenConnection();
  
                                        $result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM room_t WHERE name = 'Villa Suite C';");
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total']." Rooms Left";
                                        
                                        CloseConnection($conn);
                                    ?>
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
                                <h6>Price: 30000BDT</h6>
                                <div class="form-outline mb-4">
                                    <label for="roomnumber6">Total Room:</label>
                                    <input type="number" name="totalRoom6" placeholder="0" class="form-control" id="roomnumber6">
                                </div>
                                <div>
                                    <?php
                                        $conn = OpenConnection();
  
                                        $result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM room_t WHERE name = 'Villa Suite B';");
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total']." Rooms Left";
                                        
                                        CloseConnection($conn);
                                    ?>
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
                                <h6>Price: 34000BDT</h6>
                                <div class="form-outline mb-4">
                                    <label for="roomnumber7">Total Room:</label>
                                    <input type="number" name="totalRoom7" placeholder="0" class="form-control" id="roomnumber7">
                                </div>
                                <div>
                                    <?php
                                        $conn = OpenConnection();
  
                                        $result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM room_t WHERE name = 'Villa Suite A';");
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total']." Rooms Left";
                                        
                                        CloseConnection($conn);
                                    ?>
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
                                <h6>Price: 50000BDT</h6>
                                <div class="form-outline mb-4">
                                    <label for="roomnumber8">Total Room:</label>
                                    <input type="number" name="totalRoom8" placeholder="0" class="form-control" id="roomnumber8">
                                </div>
                                <div>
                                    <?php
                                        $conn = OpenConnection();
  
                                        $result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM room_t WHERE name = 'Honeymoon Villa';");
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total']." Rooms Left";
                                        
                                        CloseConnection($conn);
                                    ?>
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
                                <h6>Price: 80000BDT</h6>
                                <div class="form-outline mb-4">
                                    <label for="roomnumber9">Total Room:</label>
                                    <input type="number" name="totalRoom9" placeholder="0" class="form-control" id="roomnumber9">
                                </div>
                                <div>
                                    <?php
                                        $conn = OpenConnection();
  
                                        $result = mysqli_query($conn,"SELECT COUNT(*) AS total FROM room_t WHERE name = 'Honeymoon Villa';");
                                        $data=mysqli_fetch_assoc($result);
                                        echo $data['total']." Rooms Left";
                                        
                                        CloseConnection($conn);
                                    ?>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-dark  btn-block" style="margin-bottom:10px" onclick="count()">Save</button>

        </form>


    </div>
          </div>
          <div class="col-md-5">
              <div class="container" style="position:absolute; height:100%">
                  <div class="row" style="position:absolute; height:100%;">
                      <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 28rem; height:600px; ">
  <div class="card-body" style="height:100%;">
    <h5 class="card-title">Booking Details</h5>
    
    <?php
       // error_reporting(E_ERROR | E_WARNING | E_PARSE);
      
          
      
        @$noOfDay = intval($_POST["noOfDay"]);
        @$totalRoom1 = $_POST["totalRoom1"];     
        @$totalRoom2 = $_POST["totalRoom2"];
        @$totalRoom3 = $_POST["totalRoom3"];
        @$totalRoom4 = $_POST["totalRoom4"];
        @$totalRoom5 = $_POST["totalRoom5"];
        @$totalRoom6 = $_POST["totalRoom6"];
        @$totalRoom7 = $_POST["totalRoom7"];
        @$totalRoom8 = $_POST["totalRoom8"];
        @$totalRoom9 = $_POST["totalRoom9"];
        
        

         $number1;
         $price1;
         $number2;
         $price2;
         $number3;
         $price3;
         $number4;
         $price4;
         $number5;
         $price5;
         $number6;
         $price6;
         $number7;
         $price7;
         $number8;
         $price8;
         $number9;
         $price9;
         $str1 = "/";
         $str2 = "/";
         $str3 = "/";
         $str4 = "/";
         $str5 = "/";
         $str6 = "/";
         $str7 = "/";
         $str8 = "/";
         $str9 = "/";

         
        

        if($totalRoom1 != "0"){
             $number1 = intval($totalRoom1);
             $price1 = 14000 * $number1 * $noOfDay;
             $str1 = "Superior King / Twin: ".$totalRoom1." Rooms, ".strval($noOfDay)." Days= ".$price1."/-"."<br>";
        }
        if($totalRoom2 != "0"){
             $number2 = intval($totalRoom2);
             $price2 = 16000 * $number2 * $noOfDay;
             $str2 = "Premium King / Twin: ".$totalRoom2." Rooms, ".strval($noOfDay)." Days= ".$price2."/-"."<br>";

        }
        if($totalRoom3 != "0"){
             $number3 = intval($totalRoom3);
             $price3 = 18000 * $number3 * $noOfDay;
             $str3 = "Villa Deluxe Queen: ".$totalRoom3." Rooms, ".strval($noOfDay)." Days= ".$price3."/-"."<br>";
        }
        if($totalRoom4 != 0){
             $number4 = intval($totalRoom4);
             $price4 = 20000 * $number4 * $noOfDay;
             $str4 = "Villa Deluxe King: ".$totalRoom4." Rooms, ".strval($noOfDay)." Days= ".$price4."/-"."<br>";
        }
        if($totalRoom5 != 0){
             $number5 = intval($totalRoom5);
             $price5 = 24000 * $number5 * $noOfDay;
             $str5 = "Villa Suite C: ".$totalRoom5." Rooms, ".strval($noOfDay)." Days= ".$price5."/-"."<br>";
        }
        if($totalRoom6 != 0){
             $number6 = intval($totalRoom6);
             $price6 = 30000 * $number6 * $noOfDay;
             $str6 = "Villa Suite B: ".$totalRoom6." Rooms, ".strval($noOfDay)." Days= ".$price6."/-"."<br>";
        }
        if($totalRoom7 != 0){
             $number7 = intval($totalRoom7);
             $price7 = 34000 * $number7 * $noOfDay;
             $str7 = "Villa Suite A: ".$totalRoom7." Rooms, ".strval($noOfDay)." Days= ".$price7."/-"."<br>";
        }
        if($totalRoom8 != 0){
             $number8 = intval($totalRoom8);
             $price8 = 50000 * $number8 * $noOfDay;
             $str8 = "Honeymoon Villa: ".$totalRoom8." Rooms, ".strval($noOfDay)." Days= ".$price8."/-"."<br>";
        }
        if($totalRoom9 != 0){
             $number9 = intval($totalRoom9);
             $price9 = 80000 * $number9 * $noOfDay;
             $str9 = "Presidential Villa: ".$totalRoom9." Rooms, ".strval($noOfDay)." Days= ".$price9."/-"."<br>";
        }
        
        if($str1!="/"){
            echo $str1;
        }
        if($str2!="/"){
            echo $str2;
        }
        if($str3!="/"){
            echo $str3;
        }
        if($str4!="/"){
            echo $str4;
        }
        if($str5!="/"){
            echo $str5;
        }
        if($str6!="/"){
            echo $str6;
        }
        if($str7!="/"){
            echo $str7;
        }
        if($str8!="/"){
            echo $str8;
        }
        if($str9!="/"){
            echo $str9;
        }

        echo "<hr>";
        
        echo "<b>Total: </b>";
        $p= @$price1+@$price2+@$price3+@$price4+@$price5+@$price6+@$price7+@$price8+@$price9;
        echo "<b>".$p." BDT"."</b>";
        
    
    ?>
    <div style="margin-top:30px">
        <button class="btn btn-info btn-block" type="submit">Book</button>
    </div>
    
  </div>
</div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  

  

  <footer id="footer">
    <p>Niteshwar, Giashnagar, Moulvi Bazar, Bangladesh. Phone: +880 86164100, Hotline: +880 1617005511</p>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>


