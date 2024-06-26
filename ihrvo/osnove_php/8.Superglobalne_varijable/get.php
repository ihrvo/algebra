<?php
echo '<pre>';
var_dump($_REQUEST);
var_dump($_POST);
var_dump($_GET);
echo '</pre>';
?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form>
  <label for="name">Ime:</label><br>
  <input type="text" id="first_name" name="first_name" placeholder="John"><br>
  <label for="last_name">Prezime:</label><br>
  <input type="text" id="last_name" name="last_name" placeholder="Doe"><br><br>
  <input type="submit" value="Pošalji">
</form> 

</body>
</html>
