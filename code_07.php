<?php

echo "\n\n\n =========== Синтаксис функций ========== \n";

function t1()
{
    $a = 7;
    echo $a, "\n";
}

t1();

echo "\n\n\n =========== перезагрузка функций ========== \n";
//function t1()                        // в php нельзя перезаписывать функции
//{
//    $a = 7;
//    echo $a, "\n";
//}

echo "\n\n\n =========== видимость переменных ========== \n";


function t2()                     // то что внутри функции - изолировано от внешнего кода, и внешние переменные не прочитаются внутри функции.
{
    $b = 66;
    echo $b, "\n";
}

t2();

echo "\n\n\n =========== глобальная переменная ========== \n";

$d = 77;

function t3()
{
    global $d;    // получаем переменную из глобальной видимости
    $d = $d + 5;
    echo $d, "\n";
}

t3();
echo $d, "\n";

echo "\n\n\n =========== вызываем функцию до создания ========== \n";
t4();
function t4()
{
    echo "t4  is called";
}

echo "\n\n\n =========== функция в  функции ========== \n";

function t5()
{
    // t6();   вызываем функцию до создания, тут не работает
    $f = 100;
    function t6()
    {
        $f = 200;
        echo $f, "\n";
    }

    echo $f, "\n";
}

t5(); //запускаем поочерёдно
t6();

echo "\n\n\n =========== Применение ========== \n";

$n1 = 5555;
$n2 = 45;
//функция поменять местами n1 и n2 если n1 > n2
function t7()   // t6 нельзя назвать т.к. функцию определит что была создана даже внутри функции
{
    global $n1, $n2;
    if ($n1 > $n2) {
        $container = $n1;
        $n1 = $n2;
        $n2 = $container;
    }
    echo "n1 is $n1, n2 is $n2 \n";
}

t7();
echo "n2 is $n2";