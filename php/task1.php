<?php

/**
 * Есть цикл чисел от 1 до 100.
 *
 * Для каждого числа вывести на страницу следующее - ЧИСЛО (делится без остатка на Х)
 * где Х =
 * Если число делится без остатка на 15 -- Х = 15
 * Если число делится без остатка на 10 -- Х = 10
 * Если число делится без остатка на 5 -- Х = 5
 *
 * Чем больше Х тем выше приоритет записи, т.е. для числа 30 нужно выводить
 * 30 (делится без остатка на 15)
 */

for($i = 1; $i<=100; $i++) {
    $x = 0;
    if($i%5 === 0){
        $x = 5;
    }
    else { 
        $x = 1;
    }
  
    if($i%10 === 0){
        $x = 10;
    }
    
    if($i%15 === 0){
        $x = 15;
    }

    echo $i . " (делится без остатка на $x)" . "</br>";
}