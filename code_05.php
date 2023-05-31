<?php

//Цикл

for ($i = 0; $i <= 20; $i++) {
    echo $i . " ";
}
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

for ($col = 'A'; $col !== 'AA'; $col++) {
    echo $col . " ";                                //A B C D E F G H I J K L M N O P Q R S T U V W X Y Z
}
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

//вывод цикла
for ($i = 50; $i <= 100; $i = $i + 10) {
    if ($i === 80) {
        break;
    }
    echo $i . " ";
}

echo PHP_EOL;

//пропустить итерацию цикла
for ($i = 50; $i <= 100; $i = $i + 10) {
    if ($i === 80) {
        continue;
    }
    echo $i . " ";
}

echo PHP_EOL;

//Накопление потом вывод

$out = '';
for ($i = 50; $i <= 100; $i = $i + 10) {
    $out .= $i . " ";
}
echo $out, "\n";

//сумма

$sum = 0;

for ($i = 10; $i <= 15; $i++) {
    $sum += $i;
}
echo $sum, "\n";

//произведение

$p = 1;
for ($i = 1; $i <= 5; $i++) {
    $p *= $i;
}
echo $p, "\n";
