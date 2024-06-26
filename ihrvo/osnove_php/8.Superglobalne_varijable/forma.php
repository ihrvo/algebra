<?php

$podaci = $_POST;

//var_dump($podaci);

if(!empty($podaci)) {
    $ime = $podaci['first_name'];
    $prezime = $podaci['last_name'];
    echo "Vaše ime je $ime, a prezime $prezime";
}

?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form method="POST">
  <label for="name">Ime:</label><br>
  <input type="text" id="first_name" name="first_name" placeholder="John"><br>
  <label for="last_name">Prezime:</label><br>
  <input type="text" id="last_name" name="last_name" placeholder="Doe"><br><br>
  <input type="submit" value="Pošalji">
</form> 

</body>
</html>