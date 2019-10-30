<?php
include_once'table_for_analiz.php';
?>
<title>АНАЛИЗ НА АЗБУКА</title>
<form>
    текст за анализ:<input type="text" name="text_for_analize"/>
    мащаб:<input type="range" name="scale" min="0" max="30"/>
    <input type="submit" value="go" name="push_button"/>
    покажи буква:<input type="text" name="letter"  value="<?php
    if(!empty($_GET['letter']))
    {
        echo $_GET['letter'];
    }else
    {
        echo "a";
    }
    ?>"/>
</form>
    
    <?php
$some_text='hello how are you are you ok the master going to the church i stay '
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
        . 'was a young pianist with long ,slender,fingers,and blonde hairs HelloHello'
        ;
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
    //////////
    if($count%25==0)
    {
        $help_count=0;
        foreach($rezult as $k=>$val)
        {
//          $analize_arr[$count_annalize][$help_count]=($val/$count);
            $analize_arr[$count_annalize][$k]=($val/$count);
           // echo '<meter value='.($val/$count).'>'.$val.'</meter>';
           // echo'<br/>';
           // $help_count++;
        }
        $count_annalize++;
       // echo'============================================<br/>';
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
if(!empty($_GET['scale']))
{
    $scale=$_GET['scale'];
}
if(!empty($_GET['letter']))
{
    $letter_for_analize=$_GET['letter'];
}
if(!empty($_GET['text_for_analize']))
{
    $some_text=$_GET['text_for_analize'];
}
echo$letter_for_analize;
echo'<br/>';
for($i=1;$i<=45;$i++)
{
    if(isset($analize_arr[$i][$letter_for_analize]))
    {
    $q=$analize_arr[$i][$letter_for_analize]*100;
    echo '<meter value='.$q.' min=0 max='.$scale.'></meter><br/>';
}}
echo $q.'%';
//$table= new Table(2,20);
//$table->size_height_button=39;
//$table->size_width_button=43;
//$table->insert($rezult); 
// 