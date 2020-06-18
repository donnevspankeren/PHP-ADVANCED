<DOCTYPE! html>
<html>
<head>

</head>
<body>
   <?php
    echo "<body style=background-color:$_POST[BGkleur]>";
   ?>
    <table>
       
        <tr>
            <?php
                $gegevens= array("voornaam"=> "donne", "leeftijd"=> 17, "woonplaats"=>"De Kwakel", "Sport"=>"Voetbal", "Opleiding"=> "Applicatie ontwikkelaar");
                foreach ($gegevens as $key => $value){
                   echo "<th style=\"color:$_POST[tekstKleur];padding:$_POST[padding];border:$_POST[border];\">$key</th>";
                }
               
            ?>
        </tr>
        <tr>
            <?php
                $gegevens= array("voornaam"=> "donne", "leeftijd"=> 17, "woonplaats"=>"De Kwakel", "Sport"=>"Voetbal", "Opleiding"=> "Applicatie ontwikkelaar");
                foreach ($gegevens as $key => $value){
                   echo "<td style=\"color:$_POST[tekstKleur];padding:$_POST[padding];border:$_POST[border];\">$value</td>";
                }
                
            ?>
        </tr>
    </table>

</body>


</html>