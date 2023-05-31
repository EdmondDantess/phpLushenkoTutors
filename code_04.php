<?php
$a = 101;
echo $a, "\n";
//операторы как  в js
if ($a > 100) {
    echo "Переменная a больше 100 \n";   //можно написать в одну строку если одна комманда
};

if ($a % 2 !== 0) echo "число a нечетное \n";

//вилка в коде
echo "================вилка в коде=========== \n\n\n";

$n = 45;
echo "Переменная n = $n \n";
if ($n % 2 === 0) {
    echo "Переменная n чётное \n";
} else {
    echo "Переменная n нечёет \n";
}
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
//=========================

$password = "lkdaskl213";
$email = "max@mail.ru";
//if работает как в js
if (strlen($password > 8)) {
    echo " password ok \n";
} else {
    echo "password lesser 8 symbols \n";
}
if (stripos($email, "@")) {
    echo " email ok \n";
} else {
    echo "email incorrect \n";
}
echo PHP_EOL;
echo PHP_EOL;

//Комбинация условий

$t = 56;
if ($t >= 40 and $t <= 65) echo "горячяя вода \n";
if ($t <= -1 or $t >= 101) echo "ошибка сигнала \n";
echo PHP_EOL;
echo PHP_EOL;

//Если условий несколько

$s = 74;
// как и в js
if ($s < 45) echo "bronze \n";
else if ($s < 75) echo "silver \n";
else if ($s < 125) echo "gold \n";
else  echo "vip \n";
echo PHP_EOL;
echo PHP_EOL;


// switch case как и в js (но сравнение т ут происходит нестрогое)

$role = "moderator";

switch ($role) {
    case "admin":
        echo "полный контроль \n";
        break;
    case "moderator";
        echo "управления комментами и статьями \n";
        break;
    case "user";
        echo "писать комментарии к статьями \n";
        break;
    default:
        echo "роль не найдена \n";
}

echo PHP_EOL;
echo PHP_EOL;

// Тернарник

$result = 51;
$res = null;

//if ($result === 5) {
//    $res = 100;
//} else {
//    $res = 200;
//}
//echo "$res \n";

$res = ($result === 50) ? 100 : 200;
echo $res, "\n";
