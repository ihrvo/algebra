<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function prettyPrint(array $print) {
    echo '<pre>';
    print_r($print);
    echo '</pre>';
}

function izbrojiSamoglasnike (string $input_txt) {
    $samoglasnici = ['a', 'e', 'i', 'o', 'u'];
    $zbroj_samoglasnika = 0;
    foreach ($samoglasnici as $samoglasnik) {
        $dodaj = substr_count(strtolower($input_txt), $samoglasnik);
        $zbroj_samoglasnika += $dodaj;
    }
    
    return $zbroj_samoglasnika;
}

function izbrojiSuglasnike (string $input_txt) {
    $samoglasnici = ['a', 'e', 'i', 'o', 'u'];
    $broj_slova = mb_strlen($input_txt, 'UTF-8');
    foreach ($samoglasnici as $samoglasnik) {
        $oduzmi = substr_count(strtolower($input_txt), $samoglasnik);
        $broj_slova -= $oduzmi;
    }
    
    return $broj_slova;
}

$words = file_get_contents('words.json');
$words_array = json_decode($words, true);




if(isset($_POST['rijec'])) {


    try {

        if ($rijec === '') {
            throw new Exception("Riječ nije unesena!", 1);
        }

        $rijec = $_POST['rijec'];

        $broj_slova = mb_strlen($rijec, 'UTF-8');

        $broj_samoglasnika = izbrojiSamoglasnike($rijec);
        echo 'Broj samoglasnika: ' . $broj_samoglasnika;

        $broj_suglasnika = izbrojiSuglasnike($rijec);
        echo 'Broj suglasnika: ' . $broj_suglasnika;

        $words_array[] = [
            "rijec" => $rijec,
            "broj_slova" => $broj_slova,
            "broj_suglasnika" => $broj_samoglasnika,
            "broj_samoglasnika" => $broj_suglasnika
        ];

        file_put_contents('words.json', $words_array);
    
    
    } catch (\Throwable $th) {
        echo '<p>' . $th->getMessage() . '</p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcijalni ispit</title>
</head>
<body>
    <?php

        // prettyPrint($words_array);

    ?>

    <div style="float:left; width:50%;">

        <form method="POST">
            <label for="rijec">Upišite riječ:</label>
            <input type="text" name="rijec">
            <input type="submit" value="Pošalji">
        </form>

    </div>
    <div style="float:left; width:50%;">

    <table border="1">
        <thead>
            <th>Riječ</th>
            <th>Broj slova</th>
            <th>Broj suglasnika</th>
            <th>Broj samoglasnika</th>
        </thead>
        <tbody>
            <?php
            foreach($words_array as $word) {
                echo '<tr>';
                echo '<td>' . $word['rijec'] . '</td>';
                echo '<td>' . $word['broj_slova'] . '</td>';
                echo '<td>' . $word['broj_suglasnika'] . '</td>';
                echo '<td>' . $word['broj_samoglasnika'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    </div>
    
</body>
</html>