
<body bgcolor="00ff59">
    <?php
include 'generate_number_decode.php';
include'split_number.php';
/**
 * връща масив който измества с нъмбер кода буквите 
 * @param array $array_decript
 * @param array $array_number_decode
 * @return type
 */
function replace(array $text_decript,array $array_number_decode )
{
$array_alfavit=str_split('abcdefghijklmnopqrstuvwxyz');
//echo'<pre>';
//print_r($text_decript);
//echo '</pre>';die;
//echo '<pre>';
//print_r($array_number_decode);
//echo'</pre>';
foreach($text_decript as $key=>$v)//вземаме буквите за декодиране 
{
    
//echo $v.'---'.$k;
//    echo$array_number_decode[$c].'<br/>';
    foreach($array_alfavit as $k=>$val)//търсим ги в азбуката 
    {
        
        if($v==$val)//намерили сме коя е буквата
        {
            
           // echo $v.'->'.$key%count($array_number_decode).'<br/>';
           // echo $v.$key;
            $new_text[]= $array_alfavit[($k+$array_number_decode[($key%count($array_number_decode))])%26];
          // echo  $array_alfavit[($k+$array_number_decode[($key%count($array_number_decode))])%26];
           //echo'----';
            //echo $array_number_decode[$key];
            
            //echo'-----------';
           //echo ($k+$array_number_decode[$key%count($array_number_decode)])%26;
          // echo $val.'<br/>';
           break;
        }
        
    }

   
}
return implode($new_text);//масив 
}
//----------------------------------------------------------------------
//$petko=str_split('i will go to the cinemathen ill will drink coffee'
//        . 'tomorow stand up earli morning and go to work');
//$q=replace($petko,[1,2,3]);
//---------------------------------------------------------------------
$gen= generate_number_decode(3);
//print_r($gen);die;

//var_dump($gen);
//$petko=str_split('dimitartodorov');
//replace($petko);

$text_decript=str_split('aaaа');


foreach($gen as $key_gen=>$g)
{
 //echo'<mark>'.$g.'</mark><br/>';
    //echo $key_gen.'<br/>';
    $gg= split_number($g);
//    echo "<pre>";
//   print_r($gg);
//  echo '</pre>';
//  $gg=[];
    echo $q=replace($text_decript,$gg).'<br/>';
   /// echo $q;
    //echo '--end calling function<br/>';
  
  ////echo "<pre>";
//print_r($q);
//echo '</pre>';
//echo '<mark>'.implode($q).'</mark>';
}










