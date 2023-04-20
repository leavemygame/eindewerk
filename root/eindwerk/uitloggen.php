<?php
   session_start();
   $_SESSION = array(); // lege array van de sessie maken
   session_destroy();
   header("Location: login.php"); //terug naar de inlog pagina
   exit; //en je header netjes afsluiten
 ?>