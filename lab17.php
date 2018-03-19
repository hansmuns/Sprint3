<!DOCTYPE html>
<html lang="nl">

<head>

    <meta http-equiv="Content-Type"
          content="text/html";
          charset=" UTF-8" />
    <style>
        #formulier{
            height:400px;
            width: 250px;
            background: linear-gradient(red, greenyellow);
        }
        input{
            margin:6px;
            border-radius: 5px;
        }
        .knop{
            background: linear-gradient(red, greenyellow);

        }
    </style>

</head>
<body>
<div id="formulier">
<form method="GET">

    <input type="text" name="voornaam" placeholder="Voornaam"><br>
    <input type="text" name="achternaam" placeholder="Achternaam"><br>
    <input type="text" name="geboortedatum" placeholder="Geboortedatum"><br>
    <input type="text" name="adres" placeholder="Adres"><br>
    <input type="text" name="postcode" placeholder="Postcode"><br>
    <input type="text" name="plaats" placeholder="Plaats"><br>
    <input type="text" name="email" placeholder="E-mailadres"><br>
    <input type="text" name="wachtwoord" placeholder="Wachtwoord"><br><br>

    <p>Minderjarig: Ja<input type="radio" name="minderjarig">
        Nee <input type="radio" name="meerderjarig"></p>
    <input class="knop" type="submit" name="submit" value="Aanmelden">
    <input class="knop" type="reset" name="reset" value="Annuleren">
</form>
</div>
<?php
if(isset($_GET["submit"])) {
    $gebruiker = array(
        "voornaam" => $_GET["voornaam"],
        "achternaam" => $_GET["achternaam"],
        "geboortedatum" => $_GET["geboortedatum"],
        "adres" => $_GET["adres"],
        "postcode" => $_GET["postcode"],
        "plaats" => $_GET["plaats"],
        "email" => $_GET["email"],
        "wachtwoord" => $_GET["wachtwoord"],
    );
    if (isset($_GET["minderjarig"])) {
        $gebruiker["minderjarig"] = "Ja";
    } else {
        $gebruiker["minderjarig"] = "nee";
    }
    echo json_encode($gebruiker);
}
?>
</body>

</html>