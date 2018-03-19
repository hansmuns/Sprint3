<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <form name="login"
              action=""
              method="GET">
            Gebruikersnaam:<br>
            <input type="text" name="user" /><br><br>
            <input type="submit" name="submit" value="inloggen"/>
        <?php
        if(isset($_GET["submit"] )&& isset($_COOKIE["gebruiker"])) {
        function welkom($gebruiker){
            if($_COOKIE["gebruiker"] == $gebruiker){
                echo "Hallo $gebruiker welkom terug.";
                }
                else{

                        setcookie('gebruiker', $gebruiker);
                        echo "Hallo " . $gebruiker . " u bent onze nieuwste gebruiker.";
                    }
                }
            welkom($_GET["user"]);
        }
        ?>
        </form>
    </body>
</html>