<?php
  // session_start();
  // $var_name = $_SESSION['n'];

  include "../DB/database.php";
  
  $conn = OpenConnection();
  
  $result = mysqli_query($conn,"SELECT * FROM currentuser;");

  while($row = mysqli_fetch_assoc($result)) {
    $current_user_mail = $row['mail_id'];
    $current_user_name = $row['name'];
  }

  echo $current_user_mail."\n";
  echo $current_user_name;
  CloseConnection($conn);
?>