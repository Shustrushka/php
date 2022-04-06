<?php
/* 1. С помощью цикла while вывести все числа в промежутке от 0 до 100, 
которые делятся на 3 без остатка.*/
$i = 0;
while ($i <= 100){
    if($i % 3 == 0){
        echo $i." ";
        $i++;
    } else $i++;
};

?>

<?php 
/* 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так: 
    0 – это ноль. 1 – нечётное число. 2 – чётное число. 3 – нечётное число.*/
$j = 0;
do {
    if($j == 0){
        echo $j." is zero "."<br>";
    } elseif ($j % 2 == 1){
        echo $j." is odd number "."<br>";
    } else 
        echo $j." is even number "."<br>";
        $j++;
}
while ($j <= 10);
?>

<?php
/* 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
а в качестве значений – массивы с названиями городов из соответствующей области. 
Вывести в цикле значения массива, чтобы результат был таким: 
Московская область: Москва, Зеленоград, Клин. Ленинградская область: Санкт-Петербург, 
Всеволожск, Павловск, Кронштадт. Рязанская область…(названия городов можно найти на maps.yandex.ru) */

$cities = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"], 
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Касимов", "Михайлов", "Скопин"]
];
foreach($cities as $area => $city){
    echo "<br>".$area.": <br>";
    $str = implode(", ", $city);
        echo $str."<br>";
};
?> 

<?php 

/* 4. Объявить массив, индексами которого являются буквы русского языка, 
а значениями соответствующие латинские буквосочетания 
(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). 
Написать функцию транслитерации строк.*/
$letters = [
    "a" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "io", "ж" => "zh",
    "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p",
    "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "kh", "ц" => "ts", "ч" => "tch",
    "ш" => "sh", "щ" => "sch", "ь" => "\'", "ы" => "i", "ъ" => "\'", "э" => "e", "ю" => "yu", "я" => "ya"];

$str1 = "привет новый язык разработки пхп, я люблю тебя";
echo strtr($str1, $letters)."<br>";

?>

<?php
/* 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания 
и возвращает видоизмененную строчку. */ 
$str2 = "привет новый язык разработки пхп, я люблю тебя <br>";
echo str_replace(" ", "_", $str2);

?>

<?php
/* 6. В имеющемся шаблоне сайта заменить статичное меню (ul- li) на генерируемое через PHP. 
Необходимо представить пункты меню как элементы массива и вывести их циклом. 
Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать. */ 

// some code 

?>

<?php
/* 7. *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. Выглядеть это должно так:
    for(…){// здесь пусто} */
    for($k = 0; $k < 10; print $k." ", $k++);
?>

<?php
/* 8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К». */
$cities2 = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"], 
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Касимов", "Михайлов", "Скопин"]
];
foreach($cities2 as $area => $city){
    echo "<br>".$area.": ";
    foreach($city as $value){
        $str3 = strstr($value, "К");
        echo $str3;
    }
        
};
?>

<?php
/* 9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, 
производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при 
конструировании url-адресов на основе названия статьи в блогах). */ 
$letters = [
    "a" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e", "ё" => "io", "ж" => "zh",
    "з" => "z", "и" => "i", "й" => "y", "к" => "k", "л" => "l", "м" => "m", "н" => "n", "о" => "o", "п" => "p",
    "р" => "r", "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "kh", "ц" => "ts", "ч" => "tch",
    "ш" => "sh", "щ" => "sch", "ь" => "\'", "ы" => "i", "ъ" => "\'", "э" => "e", "ю" => "yu", "я" => "ya"];

$str4 = "<br>привет новый язык разработки пхп, я люблю тебя";
echo str_replace(" ", "_", strtr($str4, $letters));
?>
