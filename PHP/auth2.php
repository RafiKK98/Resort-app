<?php
include '../DB/database.php';

$email = $_POST["email"];
$password = $_POST["password"];


$conn = OpenConnection();
$query = mysqli_query($conn,"SELECT * FROM customer_t WHERE mail_id = '$email'");

//$query2 = mysqli_query($conn,"SELECT * FROM admin_t WHERE mail_id = '$email'");

//$result = mysqli_query($conn, $query);
$array = array();

$emailArray = array();
$emailArray2 = array();
$m;

$p;

$n;
while($row = mysqli_fetch_assoc($query)){
    $array[] = $row;
    $m = $row['mail_id'];
    $p = $row['password'];
    $n = $row['name'];

}

$query2 = mysqli_query($conn, "INSERT INTO currentuser (mail_id, name) VALUES ('$m', '$n')");


if (!empty($m)){
    if($p == $password){
        session_start();
        $_SESSION['n'] = $n;

        header("Location: index2.php");    
        // header("Location: bookroom.php");   
        exit();
        
    }
}


CloseConnection($conn);

$conn = OpenConnection();
$query2 = mysqli_query($conn,"SELECT * FROM admin_t WHERE mail_id = '$email'");
$array2 = array();
$m2;
$p2;
;

while($row = mysqli_fetch_assoc($query2)){
    $array2[] = $row;
    $m2 = $row['mail_id'];
    $p2 = $row['password'];

}

echo $m2;
echo $p2;

if(!empty($m2)){
    if($p2 == $password){
        // session_start();
        // $_SESSION['n'] = $n;
        echo $p2;
        echo $m2;

        header("Location: ./admin.php");   
        exit();
        
    }
}

CloseConnection($conn);

?>