<?php

$s = "Twin Peaks";

echo "\n ==== Длина строк ======= \n\n";

echo strlen($s);

echo "\n ==== Перебор строки ======= \n\n";
$out = '';
for ($i = 0; $i < strlen($s); $i++) {
    $out .= $s[$i] . '-';
}
echo $out, "\n";
echo $s[1];

echo "\n ==== Реверс строки ======= \n\n";

$s2 = strrev($s);
echo $s2, "\n";

echo "\n ==== Поиск подстроки ======= \n\n";
$res = str_contains($s, 'ks'); // true, false
var_dump($res);
$res = str_contains($s, ''); // всегда true
var_dump($res);

echo "\n ==== Поиск строки - индекс ======= \n\n";
//находится первый индекс
//если не найдено возвращается false
$res = strpos($s, 'T');
echo $res, "\n";

// stripos - i означает игнор зависимости от регистра
$res = stripos($s, 'p');
echo $res;

echo "\n ==== Поиск с конца строки ======= \n\n";
$s = "Tswin Peaks";
$res = strripos($s, 's'); // ещё не зависит от регистра т.к. i
var_dump($res);
$res = strrpos($s, 'P'); // зависит от регистра!!! т.к. нету i
var_dump($res);

echo "\n ==== Изменение символа ======= \n\n";
$s = "Twin Peaks";
$s[4] = '_';
echo $s, "\n";

echo "\n ==== Преобразование регистров ======= \n\n";

$s = 'twin Peaks';
echo ucfirst($s), "\n";  //Первый символ в Uppercase
echo strtoupper($s), "\n";  //всё в  Uppercase
echo strtolower($s), "\n";  //всё в  Lowercase

echo "\n ==== Удаление пробелов ======= \n\n";

$s = '   Twin Peaks ';
echo trim($s), "\n"; //только справа и слева строки

echo "\n ==== Комментарии слэшами ======= \n\n";

$s4 = "It's P/eak \s";
$s5 = addslashes($s4); // экранируем опасные символы
var_dump($s5);

$s6 = stripslashes($s5); // разэкранировали опасные символы
var_dump($s6);

echo "\n ==== Комментирование спецсимволами ======= \n\n";
$s4 = '<span>Text</span>';
$s5 = htmlspecialchars($s4); //если не закомментить то браузер прочитает как разметку
var_dump($s5);

echo "\n ==== Удаляем теги ======= \n\n";
echo strip_tags($s4), "\n";

echo "\n ==== Форматирование выввода ======= \n\n";
$price = 12321.4325;
echo number_format($price, 2 ,'.', ','); //12_321.43 форматируем как хотим


echo "\n ==== Замена в строке ======= \n\n";

echo str_replace('bb', 'c', 'asdasvcbbsdbbsdb'); //asdasvccsdcsdb
