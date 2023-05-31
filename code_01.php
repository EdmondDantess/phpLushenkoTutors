<?php
// Комментарий

echo 4;
echo "\n";  // Важно "" 
echo(4);
echo PHP_EOL;
echo '5';
echo "\n";
echo 4, 5, 'Hello';

// ===========Вывод переменных ========
echo "\n==========Вывод переменных======== \n";
$foo = 6;
$bar = 7;
echo $bar + $foo;
echo PHP_EOL;
echo $bar % $foo;
echo PHP_EOL;
$s1 = 'Hi';
$s2 = 'Test';

echo "\n конкатенация строк!!!!!  \n";
echo $s1 . $s2;
echo PHP_EOL;
echo 33 . ' is Test';
echo PHP_EOL;
echo '15 + 7 = ' . ($foo + $bar);

echo "\n============Дроби===========\n";
$d = 8.5;
echo $d;

echo "\n============Строки===========\n";
$s = 'string';
$f = "$d  888";
echo $f;

echo "\n============Скобки===========\n";
$a = 3;
$b = 4;
$c = ($a ** 2 + $b ** 2) ** 0.5;  // ** возведение в степень
echo $c;

echo "\n============Полезности===========\n";
var_dump($s);
$d1 = 77.55;
var_dump($d1);
//phpinfo();
//exec('start calc');