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

     <form action="INFOWEERGEVEN" style="border: 2px solid black">
        <legend>Zie hier al je gegevens</legend>

        <label for="naam" id="name" readonly>naam</label>
        <input type="text" id="name">
        <br>
        <label for="voornaam" id="voornaam" readonly>voornaam</label>
        <input type="text" id="voornaam">
        <br>
        <label for="auto" id="auto">automerk</label>
        <input type="text" id="auto">
        <br>
        <label for="automodel" id="automodel">automodel</label>
        <input type="text" id="automodel">
        <br>
        <label for="adres" id="adres">adres</label>
        <input type="text" id="adres">
     </form>
     <form action="afspraken">
        <legend>afspraken</legend>
     </form>
    <ul>
       
        <li>account wijzigen, hier adres of auto wijzigen</li>
        <li>afpraken raadplegen, hierbinnen afspraken maken + aanpassen</li>
        <li></li>
    </ul>
</body>
</html>