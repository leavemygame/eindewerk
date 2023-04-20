
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
    // controleer de databank: mag de gebruiker inloggen?
    //SELECT aanvullen
    $query = "SELECT Username, 'Password' FROM Inloggegevens WHERE Username = '$Username' AND Password = '$Password'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);
        
    if ($count == 1)//is er een overeenkomstig record in de databank 
    {//je bent ingelogd
          session_start();
          $_SESSION["ingelogd"]="ok";
          print "JE BENT INGELOGD";
          header("location:welkom.php");
    }
    else//je bent niet ingelogd, foutieve gegevens
    {
        header('Location: login.php?message="De gegevens zijn niet correct."');   
    }

}




?>