<?php

set_time_limit(200);

/**
 * генерира нъмбер на брой едно до друго числа до 26 колкото са буквите 
 * в латиницата 
 * @param int $number
 */
function generate_number_decode(int $number=4)
{
    $x=[];
    for($i=1;$i<=26;$i++)
    {
        $h[]=$i;
    }
    ///////////////////////////////////
        for($int=1;$int<$number;$int++)
        {
          
            foreach($h as $v)
            {
                for($e=1;$e<=26;$e++)
                {
                   $x[]=$e*(100**$int)+$v;
                   
                }
            }
            $h=[];
            $h=$x;
            $x=[];
        }
      
//   echo'<pre>';
//print_r($h);
//echo '</pre>';
return $h;//масив със стрингове

}
//foreach($h as $iii)
//{
//    $z=[];
//    $hh=$iii;
//while($h>100)
//{
//    $z[]=$hh%100;
//    
//     $hh=floor($hh/100);
//   
//}
//$z[]=$hh;
//$xx[]=$z;
//}
//return $xx;
//}


////////////////////////////
//---------------------------------
//$q=(generate_number_decode(2));
//--------------------------------
//
//
//

//echo'<pre>';
//print_r($q);
//echo '<pre>';