<?php
    /* 1. Объявить две целочисленные переменные $a и $b и 
    задать им произвольные начальные значения. Затем 
    написать скрипт, который работает по следующему принципу: 
    a. Если $a и $b положительные, вывести их разность. 
    b. Если $а и $b отрицательные, вывести их произведение. 
    c. Если $а и $b разных знаков, вывести их сумму. Ноль можно считать положительным числом. */
    $a = -2;
    $b = 5; 
    if($a >= 0 && $b >= 0){
        $res = $a - $b;
        echo "Разность чисел: $a - $b = ".$res;
    }elseif($a < 0 && $b < 0){
        $res = $a * $b;
        echo "Произведение чисел: $a * $b = ".$res;
    }else $res = $a + $b;
    echo "Сумма чисел: $a + $b = ".$res;
?>

<?php
    /* 2. Присвоить переменной $а значение в промежутке [0..15]. 
    С помощью оператора switch организовать вывод чисел от $a до 15.*/

    $c = rand(0,15);
    switch($c) {
        case 1: 
            echo 1;
        case 2: 
            echo 2;
        case 3: 
            echo 3;
        case 4: 
            echo 4;
        case 5: 
            echo 5;
        case 6: 
            echo 6;
        case 7: 
            echo 7;
        case 8: 
            echo 8;
        case 9: 
            echo 9;
        case 10: 
            echo 10;
        case 11: 
            echo 11;
        case 12: 
            echo 12;
        case 13: 
            echo 13;
        case 14: 
            echo 14;
        case 15: 
            echo 15;
    }
?>
<?php
    /* 3. Реализовать основные 4 арифметические операции 
    в виде функций с двумя параметрами. Обязательно использовать оператор return. */
    function add($a, $b){
        return $a + $b;
    }

    function sub($a, $b){
        return $a - $b;
    }

    function div($a, $b){
        return $a / $b;
    }

    function multi($a, $b){
        return $a * $b;
    }

    /* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
    где $arg1, $arg2– значения аргументов, $operation– строка с названием операции. 
    В зависимости от переданного значения операции выполнить одну из арифметических операций 
    (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/
    function mathOperation($arg1, $arg2, $operation){
        switch($operation){
            case "add": 
                add($arg1, $arg2);
                break;
            case "sub": 
                sub($arg1, $arg2);
                break;
            case "div": 
                div($arg1, $arg2);
                break;
            case "multi": 
                multi($arg1, $arg2);
                break;
            default: 
            echo "Undefined operation";
        }
    }
    /* 5. не надо */
    ?>
    
<?php
    /* 6. *С помощью рекурсии организовать функцию возведения числа в степень. 
    Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/ 
    function power($val, $pow){
        if($pow == 0){
            $res = 1;
        }else $res = power($val, $pow-1) * $val;
        return $res;
    }
    power(2,3);
?>

<?php
    /* 7. *Написать функцию, которая вычисляет текущее время 
    и возвращает его в формате с правильными склонениями, 
    например: 22 часа 15 минут, 21 час 43 минуты. */
    function getHours($h){
        if($h == 0 || ($h >= 5 && $h <= 20)){
            return "часов";
        }elseif($h >= 2 && $h <= 4){
            return "часа";
        }else return "час";
   
    }
    function getMinutes($m){
        if($m % 10 == 1 && $m !== 11){
            return "минута";
        }elseif($m % 10 >= 2 && $m % 10 <= 4){
            return "минуты";
        }else return "минут";
    
    }
    function getTime(){
        $currentHour = date("H");
        $currentMinute = date("i");
     echo "Сейчас $currentHour ".getHours($currentHour)." и $currentMinute ".getMinutes($currentMinute);
    }
    getTime();
    
?>