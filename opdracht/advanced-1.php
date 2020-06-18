<DOCTYPE! html>
<html>
<head>

</head>
<body>
<form name="paginaEisen" action="advanced-2.php" 
method="post">
<select name="tekstKleur" id="tekstKleur">
    <option> Welke kleur wil je de tekst?</option>
    <?php     
    $kleuren = array("red", "blue", "green", "black", "brown");
    foreach($kleuren as $kleur){
    
    ?>
    <option><?php echo $kleur; ?> </option>
    <?php } ?>
</select>
<br>
<select name="BGkleur" id="BGkleur">
    <option> Welke achtergond kleur wil je op de pagina?</option>
    <?php     
    $kleuren = array("red", "blue", "green", "black", "brown");
    foreach($kleuren as $kleur){
    
    ?>
    <option><?php echo $kleur; ?> </option>
    <?php } ?>
</select>
<br>
<select name="border" id="border">
    <option> Welke border dikte wil je?</option>
    <?php     
    $borderDikte = array("1px solid black", "2px solid black", "3px solid black", "4px solid black", "5px solid black");
    foreach($borderDikte as $value){
    
    ?>
    <option><?php echo $value; ?> </option>
    <?php } ?>
</select>
<br>
<select name="padding" id="padding">
    <option> Welke padding dikte wil je voor de tabelcel?</option>
    <?php     
    $padding = array("10px", "15px", "20px", "25px", "30px");
    foreach($padding as $value){
    
    ?>
    <option><?php echo $value; ?> </option>
    <?php } ?>
</select>
<br>
<input type="submit" name="submit" value="verstuur">
</form>
</body>


</html>