<?php

//==============Типы данных===================

//целое число
$a = 55;
var_dump($a); //int

//дроби
$aa = 55.5;
var_dump($aa); //float
var_dump(.33); //float(0.33)
$aaa = .2 + .4;
var_dump($aaa === .6); //false (как в js)

//Булевы типы true и false
$b = true;
var_dump($b); //выведет bool(true)
echo $b; //выведет 1
echo PHP_EOL;

$b = false;
var_dump($b); //выведет bool(false)
echo($b); //не выведет

//строки
$a = 'this is string';
var_dump($a);
echo $a;
$l = strlen($a);  //покажет длину строки
echo PHP_EOL;
echo $l;
echo PHP_EOL;
echo $a . ' its concat'; // . символ для конкатенации

//====================Проверять тип данных==============
echo "\n\n\n Проверяем тип данных \n\n\n";

$a = 5;
//gettype()
echo gettype($a); //получим integer
echo PHP_EOL;
$a = 4.5;
echo gettype($a); //получим double
echo PHP_EOL;
$a = false;
echo gettype($a);//получим boolean
echo PHP_EOL;
$a = 'string string';
echo gettype($a);//получим string
echo PHP_EOL;
var_dump(gettype(5.5) === 'integer'); //получим bool(false) а еслибы вывод делалил через echo то результат не увидели бы!
var_dump(gettype(5.5) === 'double'); //bool(true)
echo gettype(5.5) === 'double'; // получим 1

//====================Преобразование типов==============
echo "\n\n\n ================Преобразование типов============== \n\n\n";

$a = 5.0;
echo gettype($a); //получим double
echo PHP_EOL;

$b = $a * $a;
echo $b; // 25
echo PHP_EOL;
var_dump($b); //float(25)
echo gettype($b); //double

//====================Округление==============
echo "\n\n\n ================Округление============== \n\n\n";

$a = 5.55;
echo PHP_EOL;
$b = round($a);
var_dump($b); //float(6)
echo $b; //6
echo PHP_EOL;
echo gettype($b); //double

//====================Проверка на тип==============
echo "\n\n\n ================Проверк на тип============== \n\n\n";
$a = 11;
echo is_integer($a); //1
echo PHP_EOL;
var_dump(is_int($a)); //true
var_dump(is_float($a)); //false
var_dump(is_bool($a)); //false
var_dump(is_string($a)); //false
