<?php
 include_once("connect.php");
 session_start();

 

$query =
 "INSERT INTO 
 Inloggegevens (naam,voornaam,auto,automodel,adres)
  VALUES
(echo $_POST['naam'],
 echo $_POST['voornaam'],
 echo $_POST['auto'],
 echo $_POST['automodel'],
 echo $_POST['adres']
 )
  WHERE Username = '$Username' AND Password = '$Password'";
$result = mysqli_query($conn, $query);
alert("updated");
// $naam = $_SESSION['naam'];
// $voornaam = $_SESSION['naam'];
// $auto = $_SESSION['naam'];
// $naam = $_SESSION['naam'];
// $naam = $_SESSION['naam'];

?>