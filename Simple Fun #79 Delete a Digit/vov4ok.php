function deleteDigit($n){
  $arr = [];
	$str = strval($n);
  for($i=0;$i<strlen($str);$i++){
    $arr[] = substr_replace($str, '', $i, 1);
  }
	return max($arr);
}