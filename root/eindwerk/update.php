<?php 
    include_once("connect.php");

    session_start();
    if (isset($_SESSION["Username"]) && isset($_SESSION["Password"]) && isset($_POST["naam"]) && isset($_POST["voornaam"]) && isset($_POST["automerk"]) && isset($_POST["automodel"]) && isset($_POST["adres"])) {
        $Username = $_SESSION["Username"];
        $Password = $_SESSION["Password"];
        $naam = $_POST["naam"];
        $voornaam = $_POST["voornaam"];
        $automerk = $_POST["automerk"];
        $model = $_POST["automodel"];
        $adres = $_POST["adres"];
        $userId = $_SESSION["UserID"];

        $query = "UPDATE Inloggegevens SET naam = '".$naam."', voornaam = '".$voornaam."', auto = '".$automerk."', automodel = '".$model."', adres = '".$adres."' WHERE UserID = '".$userId."'";

        $_SESSION["automerk"] = $automerk;

        echo $query;
        
        if ($conn->query($query) === true) {
            echo "Record updated successfully";
            $_SESSION["automerk"] = $automerk;
        } else {
            echo "Update failed: " . $conn->error;
        }

        $conn->close();
    }
?>

