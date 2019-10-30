<?php
//namespace table;
?>
<meta charset='utf8'/>
<body style='background-color: #3333ff'></body>
<?php


/**
 * незбравяй да подадеш колони и редове 
 * 
 */
class Table {//шрави таблица с желате ни бутони и размери 
    

    public $colls ;
    public $rows ;
    public $td_help = [];
    public $size_height_button=77;
    public $size_width_button=77;
    public $border=1;
    public $color ='yellowgreen';// 'blue';//yellowgreen';
    public $td = [];
    public $tr = null;
    public $th = null;
    public $button;
    public $buttons = [];
    public $table = [];
    public $array_info=[];

    /**
     * 
     *$rows=5
     *colls =8 
     *$size=77
     *$color=string 'bbbbbb'for examp:
     */
    /**
     * първо въведи размера това са две числа и после масива с данните 
     * @param int $rows
     * @param int $colls
     * @param array $array_info
     */
    public function __construct(int $rows=5,int $colls=8,array $array_info=[]) {
        $this->rows=$rows;
        $this->colls=$colls;
      $this->array_info=$array_info;
      if(count($array_info)!==0)
      {
       Table::make_buttons();
        self::show_table();
      }
//        for($i=0;$i<=($rows*$colls);$i++){
//            $this->array_info[$i]='';
//        }
    }
    public  function make_buttons(){
        $r=1;//help to count keys може да стане и без $r но не отччита 
        //първия елемент заради особеност show_table(); 
        foreach($this->array_info as $key=>$value)//в случай че ключовете не са числа 
        {
            $array_keys[$r]=$key;
            $r++;
            
        }
        foreach($array_keys as $i=>$k)
        {
           $this->buttons[$i]='<td bgcolor="darkgreen"><button style="background-color:'.$this->color.';width:'.$this->size_width_button.';height:'.$this->size_height_button.'">'.$this->array_info[$k].'</button></td>';
 
            
        }
        //echo $i.'<br/>';
        
        for ($i ; $i <=($this->colls * $this->rows); $i++) 
        {
            if(count($this->array_info)!==0){
                if(!isset($this->array_info[$i-1]))
                {
          $this->array_info[$i-1]="";//в случай че масива е по малък от таблцата(и дава грешка)ако масива е по голям от таблицата недава грешка 
                }
                
            $this->buttons[$i]='<td bgcolor="darkgreen"><button style="background-color:'.$this->color.';width:'.$this->size_width_button.';height:'.$this->size_height_button.'">'.$this->array_info[$i-1].'</button></td>';
        }
        else
        {
             $this->buttons[$i]='<td bgcolor="darkgreen"><button style="background-color:'.$this->color.';width:'.$this->size_width_button.';height:'.$this->size_height_button.'"></button></td>';
        }
        
            }
      self::show_table();
    }
    /**
     * създава таблица без нужда да се подават параметри каато я слага 
     * във форма с бутони показва резултата от горен ляв ъгъл и въри надясно 
     * 
     */
    public  function show_table($count = 0) {
      
     $h=$this->colls * $this->rows;
       
         //echo $h;die;
        for ($i = 1; $i <=$h ; $i++) {

         $this->td_help[$count][$i] = $this->buttons[$i];
            
            if ($i % $this->colls == 0) {
                $this->td = implode($this->td_help[$count]);
                $this->tr[($i / $this->colls) - 1] = '<tr>' . $this->td . '</tr>';

                $count++;
            }
        }
    
        ?>
<center> <form method='post' charset='UTF-8'><table border='<?= $this->border?>'>
                <?php
                if($this->th!==0){
                    echo '<tr>'.$this->th.'</tr>';
                }
                if($this->tr!==null){
                foreach ($this->tr as $v) {
                    echo $v;
                    
                }}
                ?>

        </table></form></center>
        <?php
    }
/**
 * 
 * @param array $array_info
 * @param type $key
 *създава масив от който се правят/подава на бутооните   
 */
    public function insert(array $array_info = [], $key = 0) {
        $i=1;
          foreach($array_info as $v)
          {
          
              $this->array_info[$i]=$v;
                 $i++;
           }
           self::make_buttons();//извиква show_table();
          
}
     
}
//$q=new Table(7,5,['petko','ivan','dimitar','georgi','qas','s','d','f','g','h','j','j',1,2,3,4,33,5,4,5,6,34]);
