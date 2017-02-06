function shuffledArray($arr){ 
	unset($arr[array_search(array_sum($arr)/2, $arr)]);
	sort($arr);
	return $arr;
}