<?php 
   
        include_once("connect.php");
        
     session_start();
        if (isset($_SESSION["Username"]) && isset($_SESSION["Password"]) && isset($_POST["naam"]) && isset($_POST["voornaam"])&& isset($_POST["automerk"])&& isset($_POST["automodel"])&& isset($_POST["adres"])) {
            
            echo "hey";
            $Username = $_SESSION["Username"];
            $Password = $_SESSION["Password"];
            $naam = $_POST["naam"];
            $voornaam = $_POST["voornaam"];
            $automerk = $_POST["automerk"];
            $model = $_POST["automodel"];
            $adres = $_POST["adres"];
            $userId = $_SESSION["UserID"]

            $query ="UPDATE Inloggegevens set naam ='".$naam."', voornaam='".$voornaam."', automerk='".$automerk."', automodel= '".$model."', adres='".$adres."' WHERE UserID = '".$userId."'";
            $_SESSION["automerk"]=$automerk ;
            
                
            //$result = mysqli_query($conn, $query);
            
            echo "if";
            if($conn->query($query)===true){
                echo "record updated succesfully";
                $_SESSION["automerk"]=$automerk ;
            } else {
                echo "failed";
            }
            // $_SESSION["automerk"]=$automerk ;
            // $_SESSION["automerk"]=$automerk ;
            //   $_SESSION["automerk"]=$automerk ;
            //   $_SESSION["automerk"]=$automerk ;
              

            $conn->close();
        

    }
    
    ?>
