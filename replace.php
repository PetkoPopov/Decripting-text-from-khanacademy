<?php
include 'generate_number_decode.php';
/**
 * връща масив който измества с нъмбер кода буквите 
 * @param array $array_decript
 * @param array $array_number_decode
 * @return type
 */
function replace(array $text_decript,array $array_number_decode )
{
$array_alfavit=str_split('abcdefghijklmnopqrstuvwxyz_');
$count=0;
foreach($text_decript as $v)//вземаме буквите за декодиране 
{
//    echo $v.'--------';
//    echo$array_number_decode[$c].'<br/>';
    foreach($array_alfavit as $k=>$val)//търсим ги в азбуката 
    {
        
        if($v==$val)//намерили сме коя е буквата
        {
            $c=$count%(count($array_number_decode));
            $new_text[]=$array_alfavit[$k+$array_number_decode[$c]];                                       
            
            $count++;
            break;
        }
        
    }

   
}
return$new_text;//масив 
}



//$gen= generate_number_decode(3);
//foreach($gen as $key_gen=>$g)
//{
//  $q=replace(['a','a','a','a','a','a','a'],$g);
//echo "<pre>";
//print_r($q);
//echo '</pre>';
//}
//
//
//







