<body bgcolor="00ff59">
<?php
/**
 *търси съвпадения от даден текста в друг текст например
 * дали има"ing"или"the" в друг голям текст на английски 
 */
function compare(string $a,string $b)
{
    $arr_string1=str_split($a);
    $arr_string2=str_split($b);
    $count=count($arr_string2);
    
    foreach($arr_string1 as $k=>$v)
    {
        $x=1;
       if($v==$arr_string2[0])
       {
           //echo $v.'--------'.$arr_string2[0];
           //echo '<br/>';
           for($i=1;$i<$count;$i++)
           {
             //echo $i.'$i<br/>';
             // echo $arr_string1[$k+$i].'------'.$arr_string2[$i].'<br/>';
               if(isset($arr_string1[$k+$i])){
                   if($arr_string1[$k+$i]==$arr_string2[$i])
               {
               
                   
               }else{
               
                   break;
               }   
               }else{
                   break; 
               }
               
               if(($i+1)==$count){
                  $arr_string1[$k]='<mark>'.$arr_string1[$k].'</mark>';
                   return $arr_string1;
               }
           }
        }
    }
    return false;
}
