<?php

//прямоугольник
for ($k = 0; $k < 3; $k++) {
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
    echo "\n";
}
echo PHP_EOL;
//треугольник
for ($k = 0; $k < 5; $k++) {
    for ($i = 0; $i <= $k; $i++) {
        echo "*";
    }
    echo "\n";
}

echo PHP_EOL;

for ($i = 0; $i <= 10; $i++) {
    $t = $i * 7;
    echo "7 * $i = $t ", "\n";
}

for ($i = 0; $i < 5; $i++) {
    for ($k = 1; $k <= 10; $k++) {
        if ($i == 0 and $k < 10) echo '0';
        echo 10 * $i + $k, " ";
    }
    echo "\n";
}

echo PHP_EOL;

//трапеция
for ($k = 5; $k >= 0; $k--) {
    for ($i = 0; $i <= 20; $i++) {
        if ($i <= $k + 3 or $i >= 20 - $k - 3) echo "_";
        else echo "*";
    }
    echo "\n";
}