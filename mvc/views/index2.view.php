<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="../cod/index.php">
  <input type="text" name="nume"><br>
  <input type="text" name="pre" ><br>
  <input type="submit" >
</form> 
<br>
<?= $afiseaza;?>
<br>
<?php
foreach($vector as $element) {
  echo "<li>$element</li>";
}
?>
<?php foreach($assoc as $k => $v) {
  echo "<li>$k este $v</li>";
}
?>
</body>
</html>