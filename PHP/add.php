<?php
include '../DB/database.php';
$price1 = $_POST["price1"];
$totalRoom1 = $_POST["totalRoom1"];
$totalRoom1 = (int)$totalRoom1;
$price1 = (int)$price1;

$price2 = $_POST["price2"];
$totalRoom2 = $_POST["totalRoom2"];
$totalRoom2 = (int)$totalRoom2;
$price2 = (int)$price2;

$price3 = $_POST["price3"];
$totalRoom3 = $_POST["totalRoom3"];
$totalRoom3 = (int)$totalRoom3;
$price3 = (int)$price3;

$price4 = $_POST["price4"];
$totalRoom4 = $_POST["totalRoom4"];
$totalRoom4 = (int)$totalRoom4;
$price4 = (int)$price4;

$price5 = $_POST["price5"];
$totalRoom5 = $_POST["totalRoom5"];
$totalRoom5 = (int)$totalRoom5;
$price5 = (int)$price5;

$price6 = $_POST["price6"];
$totalRoom6 = $_POST["totalRoom6"];
$totalRoom6 = (int)$totalRoom6;
$price6 = (int)$price6;

$price7 = $_POST["price7"];
$totalRoom7 = $_POST["totalRoom7"];
$totalRoom7 = (int)$totalRoom7;
$price7 = (int)$price7;

$price8 = $_POST["price8"];
$totalRoom8 = $_POST["totalRoom8"];
$totalRoom8 = (int)$totalRoom8;
$price8 = (int)$price8;

$price9 = $_POST["price9"];
$totalRoom9 = $_POST["totalRoom9"];
$totalRoom9 = (int)$totalRoom9;
$price9 = (int)$price9;

$room1 = "Superior King / Twin";
$room2 = "Premium King / Twin";
$room3 = "Villa Deluxe Queen";
$room4 = "Villa Deluxe King";
$room5 = "Villa Suite C";
$room6 = "Villa Suite B";
$room7 = "Villa Suite A";
$room8 = "Honeymoon Villa";
$room9 = "Presidential Villa";

$conn = OpenConnection();

$i = 0;
while($i < $totalRoom1){
    $sql = "INSERT INTO room_t (name, price) VALUES ('$room1',$price1)";
    $conn->query($sql);
    $i++;
}
echo $totalRoom1;
echo $i;
echo $price1;
echo $room1;

$i = 0;
while($i < $totalRoom2){
    $sql = "INSERT INTO room_t (name, price) VALUES ('$room2',$price2)";
    $conn->query($sql);
    $i++;
}

$i = 0;
while($i < $totalRoom3){
    $sql = "INSERT INTO room_t (name, price) VALUES ('$room3',$price3)";
    $conn->query($sql);
    $i++;
}

$i = 0;
while($i < $totalRoom4){
    $sql = "INSERT INTO room_t (name, price) VALUES ('$room4',$price4)";
    $conn->query($sql);
    $i++;
}

$i = 0;
while($i < $totalRoom5){
    $sql = "INSERT INTO room_t (name, price) VALUES ('$room5',$price5)";
    $conn->query($sql);
    $i++;
}

$i = 0;
while($i < $totalRoom6){
    $sql = "INSERT INTO room_t (name, price) VALUES ('$room6',$price6)";
    $conn->query($sql);
    $i++;
}

$i = 0;
while($i < $totalRoom7){
    $sql = "INSERT INTO room_t (name, price) VALUES ('$room7',$price7)";
    $conn->query($sql);
    $i++;
}

$i = 0;
while($i < $totalRoom8){
    $sql = "INSERT INTO room_t (name, price) VALUES ('$room8',$price8)";
    $conn->query($sql);
    $i++;
}

$i = 0;
while($i < $totalRoom9){
    $sql = "INSERT INTO room_t (name, price) VALUES ('$room9',$price9)";
    $conn->query($sql);
    $i++;
}


 header("Location: admin.php");       
         exit();
echo "<script>alert('Record save successfully');</script>";

CloseConnection($conn);
?>