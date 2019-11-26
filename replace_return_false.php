<?php

include_once'filter.php';

/**
 * 
 * @param array $text_decript
 * @param array $array_number_decode
 * @param array $frequence
 * @return int
 */
function replace_with_false(array $text_decript, array $array_number_decode, array $frequence) {
    $count_text_decript = count($text_decript);
    $false_arr = [];
    $array_alfavit = str_split('abcdefghijklmnopqrstuvwxyz');
    foreach ($text_decript as $key => $v) {//вземаме буквите за декодиране 
        foreach ($array_alfavit as $k => $val) {//търсим ги в азбуката 
            if ($v == $val) {//намерили сме коя е буквата
                $letter = $array_alfavit[($k + $array_number_decode[($key % count($array_number_decode))]) % 26];
                $new_text[] = $letter;
                if (key_exists($letter, $false_arr)) {
                    $false_arr[$letter] = $false_arr[$letter] * $count_text_decript;

                    //echo '<p><mark><------------>'.$false_arr[$letter].'</mark></p>';
                    $false_arr[$letter] = $false_arr[$letter] + 1;
                    $false_arr[$letter] = $false_arr[$letter] / $count_text_decript;
                } else {
                    $false_arr[$letter] = 1;
                    $false_arr[$letter] = $false_arr[$letter] / $count_text_decript;
                }
                 $filter = filter($false_arr, $frequence);
    if ($filter == 0) {
        return 0;
    }
   
            }
        }
    }
    //$s=implode($array_number_decode);
    $s=null;
    foreach($array_number_decode as $v){
        $s=$s.$v.'.';
    }
   $new_text= implode($new_text);
   echo$new_text.'--<mark>'.$s.'</mark><br/>';
    return $new_text;
}
