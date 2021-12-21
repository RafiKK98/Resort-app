<?php
include '../DB/database.php';

$email = $_POST["email"];
$password = $_POST["password"];


$conn = OpenConnection();
$query = mysqli_query($conn,"SELECT * FROM customer_t WHERE mail_id = '$email'");

//$result = mysqli_query($conn, $query);
$array = array();
$emailArray = array();
$m;
$p;
$n;
while($row = mysqli_fetch_assoc($query)){
    $array[] = $row;
    $m = $row['mail_id'];
    $p = $row['password'];
    $n = $row['name'];

}

if (! empty($m)){
    if($p == $password){
        session_start();
        $_SESSION['n'] = $n;

        header("Location: index2.php");       
        exit();
        
    }
}



// $array = array();
// $emailArray = array();
// $i = 0;
// while($row = mysqli_fetch_assoc($query)){

  
//   $array[] = $row;

  
//     $emailArray[$i] = $row['mail_id']; 
// $i++;
// }

// $count = 0;

// for($i = 0; $i<count($emailArray); $i++){
//     if($email == $emailArray[$i]){
//         $count++;
//     }
    
// }
// echo $count;

// if($count == 0){
    
//     $sql = "INSERT INTO customer_t (mail_id, password, name, phone_number, address) VALUES ('$email', '$password', '$name', '$number', '$address')";
    
//     if ($conn->query($sql) === TRUE) {
//         header("Location: login.php");
//         exit();
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// }


CloseConnection($conn);
?>