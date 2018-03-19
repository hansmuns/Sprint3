<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>myage</title>

    <style>
        #teskt{
            text-align: center;
            font-family: Palatino Linotype, Book Antiqua, Palatino, serif ;
            font-size: 18pt;
            border:5px solid red;
            width: 40%;
            border-radius: 10px;
            background-color: lightyellow;
            height:60%;
            position:absolute;
            top:20%;
            left:30%;
        }
    </style>
</head>
<body>
<div id="teskt">
<h1>Mijn leeftijd</h1>

<?php
$geboortedatum = new DateTime('2001-03-06 02:00:00');
$vandaag = new DateTime("now");
$interval = $geboortedatum->diff($vandaag);
$weken = round($interval->format('%a') / 7);
$maanden = (($interval->format('%y') * 12) + $interval->format('%m'));
$dagen = $interval->format('%a');
$uren = $dagen * 24;
$minuten = $uren * 60;
$seconden = $minuten * 60;
echo "Aantal maanden oud: ". $maanden;
echo "<br>Aantal weken oud: ". $weken;
echo "<br>Aantal dagen oud: ". $dagen;
echo "<br>Aantal uren oud: ". $uren;
echo "<br>Aantal minuten oud: ". $minuten;
echo "<br>Aantal seconden oud: ". $seconden;
?>
</div>
</body>
</html>

