<?php
// Уровень 1: Легкий
// 1. Конкатенация строк
$str1 = "Привет";
$str2 = "мир";
echo "ЗАДАНИЕ 1. Конкатенация строк\n" . "Строка 1: " . $str1 . "\n" . "Строка 2: " . $str2 . "\n" . "Результат конкатенации: " . $str1 . ", " . $str2 . "!";
echo "\n\n\n";

// // 2. Изменение регистра
echo "ЗАДАНИЕ 2. Изменение регистра.\n\n";
// $originalString = "StArTiNg LiNe";
$originalString = "StArTiNg LiNe";
echo "Оригинальная строка: " . $originalString . "\n";
$lowercaseString = strtolower($originalString);
echo "В нижнем регистре: " . $lowercaseString . "\n";
$uppercaseString = strtoupper($originalString);
echo "В верхнем регистре: " . $uppercaseString . "\n";
echo "\n\n";

// 3. Сравнение строк
$string1 = "PHP";
$string2 = "php";
echo "ЗАДАНИЕ 3. Сравнение строк.\n\n";
echo "Сравниваем строки: " . $string1 . " и " . $string2;
$isEqualCaseSensitive = ($string1 === $string2) ? 'Строки равны' : 'Строки не равны';
echo "\nРезультат сравнения с учетом регистра: " . $isEqualCaseSensitive . "\n";
$isEqualCaseInsensitive = (strcasecmp($string1, $string2) === 0) ? 'Строки равны' : 'Строки не равны';
echo "Сравнение без учета регистра: " . $isEqualCaseInsensitive;
echo "\n\n\n";

// 4. Поиск подстроки
echo "ЗАДАНИЕ 4. Поиск подстроки.\n";
$string4 = "Это пример строки.";
$subString4 = "пример";
echo "В строке '" . $string4 . "' ищем подстроку '" . $subString4 . "'";
$position = strpos($string4, $subString4);
echo "\nРезультат поиска: позиция подстроки '{$subString4}': " . ($position !== false ? $position : 'Не найдено');
echo "\n\n";

// 5. Замена подстроки
echo "ЗАДАНИЕ 5. Замена подстроки.\n";
$originalString = "abcabc";
$replaceString = "!";
$searchString = "a";
$result4 = str_replace($searchString, $replaceString, $originalString);
echo "В строке '" . $originalString . "' ищем подстроку '" . $searchString . "' и меняем на '" . $replaceString . "'.\nРезультат замены: " . $result4;
echo "\n\n\n";

// 6. Форматирование строки
echo "ЗАДАНИЕ 6. Замена подстроки.\n\n";
$name = "Иван";
$age = 30;
$formattedString = sprintf("%s, вам %d лет.", $name, $age);
echo "Пример 1:\n";
echo "Отформатированная строка: " . $formattedString . "\n\n";
echo "Пример 2. Выводится точка или 0 в зависимости от примененного формата:\n";
echo sprintf("%'.9d\n", 123);
echo sprintf("%'.09d\n", 123);
echo "\n\n";

// 7. Разделение строки
echo "ЗАДАНИЕ 7. Разделение строки.\n";
$arrBox  = "коробка1,коробка2,коробка3";
echo "Разделяем строку: " . $arrBox . "\n\n";
echo "Результат:\n";
$box = explode(",", $arrBox);
echo $box[0] . "\n";
echo $box[1] . "\n";
echo $box[2] . "\n\n";
echo "Объединяем символ | и строки из названий фруктов: ";
$arrFruits = array ('яблоко', 'банан', 'груша', 'слива');
$joinedFruits = implode(" | ", $arrFruits);
echo "\nОбъединенная строка: " . $joinedFruits;
echo "\n\n\n";

// 8. Работа с многострочным текстом
echo "ЗАДАНИЕ 8. Работа с многострочным текстом.\n";
echo nl2br("Привет!\r\nЭтой мой HTML-документ", false);
echo "\n\n\n";

// Уровень 2: Усложненный
// 1. Сложная конкатенация строк
echo "Уровень 2: Усложненный\n\n";
echo "ЗАДАНИЕ 1. Сложная конкатенация строк\n";
$name = "Иван";
$greeting = "Добро пожаловать, " . $name . "!";
echo $greeting;
echo "\n\n";

// 2. Изменение регистра с условиями
echo "ЗАДАНИЕ 2. Изменение регистра с условиями\n";
$originalString = "hello world! welcome to php programming.";
$capitalizedString = ucwords(strtolower($originalString));
echo "Строка с заглавными буквами: " . $capitalizedString . "\n\n\n";

// 3. Сравнение строк с учётом регистра и без
echo "ЗАДАНИЕ 3. Сравнение строк с учётом регистра и без\n";
$stringA = "Hello World";
$stringB = "hello world";
echo "Строки для сравнения: '". $stringA . "' и '" . $stringB . "'\n";
$isEqualStrict = ($stringA === $stringB) ? 'Да' : 'Нет';
echo "Сравнение с учетом регистра (===): {$isEqualStrict}\n";
$isEqualLoose = ($stringA == $stringB) ? 'Да' : 'Нет';
echo "Сравнение без учета регистра (==): {$isEqualLoose}\n";
$isEqualStrcasecmp = (strcasecmp($stringA, $stringB) === 0) ? 'Да' : 'Нет';
echo "Сравнение без учета регистра (strcasecmp): {$isEqualStrcasecmp}\n\n\n";

// 4. Замена подстроки с использованием массива
echo "ЗАДАНИЕ 4. Замена подстроки с использованием массива\n";
$originalString = "Я люблю яблоки, груши и бананы. Гулять в парке. Читать истории, читать отчеты";
$searchWords = ["яблоки", "груши", "бананы", "Гулять", "Читать", ""];
$replaceWords = ["апельсины", "киви", "манго", "Отдыхать", "Cмотреть"];
$modifiedString = str_replace($searchWords, $replaceWords, $originalString);
echo "Исходная строка: " . $originalString . "\n";
echo "Модифицированная строка: " . $modifiedString;
echo "\n\n\n";

// 5. Форматирование строки с числом
echo "ЗАДАНИЕ 5. Форматирование строки с числом\n";
$productName = "1 кг помидор";
$productPrice = 499;
$formattedProductString = sprintf("Цена %s составляет %d руб.", $productName, $productPrice);
echo "{$formattedProductString}";
echo "\n\n\n";

// 6. Разделение и объединение сложной строки
echo "ЗАДАНИЕ 6. Разделение и объединение сложной строки\n";
$numbersString = "1,2,3,4,5";
$numbersArray = explode(",", $numbersString);
for ($i = 0; $i < count($numbersArray); $i++) {
        echo $numbersArray[$i] . "\n";
    }
$sumOfNumbers = array_sum($numbersArray);
echo "Сумма чисел: " . $sumOfNumbers . "\n\n\n";

// 7. Создание случайной строки
echo "ЗАДАНИЕ 7. Создание случайной строки\n";
function generateRandomString($length) {
    return substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", ceil($length / 62))), 1, $length);
}
$randomString = generateRandomString(10);
echo "Случайная строка: " . $randomString . "\n\n";

// 8. Проверка строки на палиндром
echo "ЗАДАНИЕ 8. Проверка строки на палиндром\n";
function isPalindrome($string) {
    return strrev($string) === $string;
}
$palindromeTestString = "level";
$isPalindromeResult = isPalindrome($palindromeTestString) ? 'Да' : 'Нет';
echo $palindromeTestString . " является палиндромом? Ответ: " . $isPalindromeResult . "\n\n\n";
