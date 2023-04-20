<?php 
session_start();

if ($_SESSION["ingelogd"]=="ok")
{
    print "Welkom op deze homepage<br><br>";
    print "<form action='uitloggen.php' method='post'>";
    print "<input type='submit' name='uitloggen' value='UITLOGGEN'>";
    print "</form>";
}
else
{
    header("location:login.php?message=Je bent niet ingelogd!");
}   
?>