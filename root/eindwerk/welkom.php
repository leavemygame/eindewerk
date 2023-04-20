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
    <link rel="stylesheet" media="screen and (min-width:1500px)" href="full screen.css">
    <link rel="stylesheet" media="screen and (max-width:600px)" href="phone.css">
    <link rel="stylesheet" media="screen and (min-width:600px) and (max-width:1500px)" href="Tablet.css">
</head>
<body>
<div class="logo">
        <a href="homepagina.html"><img src="afbeeldingen/Knipsel_garage_50.png" alt="logo"></a>
    </div>

    <h1>Garage Degroote</h1>
    <hr>
    hello
</body>
</html>