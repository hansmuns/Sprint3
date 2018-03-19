<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Datediff</title>
</head>
<body>
<form method="GET">

    <input type="date" name="date1">
    <input type="date" name="date2">
    <input type="submit" name="submit" value="Verzenden">
</form>
<?php
if(isset ($_GET["submit"])) {


    $datum1 = new DateTime($_GET["date1"]);
    $datum2 = new DateTime($_GET["date2"]);
    $interval = $datum1->diff($datum2);
    $dagen = $interval->format('%a');
    echo $_GET["date1"];
    echo "<br>" . $_GET["date2"];
    echo "<br>Aantal dagen verschil: ". $dagen;
}
?>
</body>
</html>
