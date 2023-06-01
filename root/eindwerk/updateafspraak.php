<?php
    include_once("connect.php");
    if (isset($_POST["naam"]) && isset($_POST["Voornaam"]) && isset($_POST["automerk"])) {
        session_start();
        $naam = $_POST["naam"];
        $automerk = $_POST["automerk"];
        $UserID = $_SESSION["UserID"];
        $tijdstip = $_POST["uur"];
        $datum = $_POST["dag"];

        $query ="INSERT INTO afspraken(UserID,automerk,tijdstip,datum) VALUES ('".$UserID."','".$automerk."','".$tijdstip."','".$datum."')";
    
        
        // $result = mysqli_query($conn, $query);
        
        
        if($conn->query($query)===true){
            echo '<script>alert("Afspraak gemaakt")</script>';
            $_SESSION["automerk"]=$automerk ;
            $_SESSION["uur"]=$tijdstip ;
            $_SESSION["dag"]=$datum ;
        }

        

        $conn->close();
    }



?>