<?php


/**
 *  показва колко често се среща символ в един текст НЕСЪВЪРШЕННО 
 * ако някоя буква я няма не я отчита (показва)
 * @param type $some_text
 * @return int
 */
function analize($some_text)
{
$array_for_analiz= str_split($some_text);
$rezult=[];
$count=0;
$count_annalize=0;
foreach($array_for_analiz as $k=>$v)
{
    if($v==" ")
    {
        $v='space';
    }   
    /////////////
    if(key_exists($v, $rezult))
    {
        $rezult[$v]++;
    }else
    {
        $rezult[$v]=1;
        
    }
    $count++;
}
$rezult['count']=$count;
return $rezult;//масив
}