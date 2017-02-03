function find_missing_letter(array $array): string {
  $arr = range($array[0],$array[count($array)-1]);
  foreach($arr as $k=>$v){
    if($array[$k] != $arr[$k]){
      return $v;
    }
  }
}