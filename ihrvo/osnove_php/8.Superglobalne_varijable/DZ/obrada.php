<?php

$file = $_FILES['datoteka']['name'];

$uploadDir = __DIR__ . '/uploads';

if ($file) { 

        if (is_dir($uploadDir) === false) {
            mkdir($uploadDir);
        }

        $vrsta_datoteke = substr($file, strrpos($file, '.') );
        // die($vrsta_datoteke);

        switch ($vrsta_datoteke) {
            case '.jpg':
            case '.jpeg':
            case '.tiff':
            case '.gif':
            case '.bmp':
                // die(var_dump($_FILES));
                $file = $_FILES['datoteka']['name'];
                $fileName = $uploadDir . '/' . $file;
                
                if (move_uploaded_file($_FILES['datoteka']['tmp_name'], $fileName)) {

                    header('Location: obrazac.php?datoteka=file_spremljen');

                }

                break;
            
            default:
            header('Location: obrazac.php?datoteka=nije_slika');
                break;
        }

} else {
    header('Location: obrazac.php?datoteka=ne_postoji');
}