<DOCTYPE html>
<html>
    <head>
    </head> 
    <body>  
        <?php

        echo "voornaam is: ".$_POST["Voornaam"]."<br>".
            "Klas is: ".$_POST["Klas"]."<br>".
            "Leeftijd is: ".$_POST["Leeftijd"]."<br>".
            "Het adres is: ".$_POST["Adres"]."<br>".
            "De plaatsnaam is: ".$_POST["Plaatsnaam"]."<br>".
            "De favoriete muziekband is: ".$_POST["Muziekband"]."<br>".
            "je hebt het geslagd ".$_POST["gender"]." gekozen";

            echo "<body style= backgroundcolor:$_POST[\"Kleuren\"]></body>";
      
            
    
            
        ?>
    </body> 
</html>