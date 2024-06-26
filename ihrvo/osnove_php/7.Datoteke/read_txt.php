<?php

const FILE_PATH = __DIR__ . '/podaci/polaznfici.txt';

try {

    if (!file_exists(FILE_PATH)) {
      throw new Exception("File doesn't exist: ". FILE_PATH, 1);
        
    }

    if (is_dir(FILE_PATH)) {
        throw new Exception("This is not a file: ". FILE_PATH, 1);
          
      }

    $pointer = fopen(FILE_PATH, 'r');
    if ($pointer === false) {
        throw new Exception("Unable to open the file: ". FILE_PATH, 1);
    }

    if (false !== $pointer) {
        while (false !== $line = fgets($pointer)) {
            echo $line;
        }
        fclose($pointer);
    }
    else {
        echo 'Unable to open the file.';
    }
} catch (\Throwable $th) {
   // throw $th;
    echo $th->getMessage();
}


