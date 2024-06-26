<?php

// 1. Pročitajte podatke iz datoteke polaznici.json, te ih ispišite u HTML tablicu.
// 2. Dodajte novog polaznika u datoteku polaznici.json, te podatke iz nje ponovo ispišite.


// 1. Pročitajte podatke iz datoteke polaznici.json
const FILE_PATH = __DIR__ . '/podaci/polaznici.json';
$polaznici = json_decode(file_get_contents(FILE_PATH), true);
//print_r($polaznici);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ - Datoteke</title>
</head>
<body>
    <h3>Polaznici</h3>
    <table border="1">
        <thead>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godine</th>
            <th>Email</th>
            <th>Telefon</th>
        </thead>
        <?php // te ih ispišite u HTML tablicu.
        foreach ($polaznici as $key => $value) {
            echo "<tr>";
            if ($value['name'].$value['surname'] == "HrvojeIvančić") { // ako je korisnik Hrvoje već dodan izbriši ga kako bi se tablice razlikovale
                array_pop($polaznici);
            }
            else {
                foreach ($value as $key => $value) {

                    echo "<td>".$value."</td>";
            }
            }
            
            echo "</tr>";            
        }
    ?>
    </table>

    <?php  //2. Dodajte novog polaznika u datoteku polaznici.json
        $polaznici[] = [
            "name" => "Hrvoje",
            "surname" => "Ivančić",
            "age" => 41,
            "email" => "ihrvoje@gmail.com",
            "phone" => "0917539034"
        ];

        $polaznici = json_encode($polaznici);
        file_put_contents(FILE_PATH, $polaznici);
        $polaznici = json_decode(file_get_contents(FILE_PATH), true);
    ?>

    <h3>Polaznici s dodanim polaznikom</h3>
    <table border="1">
        <thead>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godine</th>
            <th>Email</th>
            <th>Telefon</th>
        </thead>
        <?php //te podatke iz nje ponovo ispišite.
        foreach ($polaznici as $key => $value) {
            echo "<tr>";
            foreach ($value as $key => $value) {
               echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
    
    
</body>
</html>
