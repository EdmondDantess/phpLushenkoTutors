<?php

require_once './utility.php';

cls('array_push');
$t = [22, 33, 44];
print_r($t);

$res = array_push($t, 55, 66);
print_r($t);
echo $res, "\n";  // 5 получим число элементов в массиве

cls('array pop');
$t = [22, 33, 44];
$res = array_pop($t);
print_r($t);
echo $res, "\n"; // 44 получим удалённый элемент

cls('array_unshift');
$t = [22, 33, 44];
$res = array_unshift($t, 55); //добавили в начало
print_r($t);
echo $res, "\n"; // 4 получим число элементов в массиве

cls('array_shift');
$t = [22, 33, 44];
$res = array_shift($t);
print_r($t);
echo $res, "\n"; // 22 получим удалённый элемент

cls('in_array');
$t = [22, 33, 44];
$res = in_array(33, $t);  // возвращает либо true или false, 3 аргумент это поиск по строгому сравнению по умолчанию стоит false

print_r($t);
var_dump($res);

cls('array_search');
$t = [22, 33, 44, 55];
$res = array_search(44, $t); //вернёт индекс массива, если не найдено то вернёт false, 3 аргумент это поиск по строгому сравнению по умолчанию стоит false

var_dump($res);

cls('array_unique');
$t = [22, 33, 44, 33, 123, 33];
$res = array_unique($t);       //верёнт массив без дубликатов, дубликаты ищутся по нестрогому поиску
print_r($res);

cls('array_filter');
$t = [100, 22, 33, 44, 55, 66, 77, 88, 99];

function more ($item)
{
    return $item > 60;
}

$res = array_filter($t, 'more');  // игдексы элементов мы получим старые
//$res = array_filter($t, function more($item)
//{
//    return $item > 60;
//});  // запись эквивалентна строке 57
print_r($res);

cls('array_map');

$t = [22, 33, 44];
$res = array_map(function ($item) {
    return $item + 2;
}, $t);  // колбэк функцию можно вынести и вписать её имя в строковом формате как на 57 строке
print_r($res);

