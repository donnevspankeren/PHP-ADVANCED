
<select>
    <option> welke klas zit jij?</option>
    <?php     
    $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
    foreach($klassen as $klas){
    
    ?>
    <option><?php echo $klas; ?> </option>
    <?php } ?>
</select>
<br>
<input type="submit">
<br>





<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
foreach($klassen as $value){
    echo $value."<br>";
}
?>