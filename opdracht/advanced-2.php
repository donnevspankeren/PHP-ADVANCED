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
                function maakRijTH($key,$value){
                    echo "<th style=\"color:$_POST[tekstKleur];padding:$_POST[padding];border:$_POST[border];\">$key</th>";

                }
                foreach ($gegevens as $key => $value){
                    maakRijTH($key, $value);
                }
               
            ?>
        </tr>
        <tr>
            <?php
            function maakRijTD($key,$value){
                echo "<td style=\"color:$_POST[tekstKleur];padding:$_POST[padding];border:$_POST[border];\">$value</td>";

            }
                $gegevens= array("voornaam"=> "donne", "leeftijd"=> 17, "woonplaats"=>"De Kwakel", "Sport"=>"Voetbal", "Opleiding"=> "Applicatie ontwikkelaar");
                foreach ($gegevens as $key => $value){
                    maakRijTD($key,$value);
                }
                
            ?>
        </tr>
    </table>

</body>


</html>