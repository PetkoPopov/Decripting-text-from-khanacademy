
<body bgcolor="00aa56">
    <?php
    set_time_limit(1360);
require_once 'replace_return_false.php';
require_once 'split_number.php';
//$text_decript='niuisqmtpt';
//$text_decript='bedevesy';
////////////////////////
//$text_decript=
///////////////////////////
$text_decript=
//'Klkbnqlcytfysryucocphgbdizz
'fcmjwkuchzyeswfogmmetwwossd
chrzyldsbwnydednzwnefydthtd
dbojicemlucdygicczhoadrzcyl
wadsxpilpiecskomoltejtkmqqy
mehpmmjxyolwpeewjckznpccpsv
sxauyodhalmriocwpelwbcniyfx
mwjcemcyrazdqlsomdbfljwnbij;
xpddsyoehxpceswtoxwbleecsax
cnuetzywfn';
 $text_decript=str_split($text_decript);
function cicle(int $count=0, $numm=null){
    global$text_decript;
    global $frequence;
   
    $count--;
 for($u=1;$u<=26;$u++){
     if($u<10){
         $u='0'.$u;
     } 
     $rezult=$numm.$u;
     //var_dump($rezult);die;
    $rezult=(int)$rezult;
    //print_r(split_number($rezult));
   // echo'<br/>';
    $array_number_decode=split_number($rezult);
    replace_with_false($text_decript, $array_number_decode, $frequence);
    
     if($count>0){
         
              cicle($count,$rezult);
        
     }   
 }
 }
 echo '<pre>';
 print_r($frequence);
 echo'</pre>';
cicle(5);
