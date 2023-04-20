<?php
if (isset($_GET["message"]))
{
    print $_GET["message"];
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="controleer.php" method="post">
    Gebruikersnaam: <input type="text" name="gebruiker"><br>
    Paswoord: <input type="text" name="paswoord"><br>
    <input id ="submit" type="submit" name="login" value="LOGIN">
</form>

<form action="uitloggen.php" method="post">
    <input type="submit" name="uitloggen" value="UITLOGGEN">
</form>
    
</body>
</html>