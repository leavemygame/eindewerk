<?php
    $servername = "localhost";
    $DB = "test";
    $user= "root";
    $password = "usbw";

    // verbinding met de databank maken
    $conn = new mysqli($servername, $user, $password,$DB);

    // verbinding checken
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        //print "Connection";
    }
?>