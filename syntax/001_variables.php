<?php

// 1. Создайте переменную boolean типа с названием $b содержащую значение "ложь".
$b = false; 


// 2. Создайте переменную boolean типа с названием $isLessonCompleted и поместите в нее значение "истина".

$isLessonCompleted = true;


// 3. Создайте переменные с названием $number1 и $number2. И поместите в них два разных целых числа от 0 до 9 (значения выберите самостоятельно).
$number1 = 2; 
$number2 = 5;


// 4. Выведите сумму чисел 3 и 4, вместе с типом получившегося значения.
var_dump(3+4);


// 5. Создайте переменную $x, и поместите в него число с плавающей точкой 7.3.
$x = 7.3;


// 6. Создайте переменную $result, и поместите в нее результат сложения переменных $x и $number1. Выведите получившееся значение и его тип.
$result = $x+$number1;
var_dump($result);

// 7. Создайте переменные $line1, $line2, $line3 и поместите в них три разные строки.
$line1 = "str1";
$line2 = "str2";
$line3 = "str3";


// 8. Создайте переменную $line представляющую собой конкатенацию этих трех переменных в указанном порядке $line1, $line3, $line2, и выведите получившийся результат.
$line = $line3.' '.$line3.' '.$line3;
echo $line;
