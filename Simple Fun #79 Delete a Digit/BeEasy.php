function deleteDigit($n){
   $arr = str_split($n);
$k = 0;
 for($i = 1; $i<count($arr);$i++){
  if($arr[$k]<$arr[$i]){
    unset($arr[$k]);
    break;
}else{
$k = $i;
if ($k==count($arr)-1){
  unset($arr[$k]);
  break;
}}
}
return implode($arr);
}