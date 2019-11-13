<?php

/**
 * разбива числото на масив от двуцифрени числа
 * @param int $number
 * @return type array
 */
function split_number(int $number)
 {
     while($number>=1)
     {
         $x=$number%100;
         $number=($number-$x)/100;
         $rezult[]=$x;
     }
     return $rezult;
 }

//print_r(split_number(100016));