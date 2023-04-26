<?php
//zijn de velden ingevuld? via empty or isset

if (empty($_POST["gebruiker"]) OR (empty($_POST["paswoord"])))
{
    header('location: login.php?message="Vul alle gegevens in."');
}
else
{
    include_once("connect.php"); //once want je zal hier maar één keer de connectie maken

    $username = $_POST['gebruiker'];
    $password = $_POST['paswoord'];
    $passwordcheck = $_POST['checkpaswoord'];

    if ($password == $passwordcheck)
    {
    //controleer of de gebruikersnaam al bestaat
        $query = "SELECT Username FROM inloggegevens WHERE Username = '$username'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);

        if ($count == 0)//zorg dat een gebruiker uniek is, bestaat er al een gelijkaardig record?
        {
            $query = "INSERT INTO inloggegevens (Username,Password,Type) VALUES ($username,$password,2)";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));


            $query = "SELECT Username, 'Password' FROM inloggegevens WHERE Username='$username' and 'Password' = '$password'";
            $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
            $count = mysqli_num_rows($result);
            

            if ($count >= 1) // controleer of de insert into gelukt is (dubbele controle)
            {
                header('Location: registreer.php?message="Jouw account is toegevoegd."');
            }
            else
            {
                header('Location: login.php?message="Fout bij het aanmaken van jouw account. Probeer opnieuw."');
            }
        }
        else
        {
            header('Location: registreer.php?message="Jouw account bestaat al."');
        }
        mysqli_close($conn);
    }
    else
    {
        // wachtwoorden kloppen niet
    }

   
}



?>