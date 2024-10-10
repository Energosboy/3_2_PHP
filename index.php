<?php
// Задание 1. Определение переменных и констант: Объявите несколько переменных с разными типами данных: строка, число, булево значение. Создайте константу с помощью функции define(), например, для хранения имени сайта. Выведите значения переменных и констант с помощью функций echo и print.

// Объявление
$name = "Sergey"; // Строка
$age = 45; // Число
$isStudent = true; // Булево значение

// Константа
define("site_name", "My Website");

// Вывод значений
echo "Имя: $name, Возраст: $age";
echo "Студент: $isStudent, Название сайта: site_name";

// Задание 2. Преобразование типов: Создайте переменную, содержащую строковое представление числа, и преобразуйте её в число. Выведите результат преобразования, а также тип переменной с помощью функции gettype().

// Объявление переменной, содержащей строковое представление числа
$stringNumber = "42";

// Преобразование типов

$numberString = (string)$stringNumber;
$number = (int)$stringNumber;
echo "Преобразованное число: $number";
echo "Тип переменной: gettype($number)";

// Задание 3. Использование операторов: Создайте несколько переменных с числами и выполните над ними арифметические операции (сложение, вычитание, умножение, деление). Используйте операторы сравнения для сравнения этих переменных, выведите результат. Реализуйте простое логическое выражение с использованием операторов && и ||.

// Объявление переменных с числами
$num1 = 10;
$num2 = 5;
$num3 = 20;
$num4 = 5;

// Арифметические операции
$sum = $num1 + $num2; // Сложение
$diff = $num1 - $num2; // Вычитание
$prod = $num3 * $num4; // Умножение
$quot = $num3 / $num4; // Деление

// Операторы сравнения
$Equal = ($num1 == $num2); // Равно
$Greater = ($num1 > $num2); // Больше
$Less = ($num1 < $num2); // Меньше

// Логическое выражение
$True = ($num1 == 10) && ($num2 == 5); // И
$False = ($num1 == 10) || ($num2 == 5); // Или

// Вывод результатов
echo "Сумма: " . $sum;
echo "Разность: " . $diff;
echo "Произведение: " . $prod;
echo "Частное: " . $quot;
echo "Равно: " . $Equal;
echo "Больше: " . $Greater;
echo "Меньше: " . $Less;
echo "И: " . $True;
echo "Или: " . $False;


// Задание 4. Суперглобальная переменная $_SERVER: Выведите информацию о сервере и среде исполнения с помощью переменной $_SERVER . Например, выведите информацию о браузере пользователя или IPадресе.

// Вывод информации о сервере и среде исполнения с помощью $_SERVER
echo "Браузер пользователя: " . $_SERVER['HTTP_USER_AGENT'];
echo "IP-адрес клиента: " . $_SERVER['REMOTE_ADDR'];
echo "Информация о сервере: " . $_SERVER['SERVER_NAME'];
echo "Версия PHP: " . phpversion();
?>