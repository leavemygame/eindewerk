
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afspraak maken</title>
   <!-- <link rel="stylesheet" media="screen and (min-width:1500px)" href="full screen.css"> -->
   <link rel="stylesheet" media="screen and (max-width:1200px)" href="phone.css">
   <link rel="stylesheet" media="screen and (min-width:1200px) and (max-width:2000px)" href="Tablet.css">
</head>

<script>
    function afspraak()
    {
        var name = document.getElementById('naam').value;
        var voornaam = document.getElementById('Voornaam').value;
        var dag = document.getElementById('dag').value;
        var uur = document.getElementById('uur').value;
        var merk = document.getElementById('merk wagen').value;
        alert( name + ' ' + voornaam + " je afspraak staat op " + dag + " om " + uur + ' en u rijdt met een ' + merk);
    }
</script>
<body>
    <div class="logo">
        <a href="homepagina.html"><img src="afbeeldingen/Knipsel_garage_50.png" alt="logo"></a>

</div>
<div class="navigatiebalk">
        <a href="infopagina.html">Info</a>
        <a href="contactpagina.html">Contact</a>
        <a href="afspraak maken.php">Afspraak maken</a>
        <a href="carrosserie.html">Carrosserie</a>
        <a href="interieur.html">Interieur</a>
        <a href="login.php">Login</a>

    </div>

<br>
<div class="info">   
<h1>Garage Degroote</h1>
<hr>

    <div id="mededelingafspraakmaken">
         Zoals je al weet hebben we om ons werk overzichtelijker te maken, besloten om onze opdrachten in 2 groepen te verdelen, namelijk:
        <ul>
            <li>Tijdinnemende opdrachten </li>
            <li>Minder-tijdinnemende opdrachten</li>
        </ul>

        Natuurlijk kan je enkel op deze pagina zijn voor tijdinnemde opdrachten zoals:
        <ul>
            <li>Groot onderhoud</li>
            <li>Klein onderhoud</li>
            <li><a href="carrosserie.html">Carroserie</a></li>
            <li><a href="interieur.html">Interieur</a></li>
            <li>Keuringcheck/naar keuring gaan</li>
            <li>...</li>
        </ul>
    </div>

    <?php 
 session_start();
if ($_SESSION["ingelogd"]=="ok")
{
    print("ingelogd");

    ?>

    <div id="afspraakmaken">
<table border="3" width="500px" height="auto">
<form id="afspraakformulier">
<tr>
    <td><label for="naam">Naam: </label></td>
    <td><input type="text" name="naam" id="naam"></td>
</tr>
<tr>
    <td><label for="Voornaam">Voornaam: </label></td>
    <td><input type="text" name="Voornaam" id="Voornaam"></td>
</tr>
<tr>
    <td><label for="dag">Welke dag? </label></td>
    <td><input type="date" name="dag" id="dag"></td>
</tr>
<tr>
    <td><label for="uur">Rond welk uur? </label></td>
    <td><input type="time" name="uur" id="uur"></td>
</tr>
<tr>
    <td><label for="merk wagen">Welk automerk? </label></td>
    <td><input type="text" name="merk wagen" id="merk wagen"></td>
</tr>

<tr>
    <td colspan="2" align="center"><button onclick="afspraak()">afspraak maken</button></td>
</tr>

</form>
</table>
</div>
<?php
}
else
{
   
}   
?>




<div id="blok3">
    <hr>
 <div id="infopaginainfo3">
     
    
         <h3 id="contactmiddelen">Contacteer ons</h3>
         <p> Je kan ons <a href="contactpagina.html">contacteren</a> via:              <br>
                telefoon : 0412345678                    <br>
                e-mail : garagedegroote@outlook.com      <br>
                messenger : garage degroote              <br>
                ... 
                 <br>
                Wij geven op alle kanalen een antwoord binnen de 30min, per telefoon krijg je een antwoord binnen de 5 min. 
         </p>      

</div>
<div id="openingsuren">
    <table border="1" >
        <tr>
            <th colspan="2"> openingsuren</th>
        </tr>
        <tr>
            <td>maandag</td>
            <td rowspan="5">8u-18u</td>
        </tr>
        <tr>
            <td>dinsdag</td>
            
        </tr>
        <tr>
            <td>woensdag</td>
            
        </tr>
        <tr>
             <td>donderdag</td>
             
         </tr>
         <tr>
             <td>vrijdag</td>
             
         </tr>
         <tr>
             <td>zaterdag</td>
             <td>8-12u</td>
         </tr>
         <tr>
             <td>zondag</td>
             <td>12-8u</td>
         </tr>
    </table>
</body>
</html>