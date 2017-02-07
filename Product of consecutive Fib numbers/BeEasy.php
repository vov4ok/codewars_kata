function productFib($prod) {
  $arr = [0,1];
  while (end($arr)*$arr[count($arr)-2]<$prod){
  $arr[]=end($arr)+$arr[count($arr)-2]; 
}
return $arps=[$arr[count($arr)-2], end($arr), (end($arr)*$arr[count($arr)-2])==$prod?true:false];
}