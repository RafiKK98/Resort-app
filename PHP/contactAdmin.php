<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Info</title>
    <link rel="stylesheet" href="../CSS/contactAdmin.css">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo" src="../Images/logo (1).png" style="height:30px;" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item l">
            <a class="nav-link active nav1 " aria-current="page" href="admin.php">Room Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active nav2" href="./contactAdmin.php">Contact Info</a>
          </li>

          
        </ul>
        <div class="d-flex">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            
            <li class="nav-item">
              <a class="nav-link active nav3" aria-current="page" href="../index.php">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  
      <div class="container">
            <?php
        include "../DB/database.php";
        $conn = OpenConnection();
  
        $result = mysqli_query($conn,"SELECT * FROM contact_t;");

        if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
      echo '<div class="card shadow p-3 mb-5 bg-white rounded">';
      echo '<h3>'.$row["name"].'</h3>';
      echo '<h5>'.$row["mail_id"].'</h5>';
      echo '<p>'.$row["message"].'</p>';
      echo '</div>';
  }
} else {
  echo "";
}


        CloseConnection($conn);
      ?>
      </div>
      
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>