<?php
set_time_limit(2600);
include_once 'compare_arrays.php';

?>
<body bgcolor="00ff59">
<?php

//$array_number_decode=[5,5,13];//трябва да съвпада по размер с $array_decript
//$array_decript=['a','a','u'];//прябва да съвпада с $array_number_decode

function replace(array $array_decript,array $array_number_decode )
{
$array_alfavit=str_split('abcdefghijklmnopqrstuvwxyz_');
$count_decode=0;
foreach($array_decript as $k=>$v)//вземаме буквите за декодиране 
{
    foreach($array_alfavit as $key=>$val)//търсим ги в азбуката 
    {
        if($val==$v)
        {
            $new_text[]=$array_alfavit[(($key+$array_number_decode[$count_decode])%27)];
            $count_decode++;
            
        }
        if($count_decode==count($array_number_decode)){
                break;
            }
    }

   
}
return$new_text;
}

$original='gluhtlishjrvbadvyyplkaohavb'
        . 'yjpwolypzavvdlhrvuuleatlzzhnlzd'
        . 'pajoavcpnl'
        . 'ulyljpwolyrlfdvykpzaola'
        . 'pkklvzffivsvmklhaoput'
        . 'fmhcvypalovsilpuluk';

for($e=2;$e<7;$e++)
{
    $i=1;
    for($t=1;$t<$e;$t++)
    {
       $i=$i*10;    
       $ii=$i*10-1;
    }
    $array_decript_help=str_split($original,$e);//връща масив със стрингове и го правим на масивчта
    for($i;$i<=$ii;$i++)
{
    foreach($array_decript_help as $r=>$y)
    {
        $array_decript=str_split($y);
    $array_number_decode=str_split($i);//с един и съши декод се изреждат всиики масиви един след друг 
    
    $q=replace($array_decript,$array_number_decode);
$h[]= implode($q);
    
}
$rezult= implode($h);
if(compare($rezult,'in')&&compare($rezult,'the')&&compare($rezult,'ou' ))
{
    
        echo $rezult;
    echo $i;
    echo'<br/>';
    }
    

    
    $h=[];
}

echo 'no result for'.$e.'<br/>';
}
  


















