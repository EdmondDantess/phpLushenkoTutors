<?php

require_once './utility.php';

echo "\n\n\n ================== Массивы ==================\n";
$p = [22, 33, 44];
//var_dump($p);
print_r($p);

//как обратится к эл-му

echo $p[0], "\n";

// присвоить новое значение элементу массива
$p[0] = 0;
$p[3] = 55;
print_r($p);

$p[100] = 88;
print_r($p);

// удалить элемент из массива

unset($p[3]);
print_r($p);

cls('длина массива (count())');
echo "length: ", count($p), "\n";  // length: 4

$p[101] = 999;
echo "length: ", count($p), "\n";  // length: 5

cls('перебор массива');
//$out = '';
//for ($i = 0; $i < count($p); $i++) {             //так не правильно, только для массивов где всё идёт по порядку индексов
//    $out .= "$i -$p[$i] \n";
//}
//echo $out;

$out = '';
foreach ($p as $index => $item) {  // получаем  значения и индекс
    $out .= "$index - $item \n";
}
echo $out;

cls('Вывод через пробел');
$out = '';
foreach ($p as $item) {        // получаем только значения
    $out .= "$item ";
}
echo $out;

cls('Нахождение суммы элементов массива');
$t = [444, 555, 8, 9];
$t[100] = 777;
print_r($t);

$s = 0;
foreach ($t as $item) $s += $item;
echo $s, "\n";

cls('Нахождение максимального элемента массива');
$t = [444, 555, 8, 90000];
$el = $t[0];
foreach ($t as $item) if ($item > $el) $el = $item;
echo $el, "\n";

cls('push');
$t = [444, 555, 8, 888];
array_push($t, 66);
print_r($t);

cls('приёмы манипудяции');
//вывести элементы у которых  чётные индексы
$t = [444, 555, 8, 888, 12, 44, 66];
$temp = [];
foreach ($t as $index => $item) {
    if ($index % 2 === 0) array_push($temp, $item);
}
$t = $temp;
print_r($t);
