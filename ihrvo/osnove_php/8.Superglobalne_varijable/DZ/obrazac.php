<!--
// 1.
// Kreirajte datoteku obrazac.php i u njoj kreirajte HTML obrazac za upload datoteke. Obrazac treba poslati podatke na obradu datoteci obrada.php.
// Kreirajte datoteku obrada.php i u njoj dohvatite datoteku te učinite sljedeće:
// Provjerite je li datoteka poslana
// Kreirajte novu mapu u koju ćete pohraniti datoteku
// Provjerite je li poslana datoteka slika
// Pohranite poslanu datoteku.
-->

<?php
if (isset($_GET['datoteka'])) {
    $file = $_GET['datoteka'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrazac</title>
</head>
<body>
        <?php

        try {
            if (isset($file) && $file === 'ne_postoji') {
                throw new Exception("Polje slika je obavezno.", 1);
                
            }
            if (isset($file) && $file === 'nije_slika') {
                throw new Exception("Datoteka mora biti slika.", 1);
                
            }
            if (isset($file) && $file === 'file_spremljen') {
                throw new Exception("Datoteka je prenesena.", 1);
                
            }
        } catch (\Throwable $th) {
            echo '<p>' . $th->getMessage() . '</p>';
        }

        ?>
        <form method="POST" action="obrada.php" enctype="multipart/form-data">

        <label for="input">Prenesi datoteku:</label><br>
        <input type="file" id="datoteka" name="datoteka">
        <br><br>
        <input type="submit" value="Prenesi">

        </form> 
    
</body>
</html>