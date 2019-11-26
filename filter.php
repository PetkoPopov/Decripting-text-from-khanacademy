<?php

include "anlaize_some_alfavit.php";
$some_text = 'hello how are you are you ok the master going to the church i stay '
        . 'english in mind students book3 second edition'
        . 'do you know why she he is angry can you tall me when is it was build'
        . 'could tell us where is discovered '
        . 'the course of tomb perhaps the most famos archeologistof all time'
        . 'started out as an artist and in 1891 he go went to the egypt to paint the pyramids however he soon became head inspector of upper egypt monuments'
        . 'on one place all day long i asolting the canceler he doesnt like that properties'
        . 'smiling is infectious you catch it like the flu , when someone smiled at me today , i started smiling too '
        . 'i passed around the corner and someone sow my grin'
        . 'when i smiled i realized id passed it on him'
        . 'what is advantages and disadvantages of eating fast food '
        . 'many people do not eat home-cooced food because of our non stop modern lifestyle, '
        . 'fast food is popular almost everywhere '
        . 'in most cities it is not dificult to find hamburgers '
        . 'pizza or fried chicken eating fast food helps working people end stuends  to get back to work as quickly '
        . 'as possible'
        . 'a service of love a story by adapted '
        . 'was a young pianist with long ,slender,fingers,and blonde hairs ise themoon sky and the stouve'
        . 'think that becouse she is ugly how match is friquency about Hello'
        . 'select a position on the front of the carto fit the fog lamps'
        . 'centre punch drill and bits for fitting lamps the are two types of electronic ignition the most common known as '
        . 'inductiv storagethe advantages othe mojoryty use the existing contact breaker points'
        . 'in the distrubutorinstead of producing of spark'
        . 'or optical trigger  device in the distributor and the transistor switch '
        . 'havve no moving parts and so cannot lose their adjusment become less eficient '
        . 'or wear out in the way that mehanically operated'
        . 'f this system is that the '
        . ''
;

$arr_frequence_letter = analize($some_text);


foreach ($arr_frequence_letter as $k => $v) {//k е буква а $v e число
    $frequence[$k] = $v / $arr_frequence_letter['count'];
}
/**
 * 
 * @param array $explore
 * @param array $frequenc
 * @return int
 */
function filter(array $explore, array $frequence) {

    foreach ($explore as $letter => $exp) {
        if (isset($frequence[$letter])) {
            if ($exp / $frequence[$letter] >=5) {
                return 0;
            }
        }
    }
    return 1;
}

//  echo'<pre>';
//  print_r($frequence);
//  echo'</pre>';
//    $f=filter(
//         ['a'=>0.05,
//             'e'=>0.1,
//             'k'=>0.009,
//             't'=>0.009         
//          ],$frequence);
//        echo $f;
        
        
        
        
        