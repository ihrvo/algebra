<?php

echo 'FOR petlja<br>';

for ($i=0; $i <= 10; $i++) { 
    # izraz za izvršavanje
    echo "$i ";
}

echo '<br>';

for ($i=20; $i >= 10; $i--) { 
    # izraz za izvršavanje
    echo "$i ";
}

echo '<br>BREAK<br>';

for ($i=0; $i <= 10; $i++) { 
    # izraz za izvršavanje
    echo "$i ";
    if ($i === 5) {
        echo "Broj 5 je pronađen";
        break;
    }
    }

echo '<br>CONTINUE<br>';

    for ($i=0; $i <= 10; $i++) { 
    # izraz za izvršavanje
    if ($i === 5) {
        continue;
    }
    echo "$i ";
    }

echo '<br>DVOSTRUKA PETLJA<br>';

for ($i=0; $i <= 10; $i++) { 
    if ($i === 0) echo "i = $i, "; else echo "i = $i, <br>";
    for ($j=0; $j <= 10; $j++) { 
        # izraz za izvršavanje
        echo "j = $j, ";
    }
}

echo '<br>iz Array-<br>';

$a = count($names);
for ($i=0; $i < $a; $i++) { 
    if ($i < ($a-1)) {
    echo "$names[$i], ";
}
else { echo "$names[$i] ";}
}