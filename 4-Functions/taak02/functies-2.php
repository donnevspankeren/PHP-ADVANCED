<DOCTYPE! html>
<html>
<head>

</head>
<body>
    <?php

    function rekenUit($getal1, $getal2, $getal3){
        $uitkomst = $getal1 + $getal2 + $getal3;
        return $uitkomst;
    }
    $antwoord= rekenUit(1,2,3);
    echo "1, 2 en 3 bij elkaar opgetelt = $antwoord"."<br>";
    $antwoord= rekenUit(4,5,1);
    echo "4, 5 en 1 bij elkaar opgetelt = $antwoord"."<br>";
    $antwoord= rekenUit(10,23,3);
    echo "10, 23 en 3 bij elkaar opgetelt = $antwoord";


   
   
    ?>
</body>





</html>