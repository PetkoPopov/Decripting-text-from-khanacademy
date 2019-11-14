
<body bgcolor="00ff59">
    <?php
    set_time_limit(300);
include 'generate_number_decode.php';
include'split_number.php';
include 'compare.php';
/**
 * връща масив който измества с нъмбер кода буквите 
 * @param array $array_decript
 * @param array $array_number_decode
 * @return type
 */
function replace(array $text_decript,array $array_number_decode )
{
$array_alfavit=str_split('abcdefghijklmnopqrstuvwxyz_0123456789');
foreach($text_decript as $key=>$v)//вземаме буквите за декодиране 
{
    
//echo $v.'---'.$k;
//    echo$array_number_decode[$c].'<br/>';
    foreach($array_alfavit as $k=>$val)//търсим ги в азбуката 
    {
        
        if($v==$val)//намерили сме коя е буквата
        {
         // echo $v.'---'.$key.'<br/>';
            $new_text[]= $array_alfavit[($k+$array_number_decode[($key%count($array_number_decode))])%37];
          
           break;
        }
        
    }

   
}
return implode($new_text); 
}
//----------------------------------------------------------------------
//$petko=str_split('i will go to the cinemathen ill will drink coffee'
//        . 'tomorow stand up earli morning and go to work');
//$q=replace($petko,[25,24,23]);
//echo $q;
//die;
//---------------------------------------------------------------------
$gen= generate_number_decode(3);
//print_r($gen);die;

//var_dump($gen);
//$petko=str_split('eveninghewatchtvandshelikeitverymatch');
//echo $x=replace($petko,[14,10,21]);
//var_dump($x);
//die;
                         
$text_decript=str_split('gluhtlishjrvbadvyyplkaohavb'
        . 'yjpwolypzavvdlhrvuuleatlzzhnlzd'
        . 'pajoavcpnl'
        . 'ulyljpwolyrlfdvykpzaola'
        . 'pkklvzffivsvmklhaoput'
        . 'fmhcvypalovsilpuluk');
//echo replace($text_decript,[13,17,6]);die;
foreach($gen as $key_gen=>$g)
{
 //echo'<mark>'.$g.'</mark><br/>';
 //echo $key_gen.'<br/>';
    $gg= split_number($g);

     $q=replace($text_decript,$gg);//.'<br/>';
    if(compare($q,'the')==true)
    {
       if(compare($q,'t')){
           if(compare($q,'h'))
           {
               if(compare($q,'e'))
               {
               echo  '<mark>'.$g.'</mark>';
                echo $q;
               echo'<br/>';
               
               }
           }
       }                   
       
    }
}










