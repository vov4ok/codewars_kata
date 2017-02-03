function solution($str) {
  $a = str_split($str, 2);
	$b = array_pop($a);
	$a[] = (strlen($b) == 1)?$b.'_':$b;
	return $a;
}