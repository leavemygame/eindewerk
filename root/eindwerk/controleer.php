
<?php
//zijn de velden ingevuld? via empty or isset

if (empty($_POST["gebruiker"]) OR (empty($_POST["paswoord"])))
{    
    header('Location: login.php?message="Vul alle gegevens in."');  
}
else
{
    include_once("connect.php"); //once want je zal hier maar één keer de connectie maken
    $Username = $_POST['gebruiker'];
    $Password = $_POST['paswoord'];
    /*
    $naam = $_POST['naam'];
    $voornaam = $_POST['voornaam'];
    $auto = $_POST['auto'];
    $automodel = $_POST['automodel'];
    $adres = $_POST['adres'];*/

    // controleer de databank: mag de gebruiker inloggen?
    //SELECT aanvullen
    $query = "SELECT Username, 'Password', naam,voornaam,auto,automodel,adres FROM Inloggegevens WHERE Username = '$Username' AND Password = '$Password'";
    
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
        
    if ($count > 0)//is er een overeenkomstig record in de databank 
    {//je bent ingelogd
          session_start();
            $row = mysqli_fetch_assoc($result);
          $_SESSION["ingelogd"]="ok";
          $_SESSION["Username"] = $row["Username"];
          $_SESSION["Password"] = $row["Password"];
          $_SESSION['naam'] = $row["naam"];
          $_SESSION['first_name'] = $row["voornaam"];
          $_SESSION['car'] = $row["auto"];
          $_SESSION['carmodel'] = $row["automodel"];
          $_SESSION['adresse'] = $row["adres"];
          print "JE BENT INGELOGD";
          header("location:welkom.php");
    }
    else//je bent niet ingelogd, foutieve gegevens
    {
        header('Location: login.php?message="De gegevens zijn niet correct."');   
    }

}




?>