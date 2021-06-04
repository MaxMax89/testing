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

$mystring = "Doubled";
for($index = 0; $index < strlen(mystring); $index++)
{
	$char = $mystring{$index};
	print("$char$char");
}

$string1 = "<br>"."Это часть";
$string2 = "строки";

echo $string1." простой ".$string2."<br>";

$string1 .= " простой ";
$string1 .= $string2;

echo $string1;

$string3 = <<<DDD
<form method="post" action="{$_SERVER['PHP_SELF']}">
    <input type="text" name="login" placeholder="Введите имя..."><br>
	<input type="password" name="password" placeholder="Введите пароль..."><br>
	<input type="submit" value="Отправить">
</form>
DDD;

echo $string3;

$en_str = "Hello world!";
$rus_str = "привет мир";

echo $en_str." - ".strlen($en_str)." символов<br>";
echo $rus_str." - ".mb_strlen($rus_str, 'UTF8')." символов<br>";


$en_str1 = "Hello world!";
$rus_str1 ="Привет мир!";

echo "Символ 'l': ".strpos($en_str1, 'l');
echo "<br>Символ 'м': ".mb_strpos($rus_str1,'м');

$str = "Привет мир!";
$find_str = "мир";

echo "<br>Подстрока '<b>$find_str</b>' в исходной строке: ".strstr($str, $find_str);

echo "<br>".mb_substr($str, 7, 3, 'UTF8');
echo "<br>".mb_substr($str, -4, 3,  'UTF8');
echo "<br>".mb_substr($str, 0, -5,  'UTF8');


?>