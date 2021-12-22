<?php
include '../DB/database.php';

$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

$conn = OpenConnection();

$sql = "INSERT INTO contact_t (name, message, mail_id) VALUES ('$name','$comment', '$email')";
    $conn->query($sql);


        // session_start();
        // $_SESSION['n'] = "Message Sent Successfully";
    header("Location: contact.php");       
         exit();

CloseConnection($conn);
?>