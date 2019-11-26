
<body bgcolor="00ff59">
    <?php
//    set_time_limit(300);
//include 'generate_number_decode.php';
//include'split_number.php';
//include 'compare.php';
//include_once 'replace_return_false.php';
/**
 * връща масив който измества с нъмбер кода буквите 
 * @param array $array_decript
 * @param array $array_number_decode
 * @return type
 */
function replace(array $text_decript,array $array_number_decode )
{
$array_alfavit=str_split('abcdefghijklmnopqrstuvwxyz');
foreach($text_decript as $key=>$v)//вземаме буквите за декодиране 
{    
//echo $v.'---'.$k;
//    echo$array_number_decode[$c].'<br/>';
    foreach($array_alfavit as $k=>$val)//търсим ги в азбуката 
    {
        if($v==$val)//намерили сме коя е буквата
        {
         // echo $v.'---'.$key.'<br/>';
            $new_text[]= $array_alfavit[($k+$array_number_decode[($key%count($array_number_decode))])%26];
           break;
        }   
    }
}
return implode($new_text); 
}
$qq=str_split( 'vwduwljudeehghyhvbwklq'
        . 'jlfrxogilqgsohdvhvhwxuqdqbeoxhsulqwviruydxowd');
echo replace($qq,[19]);