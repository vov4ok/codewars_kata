function persistence(int $num): int {
  $count = 0;
  while(count(str_split(strval($num))) > 1){
      $num = array_product(str_split(strval($num)));
      $count++;
  }
  return $count;

}