function assesmentFalabella(){
  for($i=1;$i<=100;$i++){
    doit($i);
  }
}
function doit($i){
  switch ($i){
      case round ($i%3) == 0 && ($i%5) == 0 :echo "Linianos";break;
      case round ($i%3) == 0 : echo "Linio";break;
      case round ($i%5) == 0 :echo "IT";break;
      default: echo $i;break;
    }
}
assesmentFalabella();
