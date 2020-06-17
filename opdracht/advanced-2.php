<DOCTYPE! html>
<html>
<head>

</head>
<body>
    <table>
        <tr>
            <th>Voornaam</th>
            <th>Leeftijd</th>
            <th>Woonplaats</th>
            <th>Sport</th>
            <th>Opleiding</th>
        </tr>
        <tr>
            <?php
                $gegevens= array("voornaam"=> "donne", "leeftijd"=> 17, "woonplaats"=>"De Kwakel", "Sport"=>"Voetbal", "Opleiding"=> "Applicatie ontwikkelaar");
                foreach ($gegevens as $key => $value){
                    echo "<td>"$value["voornaam"]"</td>".
                    "<td>"$value["leeftijd"]"</td>".
                    "<td>"$value["woonplaats"]"</td>".
                    "<td>"$value["Sport"]"</td>".
                    "<td>"$value["Opleiding"]"</td>";
                }
            ?>
        </tr>
    </table>


</body>


</html>