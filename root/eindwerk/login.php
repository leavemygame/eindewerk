<?php
if (isset($_GET["message"]))
{
    print $_GET["message"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inloggen</title>
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

    <br><br>
    <div id="LOGIN">
    Wil je:
    <ul>
        <li>je afspraken raadplegen</li>
        <li>accountwijzigingen aanbrengen</li>
        <li>...</li>
    </ul>
    <br>
    Dan log je best hier in:
 
    
<form action="controleer.php" method="post">
    Gebruikersnaam: <input type="text" name="gebruiker"><br>
    Paswoord: <input type="text" name="paswoord"><br>
    <input id ="submit" type="submit" name="login" value="LOGIN">
</form>

<form action="uitloggen.php" method="post">
    <input type="submit" name="uitloggen" value="UITLOGGEN">
</form>
    

    </div>
</body>
</html>