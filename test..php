<meta charset="UTF-8">
<?php
$my_string = 'Простая строка';
$my_string2 = "еще одна строка";

$count = 13;

$string_1 = "В строке \"Hello, world!\" $count символов.<br>";
$string_1 = 'В строке \'Hello, world!\' $count символов.<br>';

echo $string_1;
echo $string_2;

$sport1 = 'волей';
$sport2 = 'фут';
$sport3 = 'баскет';

$play1 = "Я люблю играть в {$sport1}бол.<br>";
$play2 = "Я люблю играть в {$sport2}бол.<br>";
$play3 = "Я люблю играть в {$sport3}бол.<br>";

echo $play1;
echo $play2;
echo $play3;
?>