<?php 
session_start();

if ($_SESSION["ingelogd"]=="ok")
{
    // print "Welkom op deze homepage<br><br>";
    print "<form action='uitloggen.php' method='post'>";
    // print "<input type='submit' name='uitloggen' value='UITLOGGEN'>";
    print "</form>";
    
}
else
{
    header("location:login.php?message=Je bent niet ingelogd!");
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <!-- <link rel="stylesheet" media="screen and (min-width:1500px)" href="full screen.css"> -->
    <link rel="stylesheet" media="screen and (max-width:1200px)" href="phone.css">
    <link rel="stylesheet" media="screen and (min-width:1200px) and (max-width:2000px)" href="Tablet.css">
</head>



  

<body>
<   <div class="logo">
        <a href="homepagina.html"><img src="afbeeldingen/Knipsel_garage_50.png" alt="logo"></a>
    </div>
</div>
<div class="navigatiebalk">
        <a href="infopagina.html">Info</a>
        <a href="contactpagina.html">Contact</a>
        <a href="afspraak maken.php">Afspraak maken</a>
        <a href="carrosserie.html">Carrosserie</a>
        <a href="interieur.html">Interieur</a>
        <a href="login.php">Login</a>

    </div>

    <div class="h1infopagina">
    <h1>Garage Degroote </h1>
    <hr>
     </div>

     <form action="update.php" method="POST" style="border: 2px solid black">
        <legend>Zie hier al je gegevens</legend>

        <br>
        <label for="naam" id="name" readonly>Naam</label>
        <input type="text" id="name" name="naam" value="<?php echo $_SESSION['naam']?>">
        <br>
        <label for="voornaam" id="voornaam" readonly>voornaam</label>
        <input type="text" id="voornaam" name="voornaam" value="<?php echo $_SESSION['first_name']?>">
        <br>
        <label for="auto" id="auto">automerk</label>
        <input type="text" id="auto" name="automerk" value="<?php echo $_SESSION['car']?>">
        <br>
        <label for="automodel" id="automodel">automodel</label>
        <input type="text" id="automodel" name="automodel" value="<?php echo $_SESSION['carmodel']?>">
        <br>
        <label for="adres" id="adres">adres</label>
        <input type="text" id="adres" name="adres" value="<?php echo $_SESSION['adresse']?>">

        <button onclick="update()">update gegevens</button>
     </form>
     
     <form action="afspraken">
        <legend>afspraken</legend>
       
                
           
            <label for="dag">Welke dag? </label>
            <input type="date" name="dag" id="dag" value="<?php echo $_SESSION['dag']?>">
           
            <label for="uur"> welk uur? </label>
            <input type="time" name="uur" id="uur" value="<?php echo $_SESSION['uur']?>">
          
            <label for="merk wagen">Welk auto? </label>
           <input type="text" name="merk wagen" id="merk wagen" value="<?php echo $_SESSION['automerk']?>"> 
           
     </form>
    <ul>
       
        <li>account wijzigen, hier adres of auto wijzigen</li>
        <li>afpraken raadplegen, hierbinnen afspraken maken + aanpassen</li>
        <li></li>
    </ul>

    <?php 
    // function update(){
    //     include_once("connect.php");
    //     if (isset($_SESSION["Username"]) && isset($_SESSION["Password"]) && isset($_POST["naam"]) && isset($_POST["voornaam"])&& isset($_POST["automerk"])&& isset($_POST["automodel"])&& isset($_POST["adres"])) {
    //         $Username = $_SESSION["Username"];
    //         $Password = $_SESSION["Password"];
    //         $naam = $_POST["naam"];
    //         $voornaam = $_POST["voornaam"];
    //         $automerk = $_POST["automerk"];
    //         $model = $_POST["automodel"];
    //         $adres = $_POST["adres"];
            
    //         $query ="UPDATE Inloggegevens set naam='$naam', voornaam='$voornaam', automerk='$automerk', automodel= '$model', adres='$adres' WHERE Username = '$Username' AND Password = '$Password'";
            
                
    //         $result = mysqli_query($conn, $query);
            
            
    //         if($conn->query($query)===true){
    //             echo "record updated succesfully";
    //         }
            
            
    //         $conn->close();
    //     }

    // }
    
    ?>
</body>
</html>