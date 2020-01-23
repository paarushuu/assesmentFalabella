<?php
 namespace App;

class assesmentFalabella {

  
  public function doIt(){
    for($i=1;$i<=100;$i++){
      self::assesmentFalabellaCase($i);
    }
  }

  public static function assesmentFalabellaCase($i){
    switch ($i){
        case round ($i%3) == 0 && ($i%5) == 0 :$r=  "Linianos";break;
        case round ($i%3) == 0 : $r =  "Linio";break;
        case round ($i%5) == 0 :$r =  "IT";break;
        default: $r = $i;break;
      }
      return $r;
  }
}
?>
