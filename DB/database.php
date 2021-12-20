<?php

    // Open connection
    function OpenConnection()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "resortdb";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
        return $conn;
    }

    // Close connection
    function CloseConnection($conn)
    {
        $conn->close();
    }

?>